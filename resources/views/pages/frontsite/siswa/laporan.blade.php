@extends('layouts.siswa')

@section('title', 'Laporan')

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
            <div class="py-4 md:py-7">
                <div tabindex="0"
                    class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">
                    <a href="{{ route('siswa.kegiatan.index') }}" class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="px-2 py-4 md:py-7">
                <div class="flex items-center justify-between">
                    <p tabindex="0" class="focus:outline-none text-xl lg:text-2xl font-bold leading-normal text-gray-800">
                        Laporan Akhir</p>
                </div>
            </div>
            <div class="mt-10 mb-3">
                <p class="mb-3 mt-3 text-sm">Template Laporan dapat di lihat disini. Laporan hanya bisa diupload ketika
                    semua
                    absensi dan jurnal sudah terisi.</p>
                <div class="flex justify-between items-center w-full px-5 py-3 border-2 border-gray-300 rounded mb-10">
                    <div class="flex gap-3 items-center">
                        <span class="hidden md:block">
                        </span>
                        <p class="font-bold text-sm">Template Laporan Akhir</p>
                    </div>
                    <a href="{{ $template != null ? url($template->laporan) : '' }}"
                        class="block h-11 text-center px-10 py-2 rounded border border-primary hover:bg-primaryhover hover:text-white font-bold">Download</a>
                </div>

                <form action="{{ route('siswa.laporan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="laporan" class="block mb-10 cursor-pointer  ">
                            <div
                                class="w-full h-40 bg-[#F5F9FC] rounded-md border border-primary border-dashed flex justify-center flex-col items-center mt-3">
                                <div class="flex flex-col items-center" id="laporan-text">
                                    @if ($filename == null)
                                        <span>
                                            <svg width="38" height="38" viewBox="0 0 38 38" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M0.556543 18.9092C0.556543 29.0791 8.83021 37.3527 19 37.3527C29.17 37.3527 37.4435 29.079 37.4435 18.9092C37.4435 8.73925 29.17 0.465723 19 0.465723C8.83007 0.465723 0.556543 8.73939 0.556543 18.9092ZM2.32034 18.9092C2.32034 9.7123 9.80299 2.22952 19 2.22952C28.1969 2.22952 35.6797 9.71217 35.6797 18.9092C35.6797 28.1061 28.1969 35.5889 19 35.5889C9.80313 35.5889 2.32034 28.1062 2.32034 18.9092Z"
                                                    fill="#315EC3" stroke="#F9FFF9" stroke-width="0.3"
                                                    stroke-linecap="square" />
                                                <path
                                                    d="M18.6488 26.2734C18.6488 26.652 18.9559 26.9591 19.3345 26.9591C19.713 26.9591 20.0202 26.6524 20.0202 26.2734V12.3448C20.0202 11.9662 19.7131 11.6591 19.3345 11.6591C18.9558 11.6591 18.6488 11.9662 18.6488 12.3448V26.2734Z"
                                                    fill="#483EA8" stroke="#483EA8" stroke-width="0.3"
                                                    stroke-linecap="square" />
                                                <path
                                                    d="M19.3344 13.3159L15.5337 17.1165L19.3344 13.3159ZM19.3344 13.3159L23.1352 17.1166C23.2689 17.2504 23.4449 17.3174 23.62 17.3175L19.3344 13.3159ZM14.5639 17.1166C14.8317 17.3844 15.266 17.3846 15.5336 17.1166L23.6201 17.3175C23.7949 17.3174 23.971 17.2509 24.105 17.1166C24.3728 16.8487 24.3728 16.4147 24.1049 16.1469L19.8193 11.8612C19.5515 11.5934 19.1171 11.5932 18.8495 11.8612C18.8495 11.8612 18.8494 11.8613 18.8494 11.8613L14.5639 16.1469C14.296 16.4147 14.296 16.8487 14.5639 17.1166Z"
                                                    fill="#483EA8" stroke="#483EA8" stroke-width="0.3"
                                                    stroke-linecap="square" />
                                            </svg>
                                        </span>
                                        <h4 class="font-bold">Upload From Device</h4>
                                        <p class="text-xs text-gray-500">max: 10MB - pdf</p>
                                    @else
                                        <p>{{ $filename }}</p>
                                    @endif
                                </div>
                                <input type="file" class="hidden" name="laporan" id="laporan" required>
                            </div>
                        </label>
                        @if ($errors->has('laporan'))
                            <p style="font-style: bold; color: red;">{{ $errors->first('laporan') }}</p>
                        @endif
                    </div>

                    <div class="flex justify-end mt-4">
                        <button type="submit"
                            class="w-full py-3 bg-blue-700 text-white text-sm font-bold rounded-md">Upload Laporan</button>
                    </div>
                </form>
                <!-- need form when laporan akhir ready to upload -->
            </div>

        </div>
    </main>
    </div>
    </section>
@endsection

@push('after-script')
    <script>
        $(document).ready(function() {
            var laporan = document.getElementById('laporan');
            var laporanText = document.getElementById('laporan-text')
            laporan.addEventListener('change', function() {
                if (this.files.length) {
                    laporanText.innerText = this.files[0].name;
                }
            });
        });
    </script>
@endpush
