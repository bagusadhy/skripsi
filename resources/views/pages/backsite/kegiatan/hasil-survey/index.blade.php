@extends('layouts.app')

@section('title', 'Hasil Survey')

@section('content')
    <main class="basis-10/12 bg-white min-h-screen py-5 overflow-x-hidden">

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
            <div class="px-4 py-4 md:py-7">
                <div class="flex items-center justify-between">
                    <p tabindex="0"
                        class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">
                        Hasil Survey Kepuasan Mitra</p>
                </div>
            </div>

            <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 shadow-md rounded-lg">
                <div class="overflow-hidden">
                    <canvas data-te-chart="bar" data-te-dataset-label="rata-rata hasil survey"
                        data-te-labels="{{ $labels }}" data-te-dataset-data="{{ $datasets }}"
                        data-te-dark-ticks-color="#ff0000" data-te-dark-grid-lines-color="#ffff00"
                        data-te-dark-label-color="#ff00ff">
                    </canvas>
                </div>
            </div>
        </div>

        <div class="mt-10 sm:px-6 mb-10">
            <p class="px-4 py-4 md:py-7 focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800 mb-3">Kritik & Saran</p>
            @forelse ($saran as $data_saran)
                <div class="w-full px-10 py-5 shadow-md mb-3 rounded">{{ $data_saran->saran }}</div>
            @empty
            @endforelse
        </div>

        <div class="mt-5 px-10">
            {{ $saran->links('pagination::tailwind') }}
        </div>
    </main>
    </div>
    </section>
@endsection
