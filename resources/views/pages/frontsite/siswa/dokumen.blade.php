@extends('layouts.siswa')

@section('title', 'Dokumen')

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
                        Dokumen Persyaratan</p>
                    <hr class="bg-black">
                </div>
            </div>

            <div class="mt-5 w-full">
                <form action="{{ route('siswa.dokumen.store') }}" method="POST" enctype="multipart/form-data"
                    x-data="{ parent: '', school: '' }">
                    @csrf
                    <input type="hidden" name="siswa_id" value="{{ $siswa->id }}">
                    <div class="mb-10">
                        <p class="mb-2">Surat Izin Orang Tua</p>
                        <label for="parentFile" class="w-full cursor-pointer">
                            <div
                                class="border-dashed border-2 border-gray-300 rounded px-5 py-2 flex flex-col md:flex-row items-center justify-between overflow-hidden">
                                <div class="flex gap-3 items-center justify-center md:justify-start w-full">
                                    <span class="hidden md:block">
                                        <svg width="60" height="60" viewBox="0 0 75 75" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="75" height="75" rx="10" fill="#FDDBDB" />
                                            <path
                                                d="M51.1111 20H23.8889C21.75 20 20 21.75 20 23.8889V51.1111C20 53.25 21.75 55 23.8889 55H51.1111C53.25 55 55 53.25 55 51.1111V23.8889C55 21.75 53.25 20 51.1111 20ZM32.6389 36.5278C32.6389 38.0833 31.2778 39.4444 29.7222 39.4444H27.7778V43.3333H24.8611V31.6667H29.7222C31.2778 31.6667 32.6389 33.0278 32.6389 34.5833V36.5278ZM42.3611 40.4167C42.3611 41.9722 41 43.3333 39.4444 43.3333H34.5833V31.6667H39.4444C41 31.6667 42.3611 33.0278 42.3611 34.5833V40.4167ZM50.1389 34.5833H47.2222V36.5278H50.1389V39.4444H47.2222V43.3333H44.3056V31.6667H50.1389V34.5833ZM37.5 34.5833H39.4444V40.4167H37.5V34.5833ZM27.7778 34.5833H29.7222V36.5278H27.7778V34.5833Z"
                                                fill="#AA2D2D" />
                                        </svg>
                                    </span>

                                    @if ($dokumen == null)
                                        <p id="parentText" class="font-semibold text-sm text-center">Upload File PDF. Max
                                            Size 2
                                            MB</p>
                                    @else
                                        <a href="{{ url($dokumen->surat_izin_ortu) }}" id="parentText" target="__blank"
                                            class="text-sm text-center text-blue-500">Surat Izin Orang Tua</a>
                                    @endif
                                </div>
                                <input type="file"
                                    class="file:rounded file:px-10 file:py-2 file:bg-transparent file:border file:border-blue-400 file:text-blue-400 text-transparent md:-mr-24 -mr-[185px] mt-5 md:mt-0 focus:outline-none"
                                    name="surat_izin_ortu" id="parentFile" x-model="parent">
                            </div>
                        </label>
                    </div>
                    <div class="">
                        <p class="mb-2">Surat Pernyataan Siswa</p>
                        <label for="schoolFile" class="w-full cursor-pointer">
                            <div
                                class="border-dashed border-2 border-gray-300 rounded px-5 py-2 flex flex-col md:flex-row items-center justify-between overflow-hidden">
                                <div class="flex gap-3 items-center justify-center md:justify-start w-full">
                                    <span class="hidden md:block">
                                        <svg width="60" height="60" viewBox="0 0 75 75" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="75" height="75" rx="10" fill="#FDDBDB" />
                                            <path
                                                d="M51.1111 20H23.8889C21.75 20 20 21.75 20 23.8889V51.1111C20 53.25 21.75 55 23.8889 55H51.1111C53.25 55 55 53.25 55 51.1111V23.8889C55 21.75 53.25 20 51.1111 20ZM32.6389 36.5278C32.6389 38.0833 31.2778 39.4444 29.7222 39.4444H27.7778V43.3333H24.8611V31.6667H29.7222C31.2778 31.6667 32.6389 33.0278 32.6389 34.5833V36.5278ZM42.3611 40.4167C42.3611 41.9722 41 43.3333 39.4444 43.3333H34.5833V31.6667H39.4444C41 31.6667 42.3611 33.0278 42.3611 34.5833V40.4167ZM50.1389 34.5833H47.2222V36.5278H50.1389V39.4444H47.2222V43.3333H44.3056V31.6667H50.1389V34.5833ZM37.5 34.5833H39.4444V40.4167H37.5V34.5833ZM27.7778 34.5833H29.7222V36.5278H27.7778V34.5833Z"
                                                fill="#AA2D2D" />
                                        </svg>
                                    </span>

                                    @if ($dokumen == null)
                                        <p id="schoolText" class="font-semibold text-sm">Upload File PDF. Max Size 2 MB</p>
                                    @else
                                        <a href="{{ url($dokumen->surat_pernyataan_siswa) }}" target="__blank" id="schoolText"
                                            class="text-sm text-center text-blue-500">Surat Penyataan Siswa</a>
                                    @endif

                                </div>
                                <input type="file"
                                    class="cursor-pointer file:rounded file:px-10 file:py-2 file:bg-transparent file:border file:border-blue-400 file:text-blue-400 text-transparent md:-mr-24 -mr-[185px] mt-5 md:mt-0 focus:outline-none"
                                    name="surat_pernyataan_siswa" id="schoolFile" x-model="school">
                            </div>
                        </label>
                    </div>
                    <div class="flex justify-center lg:justify-end mt-10">
                        <div class="px-10 py-3 rounded bg-gray-500 text-sm text-white font-medium cursor-not-allowed"
                            x-show="!parent.length || !school.length">
                            Simpan Dokumen
                        </div>
                        <button type="submit" class="px-10 py-3 rounded bg-primary text-sm text-white font-medium"
                            x-show="parent.length && school.length">
                            Simpan Dokumen
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </main>
    </div>
    </section>
@endsection

@push('after-script')
    <script>
        var parentFile = document.getElementById('parentFile');
        var schoolFile = document.getElementById('schoolFile');
        var parentText = document.getElementById('parentText')
        var schoolText = document.getElementById('schoolText')

        parentFile.addEventListener('change', function() {
            if (this.files.length) {
                parentText.innerText = this.files[0].name;
            }
        });

        schoolFile.addEventListener('change', function() {
            if (this.files.length) {
                schoolText.innerText = this.files[0].name;
            }
        });
    </script>
@endpush
