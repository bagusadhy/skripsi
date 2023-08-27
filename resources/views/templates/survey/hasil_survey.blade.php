<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.backsite.meta')
    <title>Hasil Survey</title>
    {{-- @include('includes.backsite.style') --}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
    </style>
    <style>
        /* @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap'); */

        body {
            font-family: 'Inter', sans-serif !important;
        }

        #survey table,
        #survey th,
        #survey td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        /* .mitra_detail {
            width: 20%;
            display: flex;
            justify-content: space-between;
            text-align: left;
        } */
    </style>
</head>

<body>


    {{-- <div class="mb-10">
        <div class="px-2 py-4 md:py-7">
            <div class="flex items-center justify-between">
                <p tabindex="0" class="focus:outline-none text-xl lg:text-2xl font-bold leading-normal text-gray-800">
                    Survey Kepuasan </p>
                <hr class="bg-black">
            </div>
        </div>
        <div class="px-5 py-2 bg-gray-200 text-sm mb-5 rounded">
            <p class="mb-3">Dengan hormat, kami menyampaikan kuesioner ini untuk mendapatkan informasi terkait
                Pelaksanaan Siswa PKL SMK Negeri 2
                Malang dengan perusahaan/ instansi yang Bapak/ Ibu/ Saudara pimpin.</p>
            <p>
                Informasi yang kami peroleh akan kami gunakan sebagai acuan dalam peningkatan hubungan kerjasama dan
                kualitas
                Pelaksanaan Siswa PKL SMK Negeri 2 Malang.
                Terima kasih kami sampaikan atas bantuan dan kerjasamanya.
            </p>
        </div>
        <div class="px-5 py-2 bg-gray-200 text-sm rounded">
            <p class="mb-3 font-bold">Petunjuk pengisian</p>
            <ul class="list-decimal list-inside mb-3">
                <li>Pilihlah angka 1-5 sesuai dengan pengalaman pelaksaan kegiatan PKL</li>
                <li>Keterangan :</li>
            </ul>
            <div class="w-full flex justify-between">
                <div class="w-full text-justify">
                    <ul class="list-inside">
                        <li>5 = Sangat Memuaskan</li>
                        <li>4 = Memuaskan</li>
                        <li>3 = Cukup Memuaskan</li>
                        <li>2 = Kurang Memuaskan</li>
                        <li>1 = Tidak Memuaskan</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <form action="{{ route('mitra.survey.store') }}" method="POST">
                @csrf
                @foreach ($survey as $data)
                    <div class="w-full px-5 py-3 rounded-xl border-2 border-gray-300 shadow-md bg-blue-100 mb-5">
                        <p>{{ $data->title }}
                        </p>
                        <div class="flex justify-center items-center gap-10 mt-10">
                            <span class="hidden md:block">Tidak Memuaskan</span>
                            <label for="" class="flex flex-col justify-center items-center">
                                <span>1</span>
                                <input type="radio" name="survey[{{ $data->id }}]" value="1" class="w-5 h-5"
                                    required>
                            </label>
                            <label for="" class="flex flex-col justify-center items-center">
                                <span>2</span>
                                <input type="radio" name="survey[{{ $data->id }}]" value="2" class="w-5 h-5"
                                    required>
                            </label>
                            <label for="" class="flex flex-col justify-center items-center">
                                <span>3</span>
                                <input type="radio" name="survey[{{ $data->id }}]" value="3" class="w-5 h-5"
                                    required>
                            </label>
                            <label for="" class="flex flex-col justify-center items-center">
                                <span>4</span>
                                <input type="radio" name="survey[{{ $data->id }}]" value="4" class="w-5 h-5"
                                    required>
                            </label>
                            <label for="" class="flex flex-col justify-center items-center">
                                <span>5</span>
                                <input type="radio" name="survey[{{ $data->id }}]" value="5" class="w-5 h-5"
                                    required>
                            </label>
                            <span class="hidden md:block">Sangat Memuaskan</span>
                        </div>
                    </div>
                @endforeach
                <label for="">
                    <span class="font-bold mb-2 block">Kritik & Saran</span>
                    <textarea name="kritik" id=""
                        class="w-full h-44 rounded-md border border-gray-300 px-5 py-3 focus:outline-none resize-none"
                        placeholder="Masukan kritik & saran" x-model="kritik" required></textarea>
                </label>
                <div class="mt-3 flex justify-end">
                    <button type="submit"
                        class="px-10 py-3 text-sm text-white rounded bg-primary hover:bg-primaryhover">Kirim
                    </button>
                </div>
            </form>
        </div>

    </div> --}}

    <!-- component -->
    <div class="mb-10">


        @foreach ($survey as $data)
            <table>
                <thead>
                    <tr>
                        <th style="width: 10%; text-align: left">Nama Mitra</th>
                        <th style="width: 1px">:</th>
                        <th style="width: 50%; text-align: left">{{ $data[0]->mitra->nama }}</th>
                    </tr>
                    <tr>
                        <th style="width: 10%; text-align: left">Bidang Usaha</th>
                        <th style="width: 1px">:</th>
                        <th style="width: 50%; text-align: left">{{ $data[0]->mitra->bidang_usaha->title }}</th>
                    </tr>
                    <tr>
                        <th style="width: 10%; text-align: left">Alamat</th>
                        <th style="width: 1px">:</th>
                        <th style="width: 50%; text-align: left">{{ $data[0]->mitra->alamat }}</th>
                    </tr>
                </thead>
            </table>

            {{-- {{ dd($data); }} --}}

            <div id="survey" style="margin-top: 10px">
                <table style="">
                    <thead>
                        <tr>
                            <th style="height: 5%">No</th>
                            <th style="height: 5%">Pertanyaan</th>
                            <th style="height: 5%">Kategori</th>
                            <th style="height: 5%">Skala</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $value)
                            <tr style="width: 100%">
                                <td style="max-height: 20%; height: 5%; text-align: center; width: 5%;">
                                    {{ $key + 1 }}</td>
                                <td style="max-height: 20%; height: 5%; width: 65%">{{ $value->survey->title }}</td>
                                <td style="max-height: 20%; height: 5%; text-align: center; width: 20%;">
                                    {{ $value->survey->kategori }}</td>
                                <td style="max-height: 20%; height: 5%; text-align: center; width: 10%;">
                                    {{ $value->skala }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div id="saran">
                <p><b>Kritik & Saran :</b><br>{{ $saran->where('mitra_id', $data[0]->mitra_id)->first()->saran ?? '-' }}</p>
            </div>

            <div style=" page-break-after: always;"></div>
        @endforeach
    </div>


    @include('includes.backsite.script')
</body>

</html>
