<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use App\Models\MasterData\Kelas;

use App\Http\Requests\Kelas\StoreKelasRequest;
use App\Http\Requests\Kelas\UpdateKelasRequest;
class KelasController extends Controller
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
        $data = Kelas::orderBy('id', 'ASC')->get();
        return view('pages.backsite.master-data.kelas.index', compact('data'));
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
    public function store(StoreKelasRequest $request)
    {
        $data = $request->all();
        Kelas::create($data);

        alert()->success('Berhasil', 'Data berhasil ditambahkan');
        return redirect(route('backsite.kelas.index'));
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
    public function edit(Kelas $kelas)
    {
        return view('pages.backsite.master-data.kelas.edit', compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKelasRequest $request, Kelas $kelas)
    {
        $data = $request->all();
        $kelas->update($data);

        alert()->success('Berhasil', 'Data berhasil diubah');
        return redirect(route('backsite.kelas.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelas $kelas)
    {
        $kelas->delete();

        alert()->success('Berhasil', 'Data berhasil dihapus');
        return back();
    }
}
