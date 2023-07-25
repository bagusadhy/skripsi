<?php

namespace App\Http\Controllers\Frontsite\Mitra;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use App\Models\MasterData\Mitra;
use App\Models\MasterData\BidangUsaha;
use App\Models\User;

use App\Http\Requests\Mitra\UpdateMitraRequest;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mitra = Mitra::where('user_id', auth()->user()->id)->first();
        $bidang_usaha = BidangUsaha::all();


        return view('pages.frontsite.mitra.profile', compact('mitra', 'bidang_usaha'));
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
    public function update(UpdateMitraRequest $request, Mitra $profile)
    {
        $data = $request->all();

        if ($request->hasFile('foto')) {

            // delete old photo from storage
            if ($profile->foto != null) {
                File::delete('storage/' . $profile->foto);
            }

            // add new photo path
            $data['foto'] = $request->file('foto')->store('images/mitra', 'public');

            $user = new User;
            $user->where('id', $profile->user_id)->update(['profile_photo_path' => $data['foto']]);
        }


        $profile->update($data);

        alert()->success('Berhasil', 'Data anda berhasil diupdate');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
