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
            <div class="px-2 py-4 md:py-7">
                <div class="flex items-center justify-between">
                    <p tabindex="0" class="focus:outline-none text-xl lg:text-2xl font-bold leading-normal text-gray-800">
                        Mitra Terhubung</p>
                    <hr class="bg-black">
                </div>
            </div>

            @foreach ($bimbingan as $data)
                <div
                    class="rounded-lg border-2 border-gray-100 w-full mt-5 py-10 flex flex-col md:flex-row gap-12 justify-between px-5 items-center shadow-md">
                    <div class="flex items-center gap-5 flex-col lg:flex-row justify-center w-full">
                        @if ($data->mitra->foto == null)
                        <div class="hidden lg:flex justify-center w-24 -ml-24">
                            <img src="{{ asset('assets/frontsite/building-3.jpg') }}" alt="" class="w-14">
                        </div>
                        @else
                        <div class="hidden lg:flex justify-center w-24 -ml-24">
                            <img src="{{ asset('storage/' . $data->mitra->foto) }}" alt="" class="w-14">
                        </div>
                        @endif
                        <div class="text-center lg:text-left">
                            <h4 class="font-bold mb-3">{{ $data->mitra->nama }}</h4>
                            <p class="flex gap-3 items-center">
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

                    <div class="w-full flex justify-end">
                        <a href="{{ route('guru.mitra.show', $data->mitra->id) }}"
                            class="text-white px-3 py-3 block w-full md:w-fit text-center text-sm font-medium bg-primary hover:bg-primaryhover rounded">Detail
                            Mitra</a>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
    </div>
    </section>
@endsection
