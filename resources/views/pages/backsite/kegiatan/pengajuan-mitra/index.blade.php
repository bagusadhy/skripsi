@extends('layouts.app')

@section('title', 'Pengajuan')

@section('content')
    <main class="w-screen h-screen lg:h-fit bg-white overflow-x-hidden">

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
                        Pengajuan Mitra</p>
                </div>
            </div>

            <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 shadow-lg rounded-lg">
                <div class="overflow-x-auto">

                    <table id="pengajuan-table">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap">Siswa</th>
                                <th class="whitespace-nowrap">Nama Perusahaan</th>
                                <th class="whitespace-nowrap">Bidang Usaha</th>
                                <th class="whitespace-nowrap">Email</th>
                                <th class="whitespace-nowrap">Kontak</th>
                                <th class="whitespace-nowrap">Alamat</th>
                                <th class="whitespace-nowrap">Alasan</th>
                                <th class="whitespace-nowrap">Action</th>
                            </tr>
                        </thead>
                        <tbody class="overflow-x-scroll">
                            @foreach ($pengajuan as $data)
                                <tr>
                                    <td class="whitespace-nowrap">{{ $data->siswa->nama }}</td>
                                    <td class="whitespace-nowrap">{{ $data->nama }}</td>
                                    <td class="whitespace-nowrap">{{ $data->bidang_usaha->title }}</td>
                                    <td class="whitespace-nowrap">{{ $data->email }}</td>
                                    <td class="whitespace-nowrap">{{ $data->kontak }}</td>
                                    <td class="whitespace-nowrap">{{ $data->alamat }}</td>
                                    <td class="whitespace-nowrap">{{ $data->alasan }}</td>
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
                                                        href="{{ route('backsite.pengajuan_mitra.terima', $data->id) }}"
                                                        data-te-dropdown-item-ref
                                                        onclick="event.preventDefault(); $('#form-terima').attr('action', '{{ route('backsite.pengajuan_mitra.terima', $data->id) }}'); document.getElementById('form-terima').submit()">Terima
                                                        <form action="" id="form-terima" method="post"
                                                            style="display: none">
                                                            @csrf
                                                        </form>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="block w-full whitespace-nowrap bg-transparent px-16 py-2 text-sm font-normal hover:bg-neutral-200"
                                                        href="{{ route('backsite.pengajuan_mitra.update', $data->id) }}"
                                                        data-te-dropdown-item-ref
                                                        onclick="event.preventDefault(); $('#form-tolak').attr('action', '{{ route('backsite.pengajuan_mitra.update', $data->id) }}'); document.getElementById('form-tolak').submit()">Tolak
                                                        <form action="" id="form-tolak" method="post"
                                                            style="display: none">
                                                            @csrf
                                                            @method('PUT')
                                                        </form>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tfoot>
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

            var table = $('#pengajuan-table').DataTable({
                "autoWidth": true,
                // "scrollX": true,
            });

            $('#pengajuan-table tfoot th').each(function(i) {
                var title = $('#pengajuan-table thead th').eq($(this).index()).text();
                $(this).html(
                    '<input type="text" class="rounded-lg border border-gray-400 placeholder:font-normal focus:font-normal mt-3" placeholder="Search ' +
                    title +
                    '" data-index="' + i + '" style="width:100%;"/>');
            });

            // Filter event handler
            $(table.table().container()).on('keyup', 'tfoot input', function() {
                table
                    .column($(this).data('index'))
                    .search(this.value)
                    .draw();
            });

        });
    </script>
@endpush
