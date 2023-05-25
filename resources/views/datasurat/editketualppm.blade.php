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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

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
    <div class="sticky top-0 z-30 p-5 bg-yellow-400 responsive-top sm:hidden">
        <div class="flex justify-center p-2 bg-white rounded-lg">
            Data tabel
        </div>
        <div class="container justify-between hidden mt-4 mb-4 flex-column">
            <img class="w-[300px] Logo_uncp" src="img/uncp.png" alt="Logo Universitas Cokroaminoto Palopo">
            <img src="img/icons/toggle_icons.svg" alt="toggle_dashboard" class="w-8 cursor-pointer" id="btnToggle">
        </div>
    </div>

    @include('layout.sidebar')
    <!-- Header / Profile -->
    <div class="flex-col flex-auto w-full h-screen overflow-y-scroll gap-y-4 bg-slate-100">

        <!-- Header / Profile -->
        @include('layout.header_admin')

        <div class="flex flex-row items-center w-auto m-6 mt-8 bg-white rounded-lg shadow-lg h-9">
            <span class="pl-5 text-sm font-bold text-green-700 sm:flex ">
                DATA SURAT/ <span class="italic text-green-500"> Ketua LPPM</span>
            </span>
        </div>

        {{-- card 1 --}}
        <div class="pt-4 m-6 mb-10 bg-white rounded-lg drop-shadow-lg">
            <div class="pb-3 border-b-2 border-slate-100">
                <span class="pl-5 text-sm font-bold text-green-700 sm:flex ">
                    Edit Data
                </span>
            </div>
            <form action="/updatelppm/{{ $ketualppm->id }}" method="post" class="p-8 pb-4">
                @csrf
                <div class="grid gap-6 lg:mx-14 md:mx-10 md:grid-cols-1">
                    <div>
                        <label for="namaketualppm"
                            class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Nama Ketua LPPM</label>
                        <input type="text" required id="namaketualppm" name="namaketualppm" value="{{ old('namaketualppm', $ketualppm->nama)}}"
                            class="
                        @error('namaketualppm')border-red-400 @enderror
                         bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 pl-3 py-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Nama Program Studi">
                        <div class="text-sm italic text-red-500">
                            @error('namaketualppm')
                                *{{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label for="jabatan"
                            class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Jabatan</label>
                        <input type="text" required id="jabatan" name="jabatan" value="{{ old('jabatan', $ketualppm->jabatan)}}"
                            class="
                        @error('jabatan')border-red-400 @enderror
                         bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 pl-3 py-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Nama Program Studi">
                        <div class="text-sm italic text-red-500">
                            @error('jabatan')
                                *{{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="nidn_ketua_lppm"
                            class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">NIDN/NID</label>
                        <input type="number" required id="nidn_ketua_lppm" name="nidn_ketua_lppm" value="{{ old('nidn_ketua_lppm', $ketualppm->nomor_induk)}}" 
                            class="
                            @error('nidn_ketua_lppm')border-red-400 @enderror 
                            pl-3 bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 py-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="NIDN/NID">
                        <div class="text-sm italic text-red-500">
                            @error('nidn_ketua_lppm')
                                *{{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="flex justify-end mt-6 lg:mx-14 md:mx-10">
                    <button type="Reset"
                        class="px-5 py-1 mb-2 mr-2 text-sm font-medium text-white bg-red-600 border border-gray-200 rounded-lg focus:outline-none hover:bg-red-400 hover:text-gray-200 focus:z-10 focus:ring-4 focus:ring-red-300 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        Reset
                    </button>
                    <button type="submit"
                        class="px-5 py-1 mb-2 text-sm font-medium text-white bg-green-900 border border-gray-200 rounded-lg focus:outline-none hover:bg-green-700 hover:text-gray-200 focus:z-10 focus:ring-4 focus:ring-green-400 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
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
