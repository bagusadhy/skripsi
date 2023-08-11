@extends('layouts.siswa')

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
                            <svg xmlns="http://www.w3.org/2000/svg" width="87" height="87" viewBox="0 0 87 87"
                                fill="none">
                                <rect x="0.166016" y="0.262695" width="86" height="86.1897" rx="6.89517"
                                    fill="#FCEEDA" />
                                <path opacity="0.4"
                                    d="M53.3039 35.6025C53.1756 35.5842 53.0473 35.5842 52.9189 35.6025C50.0773 35.5108 47.8223 33.1825 47.8223 30.3225C47.8223 27.4075 50.1873 25.0242 53.1206 25.0242C56.0356 25.0242 58.4189 27.3892 58.4189 30.3225C58.4006 33.1825 56.1456 35.5108 53.3039 35.6025Z"
                                    fill="#FF9029" />
                                <path opacity="0.4"
                                    d="M59.2813 48.3074C57.2279 49.6824 54.3496 50.1957 51.6913 49.8474C52.3879 48.3441 52.7546 46.6758 52.7729 44.9158C52.7729 43.0824 52.3696 41.3408 51.5996 39.8191C54.3129 39.4524 57.1913 39.9657 59.2629 41.3407C62.1596 43.2474 62.1596 46.3824 59.2813 48.3074Z"
                                    fill="#FF9029" />
                                <path opacity="0.4"
                                    d="M32.9724 35.6025C33.1007 35.5842 33.2291 35.5842 33.3574 35.6025C36.1991 35.5108 38.4541 33.1825 38.4541 30.3225C38.4541 27.4075 36.0891 25.0242 33.1558 25.0242C30.2408 25.0242 27.8574 27.3892 27.8574 30.3225C27.8758 33.1825 30.1307 35.5108 32.9724 35.6025Z"
                                    fill="#FF9029" />
                                <path opacity="0.4"
                                    d="M33.1731 44.9156C33.1731 46.694 33.5581 48.3806 34.2548 49.9023C31.6698 50.1773 28.9748 49.6273 26.9948 48.3256C24.0981 46.4006 24.0981 43.2656 26.9948 41.3406C28.9564 40.0206 31.7248 39.489 34.3281 39.7823C33.5764 41.3223 33.1731 43.064 33.1731 44.9156Z"
                                    fill="#FF9029" />
                                <path
                                    d="M43.3868 50.4527C43.2401 50.4343 43.0751 50.4343 42.9101 50.4527C39.5368 50.3427 36.8418 47.5743 36.8418 44.1643C36.8418 40.681 39.6468 37.8577 43.1485 37.8577C46.6318 37.8577 49.4551 40.681 49.4551 44.1643C49.4551 47.5743 46.7785 50.3427 43.3868 50.4527Z"
                                    fill="#FF9029" />
                                <path
                                    d="M37.4278 54.2473C34.6595 56.0989 34.6595 59.1423 37.4278 60.9756C40.5811 63.0839 45.7511 63.0839 48.9045 60.9756C51.6728 59.1239 51.6728 56.0806 48.9045 54.2473C45.7695 52.1389 40.5995 52.1389 37.4278 54.2473Z"
                                    fill="#FF9029" />
                            </svg>
                        </div>
                        <div class="w-24">
                            <p class="text-sm font-medium text-gray-400">Total Pendaftaran</p>
                            <p class="font-extrabold text-2xl text-[#AC2028]">{{ $pendaftar->total_pendaftaran }}</p>
                        </div>
                    </div>

                    <div
                        class="w-full md:w-fit h-32 p-10 md:p-5 lg:p-10 shadow-md rounded-md flex items-center gap-10 flex-shrink">
                        <div class="flex justify-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="87" height="87" viewBox="0 0 87 87"
                                fill="none">
                                <rect x="0.630859" y="0.262695" width="86" height="86.1897" rx="6.89517"
                                    fill="#E8FBE7" />
                                <path opacity="0.4"
                                    d="M54.6309 55.9341H53.2375C51.7708 55.9341 50.3775 56.5024 49.3508 57.5291L46.2158 60.6274C44.7858 62.0391 42.4576 62.0391 41.0276 60.6274L37.8925 57.5291C36.8658 56.5024 35.4542 55.9341 34.0059 55.9341H32.6309C29.5875 55.9341 27.1309 53.4958 27.1309 50.4892V30.4874C27.1309 27.4808 29.5875 25.0425 32.6309 25.0425H54.6309C57.6742 25.0425 60.1309 27.4808 60.1309 30.4874V50.4892C60.1309 53.4775 57.6742 55.9341 54.6309 55.9341Z"
                                    fill="#009E3D" />
                                <path
                                    d="M43.6311 40.4425C45.9902 40.4425 47.9028 38.53 47.9028 36.1709C47.9028 33.8117 45.9902 31.8992 43.6311 31.8992C41.2719 31.8992 39.3594 33.8117 39.3594 36.1709C39.3594 38.53 41.2719 40.4425 43.6311 40.4425Z"
                                    fill="#009E3D" />
                                <path
                                    d="M48.5437 48.9674C50.0287 48.9674 50.8904 47.3174 50.0654 46.0891C48.8187 44.2374 46.3987 42.9907 43.6304 42.9907C40.862 42.9907 38.442 44.2374 37.1953 46.0891C36.3703 47.3174 37.232 48.9674 38.717 48.9674H48.5437Z"
                                    fill="#009E3D" />
                            </svg>
                        </div>
                        <div class="w-24">
                            <p class="text-sm font-medium text-gray-400">Total Pendaftaran Yang Diterima</p>
                            <p class="font-extrabold text-2xl text-[#009E3D]">{{ $pendaftaran_diterima->total_diterima }}
                            </p>
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
                            <p class="text-sm font-medium text-gray-400">Total Revisi</p>
                            <p class="font-extrabold text-2xl text-[#4285F4]">{{ $revisi->total_revisi }}</p>
                        </div>
                    </div>


                </div>

                <div class="mt-10 overflow-hidden border w-full">
                    <p class="text-xl text-center font-bold mb-3">Data Presensi Keseluruhan</p>
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
