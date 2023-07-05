<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <title>@yield('title') | PKL SMKN 2 Malang</title>

    @stack('before-style')
    @include('includes.frontsite.style')
    @stack('after-style')

<body class=" bg-[#F9F9F9] overflow-x-hidden">

    @include('sweetalert::alert')

    @include('components.frontsite.siswa.header')
    @include('components.frontsite.siswa.sidebar')
    @yield('content')
    @include('components.frontsite.siswa.footer')

    @stack('before-script')
    @include('includes.frontsite.script')
    @stack('after-script')

</body>

</html>
