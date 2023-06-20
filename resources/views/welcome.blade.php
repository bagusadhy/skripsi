{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto bg-gray-100">
                        <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="#FF2D20"/>
                    </svg>
                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <a href="https://laravel.com/docs" class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900">Documentation</h2>

                                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                    Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laracasts.com" class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900">Laracasts</h2>

                                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laravel-news.com" class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900">Laravel News</h2>

                                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <div class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900">Vibrant Ecosystem</h2>

                                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Forge</a>, <a href="https://vapor.laravel.com" class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Vapor</a>, <a href="https://nova.laravel.com" class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nova</a>, and <a href="https://envoyer.io" class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Telescope</a>, and more.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center gap-4">
                            <a href="https://github.com/sponsors/taylorotwell" class="group inline-flex items-center hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 group-hover:stroke-gray-600">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> --}}


<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins&display=swap"
        rel="stylesheet">
    {{-- <link rel="stylesheet" href="./assets/css/style.css">
     --}}

    @vite('resources/css/app.css')
</head>

<body>


    <section class="mx-10">

        <!-- nav start -->
        <nav class="bg-white py-2 z-50">
            <div class="flex justify-between max-w-7xl px-2 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                        <div class="flex flex-shrink-0 items-center">
                            <img class="bloc/imagesk -mx-8 md:mx-0 scale-75 md:scale-100" src="./assets/images/logo.png"
                                alt="Your Company">
                        </div>
                    </div>

                    <div class="absolute right-0 hidden md:flex md:items-center mx-10">
                        <a href="./sign-in.html"
                            class="bg-primary hover:bg-primaryhover text-white w-40 h-11 font-bold text-center py-2 rounded self-center hidden md:block">
                            Login
                        </a>
                    </div>

                    <div class="mx-10 absolute flex items-center sm:hidden right-0">
                        <!-- Mobile menu button-->
                        <button type="button"
                            class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-primaryhover hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                            aria-controls="mobile-menu" aria-expanded="false" id="toggler">
                            <span class="sr-only">Open main menu</span>

                            <!-- menu button -->
                            <svg id="openBtn" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>

                            <!-- x button -->
                            <svg id="closeBtn" class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="hidden sm:hidden py-10" id="mobile-menu">
                <div class="space-y-1 px-2 pt-2 pb-3">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="./sign-in.html"
                        class="bg-primary hover:bg-primaryhover text-white block px-3 py-2 rounded-md text-base font-medium text-center"
                        aria-current="page">Login</a>
                </div>
            </div>
        </nav>
        <!-- nav end -->

        <!-- main content start -->
        <main class="">
            <div class="-mx-10 bg-no-repeat text-white bg-center lg:h-[624px] overflow-hidden bg-cover"
                style="background-image: url('./assets/images/hero.png');">
                <div class="h-full w-full backdrop-blur-sm px-10 self-center flex flex-col justify-center py-10">
                    <h1 class="font-bold text-6xl mb-20">Program PRAKERIN<br>
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
                            <img src="./assets/images/speaker.png" class="" alt="">
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
                            <img src="./assets/images/speaker.png" class="" alt="">
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
                            <img src="./assets/images/speaker.png" class="" alt="">
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
                            <img src="./assets/images/speaker.png" class="" alt="">
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
                    <img src="./assets/images/tentang-program.png" class="hidden lg:block" alt="">
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
                    <img src="./assets/images/tentang-program.png" class="hidden lg:block" alt="">
                </div>
            </section>
            <!-- tentang end -->


        </main>
        <!-- main content end -->

        <!-- back to top -->
        <a href="#" class="h-10 w-10 bg-primary rounded flex fixed bottom-20 right-5 cursor-pointer z-0"><span
                class="text-xl text-center text-white m-auto">↑</span></a>

        <footer class="bg-success -mx-10">
            <div class="p-10">
                <div class="">
                    <img src="./assets/images/logo-smk.png" alt=""
                        class="mb-5 scale-75 -mx-10 md:mx-0 md:scale-100">
                    <p class="text-white mb-10">Jl. Veteran No.17, Ketawanggede, Kec. Lowokwaru, <br> Kota Malang, Jawa
                        Timur 65145</p>
                </div>

                <div class="flex gap-5 justify-center md:justify-start">
                    <a href="">
                        <span>
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M9.95301 1.42198C11.517 1.34998 12.0157 1.33398 15.9997 1.33398C19.9837 1.33398 20.4823 1.35132 22.045 1.42198C23.6077 1.49265 24.6743 1.74198 25.6077 2.10332C26.585 2.47265 27.4717 3.04998 28.205 3.79665C28.9517 4.52865 29.5277 5.41398 29.8957 6.39265C30.2583 7.32598 30.5063 8.39265 30.5783 9.95265C30.6503 11.5193 30.6663 12.018 30.6663 16.0006C30.6663 19.9846 30.649 20.4833 30.5783 22.0473C30.5077 23.6073 30.2583 24.674 29.8957 25.6073C29.5277 26.5861 28.9507 27.4729 28.205 28.206C27.4717 28.9526 26.585 29.5286 25.6077 29.8966C24.6743 30.2593 23.6077 30.5073 22.0477 30.5793C20.4823 30.6513 19.9837 30.6673 15.9997 30.6673C12.0157 30.6673 11.517 30.65 9.95301 30.5793C8.39301 30.5086 7.32634 30.2593 6.39301 29.8966C5.41424 29.5286 4.52744 28.9517 3.79434 28.206C3.04818 27.4735 2.47076 26.5872 2.10234 25.6086C1.74101 24.6753 1.49301 23.6086 1.42101 22.0486C1.34901 20.482 1.33301 19.9833 1.33301 16.0006C1.33301 12.0166 1.35034 11.518 1.42101 9.95532C1.49167 8.39265 1.74101 7.32598 2.10234 6.39265C2.47131 5.41409 3.04917 4.52773 3.79567 3.79532C4.52773 3.04932 5.41364 2.47191 6.39168 2.10332C7.32501 1.74198 8.39168 1.49398 9.95168 1.42198H9.95301ZM21.9263 4.06198C20.3797 3.99132 19.9157 3.97665 15.9997 3.97665C12.0837 3.97665 11.6197 3.99132 10.073 4.06198C8.64234 4.12732 7.86634 4.36598 7.34901 4.56732C6.66501 4.83398 6.17568 5.14998 5.66234 5.66332C5.17573 6.13672 4.80125 6.71303 4.56634 7.34998C4.36501 7.86732 4.12634 8.64332 4.06101 10.074C3.99034 11.6206 3.97567 12.0846 3.97567 16.0006C3.97567 19.9166 3.99034 20.3806 4.06101 21.9273C4.12634 23.358 4.36501 24.134 4.56634 24.6513C4.80101 25.2873 5.17568 25.8646 5.66234 26.338C6.13568 26.8246 6.71301 27.1993 7.34901 27.434C7.86634 27.6353 8.64234 27.874 10.073 27.9393C11.6197 28.01 12.0823 28.0246 15.9997 28.0246C19.917 28.0246 20.3797 28.01 21.9263 27.9393C23.357 27.874 24.133 27.6353 24.6503 27.434C25.3343 27.1673 25.8237 26.8513 26.337 26.338C26.8237 25.8646 27.1983 25.2873 27.433 24.6513C27.6343 24.134 27.873 23.358 27.9383 21.9273C28.009 20.3806 28.0237 19.9166 28.0237 16.0006C28.0237 12.0846 28.009 11.6206 27.9383 10.074C27.873 8.64332 27.6343 7.86732 27.433 7.34998C27.1663 6.66598 26.8503 6.17665 26.337 5.66332C25.8636 5.17675 25.2873 4.80226 24.6503 4.56732C24.133 4.36598 23.357 4.12732 21.9263 4.06198ZM14.1263 20.522C15.1726 20.9575 16.3375 21.0163 17.4222 20.6883C18.507 20.3603 19.4442 19.6659 20.0738 18.7236C20.7034 17.7814 20.9864 16.6498 20.8744 15.5221C20.7624 14.3944 20.2624 13.3406 19.4597 12.5406C18.948 12.0293 18.3293 11.6377 17.6481 11.3942C16.9669 11.1506 16.2402 11.0611 15.5203 11.1321C14.8004 11.2031 14.1052 11.4329 13.4847 11.8048C12.8643 12.1768 12.334 12.6816 11.9321 13.2831C11.5302 13.8846 11.2666 14.5677 11.1604 15.2833C11.0541 15.9988 11.1079 16.729 11.3177 17.4213C11.5276 18.1136 11.8883 18.7508 12.374 19.2869C12.8596 19.8231 13.4581 20.2449 14.1263 20.522ZM10.669 10.67C11.369 9.96995 12.2001 9.41465 13.1147 9.0358C14.0294 8.65694 15.0097 8.46195 15.9997 8.46195C16.9897 8.46195 17.97 8.65694 18.8846 9.0358C19.7992 9.41465 20.6303 9.96995 21.3303 10.67C22.0304 11.37 22.5857 12.2011 22.9645 13.1157C23.3434 14.0304 23.5384 15.0107 23.5384 16.0006C23.5384 16.9906 23.3434 17.9709 22.9645 18.8856C22.5857 19.8002 22.0304 20.6313 21.3303 21.3313C19.9166 22.7451 17.9991 23.5393 15.9997 23.5393C14.0003 23.5393 12.0828 22.7451 10.669 21.3313C9.25523 19.9175 8.46097 18 8.46097 16.0006C8.46097 14.0013 9.25523 12.0838 10.669 10.67ZM25.2103 9.58465C25.3838 9.42101 25.5227 9.22422 25.6187 9.00595C25.7148 8.78767 25.7661 8.55234 25.7696 8.31389C25.773 8.07544 25.7286 7.83871 25.639 7.61773C25.5493 7.39675 25.4163 7.196 25.2476 7.02737C25.079 6.85874 24.8782 6.72566 24.6573 6.63601C24.4363 6.54635 24.1996 6.50195 23.9611 6.50543C23.7227 6.5089 23.4873 6.56019 23.269 6.65625C23.0508 6.7523 22.854 6.89118 22.6903 7.06465C22.3721 7.40202 22.1979 7.85015 22.2046 8.31389C22.2114 8.77764 22.3986 9.22049 22.7266 9.54844C23.0545 9.87639 23.4974 10.0636 23.9611 10.0704C24.4248 10.0771 24.873 9.9029 25.2103 9.58465Z"
                                    fill="#F5F5F5" />
                            </svg>
                        </span>
                    </a>
                    <a href="">
                        <span>
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g 3clip-path="url(#clip0_459_10100)">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0 16.0893C0 24.044 5.77733 30.6587 13.3333 32V20.444H9.33333V16H13.3333V12.444C13.3333 8.444 15.9107 6.22267 19.556 6.22267C20.7107 6.22267 21.956 6.4 23.1107 6.57733V10.6667H21.0667C19.1107 10.6667 18.6667 11.644 18.6667 12.8893V16H22.9333L22.2227 20.444H18.6667V32C26.2227 30.6587 32 24.0453 32 16.0893C32 7.24 24.8 0 16 0C7.2 0 0 7.24 0 16.0893Z"
                                        fill="#F5F5F5" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_459_10100">
                                        <rect width="32" height="32" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                    </a>
                    <a href="">
                        <span>
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.052 32C22.128 32 28.734 19.6856 28.734 9.02522C28.734 8.68063 28.734 8.33111 28.722 7.98651C30.0081 6.84069 31.1181 5.4221 32 3.7972C30.7986 4.4491 29.5255 4.87875 28.222 5.0722C29.5951 4.06214 30.6234 2.47288 31.116 0.599828C29.826 1.54039 28.414 2.20066 26.942 2.55172C25.9524 1.25462 24.6428 0.395329 23.2162 0.10695C21.7895 -0.181429 20.3254 0.117199 19.0507 0.956578C17.7759 1.79596 16.7616 3.12924 16.1649 4.74991C15.5682 6.37058 15.4224 8.18818 15.75 9.92118C13.1395 9.76008 10.5856 8.92546 8.25409 7.47144C5.92254 6.01743 3.86537 3.97649 2.216 1.48101C1.37868 3.26081 1.12315 5.3661 1.50129 7.36935C1.87944 9.37261 2.86291 11.1236 4.252 12.2669C3.21108 12.2234 2.19304 11.8794 1.28 11.2626V11.3734C1.28179 13.2379 1.80661 15.0444 2.76575 16.4876C3.72488 17.9308 5.0595 18.9222 6.544 19.2942C5.98053 19.4853 5.39846 19.5805 4.814 19.5773C4.40197 19.5788 3.99076 19.5318 3.586 19.437C4.00557 21.042 4.82255 22.4452 5.92249 23.4502C7.02244 24.4553 8.35027 25.0117 9.72 25.0416C7.39311 27.2908 4.5188 28.5107 1.56 28.5048C1.03864 28.5075 0.517646 28.4705 0 28.394C3.00303 30.7503 6.4906 32.0014 10.052 32Z"
                                    fill="white" />
                            </svg>
                        </span>
                    </a>
                    <a href="">
                        <span>
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_459_10104)">
                                    <path
                                        d="M31.3332 8.67545C31.152 8.02909 30.799 7.44391 30.3118 6.98212C29.8109 6.50612 29.1969 6.16563 28.5278 5.99278C26.0238 5.33278 15.9918 5.33278 15.9918 5.33278C11.8096 5.2852 7.62842 5.49448 3.47185 5.95945C2.80277 6.14507 2.18993 6.49317 1.68785 6.97278C1.19451 7.44745 0.83718 8.03278 0.650513 8.67412C0.202104 11.0898 -0.0157643 13.5426 -0.000153652 15.9995C-0.0161537 18.4541 0.20118 20.9061 0.650513 23.3248C0.83318 23.9635 1.18918 24.5461 1.68385 25.0168C2.17851 25.4875 2.79451 25.8275 3.47185 26.0075C6.00918 26.6661 15.9918 26.6661 15.9918 26.6661C20.1794 26.7138 24.3659 26.5045 28.5278 26.0395C29.1969 25.8666 29.8109 25.5261 30.3118 25.0501C30.7989 24.5884 31.1514 24.0032 31.3318 23.3568C31.792 20.9421 32.0157 18.4882 31.9998 16.0301C32.0345 13.5616 31.811 11.0962 31.3332 8.67412V8.67545ZM12.8025 20.5648V11.4355L21.1492 16.0008L12.8025 20.5648Z"
                                        fill="#F5F5F5" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_459_10104">
                                        <rect width="32" height="32" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>

            <hr>
            <p class="text-center text-white">Copyright © 2022 SMK Negeri 2 Malang.</p>
        </footer>

    </section>


    <script>
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
</body>

</html>
