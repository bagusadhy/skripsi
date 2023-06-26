<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use App\Models\Kegiatan\Bimbingan;
use App\Models\MasterData\Guru;
use App\Models\MasterData\Mitra;

use Illuminate\Http\Request;
use App\Http\Requests\Bimbingan\StoreBimbinganRequest;
use App\Http\Requests\Bimbingan\UpdateBimbinganRequest;

class BimbinganController extends Controller
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
        $guru = Guru::orderBy('id', 'ASC')->get();
        $mitra = Mitra::leftJoin('bimbingan', 'mitra.id', '=', 'bimbingan.mitra_id')->whereNull('bimbingan.mitra_id')->select('mitra.*')->get();
        $data_bimbingan = Bimbingan::with('guru', 'mitra')->get();
        $bimbingan = $data_bimbingan->groupBy('guru_id');
        $keys = $bimbingan->keys();

        // dd($bimbingan);

        $total = Bimbingan::select('guru_id')->groupBy('guru_id')->orderBy('guru_id', 'desc')->count();
        return view('pages.backsite.kegiatan.bimbingan.index', compact('bimbingan', 'guru', 'mitra', 'total', 'keys'));
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
    public function store(StoreBimbinganRequest $request)
    {
        // dd($request->all());
        $mitra = $request->mitra_id;
        foreach ($mitra as $list_mitra) {
            $data = [
                'guru_id' => $request->guru_id,
                'mitra_id' => $list_mitra,
            ];

            Bimbingan::create($data);
        }

        alert()->success('Berhasil', 'Data Bimbingan Berhasil Ditambahkan');
        return redirect(route('backsite.bimbingan.index'));
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
    public function edit(string $guru_id)
    {
        $mitra = Mitra::leftJoin('bimbingan', 'mitra.id', '=', 'bimbingan.mitra_id')->whereNull('bimbingan.mitra_id')->select('mitra.*')->get();
        $mitra_bimbingan = Bimbingan::select('mitra.id', 'mitra.nama')->where('guru_id', $guru_id)->join('mitra', 'mitra.id', '=', 'bimbingan.mitra_id')->get();

        // dd($mitra_bimbingan);
        return view('pages.backsite.kegiatan.bimbingan.edit', compact('mitra', 'mitra_bimbingan', 'guru_id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBimbinganRequest $request, string $guru_id)
    {
        Bimbingan::where('guru_id', $guru_id)->forceDelete();

        $mitra = $request->mitra_id;
        foreach ($mitra as $list_mitra) {
            $data = [
                'guru_id' => $request->guru_id,
                'mitra_id' => $list_mitra,
            ];

            Bimbingan::create($data);
        }

        alert()->success('Berhasil', 'Data Bimbingan Berhasil Diubah');
        return redirect(route('backsite.bimbingan.index'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $guru_id)
    {
        Bimbingan::where('guru_id', $guru_id)->forceDelete();

        alert()->success('Berhasil', 'Data Bimbingan Berhasil Dihapus');
        return back();
    }
}
