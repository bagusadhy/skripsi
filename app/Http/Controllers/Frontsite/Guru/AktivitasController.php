<?php

namespace App\Http\Controllers\Frontsite\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Kegiatan\PesertaPkl;
use App\Models\Kegiatan\AktivitasSiswa;
use App\Models\MasterData\Guru;


class AktivitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guru = Guru::where('user_id', auth()->user()->id)->first();
        $peserta = PesertaPkl::where('guru_id', $guru->id)->with('siswa')->get();

        $siswa_id = PesertaPkl::select('id')->where('guru_id', $guru->id)->get()->toArray();

        $jurnal  = AktivitasSiswa::select(AktivitasSiswa::raw('COUNT(presensi) as total_presensi', 'COUNT(jurnal) as total_jurnal'))->whereIn('siswa_id', $siswa_id)->get();
        dd($jurnal);
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
