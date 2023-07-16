<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Kegiatan\AktivitasSiswa;
use App\Models\MasterData\Siswa;

class AktivitasSiswaController extends Controller
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
        $aktivitas = AktivitasSiswa::select('siswa_id', AktivitasSiswa::raw('COUNT(presensi) as total_presensi'))->with('siswa', 'siswa.kelas', 'siswa.jurusan')->groupBy('siswa_id')->get();

        return view('pages.backsite.kegiatan.aktivitas-siswa.index', compact('aktivitas'));
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
        $aktivitas = AktivitasSiswa::where('siswa_id', $id)->paginate(5);
        return view('pages.backsite.kegiatan.aktivitas-siswa.show', compact('aktivitas'));
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
