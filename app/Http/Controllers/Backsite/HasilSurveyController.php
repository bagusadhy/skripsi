<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\MasterData\Survey;
use App\Models\Kegiatan\HasilSurvey;
use App\Models\Kegiatan\Saran;
use Barryvdh\DomPDF\Facade\Pdf;
use Spatie\Browsershot\Browsershot;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;

class HasilSurveyController extends Controller
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
        $query = HasilSurvey::select('survey_id', HasilSurvey::raw('AVG(skala) as rata_rata'))->with('survey')->groupBy('survey_id')->get();

        $label = [];
        $dataset = [];
        foreach ($query as $value) {

            array_push($dataset, $value->rata_rata);
            array_push($label, $value->survey->kategori);
        }

        $labels = json_encode($label);
        $datasets = json_encode($dataset);


        $saran = Saran::paginate(5);

        return view('pages.backsite.kegiatan.hasil-survey.index', compact('labels', 'datasets', 'saran'));
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

    public function export()
    {

        $survey = HasilSurvey::with('survey', 'mitra', 'mitra.bidang_usaha')->get()->groupBy('mitra_id');

        $saran = Saran::with('mitra')->get();
        $pdf = Pdf::loadView('templates.survey.hasil_survey', compact('survey', 'saran'));
        return $pdf->stream();
    }
}
