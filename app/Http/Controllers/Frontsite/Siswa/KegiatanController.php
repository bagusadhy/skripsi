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
use App\Http\Requests\AktivitasSiswa\UpdateAktivitasSiswaRequest;

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
        $kegiatan_mulai = Carbon::parse($periode->kegiatan);
        $kegiatan_selesai =  Carbon::parse($periode->kegiatan_selesai);

        $total_hari = $kegiatan_mulai->diffInDaysFiltered(function (Carbon $date) {
            return $date->isWeekday();
        }, $kegiatan_selesai);

        $access_laporan = false;
        if($total_aktivitas >= $total_hari){
            $access_laporan = true;
        }



        $total_revisi = AktivitasSiswa::where('siswa_id', $siswa->id)->where('status', '0')->count();

        return view('pages.frontsite.siswa.kegiatan', compact('peserta', 'aktivitas', 'access_laporan', 'total_revisi'));
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

        $periode = PeriodePkl::where('tahun', date('Y'))->where('status', '1')->first();
        $data['periode_id'] = $periode->id;


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
    public function edit(AktivitasSiswa $kegiatan)
    {
        $logbook = $kegiatan;

        return view('pages.frontsite.siswa.logbook-edit', compact('logbook'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAktivitasSiswaRequest $request, AktivitasSiswa $kegiatan)
    {
        $data = [
            'status' => null,
            'jurnal' => $request->jurnal,
        ];

        $kegiatan->update($data);

        alert()->success('Berhasil', 'Logbook Berhasil Direvisi.');
        return redirect(route('siswa.kegiatan.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
