<?php

namespace App\Http\Controllers\Frontsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\MasterData\PeriodePkl;
class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $route = '';
        if (Auth::check()) {
            if (Auth::user()->role->id == '1') {
                $route = 'backsite.dashboard.index';
            } else if (Auth::user()->role->id == '2') {
                $route = 'guru.dashboard.index';
            } else if (Auth::user()->role->id == '3') {
                $route = 'mitra.dashboard.index';
            } else if (Auth::user()->role->id == '4') {
                $route = 'siswa.dashboard.index';
            }
        }

        $timeline = PeriodePkl::where('status', '1')->where('tahun', date('Y'))->get();


        return view('pages.frontsite.landing.index', compact('route', 'timeline'));
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
    public function store(Request $request)
    {
        //
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
