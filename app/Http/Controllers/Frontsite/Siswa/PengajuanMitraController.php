<?php

namespace App\Http\Controllers\Frontsite\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Kegiatan\PengajuanMitra;
use App\Models\MasterData\BidangUsaha;
use App\Models\MasterData\Siswa;
use App\Models\Kegiatan\PesertaPkl;

use App\Http\Requests\PengajuanMitra\StorePengajuanMitraRequest;
use App\Models\MasterData\PeriodePkl;

class PengajuanMitraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bidang = BidangUsaha::all();
        $siswa = Siswa::where('user_id', auth()->user()->id)->first();

        $peserta = PesertaPkl::where('siswa_id', $siswa->id)->first();
        $pengajuan_access = true;

        if($peserta != null){
            $pengajuan_access = false;
        }

        $pengajuan = PengajuanMitra::where('siswa_id', $siswa->id)->get();
        return view('pages.frontsite.siswa.pengajuan-mitra', compact('bidang', 'siswa', 'pengajuan', 'pengajuan_access'));
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
    public function store(StorePengajuanMitraRequest $request)
    {
        $data = $request->all();


        $periode = PeriodePkl::where('tahun', date('Y'))->where('status', '1')->first();
        $data['periode_id'] = $periode->id;

        PengajuanMitra::create($data);

        alert()->success('Berhasil', 'Pengajuan berhasil');
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
