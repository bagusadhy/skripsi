<?php

namespace App\Http\Controllers\Frontsite\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Kegiatan\AktivitasSiswa;
use App\Models\Kegiatan\PendaftarPkl;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendaftar = PendaftarPkl::select(PendaftarPkl::raw('COUNT(id) as total_pendaftaran'))->where('siswa_id', auth()->user()->siswa->id)->first();
        $pendaftaran_diterima = PendaftarPkl::select(PendaftarPkl::raw('COUNT(id) as total_diterima'))->where('status', '1')->where('siswa_id', auth()->user()->siswa->id)->first();

        $revisi = AktivitasSiswa::select(AktivitasSiswa::raw('COUNT(id) as total_revisi'))->where('siswa_id', auth()->user()->siswa->id)->where('status', '0')->first();

        $presensi = AktivitasSiswa::select(AktivitasSiswa::raw('COUNT(CASE WHEN presensi = 1 THEN 1 ELSE NULL END) as hadir, COUNT(CASE WHEN presensi = 2 THEN 1 ELSE NULL END) as izin, COUNT(CASE WHEN presensi = 3 THEN 1 ELSE NULL END) as sakit, COUNT(CASE WHEN presensi = 4 THEN 1 ELSE NULL END) as libur'))->where('siswa_id', auth()->user()->siswa->id)->groupBy('presensi')->get()->toArray();

        $dataset_presensi = [];
        if ($presensi == null) {
            $dataset_presensi = json_encode([0, 0, 0, 0]);
        } else {
            $dataset_presensi = json_encode(array_values($presensi[0]));
        }

        return view('pages.frontsite.siswa.index', compact('pendaftar', 'pendaftaran_diterima', 'dataset_presensi', 'revisi'));
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
