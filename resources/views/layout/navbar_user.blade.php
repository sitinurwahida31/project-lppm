<nav class="bg-[#4caf50] px-2 sm:px-14 py-2 dark:bg-white-900 fixed w-full z-20 top-0 left-0 ">
    <div class="container grid md:grid-cols-2 md:gap-4 grid-cols-1 mx-auto">
        <div class="flex justify-center md:justify-start  items-center pr-5">
            <a href="" class="flex items-center">
                <img src="/img/logo.png" class="h-9 mr-3 sm:h-9" alt="logo uncp">
                <span class="self-center font-extrabold text-xl md:text-2xl text-white">LPPM UNCP</span>
            </a>
        </div>
        <hr class="border-[1px] border-opacity-50 border-slate-300 block md:hidden mt-3 md:mt-0 md:my-2 my-2">
        <div class="flex pt-1 items-center justify-center lg:justify-end w-full md:flex md:w-auto md:order-2 " id="navbar-sticky">
            <ul class="flex mb-2 p-1.5 mt-0 md:flex-row md:space-x-8 md:mt-0 md:text-base md:font-medium  dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="/" class="md:px-2 px-3 py-2 mt-2 font-semibold text-white bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-[#FFDC00] focus:text-white focus:ring-amber-400 hover:bg-white focus:bg-[#FFDC00] focus:outline-none focus:shadow-outline">Home</a>
                </li>
                <li>
                @auth
                    <a href="/penelitian" class="md:px-2 px-3 py-2 mt-2 font-semibold text-white bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-[#FFDC00] focus:text-white focus:ring-amber-400 hover:bg-white focus:bg-[#FFDC00] focus:outline-none focus:shadow-outline">Penelitian</a>
                    </li>
                    <li>
                        <a href="/pengabdian" class="md:px-2 px-3 py-2 mt-2 font-semibold text-white bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-#FFDC00 focus:text-white focus:ring-amber-400 hover:bg-white focus:[#FFDC00] focus:outline-none focus:shadow-outline">Pengabdian</a>
                    </li>
                    <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" onclick="return confirm('Yakin Ingin Keluar?')" class="block py-0 px-3 font-semibold  text-white rounded hover:text-amber-400 focus:text-white focus:ring-amber-400 hover:bg-white focus:bg-amber-400 focus:outline-none focus:shadow-outline">Logout</button>
                        </form>
                    </li>
                @endauth
                {{-- <li>
                    <a href="/" class="block py-1 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                        <div class="grid justify-items-center">
                            <img class="w-5" src="/img/icons/default_profile.svg" alt="Profile Image">
                            <p class="font-normal text-white text-xs text-center relattive"></p>
                        </div>
                    </a>
                </li> --}}
                @guest
                    <li>
                        <a href="/signin" class="block py-1 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-amber-400 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Sign In</a>
                    </li>
                @endguest
                {{-- <li>
                    <a href="/dashboard" class="block py-1 pl-3 pr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                        </svg>
                    </a>
                </li> --}}
            </ul>
        </div>
    </div>
  </nav>
