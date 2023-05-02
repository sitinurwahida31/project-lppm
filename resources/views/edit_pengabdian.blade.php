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
    <!-- <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.1/dist/flowbite.min.css" /> -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        montserrat: ["Montserrat"],
                    },
                    colors: {
                        "dark-green": "#1E3F41",
                        "light-green": "#659093",
                        "cream": "#DDB07F",
                        "cgray": "#F5F5F5",
                    }
                }
            }
        }
    </script>
    <style>

    </style>
<body>
    <div class="responsive-top sticky top-0 z-30 bg-yellow-400 p-5 sm:hidden">
        <div class="flex justify-center bg-white p-2 rounded-lg">
            Data tabel
        </div>
        <div class="container flex-column justify-between mt-4 mb-4 hidden">
            <img class="w-[300px] Logo_uncp" src="img/uncp.png" alt="Logo Universitas Cokroaminoto Palopo">
            <img src="img/icons/toggle_icons.svg" alt="toggle_dashboard" class="w-8 cursor-pointer" id="btnToggle">
        </div>
    </div>

    @include('layout.sidebar')
    <!-- Header / Profile -->
    <div class=" w-full h-screen flex-auto flex-col gap-y-4 bg-slate-100 overflow-y-scroll">

         <!-- Header / Profile -->
         @include('layout.header_admin')

        <div class="bg-white h-9 w-auto m-6 mt-8 rounded-lg shadow-lg flex-row flex items-center">
            <span class="text-green-700 font-bold pl-5 text-sm sm:flex">EDIT DATA PENGABDIAN</span>
        </div>

        <div class="m-6 bg-white w-auto h-auto pl-7 pr-7 pb-8 pt-7 ml-6 mr-6 mt-8 rounded-xl shadow-lg">
            <form action="" class="p-8">
                {{-- row 1 --}}
                <div class="grid gap-6 mb-4 md:grid-cols-2">
                    <div>
                        <label for="small" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Semester</label>
                        <select id="small" class="block w-full p-1 py-2 mb-1 text-xs text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Choose a country</option>
                        <option value="US">20221</option>
                        <option value="CA">20222</option>
                        <option value="FR">20231</option>
                        <option value="DE">20232</option>
                        </select>
                    </div>
                    <div>
                        <label for="last_name" class="block mb-1 text-xs font-medium fxsont-medium text-gray-900 dark:text-white">Nomor Surat</label>
                        <input type="text" id="last_name" class="pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nomer Surat" required>
                    </div>
                </div>
                {{-- row 2 --}}
                <div class="mb-4">
                    <label for="message" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Judul Pengabdian</label>
                    <textarea id="message" rows="4" class="block pl-3 pt-2 pb-2 p-1 w-full h-16 text-xs text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Judul Penelitian"></textarea>
                </div>
                {{-- row 3 --}}
                <div class="grid gap-6 mb-4 md:grid-cols-3">
                    <div>
                        <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Jangka Waktu Pengabdian</label>
                        <input type="text" id="last_name" class="pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Jangka Waktu Penelitian" required>
                    </div>
                    <div>
                        <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Tanggal Mulai</label>
                        <div class="relative">
                            <input datepicker datepicker-format="mm/dd/yyyy" type="text" class=" bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full pl-10 p-1 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
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
                            <input datepicker datepicker-format="mm/dd/yyyy" type="text" class=" bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full pl-10 p-1 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
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
                        <input type="text" id="last_name" class="pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Jarak PT Ke Lokasi" required>
                    </div>
                    <div>
                        <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Mitra</label>
                        <input type="text" id="last_name" class="pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Mitra" required>
                    </div>
                </div>
                <div class="grid gap-6 mb-4 md:grid-cols-2">
                <div>
                    <label for="small" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Sumber Dana</label>
                    <select id="small" class="block w-full p-1 py-2 mb-1 text-xs text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 py-2 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
                        <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Biaya Pengabdian</label>
                        <input type="text" id="last_name" class="pl-3 py-2 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Biaya Penelitian" required>
                    </div>
                    <div>
                        <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Terbilang</label>
                        <input type="text" id="last_name" class="pl-3 py-2 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tiga Juta Rupiah" required>
                    </div>
                </div>
            </form>
            <hr>
            <form action="" class="p-8">
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Nama Ketua Tim</label>
                        <input type="text" id="last_name" class="pl-3 py-2 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama Ketua" required>
                    </div>
                    <div>
                        <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">NIDN/NID</label>
                        <input type="text" id="last_name" class="pl-3 py-2 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="NIDN/NID" required>
                    </div>
                    <div>
                        <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Program Studi</label>
                        <input type="text" id="last_name" class="pl-3 py-2 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Program Studi" required>
                    </div>
                    <div>
                        <label for="small" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Jabatan Fungsional</label>
                        <select id="small" class="block w-full p-1 py-2 mb-1 text-xs text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
                        <input type="text" id="last_name" class="pl-3 py-2 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email" required>
                    </div>
                    <div>
                        <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Nomer Handphone (HP)</label>
                        <input type="text" id="last_name" class="pl-3 py-2 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="HP" required>
                    </div>
                </div>
            </form>
            <hr>
            <form action="" class="p-8">
                <div class="grid gap-6 mb-6 md:grid-cols-2 ">
                    <div>
                        <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Nama Anggota 1</label>
                        <input type="text" id="last_name" class="pl-3 py-2 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama" required>
                    </div>
                    <div>
                        <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">NIDN/NID Anggota 1</label>
                        <input type="text" id="last_name" class="pl-3 py-2 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="NIDN/NID" required>
                    </div>
                    <div>
                        <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Nama Anggota 2</label>
                        <input type="text" id="last_name" class="pl-3 py-2 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama" required>
                    </div>
                    <div>
                        <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">NIDN/NID Anggota 2</label>
                        <input type="text" id="last_name" class="pl-3 py-2 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="NIDN/NID" required>
                    </div>
                    <div>
                        <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Nama Anggota 3</label>
                        <input type="text" id="last_name" class="pl-3 py-2 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama" required>
                    </div>
                    <div>
                        <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">NIDN/NID Anggota 3</label>
                        <input type="text" id="last_name" class="pl-3 py-2 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="NIDN/NID" required>
                    </div>
                    <div>
                        <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Nama Anggota 4</label>
                        <input type="text" id="last_name" class="pl-3 py-2 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama" required>
                    </div>
                    <div>
                        <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">NIDN/NID Anggota 4</label>
                        <input type="text" id="last_name" class="pl-3 py-2 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="NIDN/NID" required>
                    </div>

                </div>
                <div class="grid gap-6 mb-6 md:grid-cols-4 ">
                    <div>
                        <label for="last_name" class="block mb-1 text-xs py-2 font-medium text-gray-900 dark:text-white">Jumlah Mahasiswa/Staf/Alumni</label>
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
                        <input type="text" id="last_name" class="pl-3 py-2 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama" required>
                    </div>
                    <div>
                        <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">NIM Mahasiswa 1</label>
                        <input type="text" id="last_name" class="pl-3 py bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nim" required>
                    </div>
                    <div>
                        <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Nama Mahasiswa 2</label>
                        <input type="text" id="last_name" class="pl-3 py-2 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama" required>
                    </div>
                    <div>
                        <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">NIM Mahasiswa 2</label>
                        <input type="text" id="last_name" class="pl-3 py-2 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nim" required>
                    </div>
                </div>
            </form>
            <hr>
            <form action="" class="p-8">
                <div class="grid gap-6 mb-6 md:grid-cols-1">
                    <div>
                        <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Produk</label>
                        <select id="small" class="block w-full p-1 py-2 mb-1 text-xs text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
                        <label for="last_name" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Publikasi Ilmiah</label>
                        <select id="small" class="block w-full p-1 py-2 mb-1 text-xs text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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


    </div>




    <!--JS Sidebar-->
<script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
<script>
    let btnToggle = document.getElementById('btnToggle');
    let btnToggle2 = document.getElementById('btnToggle2');
    let sidebar = document.querySelector('.sidebar');
    let leftNav = document.getElementById("left-nav");
    btnToggle.onclick = function() {
        sidebar.classList.toggle('in-active');
    }

    btnToggle2.onclick = function() {
        leftNav.classList.toggle('hidden');
    }
</script>
</body>
</html>
