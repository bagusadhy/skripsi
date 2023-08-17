<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\MasterData\Guru;
use App\Models\MasterData\Jurusan;

use Illuminate\Http\Request;
use App\Http\Requests\Guru\StoreGuruRequest;

class RegisterGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jurusan = Jurusan::all();
        return view('auth.register-guru', compact('jurusan'));
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
    public function store(StoreGuruRequest $request)
    {
        $request->validate([
            'email' => ['email', 'unique:users', 'max:255'],
        ]);

        $user = [
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 2,
        ];

        $guru = $request->all();
        unset($guru['email']);
        unset($guru['password']);


        try {
            DB::transaction(function () use ($user, $guru) {
                $create_user = User::create($user);

                $guru['user_id'] = $create_user->id;
                Guru::create($guru);
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
