<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use App\Models\MasterData\Survey;

use App\Http\Requests\Survey\UpdateSurveyRequest;
use App\Http\Requests\Survey\StoreSurveyRequest;

class SurveyController extends Controller
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
        $data = Survey::orderBy('id', 'ASC')->get();

        // dd($data);

        return view('pages.backsite.master-data.survey.index', compact('data'));
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
    public function store(StoreSurveyRequest $request)
    {
        $data = $request->all();
        Survey::create($data);


        alert()->success('Success Message', 'Berhasil Menambahkan Data');
        return redirect(route('backsite.survey.index'));
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
    public function edit(Survey $survey)
    {
        return view('pages.backsite.master-data.survey.edit', compact('survey'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSurveyRequest $request, Survey $survey)
    {
        $data = $request->all();
        $survey->update($data);

        alert()->success('Success Message', 'Berhasil Mengubah Data');
        return redirect(route('backsite.survey.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Survey $survey)
    {
        $survey->forceDelete();

        alert()->success('Success Message', 'Berhasil Menghapus Data');
        return back();
    }
}
