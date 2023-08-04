<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Siswa\StoreSiswaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\MasterData\Siswa;
use App\Models\MasterData\Jurusan;
use App\Models\MasterData\Kelas;
use App\Models\MasterData\PeriodePkl;

class RegisterSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jurusan = Jurusan::all();
        $kelas = Kelas::all();
        return view('auth.register-siswa', compact('jurusan', 'kelas'));
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
    public function store(StoreSiswaRequest $request)
    {
        $validatedEmail = $request->validate([
            'email' => ['email', 'unique:users', 'max:255'],
        ]);

        $user = [
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 4,
        ];

        $siswa = $request->all();
        unset($siswa['email']);
        unset($siswa['password']);

        $periode = PeriodePkl::where('tahun', date('Y'))->where('status', '1')->first();
        $siswa['periode_id'] = $periode->id;

        try {
            DB::transaction(function () use ($user, $siswa) {
                $create_user = User::create($user);

                $siswa['user_id'] = $create_user->id;
                Siswa::create($siswa);
            });
        } catch (\Throwable $th) {
           return back();
        }

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
