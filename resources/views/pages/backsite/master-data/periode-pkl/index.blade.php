@extends('layouts.app')

@section('title', 'Periode PKL')

@section('content')
    <main class="basis-10/12 bg-white min-h-screen py-5 ">

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
                        Periode PKL</p>
                </div>
            </div>

            <div id="accordionExample" class="shadow-md mb-3 rounded-lg">
                <div class="rounded-lg border border-neutral-200 bg-white px">
                    <h2 class="mb-0" id="headingOne">
                        <button
                            class="group relative flex w-full items-center rounded-t-lg border-0 font-medium text-primary bg-blue-100 px-5 py-4 text-left text-base transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none   [&:not([data-te-collapse-collapsed])]:bg-blue-200 [&:not([data-te-collapse-collapsed])]:text-primary [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)]"
                            type="button" data-te-collapse-init data-te-target="#collapseOne" aria-expanded="false"
                            aria-controls="collapseOne">
                            Tambah Periode
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
                            <form action="{{ route('backsite.periode.store') }}" method="POST">
                                @csrf
                                <label class="relative block mb-5">
                                    <span class="font-medium">Tanggal Mulai<code class="text-red-500">*</code></span>
                                    <input type="text" id="tanggal_dimulai" name="tanggal_dimulai"
                                        class="block w-full rounded-lg py-4 text-[#1E2B4F] font-medium placeholder:text-[#AFAEC3] placeholder:font-normal px-7 border border-[#d4d4d4] focus:outline-none focus:border-[#0D63F3]"
                                        placeholder="Pilih Tanggal" required />
                                    <span
                                        class="absolute top-10 right-[20px] bottom-1/2 translate-y-[58%] hover:cursor-pointer">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19 4H5C3.89543 4 3 4.89543 3 6V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V6C21 4.89543 20.1046 4 19 4Z"
                                                stroke="#AFAEC3" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M3 10H21" stroke="#AFAEC3" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M16 2V6" stroke="#AFAEC3" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M8 2V6" stroke="#AFAEC3" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </label>
                                @if ($errors->has('tanggal_dimulai'))
                                    <p style="font-style: bold; color: red;">{{ $errors->first('tanggal_dimulai') }}</p>
                                @endif
                                <label class="relative block mb-5">
                                    <span class="font-medium">Tanggal Selesai<code class="text-red-500">*</code></span>
                                    <input type="text" id="tanggal_berakhir" name="tanggal_berakhir"
                                        class="block w-full rounded-lg py-4 text-[#1E2B4F] font-medium placeholder:text-[#AFAEC3] placeholder:font-normal px-7 border border-[#d4d4d4] focus:outline-none focus:border-[#0D63F3]"
                                        placeholder="Pilih Tanggal" required />
                                    <span
                                        class="absolute top-10 right-[20px] bottom-1/2 translate-y-[58%] hover:cursor-pointer">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19 4H5C3.89543 4 3 4.89543 3 6V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V6C21 4.89543 20.1046 4 19 4Z"
                                                stroke="#AFAEC3" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M3 10H21" stroke="#AFAEC3" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M16 2V6" stroke="#AFAEC3" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M8 2V6" stroke="#AFAEC3" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </label>
                                @if ($errors->has('tanggal_berakhir'))
                                    <p style="font-style: bold; color: red;">{{ $errors->first('tanggal_berakhir') }}</p>
                                @endif
                                <div class="flex justify-end mt-4">
                                    <button type="submit"
                                        class="px-8 py-2 bg-blue-700 text-white rounded-md">Tambahkan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white py-4 md:py-7 px-4 shadow-md rounded-lg">
                <div class="overflow-x-auto">

                    <table id="periode-table" class="stripe">
                        <thead>
                            <tr>
                                <th>Tanggal mulai</th>
                                <th>Tanggal selesai</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $periode)
                                <tr data-entry-id="{{ $periode->id }}" class="hover:bg-neutral-200 outline-2">
                                    <td>{{ $periode->tanggal_dimulai }}</td>
                                    <td>{{ $periode->tanggal_berakhir }}</td>
                                    <td>
                                        @if ($periode->status == '1')
                                            <span
                                                class="uppercase inline-block whitespace-nowrap rounded-[0.27rem] bg-blue-500 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-medium leading-normal text-white">
                                                Aktif
                                            </span>
                                        @else
                                            <span
                                                class="uppercase inline-block whitespace-nowrap rounded-[0.27rem] bg-red-500 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-medium leading-normal text-white">
                                                Nonaktif
                                            </span>
                                        @endif
                                    </td>
                                    <td>
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
                                                        href="{{ route('backsite.periode.edit', $periode->id) }}"
                                                        data-te-dropdown-item-ref>Edit</a>
                                                </li>
                                                <li>
                                                    @if ($periode->status == '1')
                                                        <a class="block w-full whitespace-nowrap bg-transparent px-16 py-2 text-sm font-normal hover:bg-neutral-200"
                                                            href="{{ route('backsite.periode.disactivated', $periode->id) }}"
                                                            data-te-dropdown-item-ref
                                                            onclick="event.preventDefault(); $('#form-disactivated').attr('action', '{{ route('backsite.periode.disactivated', $periode->id) }}'); document.getElementById('form-disactivated').submit()">Nonaktfikan
                                                            <form action="" id="form-disactivated" method="post"
                                                                style="display: none">
                                                                @csrf
                                                                @method('PUT')
                                                                <input type="hidden" name="tanggal_dimulai"
                                                                    value="{{ $periode->tanggal_dimulai }}">
                                                                <input type="hidden" name="tanggal_berakhir"
                                                                    value="{{ $periode->tanggal_berakhir }}">
                                                            </form>
                                                        </a>
                                                    @else
                                                        <a class="block w-full whitespace-nowrap bg-transparent px-16 py-2 text-sm font-normal hover:bg-neutral-200"
                                                            href="{{ route('backsite.periode.activated', $periode->id) }}"
                                                            data-te-dropdown-item-ref
                                                            onclick="event.preventDefault(); $('#form-activated').attr('action', '{{ route('backsite.periode.activated', $periode->id) }}'); document.getElementById('form-activated').submit()">Aktifkan
                                                            <form action="" id="form-activated" method="post"
                                                                style="display: none">
                                                                @csrf
                                                                @method('PUT')
                                                                <input type="hidden" name="tanggal_dimulai"
                                                                    value="{{ $periode->tanggal_dimulai }}">
                                                                <input type="hidden" name="tanggal_berakhir"
                                                                    value="{{ $periode->tanggal_berakhir }}">
                                                            </form>
                                                        </a>
                                                    @endif
                                                </li>
                                                <li>
                                                    <a class="block w-full whitespace-nowrap bg-transparent px-16 py-2 text-sm font-normal hover:bg-neutral-200"
                                                        href="{{ route('backsite.periode.destroy', $periode->id) }}"
                                                        data-te-dropdown-item-ref
                                                        onclick="event.preventDefault(); $('#form-delete').attr('action', '{{ route('backsite.periode.destroy', $periode->id) }}'); document.getElementById('form-delete').submit()">Hapus
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

            var table = $('#periode-table').DataTable();

        });
        const tanggal_mulai = flatpickr('#tanggal_dimulai', {
            altInput: true,
            altFormat: 'd F Y',
            dateFormat: 'Y-m-d',
            disableMobile: 'true',
            minDate: "today",
            locale: {
                "firstDayOfWeek": 1 // start week on Monday
            }
        });
        const tanggal_selesai = flatpickr('#tanggal_berakhir', {
            altInput: true,
            altFormat: 'd F Y',
            dateFormat: 'Y-m-d',
            disableMobile: 'true',
            minDate: "today",
            locale: {
                "firstDayOfWeek": 1 // start week on Monday
            }
        });
    </script>
@endpush
