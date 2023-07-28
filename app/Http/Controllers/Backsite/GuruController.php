<?php

namespace App\Http\Controllers\Backsite;

use App\Models\User;
use App\Models\MasterData\Guru;
use App\Models\MasterData\Jurusan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use App\Http\Requests\Guru\StoreGuruRequest;
use App\Http\Requests\Guru\UpdateGuruRequest;
use App\Mail\newUser;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class GuruController extends Controller
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
        $jurusan = Jurusan::orderBy('id', 'ASC')->get();
        $data = Guru::with('user', 'jurusan')->get();

        confirmDelete();
        return view('pages.backsite.master-data.guru.index', compact('data', 'jurusan'));
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
    public function store(StoreGuruRequest $request)
    {

        try {
            DB::transaction(function () use ($request) {
                $user_data = [
                    'name' => $request->nama,
                    'email' => $request->email,
                    'password' => Hash::make($request->email),
                    'role_id' => 2
                ];

                $user = User::create($user_data);

                $guru = $request->all();
                $guru['user_id'] = $user->id;
                unset($guru['email']);

                Guru::create($guru);
            });
        } catch (\Throwable $th) {
            alert()->error('Gagal', 'Data Guru Gagal Ditambahkan');
            return redirect(route('backsite.guru.index'));
        }

        $maildata = [
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $request->email,
            'role' => 'Guru',
        ];

        Mail::to($maildata['email'])->send(new newUser($maildata));

        alert()->success('Berhasil', 'Data Guru Berhasil Ditambahkan');
        return redirect(route('backsite.guru.index'));
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
    public function edit(Guru $guru)
    {
        $jurusan = Jurusan::orderBy('id', 'ASC')->get();
        $data = Guru::with('user', 'jurusan')->where('id', $guru->id)->first();

        return view('pages.backsite.master-data.guru.edit', compact('data', 'jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGuruRequest $request, Guru $guru)
    {
        $data = $request->all();
        $guru->update($data);

        alert()->success('Berhasil', 'Data Guru Berhasil Diubah');
        return redirect(route('backsite.guru.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guru $guru)
    {
        DB::transaction(function () use ($guru) {
            User::where('id', $guru->user_id)->forceDelete();
            $guru->delete();
        });

        alert()->success('Berhasil', 'Data Guru Berhasil Dihapus');
        return redirect(route('backsite.guru.index'));
    }
}
