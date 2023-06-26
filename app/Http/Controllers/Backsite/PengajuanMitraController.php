<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Kegiatan\PengajuanMitra;
use App\Models\User;
use App\Models\MasterData\Mitra;

class PengajuanMitraController extends Controller
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
        $pengajuan = PengajuanMitra::with('siswa', 'bidang_usaha')->get();
        return view('pages.backsite.kegiatan.pengajuan-mitra.index', compact('pengajuan'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return abort(404);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return abort(404);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PengajuanMitra $pengajuan)
    {
        $data = [
            'status' => 3,
        ];
        $pengajuan->update($data);

        alert()->success('Berhasil', 'Pengajuan mitra telah ditolak');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return abort(404);
    }

    public function terima(string $id)
    {
        return abort(404);
    }
}
