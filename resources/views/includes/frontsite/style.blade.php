{{-- library or package --}}
<link rel="stylesheet" type="text/css" href="{{ url('https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<link rel="preconnect" href="{{ url('https://fonts.googleapis.com') }}">
<link rel="preconnect" href="{{ url('https://fonts.gstatic.com') }}" crossorigin>
<link href="{{ url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins&display=swap') }}"
    rel="stylesheet">
@vite('resources/css/app.css')

<style>
    .dataTables_wrapper {
        padding: .5rem !important;
    }

    .dataTables_length select {
        width: 60px;
        background-position: left 1.8rem center !important;
        border-radius: 5px !important;
    }

    .dataTables_length:focus select:focus {
        border: none !important;
    }

    .dataTables_length,
    .dataTables_filter {
        margin-bottom: 2.5rem !important;
    }

    .dataTables_filter input {
        border-radius: 5px !important;
    }

    .dataTables_wrapper:focus .dataTables_filter input:focus {
        border: none !important;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.current {
        background: none !important;
        border: none !important;
    }
</style>
