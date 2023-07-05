@extends('layouts.siswa')

@section('title', 'Mitra')

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
                        Pendaftaran</p>
                    <hr class="bg-black">
                </div>
            </div>

            <!--Tabs navigation-->
            <ul class="mb-5 flex list-none flex-row flex-wrap border-b-0 pl-0" role="tablist" data-te-nav-ref>
                <li role="presentation" class="flex-grow basis-0 text-center">
                    <a href="#tabs-home02"
                        class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-bold uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                        data-te-toggle="pill" data-te-target="#tabs-home02" data-te-nav-active role="tab"
                        aria-controls="tabs-home02" aria-selected="true">Daftar Mitra</a>
                </li>
                <li role="presentation" class="flex-grow basis-0 text-center">
                    <a href="#tabs-profile02"
                        class="focus:border-transparen my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-bold uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                        data-te-toggle="pill" data-te-target="#tabs-profile02" role="tab" aria-controls="tabs-profile02"
                        aria-selected="false">Status</a>
                </li>
            </ul>

            <!--Tabs content-->
            <div class="mb-6">
                {{-- daftar mitra --}}
                <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                    id="tabs-home02" role="tabpanel" aria-labelledby="tabs-home-tab02" data-te-tab-active>
                    @foreach ($mitra as $data)
                        <div
                            class="rounded-lg border-2 border-gray-100 w-full mt-5 py-10 flex flex-col md:flex-row gap-12 justify-between px-5 items-center shadow-md">
                            <div class="flex items-center gap-5 flex-col lg:flex-row justify-center w-5/6">
                                @if ($data->foto == null)
                                    <div class="hidden lg:flex justify-center w-32">
                                        <img src="{{ asset('assets/frontsite/building-3.jpg') }}" alt=""
                                            class="w-14">
                                    </div>
                                @else
                                    <div class="hidden lg:flex justify-center w-32">
                                        <img src="{{ asset('storage/' . $data->foto) }}" alt="" class="w-14">
                                    </div>
                                @endif
                                <div class="text-center md:text-left">
                                    <h4 class="font-bold">{{ $data->nama }}</h4>
                                    <p class="text-xs font-bold text-blue-700 mb-3">{{ $data->bidang_usaha->title }}</p>
                                    <p class="flex gap-3 items-center text-justify">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                            </svg>
                                        </span>
                                        {{ $data->alamat }}
                                    </p>
                                </div>
                            </div>

                            <div class="w-2/6 lg:w-1/6 flex justify-end">
                                {{-- <a href="{{ route('siswa.pendaftaran.store') }}"
                                    class="text-white px-10 py-3 block w-full md:w-fit text-center text-sm font-medium bg-primary hover:bg-primaryhover rounded"
                                    onclick="event.preventDefault(); document.getElementById('form-daftar-{{ $data->id }}').submit()">Daftar

                                </a> --}}
                                <form action="{{ route('siswa.pendaftaran.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="mitra_id" value="{{ $data->id }}">
                                    <button
                                        class="text-white px-10 py-3 block w-full md:w-fit text-center text-sm font-medium bg-primary hover:bg-primaryhover rounded">Daftar</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- mitra terdaftar --}}
                <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                    id="tabs-profile02" role="tabpanel" aria-labelledby="tabs-profile-tab02">
                    @foreach ($mitra_terdaftar as $data)
                        <div
                            class="rounded-lg border-2 border-gray-100 w-full mt-5 py-10 flex flex-col md:flex-row gap-12 justify-between px-5 items-center shadow-md">
                            <div class="flex items-center gap-5 flex-col lg:flex-row justify-center w-5/6">
                                @if ($data->mitra->foto == null)
                                    <div class="hidden lg:flex justify-center w-32">
                                        <img src="{{ asset('assets/frontsite/building-3.jpg') }}" alt=""
                                            class="w-14">
                                    </div>
                                @else
                                    <div class="hidden lg:flex justify-center w-32">
                                        <img src="{{ asset('storage/' . $data->mitra->foto) }}" alt=""
                                            class="w-14">
                                    </div>
                                @endif
                                <div class="text-center md:text-left">
                                    <h4 class="font-bold">{{ $data->mitra->nama }}</h4>
                                    <p class="text-xs font-bold text-blue-700 mb-3">{{ $data->mitra->bidang_usaha->title }}
                                    </p>
                                    <p class="flex gap-3 items-center text-justify">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                            </svg>
                                        </span>
                                        {{ $data->mitra->alamat }}
                                    </p>
                                </div>
                            </div>

                            <div class="w-2/6 lg:w-1/6 flex justify-end">
                                @switch($data->status)
                                    @case('0')
                                        <p class="text-sm font-bold text-green-300">Terdaftar</p>
                                    @break

                                    @case('1')
                                        <p class="text-sm font-bold text-green-300">Diterima</p>
                                    @break

                                    @case('2')
                                        <p class="text-sm font-bold text-red-300">Ditolak</p>
                                    @break

                                    @case('3')
                                        <p class="text-sm font-bold text-blue-300">Aktif</p>
                                    @break

                                    @default
                                @endswitch
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


        </div>
    </main>
    </div>
    </section>
@endsection
