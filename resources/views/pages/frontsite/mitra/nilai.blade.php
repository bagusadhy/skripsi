@extends('layouts.mitra')

@section('title', 'Nilai')

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
                        Nilai</p>
                    <hr class="bg-black">
                </div>
            </div>

            <div class="mb-10">
                <p class="text-sm">Format nilai dapat diunduh dibawah ini.</p>
                <div class="rounded-md w-full px-5 py-3 border border-gray-300 flex justify-between items-center">
                    <div class="flex gap-3 items-center flex-shrink">
                        <p class="font-bold">Template Format Nilai PKL</p>
                    </div>
                    <a href=""
                        class="block px-5 py-2 rounded text-center text-primary border border-primary text-sm font-bold hover:bg-primary hover:text-white">Download</a>
                </div>
            </div>

            <div id="accordionExample" class="shadow-lg mb-3 rounded-lg">
                <div class="rounded-lg border border-neutral-200 bg-white px">
                    <h2 class="mb-0" id="headingOne">
                        <button
                            class="group relative flex w-full items-center rounded-t-lg border-0 font-medium text-primary bg-blue-100 px-5 py-4 text-left text-base transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none   [&:not([data-te-collapse-collapsed])]:bg-blue-200 [&:not([data-te-collapse-collapsed])]:text-primary [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)]"
                            type="button" data-te-collapse-init data-te-target="#collapseOne" aria-expanded="false"
                            aria-controls="collapseOne">
                            <div class="flex gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                                </svg>

                                Unggah Nilai
                            </div>
                            <span
                                class="ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none dark:fill-blue-300 dark:group-[[data-te-collapse-collapsed]]:fill-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </span>
                        </button>
                    </h2>
                    <div id="collapseOne" class="!visible hidden" data-te-collapse-item aria-labelledby="headingOne"
                        data-te-parent="#accordionExample">
                        <div class="px-5 py-4">
                            <form action="{{ route('mitra.nilai.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-5 w-full">
                                    <label for="siswa" class="block">
                                        <span class="font-medium">Nama Siswa<code class="text-red-500">*</code></span>
                                    </label>
                                    <select data-te-select-init data-te-select-placeholder="Pilih Siswa" name="siswa_id"
                                        required>
                                        <option hidden selected></option>
                                        @foreach ($siswa as $data)
                                            <option value="{{ $data->siswa->id }}">
                                                {{ $data->siswa->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('siswa_id'))
                                        <p style="font-style: bold; color: red;">{{ $errors->first('siswa_id') }}</p>
                                    @endif
                                </div>

                                <label for="nilai" class="block mb-5 cursor-pointer">
                                    <span class="font-medium">Nilai
                                        Siswa <code class="text-red-500">*</code></span>
                                    <div
                                        class="w-full h-40 bg-[#F5F9FC] rounded-md border border-primary border-dashed flex justify-center flex-col items-center">
                                        <div class="flex flex-col items-center" id="nilai-text">
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
                                        </div>
                                        <input type="file" class="hidden" id="nilai" name="nilai" required>
                                    </div>
                                </label>

                                <div class="flex justify-end mt-4">
                                    <button type="submit" class="px-8 py-2 bg-blue-700 text-white rounded-md">Unggah
                                        Nilai</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-10 py-4">
                <div class="overflow-x-auto overflow-y-hidden py-5">
                    <table class="stripe" id="nilai-table">
                        <thead>
                            <tr class="">
                                <th class="whitespace-nowrap">Nama Siswa</th>
                                <th class="whitespace-nowrap">Nilai</th>
                                <th class="whitespace-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody class="overflow-x-scroll">
                            @forelse ($nilai as $data)
                                <tr data-entry-id="{{ $data->siswa_id }}" class="hover:bg-neutral-200 outline-2">
                                    <td class="whitespace-nowrap">{{ $data->nama }}</td>
                                    <td class="whitespace-nowrap"><a href="{{ url($data->nilai) }}"
                                            class="text-sm text-blue-500">Nilai Siswa</a></td>
                                    <td class="whitespace-nowrap">
                                        <div class="relative" data-te-dropdown-ref>
                                            <button
                                                class="flex items-center whitespace-nowrap rounded bg-blue-700 px-5 py-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] motion-reduce:transition-none dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                                                type="button" id="dropdownMenuButton1" data-te-dropdown-toggle-ref
                                                aria-expanded="false" data-te-ripple-init data-te-ripple-color="light">
                                                Action
                                                <span class="ml-2 w-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" class="h-5 w-5">
                                                        <path fill-rule="evenodd"
                                                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </span>
                                            </button>
                                            <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg [&[data-te-dropdown-show]]:block"
                                                aria-labelledby="dropdownMenuButton1" data-te-dropdown-menu-ref>
                                                <li>
                                                    <a class="block w-full whitespace-nowrap bg-transparent px-16 py-2 text-sm font-normal hover:bg-neutral-200"
                                                        href="{{ route('mitra.nilai.destroy', $data->siswa_id) }}"
                                                        data-te-dropdown-item-ref
                                                        onclick="event.preventDefault(); $('#form-delete').attr('action', '{{ route('mitra.nilai.destroy', $data->siswa_id) }}'); document.getElementById('form-delete').submit()">Hapus
                                                        <form action="" id="form-delete" method="post"
                                                            style="display: none">
                                                            @csrf
                                                            @method('delete')
                                                        </form>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    </div>
    </section>
@endsection

@push('after-script')
    <script type="text/javascript">
        $(document).ready(function() {
            var nilai = document.getElementById('nilai');
            var nilaiText = document.getElementById('nilai-text')
            nilai.addEventListener('change', function() {
                if (this.files.length) {
                    nilaiText.innerText = this.files[0].name;
                }
            });

            var table = $('#nilai-table').DataTable({
                "autoWidth": true,
                // "scrollX": true,
            });

        });
    </script>
@endpush
