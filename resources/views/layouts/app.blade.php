<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <title>@yield('title') | PKL SMKN 2 Malang</title>

    @stack('before-style')
    @include('includes.backsite.style')
    @stack('after-style')

<body class=" bg-[#F9F9F9] overflow-x-hidden">

    @include('sweetalert::alert')

    @include('components.backsite.header')
    @include('components.backsite.sidebar')
    @yield('content')
    @include('components.backsite.footer')

    @stack('before-script')
    @include('includes.backsite.script')
    @stack('after-script')

</body>

</html>
