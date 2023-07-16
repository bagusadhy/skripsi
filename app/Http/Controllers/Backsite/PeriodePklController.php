<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use App\Models\MasterData\PeriodePkl;

use Symfony\Component\HttpFoundation\Request;
use App\Http\Requests\PeriodePkl\StorePeriodePklRequest;
use App\Http\Requests\PeriodePkl\UpdatePeriodePklRequest;

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
        $data = PeriodePkl::orderBy('id', 'ASC')->get();

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
        $data = $request->all();
        PeriodePkl::create($data);

        alert()->success('Success Message', 'Berhasil Menambahkan Data');
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
        $data = $request->all();
        $periode->update($data);

        alert()->success('Success Message', 'Berhasil Mengubah Data');
        return redirect(route('backsite.periode.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PeriodePkl $periode)
    {
        $periode->forceDelete();

        alert()->success('Success Message', 'Berhasil Menghapus Data');
        return back();
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
        $data = [
            'status' => 2
        ];

        $periode->update($data);



        alert()->success('Success Message', 'Berhasil Mengubah Data');
        return back();
    }
}
