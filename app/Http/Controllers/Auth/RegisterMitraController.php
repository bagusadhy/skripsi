<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\MasterData\Mitra;
use App\Models\User;
use App\Models\MasterData\BidangUsaha;

use Illuminate\Http\Request;
use App\Http\Requests\Mitra\StoreMitraRequest;

class RegisterMitraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bidang_usaha = BidangUsaha::all();

        return view('auth.register-mitra', compact('bidang_usaha'));
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
    public function store(StoreMitraRequest $request)
    {
        $request->validate([
            'email' => ['email', 'unique:users', 'max:255'],
        ]);

        $user = [
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 3,
        ];

        $mitra = $request->all();
        unset($mitra['email']);
        unset($mitra['password']);


        try {
            DB::transaction(function () use ($user, $mitra) {
                $create_user = User::create($user);

                $mitra['user_id'] = $create_user->id;
                Mitra::create($mitra);
            });
        } catch (\Throwable $th) {
            toast('Registrasi Gagal', 'error');
            return back();
        }

        toast('Registrasi Berhasil', 'success');
        return redirect(route('login'));
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
