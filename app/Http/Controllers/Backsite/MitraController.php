<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\MasterData\Mitra;
use App\Models\MasterData\BidangUsaha;

use Illuminate\Support\Facades\Hash;

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
        $data = Mitra::join('users', 'mitra.user_id', '=', 'users.id')
        ->join('bidang_usaha', 'mitra.bidang_usaha_id', '=', 'bidang_usaha.id')
        ->select('mitra.*', 'users.name', 'users.email', 'bidang_usaha.title as bidang_usaha')
        ->get();
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
        // dd($request->all());
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
        $data = Mitra::join('bidang_usaha', 'mitra.bidang_usaha_id', '=', 'bidang_usaha.id')
        ->select('mitra.*', 'bidang_usaha.id as id_bidang_usaha', 'bidang_usaha.title')
        ->get();



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
        User::where('id', $mitra->user_id)->forceDelete();
        $mitra->forceDelete();

        alert()->success('Berhasil', 'Data Mitra Berhasil Dihapus');
        return redirect(route('backsite.mitra.index'));
    }
}
