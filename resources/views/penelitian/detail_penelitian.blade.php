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
            {{-- <span class="text-green-700 font-bold pl-5 text-sm sm:flex ">
                PENELITIAN / DETAIL
            </span> --}}
            <span class="text-green-700 font-bold pl-5 text-base sm:flex">DETAIL DATA PENELITIAN</span>
        </div>

        <div class="m-6 bg-white w-auto h-auto pl-12 pr-9 pb-8 pt-7 ml-6 mr-6 mt-8 rounded-xl shadow-lg">
            {{-- Button --}}
            <div class="mt-2 mb-20 flex justify-end">
                <a href="/editdetailpenelitian/{{  $surat->id }}" class=" flex item-center justify-center py-2 px-3 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-red-600 rounded-lg border border-gray-200 hover:bg-red-400 hover:text-gray-200 focus:z-10 focus:ring-4 focus:ring-red-300 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"><path fill="currentColor" d="M6 22q-.825 0-1.413-.588T4 20V4q0-.825.588-1.413T6 2h7.175q.4 0 .763.15t.637.425l4.85 4.85q.275.275.425.638t.15.762V11.1l-8 7.975V22H6Zm8.5 0q-.2 0-.35-.15T14 21.5v-1.2q0-.2.088-.4t.212-.325l4.85-4.875l2.15 2.1l-4.875 4.9q-.125.15-.325.225t-.4.075h-1.2Zm7.525-5.9L19.9 13.975l.7-.7q.3-.3.725-.3t.7.3l.7.725q.275.3.275.713t-.275.687l-.7.7ZM14 9h4l-5-5v4q0 .425.288.713T14 9Z"/></svg>
                    <p class="ml-2">Edit</p>
                </a>
                <a href="/downloadsrttgspenelitiandosen/{{ $surat->id }}" target="_blank" class=" flex item-center justify-center py-2 px-3 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-green-900 rounded-lg border border-gray-200 hover:bg-green-700 hover:text-gray-200 focus:z-10 focus:ring-4 focus:ring-green-400 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-file-earmark-pdf-fill" viewBox="0 0 16 16">
                        <path d="M5.523 12.424c.14-.082.293-.162.459-.238a7.878 7.878 0 0 1-.45.606c-.28.337-.498.516-.635.572a.266.266 0 0 1-.035.012.282.282 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548zm2.455-1.647c-.119.025-.237.05-.356.078a21.148 21.148 0 0 0 .5-1.05 12.045 12.045 0 0 0 .51.858c-.217.032-.436.07-.654.114zm2.525.939a3.881 3.881 0 0 1-.435-.41c.228.005.434.022.612.054.317.057.466.147.518.209a.095.095 0 0 1 .026.064.436.436 0 0 1-.06.2.307.307 0 0 1-.094.124.107.107 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256zM8.278 6.97c-.04.244-.108.524-.2.829a4.86 4.86 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.517.517 0 0 1 .145-.04c.013.03.028.092.032.198.005.122-.007.277-.038.465z"/>
                        <path fill-rule="evenodd" d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3zM4.165 13.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.651 11.651 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.856.856 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.844.844 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.76 5.76 0 0 0-1.335-.05 10.954 10.954 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.238 1.238 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a19.697 19.697 0 0 1-1.062 2.227 7.662 7.662 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103z"/>
                      </svg>
                    <p class="ml-2">Cetak Surat Tugas</p>
                </a>
                <a href="/downloadsrtpgshanpenelitiandosen/{{ $surat->id }}" target="_blank" class=" flex item-center justify-center py-2 px-3 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-green-900 rounded-lg border border-gray-200 hover:bg-green-700 hover:text-gray-200 focus:z-10 focus:ring-4 focus:ring-green-400 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-file-earmark-pdf-fill" viewBox="0 0 16 16">
                        <path d="M5.523 12.424c.14-.082.293-.162.459-.238a7.878 7.878 0 0 1-.45.606c-.28.337-.498.516-.635.572a.266.266 0 0 1-.035.012.282.282 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548zm2.455-1.647c-.119.025-.237.05-.356.078a21.148 21.148 0 0 0 .5-1.05 12.045 12.045 0 0 0 .51.858c-.217.032-.436.07-.654.114zm2.525.939a3.881 3.881 0 0 1-.435-.41c.228.005.434.022.612.054.317.057.466.147.518.209a.095.095 0 0 1 .026.064.436.436 0 0 1-.06.2.307.307 0 0 1-.094.124.107.107 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256zM8.278 6.97c-.04.244-.108.524-.2.829a4.86 4.86 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.517.517 0 0 1 .145-.04c.013.03.028.092.032.198.005.122-.007.277-.038.465z"/>
                        <path fill-rule="evenodd" d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3zM4.165 13.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.651 11.651 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.856.856 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.844.844 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.76 5.76 0 0 0-1.335-.05 10.954 10.954 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.238 1.238 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a19.697 19.697 0 0 1-1.062 2.227 7.662 7.662 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103z"/>
                    </svg>
                    <p class="ml-2">Cetak Surat Pengesahan</p>
                </a>
            </div>
            <div class="text-sm font-medium text-gray-700 mb-5">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-0 mr-8 mb-2">
                    <div class="w-full">
                        <p>Nomor Surat</p>
                    </div>
                    <div class="w-full flex">
                        <span class="mr-1">:</span>
                        <p> {{ $surat->nomor_surat }} </p>
                    </div>
                    <div></div>
                </div>
                {{-- judul --}}
                <div class="grid grid-cols-1 md:grid-cols-3 gap-0 mr-8">
                    <div class="w-full">
                        <p>Judul Penelitian</p>
                    </div>
                    <div class="w-full flex">
                        <span class="mr-1">:</span>
                        <p>{{ $surat->judul_surat }}</p>
                    </div>

                </div>
                Ketua Pelaksana
                <div class="grid grid-cols-6 md:grid-cols-3 gap-0 mr-8 mb-3">
                    {{-- a --}}
                    <div class="w-full">
                        <p ><span class="mr-2 pl-4">a.</span>Nama Ketua Tim</p>
                    </div>
                    <div class="w-full h-auto flex">
                        <span class="mr-1">:</span>
                        <p>{{ $surat->nama_ketua }}</p>
                    </div>
                    <div></div>
                    {{-- b --}}
                    <div class="w-full">
                        <p ><span class="mr-2 pl-4">b.</span>NIDN Ketua</p>
                    </div>
                    <div class="w-full h-auto flex">
                        <span class="mr-1">:</span>
                        <p>{{ $surat->nomor_induk }}</p>
                    </div>
                    <div></div>
                    {{-- c --}}
                    <div class="w-full">
                        <p ><span class="mr-2 pl-4">c.</span>Jabatan Fungsional</p>
                    </div>
                    <div class="w-full h-auto flex">
                        <span class="mr-1">:</span>
                        <p>{{ $surat->jabatan_fungsional }}</p>
                    </div>
                    <div></div>
                    {{-- d --}}
                    <div class="w-full">
                        <p ><span class="mr-2 pl-4">d.</span>Program Studi</p>
                    </div>
                    <div class="w-full h-auto flex">
                        <span class="mr-1">:</span>
                        <p>{{ $surat->nama_prodi }}</p>
                    </div>
                    <div></div>
                    {{-- e --}}
                    <div class="w-full">
                        <p ><span class="mr-2 pl-4">e.</span>Nomor HP</p>
                    </div>
                    <div class="w-full h-auto flex">
                        <span class="mr-1">:</span>
                        <p>{{ $surat->telepon }}</p>
                    </div>
                    <div></div>
                    {{-- F --}}
                    <div class="w-full ">
                        <p ><span class="mr-2 pl-4">F.</span>Alamat Surel</p>
                    </div>
                    <div class="w-full h-auto flex">
                        <span class="mr-1">:</span>
                        <p>{{ $surat->email }}</p>
                    </div>
                    <div></div>
                </div>
                Anggota Pelaksana
                <div class="grid grid-cols-6 md:grid-cols-3 gap-0 pr-8 mb-3">
                    {{-- a --}}
                    @foreach ($anggota as $item)
                    <div class="w-full">
                        <p ><span class="mr-2 pl-4">{{ chr(96+ $loop->iteration) }}.</span>Nama Anggota ({{ $loop->iteration }}) / NIDN</p>
                    </div>
                    <div class="w-full h-auto flex">
                        <span class="mr-1">:</span>
                        <p><span>{{ $item->nama_anggota }}</span><span> / </span><span>{{ $item->nomor_induk_anggota }}</span></p>
                    </div>
                    <div></div>
                    @endforeach

                    <div class="w-full mt-3">
                        <p >Jumlah Mahasiswa/Staf/Alumni</p>
                    </div>

                    <div class="w-full h-auto flex">
                        <span class="mr-1">:</span>
                        <p><span>{{$mahasiswa}}</span> Mahasiswa *<span class="italic">(Minimal 2 Mahasiswa)</span></p>
                    </div>
                    <div></div>
                    @foreach ($data_mahasiswa as $item)
                    <div class="w-full">
                        <p ><span class="mr-2 pl-4">{{ chr(96+ $loop->iteration) }}.</span>Nama Mahasiswa ({{  $loop->iteration }}) / NIM</p>
                    </div>
                    <div class="w-full h-auto flex">
                        <span class="mr-1">:</span>
                        <p><span>{{ $item->nama_mahasiswa }}</span><span> / </span><span>{{ $item->nim }}</span></p>
                    </div>

                    <div></div>
                    @endforeach

                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-0 mr-8 mb-2">
                    <div class="w-full">
                        <p>Mitra</p>
                    </div>
                    <div class="w-full flex">
                        <span class="mr-1">:</span>
                        <p>{{ $surat->mitra }}</p>
                    </div>
                    <div></div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-0 mr-8 mb-2">
                    <div class="w-full">
                        <p>Jarak PT Ke Lokasi Mitra</p>
                    </div>
                    <div class="w-full flex">
                        <span class="mr-1">:</span>
                        <p>{{ $surat->jarak_lokasi_mitra }}</p>
                    </div>
                    <div></div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-0 mr-8 mb-2">
                    <div class="w-full">
                        <p>Biaya Penelitian <span class="italic">(terbilang)</span></p>
                    </div>
                    <div class="w-full flex">
                        <span class="mr-1">:</span>
                        <p>Rp. <span>{{ $surat->biaya_penelitian_pengabdian }},</span>- <span>({{ $surat->terbilang }})</span></p>
                    </div>
                    <div></div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-0 mr-8 mb-2">
                    <div class="w-full">
                        <p>Sumber Dana</p>
                    </div>
                    <div class="w-full flex">
                        <span class="mr-1">:</span>
                        <p>{{ $surat->terbilang }}</p>
                    </div>
                    <div></div>
                </div>
                Luaran Penelitian
                <div class="grid grid-cols-6 md:grid-cols-3 gap-0 mr-8 mb-2">
                    {{-- a --}}
                    <div class="w-full">
                        <p ><span class="mr-2 pl-4">a.</span>Produk</p>
                    </div>
                    <div class="w-full h-auto flex">
                        <span class="mr-1">:</span>
                        <p>{{ $surat->produk }}</p>
                    </div>
                    <div></div>
                    {{-- b --}}
                    <div class="w-full">
                        <p ><span class="mr-2 pl-4">b.</span>Publikasi Ilmiah</p>
                    </div>
                    <div class="w-full h-auto flex">
                        <span class="mr-1">:</span>
                        <p>{{ $surat->publikasi_ilmiah }}</p>
                    </div>
                    <div></div>
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
