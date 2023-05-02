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
<body class="bg-white">
     {{-- navbar --}}
     @include('layout.navbar_user')
     {{-- content --}}
     {{-- breadcrumb --}}
     <div class="flex justify-end items-center mb-14 mt-20 mr-16">
         <nav class="flex" aria-label="Breadcrumb">
             <ol class="inline-flex items-center space-x-1 md:space-x-3">
             <li class="inline-flex items-center">
                 <a href="./landingpage" class="inline-flex items-center text-xs font-medium text-gray-500 hover:text-gray-500 dark:text-gray-400 dark:hover:text-white">
                 <svg aria-hidden="true" class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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
                 <a href="./fitmepenelitian" class="ml-1 text-xs font-medium text-gray-500 hover:text-gray-500 md:ml-2 dark:text-gray-400 dark:hover:text-white">Penelitian</a>
                 </div>
             </li>
             <li aria-current="page">
                 <div class="flex items-center">
                 <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                 </svg>
                 <a href="./inputpenelitian" class="ml-1 text-xs font-medium text-gray-500 hover:text-gray-500 md:ml-2 dark:text-gray-400 dark:hover:text-white">Form</a>
                 </div>
             </li>
             <li aria-current="page">
                <div class="flex items-center">
                <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
                <span class="ml-1 text-xs font-medium text-gray-500 md:ml-2 dark:text-gray-400">Surat Tugas</span>
                </div>
            </li>
             </ol>
         </nav>
     </div>
     {{-- step --}}
     <div>
         <div class=" h-9 items-center flex justify-center ml-28 mr-28">
             <div class=" rounded-full bg-green-900 text-white pl-3 pr-3 pt-2 pb-2 text-xs font-bold">
                 1
             </div>
             <hr class="border-[1px] border-opacity-50 border-gray-900 w-72">
             <div class=" rounded-full bg-amber-400 text-white pl-3 pr-3 pt-2 pb-2 text-xs font-bold">
                 2
             </div>
             <hr class="border-[1px] border-opacity-50 border-gray-900 w-72">
             <div class=" rounded-full bg-green-900 text-white pl-3 pr-3 pt-2 pb-2 text-xs font-bold">
                 3
             </div>
         </div>
         <div class="mb-14  h-6 ml-36 mr-36 font-medium">
             <span class="pl-[40px]">Form Input</span>
             <span class="pl-[233px]">Surat Tugas</span>
             <span class="pl-[202px]">Surat Pengesahan</span>
         </div>
     </div>

    {{-- format --}}
    <div class=" mt-20 ml-40 mr-40 mb-10 drop-shadow-lg bg-white pt-5 items-center justify-center">
    <div class="ml-28 mr-28">
        {{-- kop surat --}}
        <div class="flex items-center justify-center">
            <div class="w-20 h-auto">
                <img class="h-auto w-auto rounded-lg" src="/img/logo.png" alt="">
            </div>
            <div class="w-auto h-auto text-center ml-8 p-1">
                <p class="font-bold text-black text-lg tracking-wide">UNIVERSITAS COKROAMINOTO PALOPO</p>
                <p class="font-bold text-black text-sm tracking-wide">LEMBAGA PENELITIAN DAN PENGABDIAN MASYARAKAT</p>
                <p class="font-medium text-black text-xs tracking-wide">Jl.Latamacelling No. 19 Kota Palopo 91921 - Sulawesi Selatan</p>
                <p class="font-medium text-black text-xs tracking-wide">Telp. (0471) 22111, fax. (0471) 325055. Website http://www.lppm.uncp.ac.id</p>
            </div>
        </div>
        <hr class="border-[2px] border-opacity-100 border-black mt-1 mb-2">
        {{-- Ket Surat --}}
        <div class="text-center">
            <p class="font-bold text-black text-sm tracking-wide">SURAT TUGAS</p>
            <hr class="border-[1px] border-opacity-100 border-black ml-[218px] mr-[218px]">
            <p class="text-black text-xs font-normal tracking-wide">Nomor: {{ $surat->nomor_surat }}</p>
        </div>
        <div class="pt-5 ">
            <p class="text-xs text-black tracking-wide">Yang bertanda tangan di bawah ini:</p>
        </div>
        {{-- info ketua --}}
        <div class="ml-4 flex text-xs text-black mt-5 text-left tracking-wide">
            <div class="">
                <p>NIDN</p>
                <p>Jabatan</p>
                <p>Nama</p>
            </div>
            <div class="ml-20 mr-1">
                <p>:</p>
                <p>:</p>
                <p>:</p>
            </div>
            <div>
                <a href=""><p>{{ $ketualppm->nidn_lppm }}</p></a>
                <a href=""><p>{{ $ketualppm->jabatan_lppm }}</p></a>
                <a href=""><p>{{ $ketualppm->nama_lppm }}</p></a>
            </div>
        </div>
        <div class="pt-5 tracking-wide">
            <p class="text-xs">Menugaskan kepada saudara:</p>
        </div>
        {{-- Anggota --}}
            <div class="ml-4 flex text-xs text-black mt-5 text-left font-normal tracking-wide">
                <div class="mr-4">
                    <p>1</p>
                    @php
                        for ($x = 2; $x <= $countAnggota; $x++) {
                            echo "<p>$x</p>";
                        }
                    @endphp
                </div>
                <div class="mr-14">
                    <p> {{ $surat->nama_ketua }} </p>
                    @foreach ($anggota as $item)
                        <p>{{ $item->nama_anggota }}</p>                            
                    @endforeach
                </div>
                <div class="mr-14">
                    <p>({{ $surat->nidn }})</p>
                    @foreach ($anggota as $item)
                        <p>({{ $item->nomor_induk_anggota }})</p>                            
                    @endforeach
                </div>
                <div class="mr-7">
                    <p>(Ketua)</p>
                    @foreach ($anggota as $item)
                        <p>(Anggota)</p>                           
                    @endforeach
                </div>
            </div>
            {{-- perihal surat --}}
            <div class="text-justify text-xs text-black font-normal mt-5 tracking-wide">
                <p>Untuk melakukan penelitian yang berjudul <span>"{{ $surat->judul_surat }}"</span> dengan jangka waktu penelitian <span>{{ $surat->jangka_waktu }}</span>, mulai pada <span>{{ $surat->tanggal_mulai }}</span> sampai <span>{{ $surat->tanggal_selesai }}</span>. Selanjutnya, Saudara melaporkan hasil penelitian ke ketua LPPM sebanyak 1 buah laporan. </p>
            </div>
            <div class="text-left text-xs text-black font-normal mt-5 tracking-wide">
                <p>Demikian Surat Tugas ini dibuat untuk dapat digunakan sebagaimana mestinya.</p>
            </div>
            {{-- tanda tangan ketua lppm --}}
            <div class="flex items-center justify-end text-xs text-black mt-7 tracking-wide">
                <div>
                    <p>Palopo, {{ $surat->created_at }}</p>
                    <p class="font-bold mb-[70px] mt-3">Plt Ketua LPPM</p>
                    <P class="font-bold">{{ $ketualppm->nama_lppm }}</P>
                    <p>NIDN. <span>{{ $ketualppm->nidn_lppm }}</span></p>
                </div>
            </div>
        {{-- Tembusan --}}
        <div class="text-xs text-black font-normal mt-7 tracking-wide">
            <p>Tembusan disampaikan dengan hormat kepada:</p>
        </div>
        <div class="flex text-xs text-black mt-1 text-left font-normal tracking-wide">
            <div class="mr-4">
                <p>1.</p>
                <p>2.</p>
                <p>3.</p>
                <p>4.</p>
            </div>
            <div class="mb-60">
                <p>Rektor</p>
                <p>Dekan</p>
                <p>Ketua Prodi</p>
                <p>Arsip</p>
            </div>
        </div>
    </div>
    </div>
    {{-- button download --}}
    <div class="ml-40 mr-40 mt-16 mb-28 flex justify-end">
        <a href="/downloadsrttgspenelitiandosen/{{ $surat->id }}" target="_blank" class="py-1 px-5 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-green-900 rounded-lg border border-gray-200 hover:bg-green-700 hover:text-gray-200 focus:z-10 focus:ring-4 focus:ring-green-400 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
            Download
        </a>
    </div>
    {{-- footer --}}
    @include('layout.footer')
</body>
</html>


