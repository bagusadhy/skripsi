<?php

namespace App\Http\Controllers\Backsite;

use App\Models\User;
use App\Models\MasterData\Guru;
use App\Models\MasterData\Jurusan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

use App\Http\Requests\Guru\StoreGuruRequest;
use App\Http\Requests\Guru\UpdateGuruRequest;

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
        $data = Guru::join('users', 'guru.user_id', '=', 'users.id')
            ->join('jurusan', 'guru.jurusan_id', '=', 'jurusan.id')
            ->select('guru.*', 'users.name', 'users.email', 'jurusan.jurusan')
            ->get();
        return view('pages.backsite.master-data.guru.index', compact('data', 'jurusan'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGuruRequest $request)
    {
        // dd($request->alamat);
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

        // dd($guru);

        Guru::create($guru);

        alert()->success('Berhasil', 'Data Guru Berhasil Ditambahkan');
        return redirect(route('backsite.guru.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guru $guru)
    {
        $jurusan = Jurusan::orderBy('id', 'ASC')->get();
        $data = Guru::join('jurusan', 'guru.jurusan_id', '=', 'jurusan.id')
            ->select('guru.*', 'jurusan.id as id_jurusan', 'jurusan.jurusan')
            ->get();



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
        User::where('id', $guru->user_id)->forceDelete();
        $guru->forceDelete();

        alert()->success('Berhasil', 'Data Guru Berhasil Dihapus');
        return redirect(route('backsite.guru.index'));
    }
}
