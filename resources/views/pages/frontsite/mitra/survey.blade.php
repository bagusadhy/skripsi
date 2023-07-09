@extends('layouts.mitra')

@section('title', 'Survey')

@section('content')
    <main class="basis-10/12 bg-white min-h-fit px-10 py-5  overflow-x-hidden">

        @if ($errors->any())
            <div class="mb-3 hidden w-full items-center rounded-lg bg-danger-100 px-6 py-5 text-base text-warning-800 data-[te-alert-show]:inline-flex"
                role="alert" data-te-alert-init data-te-alert-show>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button"
                    class="ml-auto box-content rounded-none border-none p-1 text-warning-900 opacity-50 hover:text-warning-900 hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                    data-te-alert-dismiss aria-label="Close">
                    <span
                        class="w-[1em] focus:opacity-100 disabled:pointer-events-none disabled:select-none disabled:opacity-25 [&.disabled]:pointer-events-none [&.disabled]:select-none [&.disabled]:opacity-25">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
                            <path fill-rule="evenodd"
                                d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                </button>
            </div>
        @endif

        <!-- component -->
        <div class="mb-10">
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
                                <span>Tidak Memuaskan</span>
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
                                <span>Sangat Memuaskan</span>
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

        </div>
    </main>
    </div>
    </section>
@endsection
