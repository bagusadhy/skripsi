<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.register-option');
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
        switch ($request->registrasi) {
            case '1':
                # code...
                return redirect(route('auth.register_siswa.index'));
            case '2':
                # code...
                return redirect(route('auth.register_guru.index'));
            case '3':
                return redirect(route('auth.register_mitra.index'));
            default:
                return back();
        }
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
