@extends('layouts.landing')

@section('title', 'Home')

@section('content')


    <!-- main content start -->
    <main class="">
        <div class="-mx-10 bg-no-repeat text-white bg-center lg:h-[624px] overflow-hidden bg-cover"
            style="background-image: url('assets/frontsite/hero.png')">
            <div class="h-full w-full backdrop-blur-sm px-10 self-center flex flex-col justify-center py-10">
                <h1 class="font-bold text-6xl mb-20">Program <br> Praktik Kerja Lapangan<br>
                    SMK Negeri 2 Malang</h1>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna
                    aliqua.</p>
            </div>
        </div>

        <!-- pengumuman section start -->
        <section class="">
            <h1 class="font-bold text-4xl lg:text-5xl text-center py-14">Pengumuman</h1>
            <div class="flex gap-5 justify-center flex-col lg:flex-row">
                <div
                    class="w-full h-fit rounded-3xl px-5 py-5 text-center hover:bg-[#FDDBDB] shadow-[0_0_55px_5px_rgb(0,0,0,0.1)]">
                    <div class="flex justify-center mb-5">
                        <img src="{{ asset('assets/frontsite/speaker.png') }}" class="" alt="">
                    </div>
                    <h3 class="font-medium mb-5">Pengumuman </h3>
                    <h3 class="font-medium mb-5">22 - 27 Desember 2022</h3>
                    <p class="font-normal mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna
                        aliqua.</p>
                </div>
                <div
                    class="w-full h-fit rounded-3xl px-5 py-5 text-center hover:bg-[#FDDBDB] shadow-[0_0_55px_5px_rgb(0,0,0,0.1)]">
                    <div class="flex justify-center mb-5">
                        <img src="{{ asset('assets/frontsite/speaker.png') }}" class="" alt="">
                    </div>
                    <h3 class="font-medium mb-5">Pengumuman </h3>
                    <h3 class="font-medium mb-5">22 - 27 Desember 2022</h3>
                    <p class="font-normal mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna
                        aliqua.</p>
                </div>
                <div
                    class="w-full h-fit rounded-3xl px-5 py-5 text-center hover:bg-[#FDDBDB] shadow-[0_0_55px_5px_rgb(0,0,0,0.1)]">
                    <div class="flex justify-center mb-5">
                        <img src="{{ asset('assets/frontsite/speaker.png') }}" class="" alt="">
                    </div>
                    <h3 class="font-medium mb-5">Pengumuman </h3>
                    <h3 class="font-medium mb-5">22 - 27 Desember 2022</h3>
                    <p class="font-normal mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna
                        aliqua.</p>
                </div>
                <div
                    class="w-full h-fit rounded-3xl px-5 py-5 text-center hover:bg-[#FDDBDB] shadow-[0_0_55px_5px_rgb(0,0,0,0.1)]">
                    <div class="flex justify-center mb-5">
                        <img src="{{ asset('assets/frontsite/speaker.png') }}" class="" alt="">
                    </div>
                    <h3 class="font-medium mb-5">Pengumuman </h3>
                    <h3 class="font-medium mb-5">22 - 27 Desember 2022</h3>
                    <p class="font-normal mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna
                        aliqua.</p>
                </div>

            </div>

        </section>
        <!-- pengumuman section end -->

        <!-- tentang start -->
        <section>
            <h1 class="font-bold text-4xl lg:text-5xl text-center py-14">Tentang Program</h1>
            <div
                class="flex justify-between items-center flex-wrap lg:flex-nowrap rounded-xl shadow-[0_0_55px_5px_rgb(0,0,0,0.1)] mb-10">
                <div class="px-10 py-10 text-center lg:text-left">
                    <h2 class="font-bold mb-5 text-lg">Pendaftaran PKL Mandiri</h2>
                    <p class="font-normal text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Amet similique, quod sapiente consequatur sequi ex? Quaerat quae reprehenderit nihil
                        voluptatem! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos voluptatum
                        velit minima mollitia. Voluptates id corporis labore nihil, et quo.</p>
                </div>
                <img src="{{ asset('assets/frontsite/tentang-program.png') }}" class="hidden lg:block" alt="">
            </div>
            <div
                class="flex justify-between items-center flex-wrap lg:flex-nowrap rounded-xl shadow-[0_0_55px_5px_rgb(0,0,0,0.1)] mb-10">
                <div class="px-10 py-10 text-center lg:text-left">
                    <h2 class="font-bold mb-5 text-lg">Pendaftaran PKL Mandiri</h2>
                    <p class="font-normal text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Amet similique, quod sapiente consequatur sequi ex? Quaerat quae reprehenderit nihil
                        voluptatem! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos voluptatum
                        velit minima mollitia. Voluptates id corporis labore nihil, et quo.</p>
                </div>
                <img src="{{ asset('assets/frontsite/tentang-program.png') }}" class="hidden lg:block" alt="">
            </div>
        </section>
        <!-- tentang end -->


    </main>
    <!-- main content end -->

    <!-- back to top -->
    <a href="#" id="top" class="h-10 w-10 bg-primary rounded flex fixed bottom-20 right-5 cursor-pointer z-0">
        <span class="text-xl text-center text-white m-auto">↑</span>
    </a>


@endsection
@push('after-script')
    <script type="text/javascript">
        const toggler = document.querySelector('#toggler');
        const mobile = document.querySelector('#mobile-menu');
        const open = document.querySelector('#openBtn');
        const close = document.querySelector('#closeBtn');


        toggler.addEventListener('click', function() {
            mobile.classList.toggle('hidden');
            open.classList.toggle('hidden');
            close.classList.toggle('hidden');

        })
    </script>
@endpush
