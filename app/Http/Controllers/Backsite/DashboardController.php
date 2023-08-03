<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\MasterData\Siswa;
use App\Models\MasterData\Guru;
use App\Models\MasterData\Mitra;
use App\Models\Kegiatan\PengajuanMitra;
use App\Models\Kegiatan\Lowongan;
use App\Models\Kegiatan\AktivitasSiswa;

class DashboardController extends Controller
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
        $siswa = Siswa::select(Siswa::raw('COUNT(id) as total_siswa'))->first();
        $guru = Guru::select(Guru::raw('COUNT(id) as total_guru'))->first();
        $mitra = Mitra::select(Mitra::raw('COUNT(id) as total_mitra'))->first();
        $pengajuan_mitra = PengajuanMitra::select(PengajuanMitra::raw('COUNT(id) as total_pengajuan_mitra'))->first();
        $lowongan = Lowongan::select(Lowongan::raw('COUNT(id) as total_lowongan'))->first();

        $tanggal = date('Y-m-d');

        $presensi = AktivitasSiswa::select(AktivitasSiswa::raw('COUNT(CASE WHEN presensi = 1 THEN 1 ELSE NULL END) as hadir, COUNT(CASE WHEN presensi = 2 THEN 1 ELSE NULL END) as izin, COUNT(CASE WHEN presensi = 3 THEN 1 ELSE NULL END) as sakit, COUNT(CASE WHEN presensi = 4 THEN 1 ELSE NULL END) as libur'))->where('tanggal', $tanggal)->groupBy('presensi')->get()->toArray();

        $dataset_presensi = [];
        if($presensi == null){
            $dataset_presensi = json_encode([0, 0, 0, 0]);
        }else{
            $dataset_presensi = json_encode(array_values($presensi[0]));
        }

        return view('pages.backsite.dashboard.index', compact('siswa', 'guru', 'mitra', 'pengajuan_mitra', 'lowongan', 'dataset_presensi'));
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
