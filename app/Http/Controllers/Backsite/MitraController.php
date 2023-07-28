<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\MasterData\Mitra;
use App\Models\MasterData\BidangUsaha;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\newUser;

use App\Http\Requests\Mitra\StoreMitraRequest;
use App\Http\Requests\Mitra\UpdateMitraRequest;
class MitraController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bidang_usaha = BidangUsaha::orderBy('id', 'ASC')->get();
        $data = Mitra::with('user', 'bidang_usaha')->get();

        confirmDelete();
        return view('pages.backsite.master-data.mitra.index', compact('data', 'bidang_usaha'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return abort(404);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMitraRequest $request)
    {
        try {
            //code...
            DB::transaction(function () use ($request) {
                $user_data = [
                    'name' => $request->nama,
                    'email' => $request->email,
                    'password' => Hash::make($request->email),
                    'role_id' => 2
                ];

                $user = User::create($user_data);

                $mitra = $request->all();
                $mitra['user_id'] = $user->id;
                unset($mitra['email']);

                Mitra::create($mitra);
            });
        } catch (\Throwable $th) {
            //throw $th;
            alert()->error('Gagal', 'Data Mitra Gagal Ditambahkan');
            return redirect(route('backsite.mitra.index'));
        }

        $maildata = [
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $request->email,
            'role' => 'Mitra',
        ];

        Mail::to($maildata['email'])->send(new newUser($maildata));

        alert()->success('Berhasil', 'Data Mitra Berhasil Ditambahkan');
        return redirect(route('backsite.mitra.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mitra $mitra)
    {
        $bidang_usaha = BidangUsaha::orderBy('id', 'ASC')->get();
        $data = Mitra::with('user', 'bidang_usaha')->where('id', $mitra->id)->first();

        return view('pages.backsite.master-data.mitra.edit', compact('data', 'bidang_usaha'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMitraRequest $request, Mitra $mitra)
    {
        $data = $request->all();
        $mitra->update($data);

        alert()->success('Berhasil', 'Data Mitra Berhasil Diubah');
        return redirect(route('backsite.mitra.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mitra $mitra)
    {
        DB::transaction(function () use ($mitra) {
            User::where('id', $mitra->user_id)->forceDelete();
            $mitra->delete();
        });

        alert()->success('Berhasil', 'Data Mitra Berhasil Dihapus');
        return redirect(route('backsite.mitra.index'));
    }
}
