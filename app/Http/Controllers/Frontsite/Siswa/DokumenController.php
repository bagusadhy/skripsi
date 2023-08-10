<?php

namespace App\Http\Controllers\Frontsite\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\MasterData\Siswa;
use App\Models\Kegiatan\DokumenSiswa;
use App\Models\MasterData\PeriodePkl;

use App\Http\Requests\DokumenSiswa\StoreDokumenSiswaRequest;
use App\Http\Requests\DokumenSiswa\UpdateDokumenSiswaRequest;

class DokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = Siswa::where('user_id', auth()->user()->id)->first();

        $dokumen = DokumenSiswa::where('siswa_id', $siswa->id)->first();

        return view('pages.frontsite.siswa.dokumen', compact('siswa', 'dokumen'));
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
    public function store(StoreDokumenSiswaRequest $request)
    {
        // dd($request->all());

        $siswa = Siswa::where('user_id', auth()->user()->id)->first();
        $isExist = DokumenSiswa::where('siswa_id', $siswa->id)->count('id');

        // dd($isExist);

        $data = $request->all();

        $periode = PeriodePkl::where('tahun', date('Y'))->where('status', '1')->first();
        $data['periode_id'] = $periode->id;

        if ($isExist) {
            DokumenSiswa::where('siswa_id', $siswa->id)->forceDelete();
        }
        if ($request->hasFile('surat_pernyataan_siswa')) {

            $surat_pernyataan = $request->file('surat_pernyataan_siswa');
            $nama_pernyataan = $surat_pernyataan->hashName();
            $pernyataan_filename = $nama_pernyataan;

            // dd($pernyataan_filename);

            // add file path
            $surat_pernyataan_siswa = $request->file('surat_pernyataan_siswa')->move('files/siswa/dokumen/', $pernyataan_filename);
            $data['surat_pernyataan_siswa'] = $surat_pernyataan_siswa;
        }

        if ($request->hasFile('surat_izin_ortu')) {
            $surat_izin = $request->file('surat_izin_ortu');
            $nama_izin = $surat_izin->hashName();
            $izin_filename = $nama_izin;

            // add file path
            $surat_izin_ortu = $request->file('surat_izin_ortu')->move('files/siswa/dokumen/', $izin_filename);
            $data['surat_izin_ortu'] = $surat_izin_ortu;
        }

        DokumenSiswa::create($data);

        alert()->success('Berhasil', 'Dokumen berhasil diunggah');
        return back();
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
