<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\MasterData\Siswa;
use App\Models\MasterData\Kelas;
use App\Models\MasterData\Jurusan;

use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Http\Requests\Siswa\StoreSiswaRequest;
use App\Http\Requests\Siswa\UpdateSiswaRequest;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
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
        $kelas = Kelas::orderBy('id', 'ASC')->get();
        $data = Siswa::with('jurusan', 'kelas')->get();

        confirmDelete();
        return view('pages.backsite.master-data.siswa.index', compact('data', 'jurusan', 'kelas'));
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
    public function store(StoreSiswaRequest $request)
    {
        try {
            DB::transaction(function () use ($request) {
                $user_data = [
                    'name' => $request->nama,
                    'email' => $request->email,
                    'password' => Hash::make($request->email),
                    'role_id' => 4
                ];

                $user = User::create($user_data);

                $siswa = [
                    'user_id' => $user->id,
                    'jurusan_id' => $request->jurusan_id,
                    'kelas_id' => $request->kelas_id,
                    'nisn' => $request->nisn,
                    'nama' => $request->nama,
                    'jenis_kelamin' => $request->jenis_kelamin,
                    'tempat_lahir' => $request->tempat_lahir,
                    'tanggal_lahir' => $request->tanggal_lahir,
                    'agama' => $request->agama,
                    'kontak' => $request->kontak,
                    'alamat' => $request->alamat,
                ];

                Siswa::create($siswa);
            });

        } catch (\Throwable $th) {
            alert()->error('Gagal', 'Data Siswa Gagal Ditambahkan');
            return redirect(route('backsite.siswa.index'));
        }

        alert()->success('Berhasil', 'Data Siswa Berhasil Ditambahkan');
        return redirect(route('backsite.siswa.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
       $siswa->with('jurusan', 'kelas');

        return view('pages.backsite.master-data.siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa)
    {
        $jurusan = Jurusan::orderBy('id', 'ASC')->get();
        $kelas = Kelas::orderBy('id', 'ASC')->get();
        $data = $siswa->with('kelas', 'jurusan')->where('id', $siswa->id)->first();

        return view('pages.backsite.master-data.siswa.edit', compact('data', 'jurusan', 'kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSiswaRequest $request, Siswa $siswa)
    {
        $data = $request->all();
        $siswa->update($data);

        alert()->success('Berhasil', 'Data Siswa Berhasil Diubah');
        return redirect(route('backsite.siswa.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        DB::transaction(function () use ($siswa) {
            User::where('id', $siswa->user_id)->forceDelete();
            $siswa->delete();
        });

        alert()->success('Berhasil', 'Data Siswa Berhasil Dihapus');
        return redirect(route('backsite.siswa.index'));
    }
}
