<?php

namespace App\Http\Controllers\Frontsite\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MasterData\Mitra;
use App\Models\MasterData\Siswa;
use App\Models\Kegiatan\PendaftarPkl;

use App\Http\Requests\PendaftarPkl\StorePendaftarPklRequest;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $siswa = Siswa::where('user_id', auth()->user()->id)->first();
        $pendaftaran = PendaftarPkl::select('mitra_id')->where('siswa_id', $siswa->id)->get()->toArray();
        $mitra = Mitra::whereNotIn('id', $pendaftaran)->with('bidang_usaha')->get();
        $mitra_terdaftar = PendaftarPkl::where('siswa_id', $siswa->id)->with('mitra', 'mitra.bidang_usaha')->get();

        // dd($mitra_terdaftar);

        return view('pages.frontsite.siswa.mitra', compact('mitra', 'mitra_terdaftar'));
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
    public function store(StorePendaftarPklRequest $request)
    {
        $data = $request->all();

        $data['siswa_id'] = Siswa::where('user_id', auth()->user()->id)->first()->id;

        PendaftarPkl::create($data);
        alert()->success('Berhasil', 'Pendaftaran berhasil');
        return back();
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
