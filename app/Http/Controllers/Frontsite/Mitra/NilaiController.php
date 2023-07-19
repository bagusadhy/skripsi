<?php

namespace App\Http\Controllers\Frontsite\Mitra;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use ZipArchive;

use App\Models\Kegiatan\Nilai;
use App\Models\MasterData\Mitra;
use App\Models\MasterData\Siswa;
use App\Models\Kegiatan\PesertaPkl;
use App\Models\MasterData\Template;

use App\Http\Requests\Nilai\StoreNilaiRequest;
use App\Http\Requests\Nilai\UpdateNilaiRequest;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mitra = Mitra::where('user_id', auth()->user()->id)->first();
        $siswa_id = PesertaPkl::select('siswa_id')->where('mitra_id', $mitra->id)->get()->toArray();
        $nilai = Nilai::select('siswa.nama', 'nilai.*')->leftJoin('siswa', 'siswa.id', '=', 'nilai.siswa_id')->whereIn('nilai.siswa_id', $siswa_id)->get();

        $siswa = PesertaPkl::select('siswa_id')->where('mitra_id', $mitra->id)->with('siswa')->get();


        return view('pages.frontsite.mitra.nilai', compact('siswa', 'nilai'));
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
    public function store(StoreNilaiRequest $request)
    {

        $data = $request->all();

        if ($request->hasFile('nilai')) {

            $nilai = $request->file('nilai');
            $hash = $nilai->hashName();
            $nilai_name = $hash;


            // add file path
            $nilai_siswa = $request->file('nilai')->move('files/siswa/nilai/', $nilai_name);
            $data['nilai'] = $nilai_siswa;
        }


        Nilai::create($data);
        alert()->success('Berhasil', 'Nilai Berhasil Diupload');
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
    public function destroy(Siswa $siswa)
    {
        $nilai = Nilai::where('siswa_id', $siswa->id)->first();

        if ($nilai != null) {
            File::delete(public_path($nilai->nilai));
            $nilai->where('siswa_id', $siswa->id)->forceDelete();
        }

        alert()->success('Berhasil', 'Nilai Berhasil Dihapus');
        return back();
    }

    public function download_template()
    {
        $zip = new ZipArchive;

        $fileName = 'template_penilaian.zip';

        if ($zip->open(public_path($fileName), ZipArchive::CREATE) === TRUE) {
            $files = File::files(public_path('files/template/penilaian'));

            foreach ($files as $key => $value) {
                $relativeNameInZipFile = basename($value);
                $zip->addFile($value, $relativeNameInZipFile);
            }

            $zip->close();
        }

        return response()->download(public_path($fileName));
    }
}
