<?php

namespace App\Http\Controllers\Frontsite\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\MasterData\Mitra;
use App\Models\MasterData\Siswa;
use App\Models\Kegiatan\PendaftarPkl;
use App\Models\Kegiatan\Lowongan;
use App\Models\Kegiatan\PesertaPkl;
use App\Models\MasterData\PeriodePkl;
use App\Models\Kegiatan\Bimbingan;

use App\Http\Requests\PendaftarPkl\StorePendaftarPklRequest;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $siswa = Siswa::where('user_id', auth()->user()->id)->first();

        $pendaftaran = PendaftarPkl::select('lowongan_id')->where('siswa_id', $siswa->id)->get()->toArray();
        $lowongan = Lowongan::whereNotIn('id', $pendaftaran)->with('mitra', 'mitra.bidang_usaha')->get();
        $lowongan_terdaftar = PendaftarPkl::where('siswa_id', $siswa->id)->with('lowongan', 'mitra', 'mitra.bidang_usaha')->get();

        $peserta = PesertaPkl::where('siswa_id', $siswa->id)->first();
        $pendaftaran_access = PeriodePkl::where('nama_timeline', 'pendaftaran')->where('status', '1')->first();

        return view('pages.frontsite.siswa.mitra', compact('lowongan', 'lowongan_terdaftar', 'peserta', 'pendaftaran_access'));
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
    public function store(StorePendaftarPklRequest $request)
    {
        $data = $request->all();

        $data['siswa_id'] = Siswa::where('user_id', auth()->user()->id)->first()->id;

        PendaftarPkl::create($data);
        alert()->success('Berhasil', 'Pendaftaran berhasil');
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
    public function update(Request $request, PendaftarPkl $pendaftaran)
    {

        DB::transaction(function () use ($pendaftaran) {
            PendaftarPkl::where('siswa_id', $pendaftaran->siswa_id)->update(['status' => '2']);
            $pendaftaran->update(['status' => '3']);

            $periode = PeriodePkl::where('nama_timeline', 'kegiatan')->first();
            $guru = Bimbingan::where('mitra_id', $pendaftaran->mitra_id)->first();

            $peserta = [
                'siswa_id' => $pendaftaran->siswa_id,
                'mitra_id' => $pendaftaran->mitra_id,
                'lowongan_id' => $pendaftaran->lowongan_id,
                'guru_id' => $guru->guru_id,
                'periode_id' => $periode->id
            ];

            PesertaPkl::create($peserta);
            alert()->success('Berhasil', 'Pendaftaran Diterima');
        });

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function cari_lowongan(Request $request)
    {
        $siswa = Siswa::where('user_id', auth()->user()->id)->first();

        $pendaftaran = PendaftarPkl::select('lowongan_id')->where('siswa_id', $siswa->id)->get()->toArray();
        $lowongan_terdaftar = PendaftarPkl::where('siswa_id', $siswa->id)->with('lowongan', 'mitra', 'mitra.bidang_usaha')->get();

        $peserta = PesertaPkl::where('siswa_id', $siswa->id)->first();
        $pendaftaran_access = PeriodePkl::where('nama_timeline', 'pendaftaran')->where('status', '1')->first();

        if ($request->ajax()) {
            $output = '';
            $query = $request->get('query');
            if ($query != '') {
                $lowongan = Lowongan::where('lowongan.nama', 'like', '%' . $query . '%')->whereNotIn('id', $pendaftaran)->with('mitra')->get();
            } else {
                $lowongan = Lowongan::whereNotIn('id', $pendaftaran)->with('mitra', 'mitra.bidang_usaha')->get();
            }


            $total_row = $lowongan->count();
            if ($total_row > 0) {
                foreach ($lowongan as $data) {
                    $output .= '
                    <div class="rounded-lg border-2 border-gray-100 w-full mt-5 py-10 flex flex-col md:flex-row gap-12 justify-between px-5 items-center shadow-md">
                        <div class="flex items-center gap-5 flex-col lg:flex-row justify-center w-5/6 md:px-10">';
                    if ($data->mitra->foto == null) {
                        $output .= '<div class="hidden lg:flex justify-center w-32">
                                                <img src="' . asset('assets/frontsite/building-3.jpg') . '" class="w-14" alt="">
                                            </div>';
                    } else {
                        $output .= '<div class="hidden lg:flex justify-center w-32">
                                                <img src="' . asset('storage/' . $data->mitra->foto) . '" alt="" class="w-14">
                                            </div>';
                    }

                    $output .= '
                                <div class="text-left">
                                    <h4 class="font-bold"> ' . $data->nama . '</h4>
                                    <p class="text-xs font-bold text-blue-700 mb-3">' . $data->mitra->nama . '</p>
                                    <p class="flex gap-3 items-start">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                            </svg>
                                        </span>
                                        ' . $data->mitra->alamat . '
                                    </p>
                                </div>
                        </div>';
                        if($peserta == null && $pendaftaran_access != null){
                            $output.= '<div class="w-2/6 lg:w-1/6 flex justify-center">
                                <form action="{{ route("siswa.pendaftaran.store" method="POST">';
                                    csrf_token();
                                    $output.='<input type="hidden" name="lowongan_id" value="'.$data->id.'">
                                    <input type="hidden" name="mitra_id" value="'.$data->mitra->id .'">
                                    <button type="submit"
                                        class="text-white px-10 py-3 block w-full md:w-fit text-center text-sm font-medium bg-primary hover:bg-primaryhover rounded">Daftar</button>
                                </form>
                            </div>';
                        }else{
                            $output.= '<div class="w-2/6 lg:w-1/6 flex justify-center">
                                            <div
                                                class="text-white px-10 py-3 block md:w-fit text-center text-sm font-medium bg-gray-400 cursor-not-allowed rounded">
                                                Daftar
                                            </div>
                                       </div>';
                        }

                        $output.= '</div>
                    ';
                }
            } else {
                $output = '
                 <p class="text-[#A7B0B5] mt-16 text-center">Oppss...<br>Lowongan tidak ditemukan</p>
                ';
            }
            $data = array(
                'lowongan'  => $output,
                'total_row' => $total_row,
            );
            echo json_encode($data);
        }
    }
}
