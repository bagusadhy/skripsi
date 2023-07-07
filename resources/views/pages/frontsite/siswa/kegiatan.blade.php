@extends('layouts.siswa')

@section('title', 'Kegiatan')

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
                        Kegiatan</p>
                </div>
            </div>


            <div class="mt-5 w-full">
                <div class="mb-3">
                    <h4 class="font-bold ">{{ $peserta->mitra->nama }}</h4>
                    <p class="flex gap-3 items-center text-gray-500">
                        <span>
                            <svg width="14" height="16" viewBox="0 0 26 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.9999 17.1429C11.8312 17.1429 10.6887 16.8077 9.717 16.1798C8.74525 15.5519 7.98787 14.6595 7.54063 13.6153C7.09338 12.5712 6.97636 11.4222 7.20436 10.3138C7.43237 9.20532 7.99515 8.18713 8.82155 7.38797C9.64795 6.58882 10.7009 6.04458 11.8471 5.8241C12.9934 5.60361 14.1815 5.71677 15.2612 6.14927C16.341 6.58177 17.2638 7.31419 17.9131 8.2539C18.5624 9.19361 18.909 10.2984 18.909 11.4286C18.9071 12.9435 18.284 14.3959 17.1762 15.4672C16.0684 16.5384 14.5665 17.1411 12.9999 17.1429ZM12.9999 8.00001C12.2987 8.00001 11.6132 8.20109 11.0302 8.57783C10.4471 8.95457 9.99269 9.49004 9.72434 10.1165C9.45599 10.743 9.38578 11.4324 9.52258 12.0975C9.65938 12.7625 9.99706 13.3735 10.4929 13.8529C10.9887 14.3324 11.6205 14.659 12.3082 14.7913C12.996 14.9236 13.7088 14.8557 14.3567 14.5962C15.0045 14.3367 15.5583 13.8972 15.9478 13.3334C16.3374 12.7696 16.5454 12.1067 16.5454 11.4286C16.5444 10.5195 16.1706 9.648 15.5059 9.00522C14.8412 8.36243 13.9399 8.00092 12.9999 8.00001Z"
                                    fill="#848484" />
                                <path
                                    d="M13 32L3.03019 20.6297C2.89166 20.459 2.75457 20.2872 2.61892 20.1143C0.915899 17.9449 -0.00411413 15.2951 1.38307e-05 12.5714C1.38307e-05 9.23728 1.36965 6.03969 3.80762 3.68209C6.24559 1.32449 9.55219 0 13 0C16.4478 0 19.7544 1.32449 22.1924 3.68209C24.6304 6.03969 26 9.23728 26 12.5714C26.0041 15.2939 25.0845 17.9425 23.3823 20.1109L23.3811 20.1143C23.3811 20.1143 23.0265 20.5646 22.9734 20.6251L13 32ZM4.5051 18.7371C4.50746 18.7371 4.78165 19.0891 4.84428 19.1646L13 28.4663L21.1664 19.152C21.2184 19.0891 21.4949 18.7349 21.4961 18.7337C22.8873 16.9613 23.6391 14.7966 23.6364 12.5714C23.6364 9.84349 22.5157 7.22728 20.521 5.29833C18.5263 3.36938 15.8209 2.28571 13 2.28571C10.1791 2.28571 7.47367 3.36938 5.47896 5.29833C3.48426 7.22728 2.36365 9.84349 2.36365 12.5714C2.36117 14.798 3.11384 16.9639 4.50628 18.7371H4.5051Z"
                                    fill="#848484" />
                            </svg>
                        </span>
                        {{ $peserta->mitra->alamat }}
                    </p>
                </div>
                <hr>

                <div class="mt-10 mb-10">
                    <h4 class="font-bold text-xl mb-2">Laporan Akhir</h4>
                    <hr>
                    <p class="mb-3 mt-3">Laporan akhir dapat diupload setelah semua presensi dan jurnal harian telah terisi
                    </p>
                    @if ($access_laporan < 4)
                        <div
                            class="flex justify-center items-center w-full py-3 bg-gray-500 cursor-not-allowed text-white rounded text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                            </svg>
                            Upload Laporan Akhir
                        </div>
                    @else
                        <a href="{{ route('siswa.laporan.index') }}"
                            class="flex justify-center items-center w-full py-3 bg-primary hover:bg-primaryhover text-white rounded text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                            </svg>
                            Upload Laporan Akhir
                        </a>
                    @endif
                </div>
                <div class="mt-10 mb-10">
                    <h4 class="font-bold text-xl mb-2">Presensi & Jurnal Harian</h4>
                    <hr>
                    <p class="mb-3 mt-3">Segera mengisi presensi dan jurnal harian</p>
                    <a href="{{ route('siswa.kegiatan.create') }}"
                        class="flex justify-center items-center w-full py-3 bg-primary hover:bg-primaryhover text-white rounded text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" />
                        </svg>
                        Absensi & Jurnal
                    </a>
                </div>
                @foreach ($aktivitas as $data)
                    <div id="accordionExample">
                        <div class="mb-3 border border-neutral-200 bg-white dark:border-neutral-600 dark:bg-neutral-800">
                            <h2 class="mb-0" id="heading{{ $data->id }}">
                                <button
                                    class="group relative flex w-full items-center rounded-none border-0 bg-white px-5 py-4 text-left font-bold text-base text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none dark:bg-neutral-800 dark:text-white [&:not([data-te-collapse-collapsed])]:bg-white [&:not([data-te-collapse-collapsed])]:text-primary [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)] dark:[&:not([data-te-collapse-collapsed])]:bg-neutral-800 dark:[&:not([data-te-collapse-collapsed])]:text-primary-400 dark:[&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(75,85,99)]"
                                    type="button" data-te-collapse-init data-te-collapse-collapsed
                                    data-te-target="#collapse{{ $data->id }}" aria-expanded="false"
                                    aria-controls="collapse{{ $data->id }}">
                                    {{ date('D, d M Y', strtotime($data->tanggal)) }}
                                    <span
                                        class="-mr-1 ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:mr-0 group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none dark:fill-blue-300 dark:group-[[data-te-collapse-collapsed]]:fill-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </span>
                                </button>
                            </h2>
                            <div id="collapse{{ $data->id }}" class="!visible hidden p-5" data-te-collapse-item
                                aria-labelledby="heading{{ $data->id }}" data-te-parent="#accordionExample">
                                <div class="flex justify-between mb-3">
                                    @switch($data->presensi)
                                        @case('1')
                                            <p class="text-sm text-green-500 font-bold">Hadir</p>
                                        @break

                                        @case('2')
                                            <p class="text-sm text-yellow-500 font-bold">Izin</p>
                                        @break

                                        @case('3')
                                            <p class="text-sm text-red-500 font-bold">Tidak Hadir</p>
                                        @break

                                        @default
                                    @endswitch
                                    <a data-fancybox="gallery" data-src="{{ asset('storage/' . $data->foto) }}"
                                        class="text-blue-500 cursor-pointer text-sm font-bold">Bukti Kehadiran</a>
                                </div>
                                <p class="flex gap-3 items-center text-justify">
                                    {{ $data->jurnal }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="mt-5 px-10">
                    {{ $aktivitas->links('pagination::tailwind') }}
                </div>
            </div>
        </div>
    </main>
    </div>
    </section>
@endsection

@push('after-style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
@endpush

@push('after-script')
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script>
        // fancybox
        Fancybox.bind('[data-fancybox="gallery"]', {
            infinite: false
        });
    </script>
@endpush
