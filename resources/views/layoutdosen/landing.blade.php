<!DOCTYPE html>
<html lang="en">

@include('layout.head')

<body class="bg-white">
    <!-- Navbar -->
    @include('layout.navbar_user')
    @include('layout.navbar_user')
<section class="relative  bg-blueGray-50">

<div class="relative pt-16 pb-32 flex content-center items-center justify-center min-h-screen-75 mt-14">
        <div class="absolute top-0 w-full h-full bg-center bg-cover " style="
            background-image: url('https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1267&amp;q=80');
          ">
          <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
        </div>
        <div class="container relative mx-auto">
          <div class="items-center flex flex-wrap">
            <div class="w-full lg:w-6/12 px-0 ml-auto mr-auto text-center">
              <div class="mt-7 md:mt-10">
                <h1 class="text-white font-bold text-2xl md:text-4xl">LPPM <p>Universitas Cokroaminoto Palopo</p>
                </h1>
                <p class="md:mt-10 mt-6 text-lg text-white">
                    Tahapan Membuat Surat Tugas Dan Pengesahan
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px" style="transform: translateZ(0px)">
          <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
            <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
          </svg>
        </div>
      </div>
      <section class="pb-10 bg-blueGray-200 -mt-20">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap">
            <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
              <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                <div class="px-4 py-5 flex-auto">
                  <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-[#FFDC00]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><rect width="20" height="12" x="2" y="6" rx="2"/><path d="M12 12h.01M17 12h.01M7 12h.01"/></g></svg>
                  </div>
                  <h6 class="text-xl font-semibold">Form Input</h6>
                  <p class="mt-2 mb-4 text-blueGray-500">
                    Silahkan mengisi data-data penelitian atau pengabdian pada form yang disediakan
                  </p>
                </div>
              </div>
            </div>
            <div class="w-full md:w-4/12 px-4 text-center">
              <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                <div class="px-4 py-5 flex-auto">
                  <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-[#4caf50]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M20 6h-8l-2-2H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm-6 10H6v-2h8v2zm4-4H6v-2h12v2z"/></svg>
                  </div>
                  <h6 class="text-xl font-semibold">Surat Tugas</h6>
                  <p class="mt-2 mb-4 text-blueGray-500">
                    Mendownload surat tugas penelitian atau pengabdian
                  </p>
                </div>
              </div>
            </div>
            <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
              <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                <div class="px-4 py-5 flex-auto">
                  <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-[#FFDC00]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="m20.41 8.41l-4.83-4.83c-.37-.37-.88-.58-1.41-.58H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V9.83c0-.53-.21-1.04-.59-1.42zM7 7h7v2H7V7zm10 10H7v-2h10v2zm0-4H7v-2h10v2z"/></svg>
                  </div>
                  <h6 class="text-xl font-semibold">Surat Pengesahan</h6>
                  <p class="mt-2 mb-4 text-blueGray-500">
                    Mendownload surat pengesahan penelitian atau pengabdian
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="mb-44">

          </div>
          {{-- @include('layout.footer') --}}
      </section>
      </section>
    @include('layout.footer')

        <script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script>
</body>
</html>
