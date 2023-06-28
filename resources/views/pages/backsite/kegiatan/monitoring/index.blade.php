@extends('layouts.app')

@section('title', 'Monitoring')

@section('content')
    <main class="basis-10/12 bg-white min-h-screen px-10 py-5  overflow-x-hidden">

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
                        Monitoring</p>
                </div>
            </div>

            <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10 shadow-lg rounded-lg">
                <div class="overflow-x-auto">

                    <table id="monitoring-table">
                        <thead>
                            <tr>
                                <th class="whitespace-nowrap">Guru</th>
                                <th class="whitespace-nowrap">Mitra</th>
                                <th class="whitespace-nowrap">Tanggal Pelaksanaan</th>
                                <th class="whitespace-nowrap">Tujuan</th>
                                <th class="whitespace-nowrap">Jumlah Peserta</th>
                                <th class="whitespace-nowrap">Deskripsi</th>
                                <th class="whitespace-nowrap">Foto Kegiatan</th>
                            </tr>
                        </thead>
                        <tbody class="overflow-x-scroll">
                            @foreach ($monitoring as $data)
                                <tr>
                                    <td class="whitespace-nowrap">{{ $data->guru->nama }}</td>
                                    <td class="whitespace-nowrap">{{ $data->mitra->nama }}</td>
                                    <td class="whitespace-nowrap">{{ $data->tanggal_pelaksanaan }}</td>
                                    <td class="whitespace-nowrap">{{ $data->tujuan }}</td>
                                    <td class="whitespace-nowrap">{{ $data->peserta_pkl }}</td>
                                    <td class="whitespace-nowrap">{{ $data->deskripsi }}</td>
                                    <td class="whitespace-nowrap">{{ $data->foto }}</td>
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

            var table = $('#monitoring-table').DataTable({
                "autoWidth": true,
                // "scrollX": true,
            });

            $('#monitoring-table tfoot th').each(function(i) {
                var title = $('#monitoring-table thead th').eq($(this).index()).text();
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
