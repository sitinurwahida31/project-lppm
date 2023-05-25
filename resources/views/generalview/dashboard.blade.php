<!DOCTYPE html>
<html lang="en">
    @include('layout.head')
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

    {{-- Sidebar --}}
    @include('layout.sidebar')

    <div class="flex-col flex-auto w-full h-screen overflow-y-scroll gap-y-4 bg-slate-100">


        <!-- Header / Profile -->
        @include('layout.header_admin')

        <div class="flex flex-row items-center w-auto h-12 m-6 mt-8 bg-white rounded-lg shadow-lg">
            <span class="flex pl-5 text-base font-bold text-green-700">DASHBOARD</span>
        </div>

        {{-- card --}}
        <div class="grid w-full grid-cols-1 gap-1 mt-8 md:grid-cols-2 lg:grid-cols-3 px-7">
            <div class="w-auto p-1">
                <div class="bg-green-600 shadow-xl flex flex-col justify-between leading-normal h-[90px] rounded-t-lg">
                    <div class="flex justify-between p-3 leading-normal gap-x-4">
                        <div class="p-1">
                            <span class="font-sans text-xl font-medium text-slate-100">
                                {{ $user }}
                            </span>
                            <hr class="border-slate-100">
                            <span class="font-sans text-sm font-medium text-slate-100 dark:text-gray-400 ">
                                Data User
                            </span>
                        </div>
                        <div class="text-green-200 dark:text-black">
                            <svg xmlns="http://www.w3.org/2000/svg" width="43" height="43" fill="currentColor" class="bi bi-clipboard2-data-fill" viewBox="0 0 16 16">
                                <path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z"/>
                                <path d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585c.055.156.085.325.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5c0-.175.03-.344.085-.5ZM10 7a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7Zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1Zm4-3a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0V9a1 1 0 0 1 1-1Z"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-center h-8 border border-green-500 rounded-b-lg bg-slate-100 gap-x-1 ">
                    <p class="text-sm font-medium">cek info</p>
                    <a href="/datauser"><button type="button" class="inline-flex items-center p-1 mr-2 text-xs font-medium text-center text-white bg-green-500 rounded-full hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg aria-hidden="true" class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button></a>
                </div>
            </div>
            
            <div class="w-auto p-1">
                <div class="bg-red-500 shadow-xl flex flex-col justify-between leading-normal h-[90px] rounded-t-lg">
                    <div class="flex justify-between p-3 leading-normal gap-x-4">
                        <div class="p-1">
                            <span class="font-sans text-xl font-medium text-slate-100">
                                {{  $penelitian }}
                            </span>
                            <hr class="border-slate-100">
                            <span class="font-sans text-sm font-medium text-slate-100 dark:text-gray-400 ">
                                Data Penelitian
                            </span>
                        </div>
                        <div class="text-red-200 dark:text-transparent">
                            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                              </svg>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center h-8 border border-red-500 rounded-b-lg bg-slate-100 gap-x-1 ">
                    <p class="text-sm font-medium">cek info</p>
                    <a href="/surattugas/penelitian" class="inline-flex items-center p-1 mr-2 text-xs font-medium text-center text-white bg-red-500 rounded-full hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg aria-hidden="true" class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
            </div>
            <div class="w-auto p-1">
                <div class="bg-blue-500 shadow-xl flex flex-col justify-between leading-normal h-[90px] rounded-t-lg">
                    <div class="flex justify-between p-3 leading-normal gap-x-4">
                        <div class="p-1">
                            <span class="font-sans text-xl font-medium text-slate-100">
                                {{  $pengabdian }}
                            </span>
                            <hr class="border-slate-100">
                            <span class="font-sans text-sm font-medium text-slate-100 dark:text-gray-400 ">
                                Data Pengabdian
                            </span>
                        </div>
                        <div class="text-blue-300 dark:text-black">
                            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-bar-chart-steps" viewBox="0 0 16 16">
                                <path d="M.5 0a.5.5 0 0 1 .5.5v15a.5.5 0 0 1-1 0V.5A.5.5 0 0 1 .5 0zM2 1.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-6a.5.5 0 0 1-.5-.5v-1zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1z"/>
                              </svg>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center h-8 border border-blue-500 rounded-b-lg bg-slate-100 gap-x-1 ">
                    <p class="text-sm font-medium">cek info</p>
                    <a href="/surattugas/pengabdian" class="inline-flex items-center p-1 mr-2 text-xs font-medium text-center text-white bg-blue-500 rounded-full hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg aria-hidden="true" class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
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
