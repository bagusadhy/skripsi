@extends('layouts.landing')

@section('title', 'Home')

@section('content')


    <!-- main content start -->
    <main class="">
        <div class="-mx-10 bg-no-repeat text-white bg-center lg:h-[624px] overflow-hidden bg-cover"
            style="background-image: url('assets/frontsite/hero.png')">
            <div class="h-full w-full backdrop-blur-sm backdrop-brightness-75 px-10 self-center flex flex-col justify-center py-10">
                <h1 class="font-bold text-6xl lg:text-6xl mb-10 lg:max-w-2xl">Selamat Datang Di Website Praktik Kerja Lapangan
                    SMK Negeri 2 Malang</h1>
            </div>
        </div>

        <!-- timeline section start -->
        <section class="">
            <h1 class="font-bold text-4xl lg:text-5xl text-center py-14">Timeline</h1>
            <div class="flex gap-5 justify-center flex-col lg:flex-row flex-shrink">
                @forelse ($timeline as $periode)
                    <div class="w-fit h-fit md:w-full lg:w-96 lg:h-96 rounded-3xl px-5 py-5 hover:bg-[#FDDBDB] shadow-[0_0_55px_5px_rgb(0,0,0,0.1)]">
                        <div class="w-full text-center">

                            <div class="flex justify-center mb-5">
                                <img src="{{ asset('assets/frontsite/speaker-1.png') }}" class="w-40 h-40 scale-75" alt="">
                            </div>
                            <h2 class="font-bold mb-5 text-xl">Periode Pendaftaran</h2>
                            <h3 class="font-medium mb-5 text-normal">
                                {{ date('d M', strtotime($periode->pendaftaran)) . ' - ' . date('d M Y', strtotime(\Carbon\Carbon::parse($periode->kegiatan)->subDay())) }}
                            </h3>
                        </div>
                        <p class="font-normal mb-5 text-justify text-sm">Melakukan pendaftaran pada lowongan PKL yang telah
                            dibuka
                            oleh mitra, atau dapat mengajukan mitra PKL secara mandiri.</p>
                    </div>
                    <div
                        class="w-fit h-fit md:w-full lg:w-96 lg:h-96 rounded-3xl px-5 py-5 hover:bg-[#FDDBDB] shadow-[0_0_55px_5px_rgb(0,0,0,0.1)]">
                        <div class="w-full text-center">

                            <div class="flex justify-center mb-5">
                                <img src="{{ asset('assets/frontsite/speaker-1.png') }}" class="w-40 h-40 scale-75" alt="">
                            </div>
                            <h2 class="font-bold mb-5 text-xl">Periode Kegiatan</h2>
                            <h3 class="font-medium mb-5 text-normal">
                                {{ date('d M', strtotime($periode->kegiatan)) . ' - ' . date('d M Y', strtotime($periode->kegiatan_selesai)) }}
                            </h3>
                        </div>
                        <p class="font-normal mb-5 text-justify text-sm">Meliputi kegiatan pengantaran ke mitra PKL, monitoring, dan penjemputan
                            oleh pihak sekolah.</p>
                    </div>
                @empty
                @endforelse
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
