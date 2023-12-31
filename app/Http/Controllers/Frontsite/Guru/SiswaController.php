<?php

namespace App\Http\Controllers\Frontsite\Guru;

use App\Http\Controllers\Controller;
use App\Models\Kegiatan\Laporan;
use App\Models\Kegiatan\Nilai;
use Illuminate\Http\Request;

use App\Models\Kegiatan\PesertaPkl;
use App\Models\MasterData\Guru;
use App\Models\MasterData\Siswa;

use ZipArchive;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guru = Guru::where('user_id', auth()->user()->id)->first();
        $peserta = PesertaPkl::where('guru_id', $guru->id)->with('siswa', 'mitra')->get();

        return view('pages.frontsite.guru.siswa', compact('peserta'));
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
        $siswa->with('jurusan', 'kelas');

        return view('pages.frontsite.guru.siswa-detail', compact('siswa'));
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

    public function laporan()
    {
        $guru = Guru::where('user_id', auth()->user()->id)->first();
        $siswa_id = PesertaPkl::select('siswa_id')->where('guru_id', $guru->id)->get()->toArray();
        $laporan = Laporan::select('siswa.nama', 'laporan.*')->leftJoin('siswa', 'siswa.id', '=', 'laporan.siswa_id')->whereIn('laporan.siswa_id', $siswa_id)->get();

        return view('pages.frontsite.guru.laporan', compact('laporan'));
    }
    public function nilai()
    {
        $guru = Guru::where('user_id', auth()->user()->id)->first();
        $siswa_id = PesertaPkl::select('siswa_id')->where('guru_id', $guru->id)->get()->toArray();
        $nilai = Nilai::select('siswa.nama', 'nilai.*')->leftJoin('siswa', 'siswa.id', '=', 'nilai.siswa_id')->whereIn('nilai.siswa_id', $siswa_id)->get();

        return view('pages.frontsite.guru.nilai', compact('nilai'));
    }

    public function download_laporan(Siswa $siswa){
        $data = Laporan::find($siswa->id);

        $file = public_path('storage/'.$data->laporan);
        $headers = ['Content-Type: application/pdf'];
        $name = 'Laporan-' . $siswa->nama . '.pdf';

        return response()->download($file, $name, $headers);
    }
    public function download_nilai(Siswa $siswa){
        $data = Nilai::find($siswa->id);

        $file = public_path('storage/'.$data->nilai);
        $headers = ['Content-Type: application/pdf'];
        $name = 'Nilai-' . $siswa->nama . '.pdf';

        return response()->download($file, $name, $headers);
    }
}
