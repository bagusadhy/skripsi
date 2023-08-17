
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    @include('includes.frontsite.meta')

    <title>@yield('title') | PKL SMKN 2 Malang</title>

    @stack('before-style')
    @include('includes.frontsite.style')
    @stack('after-style')

</head>

<body class="bg-[#F9F9F9]" >

    @include('sweetalert::alert')

    <section class="mx-10">
        @yield('content')
    </section>

    @stack('before-script')
    @include('includes.frontsite.script')
    @stack('after-script')


</body>

</html>
