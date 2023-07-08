<?php

namespace App\Http\Controllers\Frontsite\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;
use Carbon\Carbon;

use App\Models\Kegiatan\PesertaPkl;
use App\Models\MasterData\Siswa;
use App\Models\Kegiatan\AktivitasSiswa;
use App\Models\MasterData\PeriodePkl;

use Illuminate\Http\Request;
use App\Http\Requests\AktivitasSiswa\StoreAktivitasSiswaRequest;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = Siswa::where('user_id', auth()->user()->id)->first();
        $peserta = PesertaPkl::where('siswa_id', $siswa->id)->with('mitra')->first();
        $aktivitas = AktivitasSiswa::where('siswa_id', $siswa->id)->orderBy('tanggal', 'DESC')->paginate(2);
        $total_aktivitas = AktivitasSiswa::where('siswa_id', $siswa->id)->count();

        $periode = PeriodePkl::first();
        $tanggal_mulai = Carbon::parse($periode->tanggal_dimulai);
        $tanggal_berakhir =  Carbon::parse($periode->tanggal_berakhir);

        $total_hari = $tanggal_mulai->diffInDaysFiltered(function (Carbon $date) {
            return $date->isWeekday();
        }, $tanggal_berakhir);

        $access_laporan = false;
        if($total_aktivitas >= $total_hari){
            $access_laporan = true;
        }

        return view('pages.frontsite.siswa.kegiatan', compact('peserta', 'aktivitas', 'access_laporan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $siswa = Siswa::where('user_id', auth()->user()->id)->first();
        $date = AktivitasSiswa::select('tanggal')->where('siswa_id', $siswa->id)->get()->toArray();
        $disable_date = json_encode(Arr::flatten($date));

        return view('pages.frontsite.siswa.logbook', compact('disable_date'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAktivitasSiswaRequest $request)
    {
        $siswa = Siswa::where('user_id', auth()->user()->id)->first();

        $data = $request->all();
        $data['siswa_id'] = $siswa->id;

        AktivitasSiswa::create($data);

        alert()->success('Berhasil', 'Logbook Berhasil Ditambahkan.');
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
