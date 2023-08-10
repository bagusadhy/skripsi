<?php

namespace App\Http\Controllers\Frontsite\Guru;

use App\Http\Controllers\Controller;
use App\Models\Kegiatan\Bimbingan;
use App\Models\Kegiatan\PesertaPkl;
use App\Models\Kegiatan\AktivitasSiswa;
use App\Models\Kegiatan\Monitoring;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\MasterData\Guru;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guru = Guru::where('user_id', Auth::user()->id)->first();
        $complete = is_null($guru->jenis_kelamin) || is_null($guru->kontak) || is_null($guru->alamat) || is_null($guru->foto);

        $list_mitra = Bimbingan::select('mitra_id')->where('guru_id', $guru->id)->get()->toArray();
        $siswa = PesertaPkl::select(PesertaPkl::raw('COUNT(siswa_id) as total_siswa'))->whereIn('mitra_id', $list_mitra)->first();
        $mitra = Bimbingan::select(Bimbingan::raw('COUNT(id) as total_mitra'))->where('guru_id', $guru->id)->first();
        $monitoring = Monitoring::select(Monitoring::raw('COUNT(id) as total_monitoring'))->where('guru_id', $guru->id)->first();

        $list_siswa = PesertaPkl::select('siswa_id')->whereIn('mitra_id', $list_mitra)->get()->toArray();

        $presensi = AktivitasSiswa::select(AktivitasSiswa::raw('COUNT(CASE WHEN presensi = 1 THEN 1 ELSE NULL END) as hadir, COUNT(CASE WHEN presensi = 2 THEN 1 ELSE NULL END) as izin, COUNT(CASE WHEN presensi = 3 THEN 1 ELSE NULL END) as sakit, COUNT(CASE WHEN presensi = 4 THEN 1 ELSE NULL END) as libur'))->where('tanggal', date('Y-m-d'))->whereIn('siswa_id', $list_siswa)->groupBy('presensi')->get()->toArray();

        $dataset_presensi = [];
        if ($presensi == null) {
            $dataset_presensi = json_encode([0, 0, 0, 0]);
        } else {
            $dataset_presensi = json_encode(array_values($presensi[0]));
        }
        return view('pages.frontsite.guru.index', compact('complete', 'siswa', 'mitra', 'dataset_presensi', 'monitoring'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return abort(405);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return abort(405);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return abort(405);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return abort(405);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return abort(405);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return abort(405);
    }
}
