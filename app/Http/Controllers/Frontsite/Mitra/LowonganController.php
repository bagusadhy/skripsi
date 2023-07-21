<?php

namespace App\Http\Controllers\Frontsite\Mitra;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Kegiatan\Lowongan;
use App\Models\MasterData\Mitra;
use App\Models\MasterData\PeriodePkl;
use App\Models\MasterData\Jurusan;

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
        $lowongan = Lowongan::where('mitra_id', $mitra->id)->with('jurusan')->get();
        $pendaftaran_access = PeriodePkl::where('nama_timeline', 'pendaftaran')->where('status', '1')->first();
        $jurusan = Jurusan::all();

        return view('pages.frontsite.mitra.lowongan', compact('lowongan', 'jurusan', 'pendaftaran_access'));
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
        $jurusan = Jurusan::all();
        return view('pages.frontsite.mitra.lowongan-edit', compact('lowongan', 'jurusan'));
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
