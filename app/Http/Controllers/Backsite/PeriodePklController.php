<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use App\Models\MasterData\PeriodePkl;

use Symfony\Component\HttpFoundation\Request;
use App\Http\Requests\PeriodePkl\StorePeriodePklRequest;
use App\Http\Requests\PeriodePkl\UpdatePeriodePklRequest;
use Illuminate\Support\Facades\DB;

class PeriodePklController extends Controller
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
        $data = PeriodePkl::all();

        // dd($data);

        confirmDelete();
        return view('pages.backsite.master-data.periode-pkl.index', compact('data'));
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
    public function store(StorePeriodePklRequest $request)
    {
        $data = [
            'tahun' => date('Y', strtotime($request->kegiatan)),
            'pendaftaran' => $request->pendaftaran,
            'kegiatan' => $request->kegiatan,
            'kegiatan_selesai' => $request->kegiatan_selesai,
            'status' => '1'
        ];

        $isTahunExist = PeriodePkl::where('tahun', $data['tahun'])->count();

        if ($isTahunExist > null) {
            alert()->warning('Warning', 'Tahun Periode Telah Ada');
            return redirect(route('backsite.periode.index'));
        }


        PeriodePkl::create($data);

        alert()->success('Success Message', 'Data Periode Berhasil Ditambahkan');
        return redirect(route('backsite.periode.index'));
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
    public function edit(PeriodePkl $periode)
    {
        return view('pages.backsite.master-data.periode-pkl.edit', compact('periode'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePeriodePklRequest $request, PeriodePkl $periode)
    {

        $data = [
            'tahun' => date('Y', strtotime($request->kegiatan)),
            'pendaftaran' => $request->pendaftaran,
            'kegiatan' => $request->kegiatan,
            'kegiatan_selesai' => $request->kegiatan_selesai,
            'status' => $request->status
        ];

        $isTahunExist = PeriodePkl::where('tahun', $data['tahun'])->where('id', '!=', $periode->id)->count();

        if ($isTahunExist > 0) {
            alert()->warning('Warning', 'Tahun Periode Telah Ada');
            return back();
        }

        PeriodePkl::where('id', $periode->id)->update($data);

        alert()->success('Success Message', 'Berhasil Mengubah Data');
        return redirect(route('backsite.periode.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PeriodePkl $periode)
    {
        return abort(404);
    }

    public function activated(PeriodePkl $periode)
    {
        $data = [
            'status' => 1
        ];

        $periode->update($data);

        alert()->success('Success Message', 'Berhasil Mengubah Data');
        return back();
    }
    public function disactivated(PeriodePkl $periode)
    {
        $activePeriode = PeriodePkl::where('status', 1)->count();

        if($activePeriode <= 1){
            alert()->warning('Warning', 'Tidak Bisa Menonaktifkan Periode, Karena Tidak Ada Periode Aktif Lainnya');
            return back();
        }
        $data = [
            'status' => 2
        ];

        $periode->update($data);



        alert()->success('Success Message', 'Berhasil Mengubah Data');
        return back();
    }
}
