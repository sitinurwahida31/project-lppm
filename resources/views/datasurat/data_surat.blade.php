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

        <div class="flex flex-row items-center w-auto h-12 m-6 mt-8 bg-white rounded-lg shadow-lg">
            <span class="pl-5 text-base font-bold text-green-700 sm:flex ">DATA SURAT</span>
        </div>

        {{-- card 1 --}}
        <div class="w-auto h-auto pt-6 pb-8 pl-5 pr-5 m-6 mt-8 ml-6 mr-6 bg-white shadow-lg rounded-xl">
            <div class="flex items-center w-full gap-x-4">
                <span class="flex text-base font-bold text-green-700 ">Ketua LPPM</span>
            </div>
            
            {{-- Table --}}
            <div class="relative mt-4 overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-center text-gray-500 dark:text-gray-400">
                    <thead class="text-sm text-white bg-amber-400 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-2">
                                No
                            </th>
                            <th scope="col" class="px-6 py-2">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-2">
                                NIDN
                            </th>
                            <th scope="col" class="px-6 py-2">
                                Jabatan
                            </th>
                            <th scope="col" class="px-6 py-2">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($stakeholder as $item)
                        @endforeach
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-2 font-normal text-gray-900 whitespace-nowrap dark:text-white ">
                                1
                            </th>
                            <th scope="row"
                                class="px-6 py-2 font-normal text-gray-900 whitespace-nowrap dark:text-white ">
                                {{ $item->nama }}
                            </th>
                            <td class="px-6 py-2">
                                {{ $item->nomor_induk }}
                            </td>

                            <td class="px-6 py-2">
                                {{ $item->jabatan }}
                            </td>
                            <td class="flex justify-center px-6 py-2">
                                <a href="/editketualppm/{{ $item->id }}"
                                    class="font-medium p-2 rounded text-white bg-green-600 dark:text-gray-500 hover:underline mr-1 m-0.5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            {{-- ===DATA FAKULTAS=== --}}
            <div class="flex items-center w-full mt-8 gap-x-4">
                <span class="flex mb-4 text-base font-bold text-green-700 ">Data Fakultas</span>
            </div>
            <div class="flex items-center w-full mb-4 gap-x-4 sm:flex md:justify-between">
                {{-- Button tambah --}}
                <a href="/createfakultas"
                    class=" shadow-md px-6 py-1.5 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-500">Tambah
                    Data</a>            
            </div>

            {{-- Table --}}
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-7">
                <table class="w-full text-sm text-center text-gray-500 dark:text-gray-400">
                    <thead class="text-sm text-white bg-amber-400 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-2">
                                No
                            </th>
                            <th scope="col" class="px-6 py-2">
                                Nama Fakultas
                            </th>
                            <th scope="col" class="px-6 py-2">
                                Nama Ketua Dekan
                            </th>
                            <th scope="col" class="px-6 py-2">
                                NIDN/NIP Dekan
                            </th>
                            <th scope="col" class="px-6 py-2">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fakultas as $item)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-4 py-2 font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $loop->iteration }}
                                </th>
                                <td class="px-6 py-2">
                                    {{ $item->nama_fakultas }}
                                </td>
                                <td class="px-6 py-2">
                                    {{ $item->nama_dekan }}
                                </td>
                                <td class="px-6 py-2">
                                    {{ $item->nomor_induk_dekan }}
                                </td>
                                <td class="flex justify-center px-6 py-2">
                                    <a href="/editfakultas/{{ $item->id }}"
                                        class="font-medium p-2 rounded text-white bg-green-600 dark:text-gray-500 hover:underline mr-1 m-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                        </svg>
                                    </a>
                                    <form action="/destroyfakultas/{{ $item->id }}" method="post">
                                        @csrf
                                        <button type="submit" onclick="return confirm('Yakin Hapus Program Studi?')"
                                            class="font-medium p-2 text-white rounded bg-red-600 dark:gray-blue-500 hover:underline m-0.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

            {{-- pagination --}}
            {{-- {{ $prodi->links() }} --}}
            
            
            {{-- ===DATA PRODI=== --}}
            <div class="flex items-center w-full mt-8 gap-x-4">
                <span class="flex mb-4 text-base font-bold text-green-700 ">Data Prodi</span>
            </div>
            <div class="flex items-center w-full mb-4 gap-x-4 sm:flex md:justify-between">
                {{-- Button tambah --}}
                <a href="/createprodi"
                    class=" shadow-md px-6 py-1.5 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-500">Tambah
                    Data</a>

                {{-- fitur search --}}
                <div class="mt-4 md:mt-0 md:w-[35%] w-auto">
                    <form action="/datasurat" class="flex items-center justify-end">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-400 dark:text-gray-400"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" name="search" id="simple-search"
                                class="shadow-md bg-white border border-slate-200 text-gray-700 text-xs rounded-l-lg focus:ring-gray-300 focus:border-gray-300 block w-[100%] pl-10 p-2 py-2 dark:bg-gray-400 dark:border-gray-200 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-400 dark:focus:border-amber-400"
                                placeholder="Search">
                        </div>
                        <button type="submit"
                            class="shadow-md flex justify-center p-2 py-1.5 ml-0 text-sm font-medium h-full w-14 text-gray-600 bg-slate-100 rounded-r-lg border border-gray-200 hover:bg-slate-200 focus:ring-2 focus:outline-none focus:ring-gray-200 dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">
                            <svg class="w-5 h-5 " fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </form>
                </div>
            </div>

            {{-- Table --}}
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-7">
                <table class="w-full text-sm text-center text-gray-500 dark:text-gray-400">
                    <thead class="text-sm text-white bg-amber-400 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-2">
                                No
                            </th>
                            <th scope="col" class="px-6 py-2">
                                Nama Prodi
                            </th>
                            <th scope="col" class="px-6 py-2">
                                Ketua Prodi
                            </th>
                            <th scope="col" class="px-6 py-2">
                                NIDN
                            </th>
                            <th scope="col" class="px-6 py-2">
                                Fakultas
                            </th>
                            <th scope="col" class="px-6 py-2">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($prodi as $item)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-4 py-2 font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $loop->iteration }}
                                </th>
                                <td class="px-6 py-2">
                                    {{ $item->nama_prodi }}
                                </td>
                                <td class="px-6 py-2">
                                    {{ $item->ketua_prodi }}
                                </td>

                                <td class="px-6 py-2">
                                    {{ $item->nomor_induk_kaprodi }}
                                </td>
                                <td class="px-6 py-2">
                                    {{ $item->nama_fakultas }}
                                </td>
                                <td class="flex justify-center px-6 py-2">
                                    <a href="/editprodi/{{ $item->id }}"
                                        class="font-medium p-2 rounded text-white bg-green-600 dark:text-gray-500 hover:underline mr-1 m-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                        </svg>
                                    </a>
                                    <form action="/destroyprodi/{{ $item->id }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" onclick="return confirm('Yakin Hapus Program Studi?')"
                                            class="font-medium p-2 text-white rounded bg-red-600 dark:gray-blue-500 hover:underline m-0.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                            </svg>
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

            {{-- pagination --}}
            {{ $prodi->links() }}



            {{-- ===DATA SEMESTER === --}}
            <div class="flex items-center w-full mt-8 gap-x-4">
                <span class="flex mb-4 text-base font-bold text-green-700 ">Data Semester</span>
            </div>
            <div class="flex items-center w-full mb-4 gap-x-4 sm:flex md:justify-between">
                {{-- Button tambah --}}
                {{-- <a href="/createsemester" class=" shadow-md px-6 py-1.5 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-500">Tambah Data</a> --}}
                <button data-modal-toggle="createSemester"
                    class=" shadow-md px-6 py-1.5 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-500">Tambah
                    Data</button>

                <!-- Main modal -->
                <div id="createSemester" tabindex="-1" aria-hidden="true"
                    class="fixed top-0 left-0 right-0 z-50 hidden w-full overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                    <div class="relative w-full h-full max-w-2xl p-4 md:h-auto">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-[#f7f2f0]">
                            <!-- Modal header -->
                            <div
                                class="flex items-start justify-between p-5 bg-green-900 border-b rounded-t-lg dark:border-gray-600 hover:bg-green-900">
                                <p class="font-semibold text-white">Form Input Semeseter</p>
                                <button type="button"
                                    class="text-[659093] bg-transparent hover:bg-white text-white hover:text-black rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                                    data-modal-toggle="createSemester">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="min-w-full p-6 space-y-6 overflow-auto bg-scroll bg-contain h-54 ">

                                <form action="/storesemester" method="post">
                                    @csrf
                                    <div class="mb-6">
                                        <label for="tahun_semester"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun
                                            Semester</label>
                                        <input type="number" name="tahun_semester" id="tahun_semester"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Input Tahun Semester" required>
                                    </div>
                                    <div class="mb-6">
                                        <label for="nomor_semester"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                                            Semester</label>
                                        <input type="number" name="nomor_semester" id="nomor_semester"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="Input Nomor Semester" required>
                                    </div>
                                    <button type="submit"
                                        class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Submit</button>
                                </form>
                            </div>
                            <!-- Modal footer -->
                        </div>
                    </div>
                </div>
            </div>

            {{-- Table --}}
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-7">
                <table class="w-full text-sm text-center text-gray-500 dark:text-gray-400">
                    <thead class="text-sm text-white bg-amber-400 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-2">
                                No
                            </th>
                            <th scope="col" class="px-6 py-2">
                                Tahun Semester
                            </th>
                            <th scope="col" class="px-6 py-2">
                                Kode Semester
                            </th>
                            <th scope="col" class="px-6 py-2">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($semester as $item)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-4 py-2 font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $loop->iteration }}
                                </th>
                                <td class="px-6 py-2">
                                    {{ $item->tahun_semester }}
                                </td>
                                <td class="px-6 py-2">
                                    {{ $item->nomor_semester }}
                                </td>
                                <td class="flex justify-center px-6 py-2">
                                    <form action="/destroysemester/{{ $item->id }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" onclick="return confirm('Yakin Hapus Semester?')"
                                            class="font-medium p-2 text-white rounded bg-red-600 dark:gray-blue-500 hover:underline m-0.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

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
