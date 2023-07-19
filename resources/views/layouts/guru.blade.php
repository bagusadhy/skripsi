<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    @include('includes.frontsite.meta')
    <title>@yield('title') | PKL SMKN 2 Malang</title>

    @stack('before-style')
    @include('includes.frontsite.style')
    @stack('after-style')

</head>

<body class=" bg-[#F9F9F9] overflow-x-hidden">

    @include('sweetalert::alert')

    @include('components.frontsite.guru.header')
    @include('components.frontsite.guru.sidebar')
    @yield('content')
    @include('components.frontsite.guru.footer')

    @stack('before-script')
    @include('includes.frontsite.script')
    @stack('after-script')

</body>

</html>
