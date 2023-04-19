<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>LPPM UNCP</title>
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

    <script src="https://cdn.tailwindcss.com?plugins=line-clamp"></script>
</head>
<body class="bg-white">
    {{-- navbar --}}
    @include('layout.navbar_user')
    {{-- content --}}
    {{-- breadcrumb --}}
    <div class="flex justify-end items-center mb-14 mt-20 mr-16">
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="./landingpage" class="inline-flex items-center text-xs font-medium text-gray-500 hover:text-gray-500 dark:text-gray-400 dark:hover:text-white">
                <svg aria-hidden="true" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                </svg>
                Home
                </a>
            </li>
            <li>
                <div class="flex items-center">
                <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
                <a href="./fitmepenelitian" class="ml-1 text-xs font-medium text-gray-500 hover:text-gray-500 md:ml-2 dark:text-gray-400 dark:hover:text-white">Penelitian</a>
                </div>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
                <span class="ml-1 text-xs font-medium text-gray-500 md:ml-2 dark:text-gray-400">Form</span>
                </div>
            </li>
            </ol>
        </nav>
    </div>
    {{-- step --}}
    <div>
        <div class=" h-9 items-center flex justify-center ml-28 mr-28">
            <div class=" rounded-full bg-amber-400 text-white pl-3 pr-3 pt-2 pb-2 text-xs font-bold">
                1
            </div>
            <hr class="border-[1px] border-opacity-50 border-gray-900 w-72">
            <div class=" rounded-full bg-green-900 text-white pl-3 pr-3 pt-2 pb-2 text-xs font-bold">
                2
            </div>
            <hr class="border-[1px] border-opacity-50 border-gray-900 w-72">
            <div class=" rounded-full bg-green-900 text-white pl-3 pr-3 pt-2 pb-2 text-xs font-bold">
                3
            </div>
        </div>
        <div class="mb-14  h-6 ml-36 mr-36 font-medium">
            <span class="pl-[40px]">Form Input</span>
            <span class="pl-[233px]">Surat Tugas</span>
            <span class="pl-[202px]">Surat Pengesahan</span>
        </div>
    </div>
    {{-- form input 1 --}}
    <div class=" mt-20 ml-28 mr-28 mb-10 rounded-b-lg drop-shadow-lg bg-white pt-8">
        <div class="-mt-14  rounded-lg drop-shadow-lg bg-green-900 p-3 text-white font-semibold text-sm">
            DATA PENELITIAN
        </div>
        <form action="" class="p-8">
            {{-- row 1 --}}
            <div class="grid gap-6 mb-4 md:grid-cols-2">
                <div>
                    <label for="small" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Semester</label>
                    <select id="small" class="block w-full p-1 mb-1 text-xs text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a country</option>
                    <option value="US">20221</option>
                    <option value="CA">20222</option>
                    <option value="FR">20231</option>
                    <option value="DE">20232</option>
                    </select>
                </div>
                <div>
                    <label for="last_name" class="block mb-1 text-xs font-medium fxsont-medium text-gray-900 dark:text-white">Nomer Surat</label>
                    <input type="text" id="last_name" class="pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nomer Surat" required>
                </div>
            </div>
            {{-- row 2 --}}
            <div class="mb-4">
                <label for="message" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Judul Penelitian</label>
                <textarea id="message" rows="4" class="block pl-3 pt-2 pb-2 p-1 w-full h-16 text-xs text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Judul Penelitian"></textarea>
            </div>
            {{-- row 3 --}}
            <div class="grid gap-6 mb-4 md:grid-cols-3">
                <div>
                    <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Jangka Waktu Penelitian</label>
                    <input type="text" id="last_name" class="pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Jangka Waktu Penelitian" required>
                </div>
                <div>
                    <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Tanggal Mulai</label>
                    <div class="relative">
                        <input datepicker datepicker-format="mm/dd/yyyy" type="text" class=" bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full pl-10 p-1  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none ">
                            <svg aria-hidden="true" class="w-5 h-4 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <div>
                    <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Tanggal Selesai</label>
                    <div class="relative">
                        <input datepicker datepicker-format="mm/dd/yyyy" type="text" class=" bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full pl-10 p-1  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none ">
                            <svg aria-hidden="true" class="w-5 h-4 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            {{-- row 4 --}}
            <div class="grid gap-6 mb-4 md:grid-cols-2">
                <div>
                    <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Jarak PT ke lokasi Mitra</label>
                    <input type="text" id="last_name" class="pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Jarak PT Ke Lokasi" required>
                </div>
                <div>
                    <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Mitra</label>
                    <input type="text" id="last_name" class="pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Mitra" required>
                </div>
            </div>
            <div class="grid gap-6 mb-4 md:grid-cols-2">
            <div>
                <label for="small" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Sumber Dana</label>
                <select id="small" class="block w-full p-1 mb-1 text-xs text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a country</option>
                    <option value="MD">Mandiri</option>
                    <option value="DR">DRPTM</option>
                    <option value="IU">Internal UNCP</option>
                    <option value="PD">Pemerintah Daerah</option>
                    <option value="LY">Lainnya</option>
                </select>
            </div>
            </div>
            {{-- row 5 --}}
            <div class="grid gap-6 mb-4 md:grid-cols-2">
                <div>
                    <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Biaya Penelitian</label>
                    <input type="text" id="last_name" class="pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Biaya Penelitian" required>
                </div>
                <div>
                    <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Terbilang</label>
                    <input type="text" id="last_name" class="pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tiga Juta Rupiah" required>
                </div>
            </div>
        </form>
    </div>
    {{-- form input 2 --}}
    <div class="mt-14 ml-28 mr-28 mb-10 rounded-b-lg drop-shadow-lg bg-white pt-8">
        <div class="-mt-14  rounded-lg drop-shadow-lg bg-green-900 p-3 text-white font-semibold text-sm">
            DATA KETUA TIM
        </div>
        <form action="" class="p-8">
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Nama Ketua Tim</label>
                    <input type="text" id="last_name" class="pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama Ketua" required>
                </div>
                <div>
                    <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">NIDN/NID</label>
                    <input type="text" id="last_name" class="pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="NIDN/NID" required>
                </div>
                <div>
                    <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Program Studi</label>
                    <input type="text" id="last_name" class="pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Program Studi" required>
                </div>
                <div>
                    <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Jabatan Fungsional</label>
                    <select id="small" class="block w-full p-1 mb-1 text-xs text-gray-900 border border-white rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Choose a country</option>
                        <option value="GB">Guru Besar</option>
                        <option value="LK">Lektor Kepala</option>
                        <option value="LT">Lektor</option>
                        <option value="AH">Asistand Ahli</option>
                        <option value="TP">Tenaga Pengajar</option>
                    </select>
                </div>
                <div>
                    <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Alamat Surel (Email)</label>
                    <input type="text" id="last_name" class="pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email" required>
                </div>
                <div>
                    <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Nomer Handphone (HP)</label>
                    <input type="text" id="last_name" class="pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="HP" required>
                </div>
            </div>
        </form>
    </div>
    {{-- form input 3 --}}
    <div class="mt-14 ml-28 mr-28 mb-10 rounded-sm shadow-lg bg-white pt-8">
        <div class="-mt-14 rounded-lg drop-shadow-lg bg-green-900 p-3 text-white font-semibold text-sm">
            DATA ANGGOTA TIM
        </div>
        <form action="" class="p-8">
            <div class="grid gap-6 mb-6 md:grid-cols-2 ">
                <div>
                    <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Nama Anggota 1</label>
                    <input type="text" id="last_name" class="pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama" required>
                </div>
                <div>
                    <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">NIDN/NID Anggota 1</label>
                    <input type="text" id="last_name" class="pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="NIDN/NID" required>
                </div>
                <div>
                    <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Nama Anggota 2</label>
                    <input type="text" id="last_name" class="pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama" required>
                </div>
                <div>
                    <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">NIDN/NID Anggota 2</label>
                    <input type="text" id="last_name" class="pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="NIDN/NID" required>
                </div>
                <div>
                    <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Nama Anggota 3</label>
                    <input type="text" id="last_name" class="pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama" required>
                </div>
                <div>
                    <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">NIDN/NID Anggota 3</label>
                    <input type="text" id="last_name" class="pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="NIDN/NID" required>
                </div>
                <div>
                    <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Nama Anggota 4</label>
                    <input type="text" id="last_name" class="pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama" required>
                </div>
                <div>
                    <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">NIDN/NID Anggota 4</label>
                    <input type="text" id="last_name" class="pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="NIDN/NID" required>
                </div>

            </div>
            <div class="grid gap-6 mb-6 md:grid-cols-4 ">
                <div>
                    <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Jumlah Mahasiswa/Staf/Alumni</label>
                    <select id="small" class="block w-full p-1 mb-1 text-xs text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Choose a country</option>
                        <option value="GB">1</option>
                        <option value="GB">2</option>
                    </select>
                </div>
            </div>
            <div class="grid gap-6 mb-6 md:grid-cols-2 ">
                <div>
                    <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Nama Mahasiswa 1</label>
                    <input type="text" id="last_name" class="pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama" required>
                </div>
                <div>
                    <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">NIM Mahasiswa 1</label>
                    <input type="text" id="last_name" class="pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nim" required>
                </div>
                <div>
                    <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Nama Mahasiswa 2</label>
                    <input type="text" id="last_name" class="pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama" required>
                </div>
                <div>
                    <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">NIM Mahasiswa 2</label>
                    <input type="text" id="last_name" class="pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nim" required>
                </div>
            </div>
        </form>
    </div>
    {{-- form input 4 --}}
    <div class="mt-14 ml-28 mr-28 mb-10 rounded-sm shadow-lg bg-white pt-8">
        <div class="-mt-14 rounded-lg drop-shadow-lg bg-green-900 p-3 text-white font-semibold text-sm">
            LUARAN PENELITIAN
        </div>
        <form action="" class="p-8">
            <div class="grid gap-6 mb-6 md:grid-cols-1">
                <div>
                    <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Produk</label>
                    <select id="small" class="block w-full p-1 mb-1 text-xs text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Choose a country</option>
                        <option value="PD">Produk</option>
                        <option value="PT">Prototype</option>
                        <option value="DS">Desain</option>
                        <option value="LY">Lainnya</option>
                    </select>
                </div>
            </div>
            <div class="grid gap-6 mb-6 md:grid-cols-1">
                <div>
                    <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Jumlah Mahasiswa/Staf/Alumni</label>
                    <select id="small" class="block w-full p-1 mb-1 text-xs text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Choose a country</option>
                        <option value="JI">Jurnal Nasional ISSN</option>
                        <option value="JT">Jurnal Nasional Terakreditasi</option>
                        <option value="JB">Jurnal Internasional Bereputasi</option>
                        <option value="JA">Lainnya</option>
                    </select>
                </div>
            </div>
        </form>
    </div>
    {{-- button save --}}
    <div class=" flex justify-end mt-14 ml-28 mr-28 mb-16">
        <button type="button" class="py-1 px-5 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-red-600 rounded-lg border border-gray-200 hover:bg-red-400 hover:text-gray-200 focus:z-10 focus:ring-4 focus:ring-red-300 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
            Close
        </button>
        <a href="\tugaspenelitian"><button type="button" class="py-1 px-5 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-green-900 rounded-lg border border-gray-200 hover:bg-green-700 hover:text-gray-200 focus:z-10 focus:ring-4 focus:ring-green-400 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
            Save
        </button></a>
    </div>
    {{-- footer --}}
    @include('layout.footer')

{{-- js datepicker --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/datepicker.min.js"></script>

</body>
</html>