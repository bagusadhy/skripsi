<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    @include('includes.frontsite.meta')

    <title>@yield('title') | PKL SMKN 2 Malang</title>

    @stack('before-style')
    @include('includes.frontsite.style')
    @stack('after-style')

</head>

<body>

    {{-- @include('sweetalert::alert') --}}

    <section class="mx-10">
        @include('components.frontsite.landing.header')
        @yield('content')
        @include('components.frontsite.landing.footer')
    </section>

    @stack('before-script')
    @include('includes.frontsite.script')
    @stack('after-script')


</body>

</html>
