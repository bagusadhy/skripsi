<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use App\Models\MasterData\Template;
use App\Models\MasterData\Jurusan;

use App\Http\Requests\Template\StoreTemplateRequest;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jurusan = Jurusan::all();
        $data = Template::with('jurusan')->get();

        confirmDelete();
        return view('pages.backsite.master-data.tempate.index', compact('data', 'jurusan'));
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
    public function store(StoreTemplateRequest $request)
    {
        $data = $request->all();

        if ($request->hasFile('penilaian') && $request->hasFile('laporan')) {

            // laporan
            $laporan = $request->file('laporan');
            $hash_laporan = $laporan->hashName();
            $laporan_name = $hash_laporan;

            // penilaian
            $penilaian = $request->file('penilaian');
            $hash_penilaian = $penilaian->hashName();
            $penilaian_name = $hash_penilaian;


            // add file path
            $template_laporan = $request->file('laporan')->move('files/template/laporan/', $laporan_name);
            $template_penilaian = $request->file('penilaian')->move('files/template/penilaian/', $penilaian_name);
            $data['laporan'] = $template_laporan;
            $data['penilaian'] = $template_penilaian;
        }


        Template::create($data);
        alert()->success('Berhasil', 'Template Berhasil Diupload');
        return back();
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
    public function update(Request $request, string $id)
    {
        return abort(404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Template $template)
    {

        File::delete(public_path($template->laporan));
        File::delete(public_path($template->penilaian));
        $template->forceDelete();

        alert()->success('Berhasil', 'Template Berhasil Dihapus');
        return back();
    }
}
