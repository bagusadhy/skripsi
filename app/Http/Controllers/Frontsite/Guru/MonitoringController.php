<?php

namespace App\Http\Controllers\Frontsite\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\MasterData\Guru;
use App\Models\MasterData\PeriodePkl;
use App\Models\Kegiatan\Bimbingan;
use App\Models\Kegiatan\Monitoring;
use Illuminate\Support\Facades\File;

use App\Http\Requests\Monitoring\StoreMonitoringRequest;

class MonitoringController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $guru = Guru::where('user_id', auth()->user()->id)->first();
        $mitra = Bimbingan::where('guru_id', $guru->id)->with('mitra')->get();
        $monitoring = Monitoring::where('guru_id', $guru->id)->with('mitra')->get();

        return view('pages.frontsite.guru.monitoring', compact('guru', 'mitra', 'monitoring'));
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
    public function store(StoreMonitoringRequest $request)
    {
        $data = $request->all();

        if ($request->hasFile('foto')) {

            // add new photo path
            $data['foto'] = $request->file('foto')->store('images/guru/monitoring', 'public');
        }

        $guru = Guru::where('user_id', auth()->user()->id)->first();
        $data['guru_id'] = $guru->id;

        $periode = PeriodePkl::where('tahun', date('Y'))->where('status', '1')->first();
        $data['periode_id'] = $periode->id;


        Monitoring::create($data);
        alert()->success('Berhasil', 'Data Monitoring Berhasil Ditambahkan');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Monitoring $monitoring)
    {
        $data = Monitoring::where('id', $monitoring->id)->with('mitra')->first();

        return view('pages.frontsite.guru.monitoring-show', compact('data'));
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
    public function destroy(Monitoring $monitoring)
    {
        $monitoring->delete();

        if ($monitoring->foto && file_exists(storage_path('app/public/' . $monitoring->foto))) {
            File::delete(storage_path('app/public/' . $monitoring->foto));
        }
        alert()->success('Berhasil', 'Data anda berhasil dihapus');
        return back();
    }
}
