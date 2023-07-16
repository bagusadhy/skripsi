<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use App\Models\MasterData\BidangUsaha;

use App\Http\Requests\BidangUsaha\StoreBidangUsahaRequest;
use App\Http\Requests\BidangUsaha\UpdateBidangUsahaRequest;

class BidangUsahaController extends Controller
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
        $data = BidangUsaha::orderBy('id', 'ASC')->get();

        confirmDelete();
        return view('pages.backsite.master-data.bidang-usaha.index', compact('data'));
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
    public function store(StoreBidangUsahaRequest $request)
    {
        $data = $request->all();
        BidangUsaha::create($data);

        alert()->success('Success Message', 'Berhasil Menambahkan Data');
        return redirect(route('backsite.bidang_usaha.index'));
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
    public function edit(BidangUsaha $bidangUsaha)
    {
        return view('pages.backsite.master-data.bidang-usaha.edit', compact('bidangUsaha'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBidangUsahaRequest $request, BidangUsaha $bidangUsaha)
    {
        $data = $request->all();
        $bidangUsaha->update($data);

        alert()->success('Success Message', 'Berhasil Mengubah Data');
        return redirect(route('backsite.bidang_usaha.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BidangUsaha $bidangUsaha)
    {
        $bidangUsaha->delete();

        alert()->success('Success Message', 'Berhasil Menghapus Data');
        return back();
    }
}
