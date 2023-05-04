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
     <div class="flex justify-end items-center mb-14 mt-20 mr-16 text-xs">
         <nav class="flex" aria-label="Breadcrumb">
             <ol class="inline-flex items-center space-x-1 md:space-x-3">
             <li class="inline-flex items-center">
                 <a href="/landingpage" class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-gray-500 dark:text-gray-400 dark:hover:text-white">
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
                 <a href="/fitmepengabdian" class="ml-1 text-sm font-medium text-gray-500 hover:text-gray-500 md:ml-2 dark:text-gray-400 dark:hover:text-white">Pengabdian</a>
                 </div>
             </li>
             <li aria-current="page">
                 <div class="flex items-center">
                 <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                 </svg>
                 <a href="/inputpengabdian" class="ml-1 text-sm font-medium text-gray-500 hover:text-gray-500 md:ml-2 dark:text-gray-400 dark:hover:text-white">Form</a>
                 </div>
             </li>
             <li aria-current="page">
                <div class="flex items-center">
                <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
                <a href="/tugaspengabdian" class="ml-1 text-sm font-medium text-gray-500 hover:text-gray-500 md:ml-2 dark:text-gray-400 dark:hover:text-white">Surat Tugas</a>
                </div>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
                <a href="" class="ml-1 text-sm font-medium text-gray-500 hover:text-gray-500 md:ml-2 dark:text-gray-400 dark:hover:text-white">Surat Pengesahan</a>
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
             <div class=" rounded-full bg-green-900 text-white pl-3 pr-3 pt-2 pb-2 text-xs font-bold">
                 2
             </div>
             <hr class="border-[1px] border-opacity-50 border-gray-900 w-72">
             <div class=" rounded-full bg-amber-400 text-white pl-3 pr-3 pt-2 pb-2 text-xs font-bold">
                 3
             </div>
         </div>
         <div class="mb-14  h-6 ml-64 mr-36 font-medium">
             <span class="pl-[60px]">Form Input</span>
             <span class="pl-[233px]">Surat Tugas</span>
             <span class="pl-[202px]">Surat Pengesahan</span>
         </div>
     </div>
     {{-- format --}}
     <div class=" mt-20 ml-40 mr-40 mb-10 pb-40 drop-shadow-lg bg-white pt-5 items-center justify-center text-sm">
        <div class="ml-28 mr-20">
            {{-- kop surat --}}
            {{-- Ket Surat --}}
            <div class="text-center mt-9 mb-8">
                <p class="font-bold text-black text-base tracking-wide">HALAMAN PENGESAHAN</p>
            </div>
            {{-- judul --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-0 mr-8 text-sm">
                <div class="w-full">
                    <p>Judul Pengabdian Kepada Masyarakat</p>
                </div>
                <div class="w-full flex">
                    <span class="mr-1">:</span>
                    <p>{{ $surat->judul_surat }}</p>
                </div>
            </div>
            {{-- ketua tim --}}
            <div class="text-sm">
                Ketua Pelaksana
                <div class="grid grid-cols-6 md:grid-cols-2 gap-0 mr-8">
                    {{-- a --}}
                    <div class="w-full">
                        <p ><span class="mr-2 pl-4">a.</span>Nama Ketua Tim</p>
                    </div>
                    <div class="w-full h-auto flex">
                        <span class="mr-1">:</span>
                        <p>{{ $surat->nama }}</p>
                    </div>
                    {{-- b --}}
                    <div class="w-full">
                        <p ><span class="mr-2 pl-4">b.</span>NIDN Ketua</p>
                    </div>
                    <div class="w-full h-auto flex">
                        <span class="mr-1">:</span>
                        <p>{{ $surat->nomor_induk }}</p>
                    </div>
                    {{-- c --}}
                    <div class="w-full">
                        <p ><span class="mr-2 pl-4">c.</span>Jabatan Fungsional</p>
                    </div>
                    <div class="w-full h-auto flex">
                        <span class="mr-1">:</span>
                        <p>{{ $surat->jabatan_fungsional }}</p>
                    </div>
                    {{-- d --}}
                    <div class="w-full">
                        <p ><span class="mr-2 pl-4">d.</span>Program Studi</p>
                    </div>
                    <div class="w-full h-auto flex">
                        <span class="mr-1">:</span>
                        <p>{{ $surat->prodi }}</p>
                    </div>
                    {{-- e --}}
                    <div class="w-full">
                        <p ><span class="mr-2 pl-4">e.</span>Nomor HP</p>
                    </div>
                    <div class="w-full h-auto flex">
                        <span class="mr-1">:</span>
                        <p>{{ $surat->telepon }}</p>
                    </div>
                    {{-- F --}}
                    <div class="w-full ">
                        <p ><span class="mr-2 pl-4">F.</span>Alamat Surel</p>
                    </div>
                    <div class="w-full h-auto flex">
                        <span class="mr-1">:</span>
                        <p>{{ $surat->email }}</p>
                    </div>
                </div>
            </div>
            {{-- Anggota Pelaksana --}}
            <div class="text-sm">
                Anggota Pelaksana
                {{-- <div class="grid grid-cols-6 md:grid-cols-2 gap-0 pr-8">

                    <div class="w-full">
                        <p ><span class="mr-2 pl-4">a.</span>Nama Anggota (1) / NIDN</p>
                    </div>
                    <div class="w-full h-auto flex">
                        <span class="mr-1">:</span>
                        <p><span>Sukarti, S.Si., M.Si</span><span> / </span><span>0902098901</span></p>
                    </div>

                    <div class="w-full">
                        <p ><span class="mr-2 pl-4">b.</span>Nama Anggota (2) / NIDN</p>
                    </div>
                    <div class="w-full h-auto flex">
                        <span class="mr-1">:</span>
                        <p><span>Besse Helmi Mustawinar, S.Pd., M.Si</span><span> / </span><span>0929049202</span></p>
                    </div>

                    <div class="w-full">
                        <p ><span class="mr-2 pl-4">c.</span>Nama Anggota (3) / NIDN</p>
                    </div>
                    <div class="w-full h-auto flex">
                        <span class="mr-1">:</span>
                        <p>-...</p>
                    </div>

                    <div class="w-full">
                        <p ><span class="mr-2 pl-4">c.</span>Nama Anggota (4) / NIDN</p>
                    </div>
                    <div class="w-full h-auto flex">
                        <span class="mr-1">:</span>
                        <p>-...</p>
                    </div>

                    <div class="w-full">
                        <p ><span class="mr-2 pl-4">e.</span>Jumlah Mahasiswa/Staf/Alumni</p>
                    </div>
                    <div class="w-full h-auto flex">
                        <span class="mr-1">:</span>
                        <p><span>3</span> Mahasiswa *<span class="italic">(Minimal 2 Mahasiswa)</span></p>
                    </div>
                </div> --}}
                <div class="grid grid-cols-6 md:grid-cols-2 gap-0 pr-8">
                    {{-- a --}}
                    @foreach ($anggota as $item)
                        <div class="w-full">
                            <p ><span class="mr-2 pl-4">{{ chr(96+ $loop->iteration) }}. </span>Nama Anggota ({{ $loop->iteration }}) / NIDN</p>
                        </div>
                        <div class="w-full h-auto flex">
                            <span class="mr-1">:</span>
                            <p><span>{{ $item->nama_anggota }}</span><span> / </span><span>{{ $item->nomor_induk_anggota }}</span></p>
                        </div>
                    @endforeach

                    <div class="w-full">
                        <p ><span class="mr-2 pl-4">{{ $num }}.</span>Jumlah Mahasiswa/Staf/Alumni</p>
                    </div>
                    <div class="w-full h-auto flex">
                        <span class="mr-1">:</span>
                        <p><span>{{ $mahasiswa }}</span> Mahasiswa *<span class="italic">(Minimal 2 Mahasiswa)</span></p>
                    </div>
                </div>
            </div>
             {{-- Mitra --}}
             <div class="grid grid-cols-1 md:grid-cols-2 gap-0 mr-8">
                <div class="w-full">
                    <p>Mitra</p>
                </div>
                <div class="w-full flex">
                    <span class="mr-1">:</span>
                    <p>{{ $surat->mitra }}</p>
                </div>
            </div>
             {{-- Jarak Mitra --}}
             <div class="grid grid-cols-1 md:grid-cols-2 gap-0 mr-8">
                <div class="w-full">
                    <p>Jarak PT Ke Lokasi Mitra</p>
                </div>
                <div class="w-full flex">
                    <span class="mr-1">:</span>
                    <p>{{ $surat->jarak_lokasi_mitra }}</p>
                </div>
            </div>
             {{-- Biaya --}}
             <div class="grid grid-cols-1 md:grid-cols-2 gap-0 mr-8">
                <div class="w-full">
                    <p>Biaya Pengabdian <span class="italic">(terbilang)</span></p>
                </div>
                <div class="w-full flex">
                    <span class="mr-1">:</span>
                    <p>Rp. <span>{{ $surat->biaya_penelitian_pengabdian }},</span>- <span>({{ $surat->terbilang }})</span></p>
                </div>
            </div>
            {{-- sumber dana --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-0 mr-8">
                <div class="w-full">
                    <p>Sumber Dana</p>
                </div>
                <div class="w-full flex">
                    <span class="mr-1">:</span>
                    <p>{{ $surat->sumber_dana }}</p>
                </div>
            </div>
            {{-- Luaran Penelitian --}}
            <div class="text-sm">
                Luaran Pengabdian
                <div class="grid grid-cols-6 md:grid-cols-2 gap-0 mr-8">
                    {{-- a --}}
                    <div class="w-full">
                        <p ><span class="mr-2 pl-4">a.</span>Produk</p>
                    </div>
                    <div class="w-full h-auto flex">
                        <span class="mr-1">:</span>
                        <p>{{ $surat->produk }}</p>
                    </div>
                    {{-- b --}}
                    <div class="w-full">
                        <p ><span class="mr-2 pl-4">b.</span>Publikasi Ilmiah</p>
                    </div>
                    <div class="w-full h-auto flex">
                        <span class="mr-1">:</span>
                        <p>{{ $surat->publikasi_ilmiah }}</p>
                    </div>
                </div>
            </div>
            <div class="flex justify-end mt-7 mr-5">
                <p>Palopo, {{ $surat->created_at }}</p>
            </div>
            {{-- Tanda Tangan --}}
            {{-- <div class="flex"> --}}
                {{-- Tanda tangan dekan --}}
                {{-- <div class=" text-sm text-black tracking-wide mr-[48%]">
                    <div>
                        <p>Mengetahui,</p>
                        <p class="font-bold mb-[70px] mt-1 w-full">Dekan <SPAn>{{ $surat->nama_fakultas }}</SPAn></p>
                        <P class="font-bold">{{ $surat->nama_dekan }}</P>
                        <p>NIP. <span>{{ $surat->nomor_induk_dekan }}</span></p>
                    </div>
                </div> --}}
                {{-- tanda tangan ketua Pelaksana --}}
                {{-- <div class="text-sm text-black tracking-wide">
                    <div>
                        <p class="font-bold mb-[70px] mt-5">Plt Ketua LPPM</p>
                        <P class="font-bold">{{ $ketualppm->nama_lppm }}</P>
                        <p>NIDN. <span>{{ $ketualppm->nidn_lppm }}</span></p>
                    </div>
                </div> --}}
            {{-- </div> --}}
            <div class="flex mt-0">
                {{-- Tanda tangan dekan --}}
                <div class="text-base text-black tracking-wide mr-[60%]">
                    <div>
                        <p>Mengetahui,</p>
                        <p class="font-bold mb-[60px] mt-1 w-full">Dekan <SPAn>{{ $surat->nama_fakultas }}</SPAn></p>
                        <P class="font-bold">{{ $surat->nama_dekan }}</P>
                        <p>NIP. <span>{{ $surat->nomor_induk_dekan }}</span></p>
                    </div>
                </div>
                {{-- tanda tangan ketua Pelaksana --}}
                <div class="text-base text-black tracking-wide">
                    <div>
                        <p class="font-bold mb-[60px] mt-5">Ketua Pengabdian</p>
                        <P class="font-bold">{{ $surat->nama }}</P>
                        <p>NIDN. <span>{{ $surat->nomor_induk }}</span></p>
                    </div>
                </div>
            </div>
            <div class="mx-auto mt-5 flex justify-center">
                {{-- tanda tangan ketua Pelaksana --}}
                <div class="text-base text-black text-center tracking-wide">
                    <div>
                        <p class=" mt-2">Menyetujui</p>
                        <p class="font-bold mb-[60px]">Plt Ketua LPPM</p>
                        <P class="font-bold">{{ $ketualppm->nama_lppm }}</P>
                        <p>NIDN. <span>{{ $ketualppm->nidn_lppm }}</span></p>
                    </div>
                </div>
            </div>
            {{-- <div class="flex item-center justify-center text-center mt-5">
                Tanda tangan dekan
                <div class=" text-xs text-black tracking-wide">
                    <div>
                        <p>Menyetujui</p>
                        <p class="font-bold mb-[70px] mt-1 w-full">Dekan ?</p>
                        <P class="font-bold">Nama Ketua Dekan</P>
                        <p>NIDN. <span>0926018902</span></p>
                    </div>
                </div>
            </div> --}}

        </div>
     </div>
     {{-- button download --}}
     <div class="ml-40 mr-40 mt-16 mb-28 flex justify-end">
        <a href="/pengabdian" class="py-1 px-4 mr-2 mb-2 text-base font-medium text-white focus:outline-none bg-red-700 rounded-lg border border-gray-200 hover:bg-red-400 hover:text-gray-200 focus:z-10 focus:ring-4 focus:ring-red-300 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
            Close
        </a>
        <a href="/downloadsrtpgshanpengabdiandosen/{{ $surat->id }}" target="_blank" class="py-1 px-3 mr-2 mb-2 text-base font-medium text-white focus:outline-none bg-green-900 rounded-lg border border-gray-200 hover:bg-green-700 hover:text-gray-200 focus:z-10 focus:ring-4 focus:ring-green-400 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
            Download
        </a>
    </div>
    {{-- footer --}}
    @include('layout.footer')
</body>
</html>
