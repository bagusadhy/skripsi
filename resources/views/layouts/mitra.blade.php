<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <title>@yield('title') | PKL SMKN 2 Malang</title>

    @include('includes.frontsite.meta')
    @stack('before-style')
    @include('includes.frontsite.style')
    @stack('after-style')

</head>

<body class=" bg-[#F9F9F9] overflow-x-hidden">

    @include('sweetalert::alert')

    @include('components.frontsite.mitra.header')
    @include('components.frontsite.mitra.sidebar')
    @yield('content')
    @include('components.frontsite.mitra.footer')

    @stack('before-script')
    @include('includes.frontsite.script')
    @stack('after-script')

</body>

</html>
