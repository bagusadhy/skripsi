<?php

namespace App\Http\Controllers\Frontsite\Mitra;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\MasterData\Mitra;
use App\Models\Kegiatan\Saran;
use App\Models\MasterData\Survey;
use App\Models\Kegiatan\HasilSurvey;
use App\Models\MasterData\PeriodePkl;


class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $survey = Survey::all();
        return view('pages.frontsite.mitra.survey', compact('survey'));
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
        $mitra = Mitra::where('user_id', auth()->user()->id)->first();
        $isExist = HasilSurvey::where('mitra_id', $mitra->id)->count();

        if ($isExist) {
            alert()->warning('Peringatan', 'Anda Telah Mengisi Survey');
            return back();
        }

        $survey = $request->all();

        $periode = PeriodePkl::where('tahun', date('Y'))->where('status', '1')->first();

        foreach ($survey['survey'] as $key => $value) {
            $data = [
                'survey_id' => $key,
                'mitra_id' => $mitra->id,
                'periode_pkl' => $periode->id,
                'skala' => $value
            ];

            HasilSurvey::create($data);
        }

        $saran = [
            'mitra_id' => $mitra->id,
            'saran' => $survey['kritik']
        ];

        Saran::create($saran);

        alert()->success('Berhasil', 'Survey Berhasil Disimpan');
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
