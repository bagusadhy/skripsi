<?php

namespace App\Http\Controllers\Frontsite\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\MasterData\Mitra;
use App\Models\MasterData\Siswa;
use App\Models\Kegiatan\PendaftarPkl;
use App\Models\Kegiatan\Lowongan;
use App\Models\Kegiatan\PesertaPkl;
use App\Models\MasterData\PeriodePkl;
use App\Models\Kegiatan\Bimbingan;

use App\Http\Requests\PendaftarPkl\StorePendaftarPklRequest;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $siswa = Siswa::where('user_id', auth()->user()->id)->first();

        $pendaftaran = PendaftarPkl::select('lowongan_id')->where('siswa_id', $siswa->id)->get()->toArray();
        $lowongan = Lowongan::whereNotIn('id', $pendaftaran)->with('mitra', 'mitra.bidang_usaha')->get();
        $lowongan_terdaftar = PendaftarPkl::where('siswa_id', $siswa->id)->with('lowongan', 'mitra', 'mitra.bidang_usaha')->get();

        $peserta = PesertaPkl::where('siswa_id', $siswa->id)->first();

        return view('pages.frontsite.siswa.mitra', compact('lowongan', 'lowongan_terdaftar', 'peserta'));
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
    public function store(StorePendaftarPklRequest $request)
    {
        $data = $request->all();

        $data['siswa_id'] = Siswa::where('user_id', auth()->user()->id)->first()->id;

        PendaftarPkl::create($data);
        alert()->success('Berhasil', 'Pendaftaran berhasil');
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
    public function update(Request $request, PendaftarPkl $pendaftaran)
    {

        DB::transaction(function () use ($pendaftaran){
            PendaftarPkl::where('siswa_id', $pendaftaran->siswa_id)->update(['status' => '2']);
            $pendaftaran->update(['status' => '3']);

            $periode = PeriodePkl::where('status', '1')->first();
            $guru = Bimbingan::where('mitra_id', $pendaftaran->mitra_id)->first();

            $peserta = [
                'siswa_id' => $pendaftaran->siswa_id,
                'mitra_id' => $pendaftaran->mitra_id,
                'lowongan_id' => $pendaftaran->lowongan_id,
                'guru_id' => $guru->guru_id,
                'periode_id' => $periode->id
            ];

            PesertaPkl::create($peserta);
            alert()->success('Berhasil', 'Pendaftaran Diterima');
        });

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
