<?php

namespace App\Http\Controllers\Frontsite\Mitra;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Kegiatan\PendaftarPkl;
use App\Models\MasterData\Mitra;
use App\Models\Kegiatan\Bimbingan;
use App\Models\Kegiatan\PesertaPkl;
use App\Models\MasterData\PeriodePkl;

class PendaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mitra = Mitra::where('user_id', auth()->user()->id)->first();
        $pendaftar = PendaftarPkl::where('mitra_id', $mitra->id)->whereIn('status', ['0', '3'])->with('siswa')->get();
        $guru = Bimbingan::where('mitra_id', $mitra->id)->first();
        // dd($guru->guru_id);
        config(['sweetalert.confirm_delete_confirm_button_text' => 'Tolak']);
        confirmDelete('Tolak Pendaftar', 'Yakin Menolak Pendaftar?');

        return view('pages.frontsite.mitra.pendaftar', compact('pendaftar'));
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
    public function update(Request $request, PendaftarPkl $pendaftar)
    {
        $data = $request->all();

        $pendaftar->update($data);

        if ($data['status'] == '1') {
            $mitra = Mitra::where('user_id', auth()->user()->id)->first();
            $guru = Bimbingan::where('mitra_id', $mitra->id)->first();
            $periode = PeriodePkl::where('status', '1')->first();

            $peserta = [
                'siswa_id' => $data['siswa_id'],
                'mitra_id' => $mitra->id,
                'guru_id' => $guru->guru_id,
                'periode_id' => $periode->id
            ];

            PesertaPkl::create($peserta);
            alert()->success('Berhasil', 'Pendaftaran Diterima');
        } else {
            alert()->success('Berhasil', 'Pendaftaran Ditolak');
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
