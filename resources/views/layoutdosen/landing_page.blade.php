<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Universitas Cokroaminoto Palopo</title>
    <link rel="shortcut icon" href="img/uncok.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="style.css" />
    <link href="https://unpkg.com/intro.js/minified/introjs.min.css" rel="stylesheet">
    <link href="https://unpkg.com/intro.js/themes/introjs-modern.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Lato&family=Roboto:ital,wght@0,400;1,500&display=swap"
        rel="stylesheet" />
    <style>
    #loader {
        display: none;
    }
    </style>
    <!--intro JS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/5.1.0/introjs.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/5.1.0/intro.min.js"></script>
    <!-- Google reCAPTCHA CDN -->
    <script src="https://www.google.com/recaptcha/api.js" async defer>
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>


</head>

<body class="bg-white">
    <!-- Navbar -->
    @include('layout.navbar_user')
    {{-- content --}}
    <div class="ml-14 mr-14 mt-12 w-auto">
        {{-- hero --}}
        <div class="bg-gradient-to-r from-white from-10% via-gray-200 via-30% to-white to-90%  p-10 pt-16 pb-16 flex">
            {{-- title --}}
            <div class="">
                {{-- sub title --}}
                <div class="mt-0">
                    <h1 class="text-lg font-inter md:text-3xl mdx:text-3xl fadein">
                        <span class="text-sm mdx:text-xl font-semibold">Welcome...</span><br><span class="text-amber-400">Lembaga</span> Penelitian <br> <span
                            class="text-black">  dan </span> <span class="text-blak">Pengabdian </span> <br> <span class="text-black"> Kepada </span><span  class="text-amber-400">Masyarakat </span><br>
                    </h1>
                    <p class="mt-5 pb-14 rounded-md text-gray-500 font-semibold text-xl">
                        <span class="text-amber-400"> Universitas </span><span class="text-black">Cokroaminoto</span> <span class="text-amber-400">Palopo
                        </span>
                    </p>
                </div>
                {{-- button --}}
                <div class="flex pb-20">
                    <a href="#"
                        class="absolute shadow-md text-amber-400 font-medium rounded-lg text-sm px-5 -mt-5 text-center inline-flex items-center">
                        User Guide
                        <div class="flex justify-center ml-5 my-3 text-amber-400">
                            <svg class="animate-bounce" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                role="img" width="32" height="32" preserveAspectRatio="xMidYMid meet"
                                viewBox="0 0 16 16">
                                <path fill="currentColor"
                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
            {{-- image --}}
            <div class="ml-40 w-[48%] h-auto flex items-center">
                <img src="https://source.unsplash.com/700x500?computer" alt="image" class="rounded-xl shadow-lg hover:shadow-lg "/>
            </div>
        </div>
    </div>
    {{-- user giude --}}
    <div class="h-auto pb-52 bg-gradient-to-r from-gray-200">
        <h1 id="fasilitas" class=" pt-20 text-3xl text-black font-inter smx:mt-96  smx:text-2xl text-center font-medium fadein">
            User Guide<br>
             <p class="mt-4 mb-20 text-base font-medium rounded-md text-gray-600 text-center">Tahapan Dalam Membuat Surat Tugas Dan Pengesahan</p>
         </h1>
         <div class="flex items-center justify-center ml-14 mr-14">
            <div class="">
                <figure class="relative max-w-lg transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0">
                    <a href="#">
                    <img class="rounded-full" src="img/thp1.jpg" alt="image description">
                    </a>
                    <figcaption class="absolute px-4  text-white bottom-6 pb-12 text-center">
                        <P class="text-xl font-semibold animate-bounce">Tahapan 1</P>
                        <p class="text-sm font-medium mt-3">Silahkan mengisi terlebih dahulu form surat kemudian simpan data</p>
                    </figcaption>
                </figure>
            </div>
            <div class="ml-14 mr-14">
                <figure class="relative max-w-lg transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0">
                    <a href="#">
                    <img class="rounded-full" src="img/thp1.jpg" alt="image description">
                    </a>
                    <figcaption class="absolute px-4  text-white bottom-6 pb-8 text-center">
                        <P class="text-xl font-semibold animate-bounce">Tahapan 2</P>
                        <p class="text-sm font-medium mt-3"> Silahkan download file surat tugas terlebih dahulu sebelum mendownload surat pengesahan</p>
                    </figcaption>
                </figure>
            </div>
            <div class="">
                <figure class="relative max-w-lg transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0">
                    <a href="#">
                    <img class="rounded-full" src="img/thp1.jpg" alt="image description">
                    </a>
                    <figcaption class="absolute px-4  text-white bottom-6 pb-12 text-center">
                        <P class="text-xl font-semibold animate-bounce">Tahapan 3</P>
                        <p class="text-sm font-medium mt-4">Silahkan download file surat pengesahan</p>
                    </figcaption>
                </figure>
            </div>
         </div>
    </div>
    {{-- footer --}}
    @include('layout.footer')

        <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
</body>
</html>
