<!DOCTYPE html>
<html lang="en">
    @include('layout.head')
<body>
    {{-- navbar --}}
    @include('layout.navbar_user')

    {{-- content --}}
    <div class="bg-[#4caf50] w-full h-auto md:h-screen grid md:grid-cols-3 md:gap-4 grid-cols-1 md:fixed">
        <div class="flex justify-center items-center ">
            <div class="hidden md:block">
                <img class="pb-2 w-20 md:w-80 h-auto" src="img/icons/fitme.svg" alt="">
                <div class="my-7 ring-4 ring-gray-200 text-gray-200 font-extrabold text-2xl text-center rounded-3xl py-4 px-12">
                    <h1>Pengabdian</h1>
                </div>

            </div>
        </div>
        {{-- breadcrumb --}}
        <div class="md:col-span-2 shadow  md:rounded-l-full bg-white mt-16 pb-20 md:mt-0">
            <div class="flex justify-end items-center mb-10 md:mb-24 mt-24 mr-10 md:mr-16">
                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="/" class="inline-flex items-center text-base font-medium text-gray-500 hover:text-gray-500 dark:text-gray-400 dark:hover:text-white">
                            <svg aria-hidden="true" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                            </svg>
                            Home
                            </a>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                            <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-base font-medium text-gray-500 md:ml-2 dark:text-gray-400">Pengabdian</span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
            {{-- fitur --}}
            <div class="flex justify-center mt-1 md:mt-7 my-4 md:ml-32 ml-0">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-14 md:grid md:grid-cols-2 md:gap-10 ">
                    <a href="/pengabdian/inputpengabdian" class="rounded-xl w-auto px-7 py-3 md:p-5 bg-white shadow-md shadow-gray-400 focus:ring-4 focus:ring-gray-200 text-gray-700 focus:text-[#4caf50] hover:bg-gray-100 hover:text-[#4caf50]">
                        <div class="flex justify-center">
                            <img class="pb-2 w-28 md:w-36 h-auto" src="img/icons/fitmesurat.svg" alt="">
                        </div>
                        <p class="text-sm font-semibold text-center py-1">Surat tugas dan pengesahan</p>
                    </a>
                    <a href="/pengabdian/arsipdosen" class="rounded-xl w-auto px-7 py-3 md:p-5 bg-white shadow-md shadow-gray-400 focus:ring-4 focus:ring-gray-200 text-gray-700 focus:text-[#4caf50] hover:bg-gray-100 hover:text-[#4caf50]">
                        <div class="flex justify-center pt-3">
                            <img class="pb-2 w-36 md:w-48 h-auto" src="img/icons/fitmearsip.svg" alt="">
                        </div>
                        <p class="text-sm font-semibold text-center pt-3">Arsip Pengabdian</p>
                    </a>

                </div>
            </div>
        </div>
    </div>
    {{-- footer --}}
    {{-- @include('layout.footer') --}}
</body>
</html>
