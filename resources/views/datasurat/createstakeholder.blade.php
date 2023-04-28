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
{{-- 
        <div class="bg-white h-9 w-auto m-6 mt-8 rounded-lg shadow-lg flex-row flex items-center">
            <span class="text-green-700 font-bold pl-5 text-sm sm:flex ">DATA SURAT</span>
        </div> --}}

        {{-- card 1 --}}
        <div class="m-6 mb-10 rounded-lg drop-shadow-lg bg-white pt-4">
            <div class="border-b-2 border-slate-100 pb-3">
                <span class="text-green-700 font-bold pl-5 text-sm sm:flex ">Tambah Data </span>
            </div>
            <form class="p-8">
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="nama_ketua" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Nama Ketua Tim</label>
                        <input type="text" id="nama_ketua" name="nama_ketua" value="{{ old('nama_ketua')}}" class="
                        @error('nama_ketua')border-red-400 @enderror pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama Ketua" >
                        <div class="text-red-500 text-sm italic">@error('nama_ketua')*{{ $message }} @enderror</div>
                    </div>
                    <div>
                        <label for="nomor_induk_ketua" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">NIDN/NID</label>
                        <input type="text" id="nomor_induk_ketua" name="nomor_induk_ketua" value="{{ old('nomor_induk_ketua')}}" class="@error('nomor_induk_ketua')border-red-400 @enderror pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="NIDN/NID" >
                        <div class="text-red-500 text-sm italic">@error('nomor_induk_ketua')*{{ $message }} @enderror</div>
                    </div>
                    <div>
                        <label for="prodi_ketua" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Program Studi</label>
                        <select id="prodi_ketua" name="prodi_ketua" class="@error('prodi_ketua')border-red-400 @enderror block w-full p-1 mb-1 text-xs text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="">Pilih Program Studi</option>
                            <option value="Informatika">Informatika</option>
                            <option value="Matematika">Matematika</option>
                        </select>
                        <div class="text-red-500 text-sm italic">@error('prodi_ketua')*{{ $message }} @enderror</div>
                    </div>
                    <div>
                        <label for="jabatan_fungsional" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Jabatan Fungsional</label>
                        <select id="jabatan_fungsional" name="jabatan_fungsional" class="@error('jabatan_fungsional')border-red-400 @enderror block w-full p-1 mb-1 text-xs text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="">Pilih Jabatan Fungsional</option>
                            <option value="GB">Guru Besar</option>
                            <option value="LK">Lektor Kepala</option>
                            <option value="LT">Lektor</option>
                            <option value="AH">Asistand Ahli</option>
                            <option value="TP">Tenaga Pengajar</option>
                        </select>
                        <div class="text-red-500 text-sm italic">@error('jabatan_fungsional')*{{ $message }} @enderror</div>
                    </div>
                    <div>
                        <label for="email" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Alamat Surel (Email)</label>
                        <input type="text" id="email" name="email" value="{{ old('email')}}" class="@error('email')border-red-400 @enderror pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email" >
                        <div class="text-red-500 text-sm italic">@error('email')*{{ $message }} @enderror</div>
                    </div>
                    <div>
                        <label for="telepon" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Nomer Handphone (HP)</label>
                        <input type="text" id="telepon" name="telepon" value="{{ old('telepon')}}" class="@error('telepon')border-red-400 @enderror pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="HP" >
                        <div class="text-red-500 text-sm italic">@error('telepon')*{{ $message }} @enderror</div>
                    </div>
                </div>
                <div class=" flex justify-end mt-6 ">
                    <button type="Reset" class="py-1 px-5 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-red-600 rounded-lg border border-gray-200 hover:bg-red-400 hover:text-gray-200 focus:z-10 focus:ring-4 focus:ring-red-300 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        Reset
                    </button>
                    <button type="submit" class="py-1 px-5 mb-2 text-sm font-medium text-white focus:outline-none bg-green-900 rounded-lg border border-gray-200 hover:bg-green-700 hover:text-gray-200 focus:z-10 focus:ring-4 focus:ring-green-400 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        Save
                    </button>
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
