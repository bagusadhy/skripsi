<?php

namespace App\Http\Controllers\Frontsite\Mitra;

use App\Http\Controllers\Controller;
use App\Models\Kegiatan\PendaftarPkl;
use Illuminate\Http\Request;

use App\Models\Kegiatan\PesertaPkl;
use App\Models\Kegiatan\Lowongan;
use App\Models\MasterData\Mitra;
use App\Models\Kegiatan\AktivitasSiswa;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mitra_id = Mitra::where('user_id', auth()->user()->id)->first()->id;
        $siswa = PesertaPkl::select(PesertaPkl::raw('COUNT(id) as total_siswa'))->where('mitra_id', $mitra_id)->first();
        $lowongan = Lowongan::select(Lowongan::raw('COUNT(id) as total_lowongan'))->where('mitra_id', $mitra_id)->first();
        $pendaftar = PendaftarPkl::select(PendaftarPkl::raw('COUNT(id) as total_pendaftar'))->where('mitra_id', $mitra_id)->first();
        $peserta = PesertaPkl::select('siswa_id')->where('mitra_id', $mitra_id)->get()->toArray();

        $presensi = AktivitasSiswa::select(AktivitasSiswa::raw('COUNT(CASE WHEN presensi = 1 THEN 1 ELSE NULL END) as hadir, COUNT(CASE WHEN presensi = 2 THEN 1 ELSE NULL END) as izin, COUNT(CASE WHEN presensi = 3 THEN 1 ELSE NULL END) as sakit, COUNT(CASE WHEN presensi = 4 THEN 1 ELSE NULL END) as libur'))->where('tanggal', date('Y-m-d'))->whereIn('siswa_id', $peserta)->groupBy('presensi')->get()->toArray();

        $dataset_presensi = [];
        if ($presensi == null) {
            $dataset_presensi = json_encode([0, 0, 0, 0]);
        } else {
            $dataset_presensi = json_encode(array_values($presensi[0]));
        }

        return view('pages.frontsite.mitra.index', compact('siswa', 'pendaftar', 'lowongan','dataset_presensi'));
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
        //
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
