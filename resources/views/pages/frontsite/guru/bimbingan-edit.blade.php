@extends('layouts.guru')

@section('title', 'Bimbingan')

@section('content')
    <main class="basis-10/12 bg-white min-h-screen px-10 py-5  overflow-x-hidden">

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
        <div class="sm:px-6 mb-10">
            <div class="py-4 md:py-7">
                <div tabindex="0"
                    class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">
                    <a href="{{ route('guru.mitra.index') }}" class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                        </svg>
                    </a>
                </div>
            </div>

            <h1 class="font-bold text-2xl mb-3 mt-5">Detail Mitra</h1>
            <hr class="bg-black">

            <div class="mt-5">
                <div class="py-2">
                    <ul class="list-none w-34">
                        <li class="mb-5 flex">
                            <div class="w-32 md:w-44 flex justify-between"><span>Nama Perusahaan</span>
                                <pre class="block">: </pre>
                            </div>
                            <div>
                                <p>{{ $mitra->nama }}</p>
                            </div>
                        </li>
                        <li class="mb-5 flex">
                            <div class="w-32 md:w-44 flex justify-between"><span>Bidang Usaha</span>
                                <pre class="block">: </pre>
                            </div>
                            <div>
                                <p>{{ $mitra->bidang_usaha->title }}</p>
                            </div>
                        </li>
                        <li class="mb-5 flex">
                            <div class="w-32 md:w-44 flex justify-between"><span>Nama Pimpinan</span>
                                <pre class="block">: </pre>
                            </div>
                            <div>
                                <p>{{ $mitra->nama_pimpinan }}</p>
                            </div>
                        </li>
                        <li class="mb-5 flex">
                            <div class="w-32 md:w-44 flex justify-between"><span>Nama Pembimbing</span>
                                <pre class="block">: </pre>
                            </div>
                            <div>
                                <p>{{ $mitra->nama_pembimbing }}</p>
                            </div>
                        </li>
                        <li class="mb-5 flex">
                            <div class="w-32 md:w-44 flex justify-between"><span>Kontak</span>
                                <pre class="block">: </pre>
                            </div>
                            <div>
                                <p>{{ $mitra->kontak }}</p>
                            </div>
                        </li>
                        <li class="mb-5 flex">
                            <div class="w-32 md:w-44 flex justify-between"><span>Alamat</span>
                                <pre class="block">: </pre>
                            </div>
                            <div>
                                <p>{{ $mitra->alamat }}</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <hr>
                <div class="mt-5">
                    <h1 class="font-bold text-xl mb-3">Peserta PKL</h1>
                    <hr>
                    <div class="py-2">
                        <ul class="list-disc">
                            @foreach ($peserta as $dta)
                                <li class="ml-4">{{ $data->siswa->nama }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
    </div>
    </section>
@endsection
