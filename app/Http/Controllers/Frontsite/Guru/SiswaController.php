<?php

namespace App\Http\Controllers\Frontsite\Guru;

use App\Http\Controllers\Controller;
use App\Models\Kegiatan\Laporan;
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
        $siswa_id = PesertaPkl::select('id')->where('guru_id', $guru->id)->get()->toArray();
        $laporan = Laporan::select('siswa.nama', 'laporan.*')->leftJoin('siswa', 'siswa.id', '=', 'laporan.siswa_id')->whereIn('laporan.siswa_id', $siswa_id)->get();

        return view('pages.frontsite.guru.laporan', compact('laporan'));
    }

    public function download_laporan(Siswa $siswa){
        $data = Laporan::find($siswa->id);

        // dd($laporan);
        $file = public_path('storage/'.$data->laporan);
        $headers = ['Content-Type: application/pdf'];
        $name = 'Laporan-' . $siswa->nama . '.jpg';

        return response()->download($file, $name, $headers);
        // return Storage::download('file.jpg', $name, $headers);
    }
}
