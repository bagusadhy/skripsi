<?php

namespace App\Http\Controllers\Frontsite\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\MasterData\Mitra;
use App\Models\Kegiatan\Bimbingan;
use App\Models\MasterData\Guru;
use App\Models\Kegiatan\PesertaPkl;

class MitraTerhubungController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $guru = Guru::where('user_id', auth()->user()->id)->first();
        $bimbingan = Bimbingan::where('guru_id', $guru->id)->with('mitra')->get();


        return view('pages.frontsite.guru.bimbingan', compact('bimbingan', 'guru'));
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
    public function store()
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(Mitra $mitra)
    {
        $mitra->with('bidang_usaha');
        $peserta = PesertaPkl::where('mitra_id', $mitra->id)->with('siswa')->get();
        return view('pages.frontsite.guru.bimbingan-show', compact('mitra', 'peserta'));
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
