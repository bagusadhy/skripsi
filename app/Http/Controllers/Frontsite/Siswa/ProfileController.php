<?php

namespace App\Http\Controllers\Frontsite\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\MasterData\Siswa;
use App\Models\MasterData\Kelas;
use App\Models\MasterData\Jurusan;

use App\Http\Requests\Siswa\UpdateSiswaRequest;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jurusan = Jurusan::all();
        $kelas = Kelas::all();
        $siswa = Siswa::where('user_id', auth()->user()->id)->first();

        return view('pages.frontsite.siswa.profile', compact('siswa', 'jurusan', 'kelas'));
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
    public function store(Request $request)
    {
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSiswaRequest $request, Siswa $profile)
    {
        $data = $request->all();

        try {
            DB::transaction(function () use ($request, $profile, $data) {
                $data_user = [];
                if ($request->hasFile('foto')) {

                    // delete old photo from storage
                    if ($profile->foto != null) {
                        File::delete('storage/' . $profile->foto);
                    }

                    // add new photo path
                    $data['foto'] = $request->file('foto')->store('images/siswa', 'public');

                    $data_user['profile_photo_path'] = $data['foto'];
                }
                $data_user['name'] = $data['nama'];

                User::where('id', $profile->user_id)->update($data_user);
                $profile->update($data);
            });

            alert()->success('Berhasil', 'Data anda berhasil diupdate');
        } catch (\Throwable $th) {
            //throw $th;
            alert()->error('Gagal', 'Data anda gagal diupdate');
        }



        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
