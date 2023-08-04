<?php

namespace App\Http\Controllers\Frontsite\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\Laporan\StoreLaporanRequest;
use App\Models\Kegiatan\AktivitasSiswa;
use App\Models\Kegiatan\Laporan;
use App\Models\MasterData\PeriodePkl;
use App\Models\MasterData\Siswa;
use App\Models\MasterData\Template;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = Siswa::where('user_id', auth()->user()->id)->first();
        $laporan = Laporan::where('siswa_id', $siswa->id)->first();

        $filename = null;
        if ($laporan != null) {
            $filename = Str::of($laporan->laporan)->basename();
        }

        $template = Template::where('jurusan_id', $siswa->jurusan_id)->first();


        // to check access to this route
        $siswa = Siswa::where('user_id', auth()->user()->id)->first();
        $total_aktivitas = AktivitasSiswa::where('siswa_id', $siswa->id)->count();

        $periode = PeriodePkl::where('tahun', date('Y'))->where('status', '1')->first();
        $kegiatan = Carbon::parse($periode->kegiatan);
        $kegiatan_selesai =  Carbon::parse($periode->kegiatan_selesai);

        $total_hari = $kegiatan->diffInDaysFiltered(function (Carbon $date) {
            return $date->isWeekday();
        }, $kegiatan_selesai);

        if ($total_aktivitas < $total_hari) {
            return back();
        }

        return view('pages.frontsite.siswa.laporan', compact('filename', 'template'));
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
    public function store(StoreLaporanRequest $request)
    {
        $siswa = Siswa::where('user_id', auth()->user()->id)->first();
        $isExist = Laporan::where('siswa_id', $siswa->id)->first();


        $data = $request->all();
        $data['siswa_id'] = $siswa->id;


        if ($isExist->count()) {
            File::delete(public_path($isExist->laporan));
            Laporan::where('siswa_id', $siswa->id)->forceDelete();
        }
        if ($request->hasFile('laporan')) {

            $laporan = $request->file('laporan');
            $hash = $laporan->hashName();
            $laporan_name = $hash;


            // add file path
            $surat_pernyataan_siswa = $request->file('laporan')->move('files/siswa/laporan/', $laporan_name);
            $data['laporan'] = $surat_pernyataan_siswa;
        }


        Laporan::create($data);
        alert()->success('Berhasil', 'Laporan Berhasil Diupload');
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
