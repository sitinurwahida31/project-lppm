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

    {{-- iconify --}}
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>


</head>

<body class="bg-white">
    <!-- Navbar -->
    @include('layout.navbar_user')
    {{-- content --}}
    <div data-title="Welcome!" data-intro="Hello World!" class="card-demo dark:text-black text-black ">
        <div class="container">
            <div class="jumbotron mt-8 rounded ">
                {{-- hero --}}
                <div class="row bg-gradient-to-r from-white from-10% via-gray-200 via-30% to-white to-90% p-8 ">
                    <div class="gap-40 grid lgx:grid-cols-1 md:grid-cols-2">
                        <div class="master-img">
                            <div class="mt-20 mb-44 ml-16 content mdx:my-20 md:max-w-xl mdx:h-40 mdx:mb-10 rounded-lg drop-shadow-md hover:drop-shadow-xl">
                                {{-- title --}}
                                <div class="row space-y-16">
                                    <h1 class="text-xl font-inter md:text-3xl mdx:text-3xl fadein">
                                        <span class="text-sm mdx:text-xl">Welcome...</span><br><span class="text-amber-400">Lembaga</span> Penelitian <br> <span
                                            class="text-[#000000]">  dan </span> <span class="text-[#000000]">Pengabdian </span> <br> <span class="text-[#000000]"> Kepada </span><span  class="text-amber-400">Masyarakat </span><br>
                                    </h1>
                                    <p class="mt-10 rounded-md text-gray-500 font-semibold text-2xl">
                                        <span class="text-amber-400"> Universitas </span><span class="text-black">Cokroaminoto</span> <span class="text-amber-400">Palopo
                                        </span>
                                    </p>
                                </div>
                                {{-- button Guide --}}
                                <div class="mt-8 mb-7 smx:space-y-5">
                                    <br>
                                    <div class="flex">
                                        <a href="#"
                                            class="absolute mb-300 shadow-md bg-white text-amber-400 font-medium rounded-lg text-sm px-5 -mt-5 text-center inline-flex items-center">
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
                            </div>
                        </div>
                            {{-- <img class="md:visible mdx:hidden rounded-lg shadow-md hover:shadow-lg" src="img/master-img.jpg" alt="master-img"> --}}
                            <img src="https://source.unsplash.com/700x500?computer" alt="image" class="mt-20  md:visible mdx:hidden rounded-xl shadow-md hover:shadow-lg "/>
                    </div>
                </div>
                

                {{-- FASILITAS --}}
                {{-- <div class="fasilitas">

                    <section class="informasi">
                        <div class="mx-8 mb-12 ">
                            <h1 id="informasi" class="text-2xl font-inter text-center mt-8 text-amber-400">User Guide
                            </h1>
                            <div class="flex mx-auto mt-10 ">
                                <a href="#"
                                    class="  block p-6 max-w-sm bg-white rounded-lg  shadow-md hover:bg-gray-100 dark:bg-[#F7F2F0]  dark:hover:bg-gray-100">
                                    <p class=" mdx:text-xs font-normal text-justify  text-gray-700 dark:text-[659093]">
                                        <span class="text-[#659093]">Sistem Informasi</span> Peminjaman alat program studi informatika, fakultas teknik komputer <span class="text-[#659093]">
                                            Universitas cokroaminoto palopo.Sistem informasi ini menjadi salah satu sistem informasi yang di gunakan untuk mempermudah
                                        </span> mahasiswa maupun dosen dalam memberikan layanan  <span
                                            class="text-[#659093]">peminjaman</span> alat di ruangan prodi.
                                    </p>
                                </a>

                            </div>
                        </div>
                    </section>
                </div> --}}
            </div>
            <br>
    </div>

    {{-- footer --}}
    @include('layout.footer')

        <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
</body>
</html>
