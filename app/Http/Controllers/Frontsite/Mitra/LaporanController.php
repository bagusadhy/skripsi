<?php

namespace App\Http\Controllers\Frontsite\Mitra;

use App\Http\Controllers\Controller;
use App\Models\Kegiatan\Laporan;
use App\Models\Kegiatan\PesertaPkl;
use App\Models\MasterData\Mitra;
use App\Models\MasterData\Siswa;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mitra = Mitra::where('user_id', auth()->user()->id)->first();
        $siswa_id = PesertaPkl::select('siswa_id')->where('mitra_id', $mitra->id)->get()->toArray();
        $laporan = Laporan::select('siswa.nama', 'laporan.*')->leftJoin('siswa', 'siswa.id', '=', 'laporan.siswa_id')->whereIn('laporan.siswa_id', $siswa_id)->get();


        // dd($laporan);
        return view('pages.frontsite.mitra.laporan', compact('laporan'));
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

    public function download(Siswa $siswa)
    {
        $data = Laporan::where('siswa_id', $siswa->id)->first();

        $file = public_path($data['laporan']);

        // dd($file);
        $headers = ['Content-Type: application/pdf'];
        $name = 'Laporan-' . $siswa->nama . '.pdf';

        return response()->download($file, $name, $headers);
    }
}
