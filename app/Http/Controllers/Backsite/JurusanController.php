<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use App\Models\MasterData\Jurusan;

use App\Http\Requests\Jurusan\StoreJurusanRequest;
use App\Http\Requests\Jurusan\UpdateJurusanRequest;

class JurusanController extends Controller
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
        $data = Jurusan::orderBy('id', 'ASC')->get();

        confirmDelete();
        return view('pages.backsite.master-data.jurusan.index', compact('data'));
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
    public function store(StoreJurusanRequest $request)
    {
        $data = $request->all();
        Jurusan::create($data);

        alert()->success('Berhasil', 'Data berhasil ditambahkan');
        return redirect(route('backsite.jurusan.index'));
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
    public function edit(Jurusan $jurusan)
    {
        return view('pages.backsite.master-data.jurusan.edit', compact('jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJurusanRequest $request, Jurusan $jurusan)
    {
        $data = $request->all();
        $jurusan->update($data);

        alert()->success('Berhasil', 'Data berhasil diubah');
        return redirect(route('backsite.jurusan.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jurusan $jurusan)
    {
        $jurusan->delete();

        alert()->success('Berhasil', 'Data berhasil dihapus');
        return back();
    }
}
