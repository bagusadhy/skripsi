<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Kegiatan\Lowongan;
use App\Models\Kegiatan\PendaftarPkl;
use Illuminate\Support\Facades\DB;

class LowonganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $lowongan = Lowongan::withCount('pendaftar')->with('mitra')->get();

        return view('pages.backsite.kegiatan.lowongan.index', compact('lowongan'));
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

    public function activated(Lowongan $lowongan)
    {
        $data = [
            'status' => '1'
        ];

        $lowongan->update($data);

        alert()->success('Berhasil', 'Lowongan Diaktifkan');
        return back();
    }
    public function disactivated(Lowongan $lowongan)
    {
        $data = [
            'status' => '0'
        ];

        $lowongan->update($data);

        alert()->success('Berhasil', 'Lowongan Dinonaktifkan');
        return back();
    }
}
