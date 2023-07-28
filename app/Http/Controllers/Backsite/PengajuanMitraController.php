<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\pengajuanMitra as MailPengajuanMitra;

use App\Models\Kegiatan\PengajuanMitra;
use App\Models\User;
use App\Models\MasterData\Mitra;

class PengajuanMitraController extends Controller
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
        $pengajuan = PengajuanMitra::with('siswa', 'siswa.kelas', 'bidang_usaha')->get();

        return view('pages.backsite.kegiatan.pengajuan-mitra.index', compact('pengajuan'));
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
    public function store(Request $request)
    {
        $data = PengajuanMitra::where('id', $request->id_pengajuan)->with('siswa', 'siswa.user')->first();

        try {
            DB::transaction(function () use ($data) {
                $user = [
                    'name' => $data->nama,
                    'email' => $data->email,
                    'password' => Hash::make($data->email),
                    'role_id' => '3'
                ];

                $user = User::create($user);

                $mitra = [
                    'user_id' => $user->id,
                    'nama' => $data->nama,
                    'bidang_usaha_id' => $data->bidang_usaha_id,
                    'kontak' => $data->kontak,
                    'alamat' => $data->alamat,
                ];

                $mitra = Mitra::create($mitra);

                $status_pengajuan = [
                    'status' => 2,
                ];

                PengajuanMitra::where('id', $data->id)->update($status_pengajuan);
            });
        } catch (\Throwable $th) {
            return back()->with('error', 'Terjadi kesalahan');
        }

        $maildata = [
            'nama_siswa' => $data->siswa->nama,
            'nama_perusahaan' => $data->nama,
            'kontak' => $data->kontak,
            'alamat' => $data->alamat,
            'markdown' => 'emails.pengajuan-mitra'
        ];

        Mail::to($data->siswa->user->email)->send(new MailPengajuanMitra($maildata));

        alert()->success('Berhasil', 'Pengajuan mitra diterima');
        return redirect()->route('backsite.pengajuan_mitra.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(PengajuanMitra $pengajuan)
    {
        $pengajuan->with('siswa', 'bidang_usaha');

        confirmDelete();
        return view('pages.backsite.kegiatan.pengajuan-mitra.show', compact('pengajuan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PengajuanMitra $pengajuan)
    {
        $status = [
            'status' => 3,
        ];
        $data = PengajuanMitra::where('id', $request->id_pengajuan)->with('siswa', 'siswa.user')->first();

        $maildata = [
            'nama_siswa' => $data->siswa->nama,
            'nama_perusahaan' => $data->nama,
            'kontak' => $data->kontak,
            'alamat' => $data->alamat,
            'markdown' => 'emails.pengajuan-mitra-tolak'
        ];


        $pengajuan->update($status);
        Mail::to($data->siswa->user->email)->send(new MailPengajuanMitra($maildata));

        alert()->success('Berhasil', 'Pengajuan mitra telah ditolak');
        return redirect()->route('backsite.pengajuan_mitra.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return abort(404);
    }

    public function terima(string $id)
    {
        return abort(404);
    }
}
