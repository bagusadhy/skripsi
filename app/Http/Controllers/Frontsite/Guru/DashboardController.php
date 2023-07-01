<?php

namespace App\Http\Controllers\Frontsite\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\MasterData\Guru;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guru = Guru::where('user_id', Auth::user()->id)->first();
        $complete = is_null($guru->jenis_kelamin) || is_null($guru->kontak) || is_null($guru->alamat) || is_null($guru->foto);

        // dd($complete);
        return view('pages.frontsite.guru.index', compact('complete'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return abort(405);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return abort(405);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return abort(405);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return abort(405);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return abort(405);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return abort(405);
    }
}
