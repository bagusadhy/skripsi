<?php

namespace App\Http\Controllers\Frontsite\Guru;

use Illuminate\Http\Request;
use App\Models\MasterData\Guru;
use App\Models\MasterData\Jurusan;
use App\Models\User;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Guru\UpdateGuruRequest;

class ProfileGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guru = Guru::where('user_id', Auth::user()->id)->first();
        $jurusan = Jurusan::all();

        return view('pages.frontsite.guru.profile', compact('guru', 'jurusan'));
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
    public function update(UpdateGuruRequest $request, Guru $profile)
    {

        $data = $request->all();

        if ($request->hasFile('foto')) {

            // delete old photo from storage
            if ($profile->foto != null) {
                File::delete('storage/' . $profile->foto);
            }

            // add new photo path
            $data['foto'] = $request->file('foto')->store('images/guru', 'public');
        }

        unset($data['_token']);
        unset($data['_method']);


        $user = new User;
        $user->where('id', $profile->user_id)->update(['profile_photo_path' => $data['foto']]);
        $profile->update($data);

        alert()->success('Berhasil', 'Data anda berhasil diupdate');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return abort(405);
    }
}
