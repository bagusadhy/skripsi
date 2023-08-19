@extends('layouts.mitra')

@section('title', 'Lowongan')

@section('content')
    <main class="basis-10/12 bg-white max-h-fit px-10 py-5  overflow-x-hidden">

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
                    <a href="{{ route('mitra.lowongan.index') }}" class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                        </svg>
                    </a>
                </div>
            </div>

            <form action="{{ route('mitra.lowongan.update', $lowongan->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3 w-full">
                    <label for="jurusan" class="block">
                        <span class="font-medium">Jurusan<code class="text-red-500">*</code></span>
                    </label>
                    <select data-te-select-init data-te-select-placeholder="Pilih Jurusan" name="jurusan_id" required>
                        <option hidden selected></option>
                        @foreach ($jurusan as $items)
                            <option value="{{ $items->id }}" {{ $lowongan->jurusan_id == $items->id ? 'selected' : '' }}>
                                {{ $items->jurusan }}
                            </option>
                        @endforeach
                    </select>
                    @if ($errors->has('jurusan'))
                        <p style="font-style: bold; color: red;">{{ $errors->first('jurusan') }}</p>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="kuota" class="block">
                        <span class="font-medium">Kuota <code class="text-red-500">*</code></span>
                    </label>
                    <input type="number"
                        class="w-full h-11 rounded-md border border-gray-300 px-3 py-3 focus:outline-none resize-none"
                        name="kuota" id="kuota" value="{{ $lowongan->kuota }}" required>
                    @if ($errors->has('kuota'))
                        <p style="font-style: bold; color: red;">{{ $errors->first('kuota') }}</p>
                    @endif
                </div>

                <label for="nama" class="block">
                    <span class="font-medium">Lowongan <code class="text-red-500">*</code></span>
                </label>
                <textarea class="w-full h-20 rounded-md border border-gray-300 px-3 py-3 focus:outline-none resize-none"
                    name="nama"id="nama" required>{{ $lowongan->nama }}</textarea>
                @if ($errors->has('nama'))
                    <p style="font-style: bold; color: red;">{{ $errors->first('nama') }}</p>
                @endif

                <div class="flex justify-end mt-4">
                    <button type="submit" class="px-8 py-2 bg-blue-700 text-sm text-white rounded-md">Update
                    </button>
                </div>
            </form>
        </div>
    </main>
    </div>
    </section>
@endsection
