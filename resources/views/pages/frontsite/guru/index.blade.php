@extends('layouts.guru')

@section('title', 'Home')

@section('content')
    <main class="basis-10/12 bg-white min-h-fit px-10 py-5  overflow-x-hidden">

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
                    <p tabindex="0" class="focus:outline-none text-xl lg:text-2xl font-bold leading-normal text-gray-800">
                        Dashboard</p>
                </div>
            </div>



            <div class="mt-10">
                <div class="flex flex-wrap justify-start gap-10 w-fit">
                    <div
                        class="w-full md:w-fit h-32 p-10 md:p-5 lg:p-10 shadow-md rounded-md flex items-center gap-10 flex-shrink">
                        <div class="flex justify-center items-center">
                            <svg width="87" height="87" viewBox="0 0 87 87" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.238281" y="0.262695" width="86" height="86.1897" rx="6.89517"
                                    fill="#FFD5D2" />
                                <path opacity="0.4"
                                    d="M37.7376 25.0242C32.9343 25.0242 29.0293 28.9292 29.0293 33.7325C29.0293 38.4442 32.7143 42.2575 37.5176 42.4225C37.6643 42.4042 37.811 42.4042 37.921 42.4225C37.9576 42.4225 37.976 42.4225 38.0126 42.4225C38.031 42.4225 38.031 42.4225 38.0493 42.4225C42.7426 42.2575 46.4276 38.4442 46.446 33.7325C46.446 28.9292 42.541 25.0242 37.7376 25.0242Z"
                                    fill="#AC2028" />
                                <path
                                    d="M47.052 47.299C41.937 43.889 33.5954 43.889 28.4437 47.299C26.1154 48.8573 24.832 50.9656 24.832 53.2206C24.832 55.4756 26.1154 57.5656 28.4254 59.1056C30.992 60.829 34.3654 61.6906 37.7387 61.6906C41.112 61.6906 44.4854 60.829 47.052 59.1056C49.362 57.5473 50.6454 55.4573 50.6454 53.184C50.627 50.929 49.362 48.839 47.052 47.299Z"
                                    fill="#AC2028" />
                                <path opacity="0.4"
                                    d="M57.8874 34.8139C58.1808 38.3705 55.6508 41.4872 52.1491 41.9089C52.1308 41.9089 52.1308 41.9089 52.1124 41.9089H52.0574C51.9474 41.9089 51.8374 41.9089 51.7458 41.9455C49.9674 42.0372 48.3358 41.4689 47.1074 40.4239C48.9958 38.7372 50.0774 36.2072 49.8574 33.4572C49.7291 31.9722 49.2158 30.6155 48.4458 29.4605C49.1424 29.1122 49.9491 28.8922 50.7741 28.8189C54.3674 28.5072 57.5758 31.1839 57.8874 34.8139Z"
                                    fill="#AC2028" />
                                <path
                                    d="M61.5534 51.7725C61.4067 53.5508 60.2701 55.0908 58.3634 56.1358C56.5301 57.1442 54.2201 57.6208 51.9284 57.5658C53.2484 56.3742 54.0184 54.8892 54.1651 53.3125C54.3484 51.0392 53.2667 48.8575 51.1034 47.1158C49.8751 46.1442 48.4451 45.3742 46.8867 44.8058C50.9384 43.6325 56.0351 44.4208 59.1701 46.9508C60.8567 48.3075 61.7184 50.0125 61.5534 51.7725Z"
                                    fill="#AC2028" />
                            </svg>
                        </div>
                        <div class="w-24">
                            <p class="text-sm font-medium text-gray-400">Total Siswa Bimbingan</p>
                            <p class="font-extrabold text-2xl text-[#AC2028]">{{ $siswa->total_siswa }}</p>
                        </div>
                    </div>

                    <div
                        class="w-full md:w-fit h-32 p-10 md:p-5 lg:p-10 shadow-md rounded-md flex items-center gap-10 flex-shrink">
                        <div class="flex justify-center items-center">
                            <svg width="87" height="87" viewBox="0 0 87 87" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.238281" y="0.262695" width="86" height="86.1897" rx="6.89517"
                                    fill="#E8FBE7" />
                                <path opacity="0.4"
                                    d="M37.7376 25.0242C32.9343 25.0242 29.0293 28.9292 29.0293 33.7325C29.0293 38.4442 32.7143 42.2575 37.5176 42.4225C37.6643 42.4042 37.811 42.4042 37.921 42.4225C37.9576 42.4225 37.976 42.4225 38.0126 42.4225C38.031 42.4225 38.031 42.4225 38.0493 42.4225C42.7426 42.2575 46.4276 38.4442 46.446 33.7325C46.446 28.9292 42.541 25.0242 37.7376 25.0242Z"
                                    fill="#009E3D" />
                                <path
                                    d="M47.052 47.299C41.937 43.889 33.5954 43.889 28.4437 47.299C26.1154 48.8573 24.832 50.9656 24.832 53.2206C24.832 55.4756 26.1154 57.5656 28.4254 59.1056C30.992 60.829 34.3654 61.6906 37.7387 61.6906C41.112 61.6906 44.4854 60.829 47.052 59.1056C49.362 57.5473 50.6454 55.4573 50.6454 53.184C50.627 50.929 49.362 48.839 47.052 47.299Z"
                                    fill="#009E3D" />
                                <path opacity="0.4"
                                    d="M57.8874 34.8139C58.1808 38.3705 55.6508 41.4872 52.1491 41.9089C52.1308 41.9089 52.1308 41.9089 52.1124 41.9089H52.0574C51.9474 41.9089 51.8374 41.9089 51.7458 41.9455C49.9674 42.0372 48.3358 41.4689 47.1074 40.4239C48.9958 38.7372 50.0774 36.2072 49.8574 33.4572C49.7291 31.9722 49.2158 30.6155 48.4458 29.4605C49.1424 29.1122 49.9491 28.8922 50.7741 28.8189C54.3674 28.5072 57.5758 31.1839 57.8874 34.8139Z"
                                    fill="#009E3D" />
                                <path
                                    d="M61.5534 51.7725C61.4067 53.5508 60.2701 55.0908 58.3634 56.1358C56.5301 57.1442 54.2201 57.6208 51.9284 57.5658C53.2484 56.3742 54.0184 54.8892 54.1651 53.3125C54.3484 51.0392 53.2667 48.8575 51.1034 47.1158C49.8751 46.1442 48.4451 45.3742 46.8867 44.8058C50.9384 43.6325 56.0351 44.4208 59.1701 46.9508C60.8567 48.3075 61.7184 50.0125 61.5534 51.7725Z"
                                    fill="#009E3D" />
                            </svg>
                        </div>
                        <div class="w-24">
                            <p class="text-sm font-medium text-gray-400">Total Mitra</p>
                            <p class="font-extrabold text-2xl text-[#009E3D]">{{ $mitra->total_mitra }}</p>
                        </div>
                    </div>

                    <div
                        class="w-full md:w-fit h-32 p-10 md:p-5 lg:p-10 shadow-md rounded-md flex items-center gap-10 flex-shrink">
                        <div class="flex justify-center items-center">
                            <svg width="87" height="87" viewBox="0 0 87 87" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.703125" y="0.262695" width="86" height="86.1897" rx="6.89517"
                                    fill="#DEEBFF" />
                                <path
                                    d="M60.368 34.1542C58.8097 32.4309 56.2064 31.5692 52.4297 31.5692H51.9897V31.4959C51.9897 28.4159 51.9897 24.6025 45.0964 24.6025H42.3097C35.4164 24.6025 35.4164 28.4342 35.4164 31.4959V31.5875H34.9764C31.1814 31.5875 28.5964 32.4492 27.038 34.1725C25.223 36.1892 25.278 38.9025 25.4614 40.7542L25.4797 40.8825L25.663 42.8075C25.6814 42.8259 25.718 42.8625 25.7547 42.8809C26.3597 43.2842 26.983 43.6875 27.643 44.0542C27.8997 44.2192 28.1747 44.3659 28.4497 44.5125C31.5847 46.2359 35.0314 47.3909 38.533 47.9592C38.698 49.6825 39.4497 51.6992 43.4647 51.6992C47.4797 51.6992 48.268 49.7009 48.3964 47.9225C52.1364 47.3175 55.748 46.0159 59.0114 44.1092C59.1214 44.0542 59.1947 43.9992 59.2864 43.9442C60.1297 43.4675 60.918 42.9542 61.688 42.3859C61.7247 42.3675 61.7614 42.3309 61.7797 42.2942L61.853 41.6342L61.9447 40.7725C61.963 40.6625 61.963 40.5709 61.9814 40.4425C62.128 38.5909 62.0914 36.0609 60.368 34.1542ZM45.7014 46.7125C45.7014 48.6559 45.7014 48.9492 43.4464 48.9492C41.1914 48.9492 41.1914 48.6009 41.1914 46.7309V44.4209H45.7014V46.7125ZM38.038 31.5692V31.4959C38.038 28.3792 38.038 27.2242 42.3097 27.2242H45.0964C49.368 27.2242 49.368 28.3975 49.368 31.4959V31.5875H38.038V31.5692Z"
                                    fill="#4285F4" />
                                <path opacity="0.4"
                                    d="M59.2874 43.9076C59.1957 43.9626 59.1041 44.0176 59.0124 44.0726C55.7491 45.9792 52.1374 47.2626 48.3974 47.8859C48.2507 49.6459 47.4807 51.6626 43.4657 51.6626C39.4507 51.6626 38.6807 49.6642 38.5341 47.9226C35.0324 47.3726 31.5857 46.2176 28.4507 44.4759C28.1757 44.3292 27.9007 44.1826 27.6441 44.0176C26.9841 43.6509 26.3607 43.2476 25.7557 42.8442C25.7191 42.8259 25.6824 42.7892 25.6641 42.7709L26.7824 54.7059C27.1674 58.3542 28.6707 62.1126 36.7374 62.1126H50.7074C58.7741 62.1126 60.2774 58.3542 60.6624 54.6876L61.8174 42.2576C61.7991 42.2942 61.7624 42.3309 61.7257 42.3492C60.9374 42.9176 60.1307 43.4492 59.2874 43.9076Z"
                                    fill="#4285F4" />
                            </svg>

                        </div>
                        <div class="w-24">
                            <p class="text-sm font-medium text-gray-400">Total Monitoring</p>
                            <p class="font-extrabold text-2xl text-[#4285F4]">{{ $monitoring->total_monitoring }}</p>
                        </div>
                    </div>


                </div>

                <div class="mt-10 overflow-hidden border w-full">
                    <p class="text-xl text-center font-bold mb-3">Data Presensi Hari Ini</p>
                    <div class="w-full md:w-4/6 lg:w-2/6 mx-auto ">
                        <canvas data-te-chart="doughnut" data-te-dataset-label="Traffic"
                            data-te-labels="['Hadir', 'Sakit' , 'Izin' , 'Libur']"
                            data-te-dataset-data="{{ $dataset_presensi }}"
                            data-te-dataset-background-color="['rgba(63, 81, 181, 0.5)', 'rgba(77, 182, 172, 0.5)', 'rgba(66, 133, 244, 0.5)', 'rgba(156, 39, 176, 0.5)', 'rgba(233, 30, 99, 0.5)', 'rgba(66, 73, 244, 0.4)', 'rgba(66, 133, 244, 0.2)']">
                        </canvas>
                    </div>
                </div>
            </div>
        </div>
    </main>
    </div>
    </section>
@endsection
