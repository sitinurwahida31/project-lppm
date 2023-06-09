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
<body>
    {{-- navbar --}}
    @include('layout.navbar_user')
    {{-- content --}}
    <div class="m-6 bg-white w-auto h-auto pl-5 pr-5 pb-8 pt-3 ml-16 mr-16 mt-20 mb-16 rounded-xl shadow-lg">
        <div class=" gap-x-4 w-full">
            {{-- breadcrumb --}}
            <div class="flex justify-end items-center mb-10">
                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="/" class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-gray-500 dark:text-gray-400 dark:hover:text-white">
                        <svg aria-hidden="true" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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
                        <a href="/pengabdian" class="ml-1 text-sm font-medium text-gray-500 hover:text-gray-500 md:ml-2 dark:text-gray-400 dark:hover:text-white">Pengabdian</a>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                        <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Arsip</span>
                        </div>
                    </li>
                    </ol>
                </nav>
            </div>
            <div class="flex justify-between">
                {{-- fitur search --}}
                <div class="w-[45%]">
                    <form action="/pengabdian/arsipdosen" class="flex items-center">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <input type="text" id="simple-search" name="search" class="shadow-md bg-white border border-slate-200 text-gray-700 text-sm rounded-l-lg focus:ring-gray-300 focus:border-gray-300 block w-[100%] pl-2 p-2 py-1.5 dark:bg-gray-400 dark:border-gray-200 dark:placeholder-gray-400 dark:text-white dark:focus:ring-amber-400 dark:focus:border-amber-400" placeholder="Search..">
                        </div>
                        <button type="submit" class="shadow-md flex justify-center p-2 ml-0 text-sm font-medium h-full w-14 text-gray-600 bg-slate-100 rounded-r-lg border border-gray-200 hover:bg-slate-200 focus:ring-2 focus:outline-none focus:ring-gray-200 dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800">
                            <svg class="w-4 h-4 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </form>
                </div>
                <a href="/pengabdian" class="py-1 px-5 cursor-pointer mt-1 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-gray-600 rounded-lg border border-gray-200 hover:bg-gray-400 hover:text-gray-200 focus:z-10 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:border-gray-700 dark:hover:text-white dark:hover:bg-gray-500">Back</a>  
            </div>
        </div>

        {{-- Table --}}
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-7">
            <table class="w-full text-sm text-center text-gray-500 dark:text-gray-400">
                <thead class="text-sm text-white bg-amber-400 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-2">
                            Judul Penelitian
                        </th>
                        <th scope="col" class="px-6 py-2">
                            Nomer Surat
                        </th>
                        <th scope="col" class="px-6 py-2">
                            Semester
                        </th>

                        <th scope="col" class="px-6 py-2">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $data)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-2 font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $data->judul_surat }}
                            </th>
                            <td class="px-6 py-2">
                                {{ $data->nomor_surat }}
                            </td>
                            <td class="px-6 py-2">
                                {{ $data->semester }}
                            </td>
                            <td class="px-6 py-2 max-w-[240px] mx-auto flex justify-center">
                                <a href="/downloadsrttgspengabdiandosen/{{ $data->id }}" target="_blank" class="text-white flex gap-1 bg-green-600 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-normal rounded-md text-sm px-4 py-1.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
                                        <path d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293V6.5z"/>
                                        <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                                    </svg>
                                    Tugas
                                </a>
                                <a href="/downloadsrtpgshanpengabdiandosen/{{ $data->id }}" target="_blank" class="text-white flex gap-1 bg-green-600 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-normal rounded-md text-sm px-4 py-1.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
                                        <path d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293V6.5z"/>
                                        <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                                    </svg>
                                    Pengesahan
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- pagination --}}
        {{ $datas->links() }}
    </div>

    @include('layout.footer')

</body>
</html>
