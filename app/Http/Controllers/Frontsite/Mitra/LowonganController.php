<?php

namespace App\Http\Controllers\Frontsite\Mitra;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Kegiatan\Lowongan;
use App\Models\MasterData\Mitra;

use App\Http\Requests\Lowongan\StoreLowonganRequest;
use App\Http\Requests\Lowongan\UpdateLowonganRequest;

class LowonganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mitra = Mitra::where('user_id', auth()->user()->id)->first();
        $lowongan = Lowongan::where('mitra_id', $mitra->id)->get();

        return view('pages.frontsite.mitra.lowongan', compact('lowongan'));
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
    public function store(StoreLowonganRequest $request)
    {
        $data = $request->all();

        $mitra = Mitra::where('user_id', auth()->user()->id)->first();
        $data['mitra_id'] = $mitra->id;

        Lowongan::create($data);

        alert()->success('Berhasil', 'Lowongan berhasil ditambahkan');
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
    public function edit(Lowongan $lowongan)
    {
        return view('pages.frontsite.mitra.lowongan-edit', compact('lowongan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLowonganRequest $request, Lowongan $lowongan)
    {
        $lowongan->update($request->all());

        alert()->success('Berhasil', 'Lowongan berhasil diperbarui');
        return redirect(route('mitra.lowongan.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lowongan $lowongan)
    {
        $lowongan->forceDelete();

        alert()->success('Berhasil', 'Lowongan berhasil dihapus');
        return back();
    }
}