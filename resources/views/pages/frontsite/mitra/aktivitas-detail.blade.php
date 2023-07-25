@extends('layouts.mitra')

@section('title', 'Aktivitas')

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
                    <a href="{{ route('mitra.aktivitas.index') }}" class="flex items-center">
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
                        Detail Aktivitas</p>
                    <hr class="bg-black">
                </div>
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
                                @if ($data->status == null)
                                    <div class="ml-10 bg-blue-500 px-2 py-1 text-xs leading-normal text-white font-bold rounded">Perlu Direview</div>
                                @endif
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
                                        <p class="text-sm text-red-500 font-bold">Sakit</p>
                                    @break

                                    @case('4')
                                        <p class="text-sm text-red-500 font-bold">Libur</p>
                                    @break

                                    @default
                                @endswitch
                            </div>
                            <p class="flex gap-3 items-center text-justify">
                                {{ $data->jurnal }}
                            </p>

                            @if ($data->status == null)
                                <div class="flex justify-center gap-3 mt-10">
                                    <button
                                        class="px-10 py-2 text-center bg-red-500 text-sm text-white rounded active:border-none"
                                        id="tolak-{{ $data->id }}"
                                        onclick="event.preventDefault(); $('#revisi-{{ $data->id }}').toggleClass('hidden')">Tolak</button>
                                    <div>
                                        <form action="{{ route('mitra.aktivitas.update', $data->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="id" value="{{ $data->id }}">
                                            <button type="submit"
                                                class="px-10 py-2 text-sm text-center bg-blue-500 text-white rounded">Terima</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="mt-10 hidden" id="revisi-{{ $data->id }}">
                                    <form action="{{ route('mitra.aktivitas.tolak', $data->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="id" value="{{ $data->id }}" required>
                                        <textarea name="revisi" class="w-full h-32 rounded border-2 border-gray-200 resize-none" required></textarea>
                                        <div class="flex justify-end">
                                            <button type="submit"
                                                class="px-10 py-2 text-center bg-blue-500 text-sm text-white rounded">Revisi</button>
                                        </div>
                                    </form>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="mt-5 px-10">
                {{ $aktivitas->links('pagination::tailwind') }}
            </div>
        </div>
    </main>
    </div>
    </section>
@endsection
