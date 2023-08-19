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
                        Presensi & Jurnal Harian</p>
                </div>
            </div>

            <form action="{{ route('siswa.kegiatan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <label class="relative block mb-5">
                        <span class="font-medium">Tanggal Pelaksanaan<code class="text-red-500">*</code></span>
                        <input type="text" id="tanggal" name="tanggal"
                            class="block w-full rounded-lg py-3 text-[#1E2B4F] font-medium placeholder:text-[#AFAEC3] placeholder:font-normal px-5 border border-[#d4d4d4] focus:outline-none focus:border-[#0D63F3]"
                            value="{{ old('tanggal') }}" required />
                        <span class="absolute top-8 right-[20px] bottom-1/2 translate-y-[58%] hover:cursor-pointer">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19 4H5C3.89543 4 3 4.89543 3 6V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V6C21 4.89543 20.1046 4 19 4Z"
                                    stroke="#AFAEC3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3 10H21" stroke="#AFAEC3" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M16 2V6" stroke="#AFAEC3" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M8 2V6" stroke="#AFAEC3" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </span>
                    </label>
                    @if ($errors->has('tanggal'))
                        <p style="font-style: bold; color: red;">
                            {{ $errors->first('tanggal') }}
                        </p>
                    @endif
                </div>
                <div class="mb-5 w-full">
                    <label for="presensi" class="block">
                        <span class="font-medium">Presensi<code class="text-red-500">*</code></span>
                    </label>
                    <select data-te-select-init data-te-select-placeholder="Pilih Presensi" name="presensi" id="presensi"
                        required>
                        <option hidden selected></option>
                        <option value="1">Hadir</option>
                        <option value="2">Izin</option>
                        <option value="3">Sakit</option>
                        <option value="4">Libur</option>
                    </select>
                    @if ($errors->has('presensi'))
                        <p style="font-style: bold; color: red;">{{ $errors->first('presensi') }}</p>
                    @endif
                </div>
                <div>
                    <label for="" class="block mb-5">
                        <span class="font-medium">Jurnal<code class="text-red-500">*</code></span>
                        <textarea id="" class="w-full h-44 border-2 border-gray-200 rounded-md resize-none p-4 focus:outline-none"
                            name="jurnal" placeholder="Deskripsi Kegiatan" required></textarea>
                    </label>
                    @if ($errors->has('jurnal'))
                        <p style="font-style: bold; color: red;">{{ $errors->first('jurnal') }}</p>
                    @endif
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="w-full py-3 rounded-md bg-primary text-white font-semibold">
                        Simpan Logbook
                    </button>
                </div>
            </form>


        </div>
    </main>
    </div>
    </section>
@endsection

@push('after-script')
    <script type="text/javascript">
        $(document).ready(function() {

            const tanggal = flatpickr('#tanggal', {
                altInput: true,
                altFormat: 'd F Y',
                dateFormat: 'Y-m-d',
                disableMobile: 'true',
                maxDate: new Date(),
                disable: {!! $disable_date !!},
                locale: {
                    "firstDayOfWeek": 1 // start week on Monday
                }
            });
        });
    </script>
@endpush
