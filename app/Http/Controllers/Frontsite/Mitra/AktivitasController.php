<?php

namespace App\Http\Controllers\Frontsite\Mitra;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Kegiatan\AktivitasSiswa;
use App\Models\Kegiatan\PesertaPkl;
use App\Models\MasterData\Mitra;
use App\Models\MasterData\Siswa;

class AktivitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mitra = Mitra::where('user_id', auth()->user()->id)->first();
        $siswa_id = PesertaPkl::select('siswa_id')->where('mitra_id', $mitra->id)->get()->toArray();
        $aktivitas = AktivitasSiswa::leftJoin('siswa', 'siswa.id', '=', 'aktivitas_siswa.siswa_id')->whereIn('siswa_id', $siswa_id)->select('siswa.id', 'siswa.nama', AktivitasSiswa::raw('COUNT(presensi) as total_presensi'))->groupBy('siswa.id', 'siswa.nama')->get();

        return view('pages.frontsite.mitra.aktivitas', compact('aktivitas'));
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
    public function show(Siswa $siswa)
    {
        $aktivitas = AktivitasSiswa::where('siswa_id', $siswa->id)->orderBy('tanggal', 'desc')->paginate(2);

        return view('pages.frontsite.mitra.aktivitas-detail', compact('aktivitas'));
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

    public function tolak(Request $request,string $id){
        $data = [
            'status' => '0',
            'revisi' => $request->revisi
        ];

        AktivitasSiswa::where('id', $request->id)->update($data);
        alert()->success('Berhasil', 'Jurnal Harian Ditolak');
        return back();

    }
}
