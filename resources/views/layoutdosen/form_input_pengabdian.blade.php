<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>LPPM UNCP</title>
    <link rel="shortcut icon" href="/img/uncok.png" />
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
                <a href="/" class="inline-flex items-center text-xs font-medium text-gray-500 hover:text-gray-500 dark:text-gray-400 dark:hover:text-white">
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
                <a href="/pengabdian" class="ml-1 text-xs font-medium text-gray-500 hover:text-gray-500 md:ml-2 dark:text-gray-400 dark:hover:text-white">Pengabdian</a>
                </div>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
                <span class="ml-1 text-xs font-medium text-gray-500 md:ml-2 dark:text-gray-400">Form</span>
                </div>
            </li>
            </ol>
        </nav>
    </div>
    {{-- step --}}
    <div>
        <div class=" h-9 items-center flex justify-center ml-28 mr-28">
            <div class=" rounded-full bg-amber-400 text-white pl-3 pr-3 pt-2 pb-2 text-xs font-bold">
                1
            </div>
            <hr class="border-[1px] border-opacity-50 border-gray-900 w-72">
            <div class=" rounded-full bg-green-900 text-white pl-3 pr-3 pt-2 pb-2 text-xs font-bold">
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
    <form action="/storesuratpengabdian" method="post">
        @csrf
        {{-- form input 1 --}}
        <div class=" mt-20 ml-28 mr-28 mb-10 rounded-b-lg drop-shadow-lg bg-white pt-8">
            <div class="-mt-14  rounded-lg drop-shadow-lg bg-green-900 p-3 text-white font-semibold text-sm">
                DATA PENGABDIAN
            </div>
            <div action="" class="p-8">
                {{-- row 1 --}}
                <div class="grid gap-6 mb-4 md:grid-cols-2">
                    <div>
                        <label for="semester" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Semester</label>
                        <select id="semester" name="semester" class="@error('nomor_surat')border-red-400 @enderror block w-full p-1 mb-1 text-xs text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected></option>
                        {{-- <option selected>Pilih Semester</option> --}}
                        <option value="20221">20221</option>
                        <option value="20222">20222</option>
                        <option value="20231">20231</option>
                        <option value="20232">20232</option>
                        </select>
                        <div class="text-red-500 text-sm italic">@error('nomor_surat')*{{ $message }} @enderror</div>
                    </div>
                    <div>
                        <label for="nomor_surat" class="block mb-1 text-xs font-medium fxsont-medium text-gray-900 dark:text-white">Nomer Surat</label>
                        <input type="text" id="nomor_surat" name="nomor_surat" value="{{ old('nomor_surat')}}" class="pl-3 @error('nomor_surat')border-red-400 @enderror bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nomor Surat" >
                        <div class="text-red-500 text-sm italic">@error('nomor_surat')*{{ $message }} @enderror</div>
                    </div>
                </div>
                {{-- row 2 --}}
                <div class="mb-4">
                    <label for="judul_pengabdian" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Judul Pengabdian</label>
                    <textarea id="judul_pengabdian" name="judul_pengabdian" rows="4" class="@error('judul_pengabdian')border-red-400 @enderror block pl-3 pt-2 pb-2 p-1 w-full h-16 text-xs text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Judul pengabdian">{{ old('judul_pengabdian') }}</textarea>
                    <div class="text-red-500 text-sm italic">@error('judul_pengabdian')*{{ $message }} @enderror</div>
                </div>
                {{-- row 3 --}}
                <div class="grid gap-6 mb-4 md:grid-cols-3">
                    <div>
                        <label for="jangka_waktu" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Jangka Waktu Pengabdian</label>
                        <input type="text" id="jangka_waktu" name="jangka_waktu" value="{{ old('jangka_waktu')}}" class="@error('jangka_waktu')border-red-400 @enderror pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Jangka Waktu pengabdian" >
                        <div class="text-red-500 text-sm italic">@error('jangka_waktu')*{{ $message }} @enderror</div>
                    </div>
                    <div>
                        <label for="tanggal_mulai" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Tanggal Mulai</label>
                        <div class="relative">
                            <input type="date" id="tanggal_mulai" name="tanggal_mulai" class=" @error('tanggal_mulai')border-red-400 @enderror bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full pl-10 p-1  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none ">
                                <svg aria-hidden="true" class="w-5 h-4 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="text-red-500 text-sm italic">@error('tanggal_mulai')*{{ $message }} @enderror</div>
                        </div>
                    </div>
                    <div>
                        <label for="tanggal_selesai" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Tanggal Selesai</label>
                        <div class="relative">
                            <input type="date" id="tanggal_selesai" name="tanggal_selesai"  class="@error('tanggal_selesai')border-red-400 @enderror bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full pl-10 p-1  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none ">
                                <svg aria-hidden="true" class="w-5 h-4 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="text-red-500 text-sm italic">@error('tanggal_selesai')*{{ $message }} @enderror</div>
                        </div>
                    </div>
                </div>
                {{-- row 4 --}}
                <div class="grid gap-6 mb-4 md:grid-cols-2">
                    <div>
                        <label for="jarak_lokasi_mitra" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Jarak PT ke Lokasi Mitra</label>
                        <input type="text" id="jarak_lokasi_mitra" name="jarak_lokasi_mitra" value="{{ old('jarak_lokasi_mitra')}}" class="@error('jarak_lokasi_mitra')border-red-400 @enderror pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Jarak PT Ke Lokasi" >
                        <div class="text-red-500 text-sm italic">@error('jarak_lokasi_mitra')*{{ $message }} @enderror</div>
                    </div>
                    <div>
                        <label for="mitra" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Mitra</label>
                        <input type="text" id="mitra" name="mitra" value="{{ old('mitra')}}" class="@error('mitra')border-red-400 @enderror pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Mitra" >
                        <div class="text-red-500 text-sm italic">@error('mitra')*{{ $message }} @enderror</div>
                    </div>
                </div>
                <div class="grid gap-6 mb-4 md:grid-cols-2">
                <div>
                    <label for="sumberdana" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Sumber Dana</label>
                    <select id="sumberdana" name="sumberdana" class="border-gray-300  @error('sumberdana') border-red-400 @enderror block w-full p-1 mb-1 text-xs text-gray-900 border rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected value="">Pilih Sumber Dana</option>
                        <option value="MD">Mandiri</option>
                        <option value="DR">DRPTM</option>
                        <option value="IU">Internal UNCP</option>
                        <option value="PD">Pemerintah Daerah</option>
                        <option value="LY">Lainnya</option>
                    </select>
                    <div class="text-red-500 text-sm italic">@error('sumberdana')*{{ $message }} @enderror</div>
                </div>
                </div>
                {{-- row 5 --}}
                <div class="grid gap-6 mb-4 md:grid-cols-2">
                    <div>
                        <label for="biaya_pengabdian" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Biaya Pengabdian</label>
                        <input type="text" id="biaya_pengabdian" name="biaya_pengabdian" value="{{ old('biaya_pengabdian')}}" class="@error('biaya_pengabdian')border-red-400 @enderror pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Biaya pengabdian" >
                        <div class="text-red-500 text-sm italic">@error('biaya_pengabdian')*{{ $message }} @enderror</div>
                    </div>
                    <div>
                        <label for="terbilang" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Terbilang</label>
                        <input type="text" id="terbilang" name="terbilang" value="{{ old('terbilang')}}" class="@error('terbilang')border-red-400 @enderror pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tiga Juta Rupiah" >
                        <div class="text-red-500 text-sm italic">@error('terbilang')*{{ $message }} @enderror</div>
                    </div>
                </div>
            </div>
        </div>
        {{-- form input 2 --}}
        <div class="mt-14 ml-28 mr-28 mb-10 rounded-b-lg drop-shadow-lg bg-white pt-8">
            <div class="-mt-14  rounded-lg drop-shadow-lg bg-green-900 p-3 text-white font-semibold text-sm">
                DATA KETUA TIM
            </div>
            <div action="" class="p-8">
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="nama_ketua" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Nama Ketua Tim</label>
                        <input type="text" id="nama_ketua" name="nama_ketua" value="{{ old('nama_ketua')}}" class="
                        @error('nama_ketua')border-red-400 @enderror pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama Ketua" >
                        <div class="text-red-500 text-sm italic">@error('nama_ketua')*{{ $message }} @enderror</div>
                    </div>
                    <div>
                        <label for="nomor_induk_ketua" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">NIDN/NID</label>
                        <input type="text" id="nomor_induk_ketua" name="nomor_induk_ketua" value="{{ old('nomor_induk_ketua')}}" class="@error('nomor_induk_ketua')border-red-400 @enderror pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="NIDN/NID" >
                        <div class="text-red-500 text-sm italic">@error('nomor_induk_ketua')*{{ $message }} @enderror</div>
                    </div>
                    <div>
                        <label for="prodi_ketua" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Program Studi</label>
                        <select id="prodi_ketua" name="prodi_ketua" class="@error('prodi_ketua')border-red-400 @enderror block w-full p-1 mb-1 text-xs text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="">Pilih Program Studi</option>
                            <option value="Informatika">Informatika</option>
                            <option value="Matematika">Matematika</option>
                        </select>
                        <div class="text-red-500 text-sm italic">@error('prodi_ketua')*{{ $message }} @enderror</div>
                    </div>
                    <div>
                        <label for="jabatan_fungsional" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Jabatan Fungsional</label>
                        <select id="jabatan_fungsional" name="jabatan_fungsional" class="@error('jabatan_fungsional')border-red-400 @enderror block w-full p-1 mb-1 text-xs text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="">Pilih Jabatan Fungsional</option>
                            <option value="GB">Guru Besar</option>
                            <option value="LK">Lektor Kepala</option>
                            <option value="LT">Lektor</option>
                            <option value="AH">Asistand Ahli</option>
                            <option value="TP">Tenaga Pengajar</option>
                        </select>
                        <div class="text-red-500 text-sm italic">@error('jabatan_fungsional')*{{ $message }} @enderror</div>
                    </div>
                    <div>
                        <label for="email" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Alamat Surel (Email)</label>
                        <input type="text" id="email" name="email" value="{{ old('email')}}" class="@error('email')border-red-400 @enderror pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email" >
                        <div class="text-red-500 text-sm italic">@error('email')*{{ $message }} @enderror</div>
                    </div>
                    <div>
                        <label for="telepon" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Nomer Handphone (HP)</label>
                        <input type="text" id="telepon" name="telepon" value="{{ old('telepon')}}" class="@error('telepon')border-red-400 @enderror pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="HP" >
                        <div class="text-red-500 text-sm italic">@error('telepon')*{{ $message }} @enderror</div>
                    </div>
                </div>
            </div>
        </div>
        {{-- form input 3 --}}
        <div class="mt-14 ml-28 mr-28 mb-10 rounded-sm shadow-lg bg-white pt-8">
            <div class="-mt-14 rounded-lg drop-shadow-lg bg-green-900 p-3 text-white font-semibold text-sm">
                DATA ANGGOTA TIM
            </div>
            <div action="" class="p-8">
                <div class="grid gap-6 mb-6 md:grid-cols-2 ">
                    <div>
                        <label for="nama_anggota1" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Nama Anggota 1</label>
                        <input type="text" id="nama_anggota1" value="{{ old('nama_anggota1')}}" name="nama_anggota1" class="@error('nama_anggota1')border-red-400 @enderror pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama" >
                        <div class="text-red-500 text-sm italic">@error('nama_anggota1')*{{ $message }} @enderror</div>
                    </div>
                    <div>
                        <label for="nomor_induk_anggota1" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">NIDN/NID Anggota 1</label>
                        <input type="text" id="nomor_induk_anggota1" name="nomor_induk_anggota1" value="{{ old('nomor_induk_anggota1')}}" class="@error('nomor_induk_anggota1')border-red-400 @enderror pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="NIDN/NID" >
                        <div class="text-red-500 text-sm italic">@error('nomor_induk_anggota1')*{{ $message }} @enderror</div>
                    </div>
                    <div>
                        <label for="nama_anggota2" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Nama Anggota 2</label>
                        <input type="text" id="nama_anggota2" name="nama_anggota2" value="{{ old('nama_anggota2')}}" class="pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama" >
                    </div>
                    <div>
                        <label for="nomor_induk_anggota2" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">NIDN/NID Anggota 2</label>
                        <input type="text" id="nomor_induk_anggota2" name="nomor_induk_anggota2" value="{{ old('nomor_induk_anggota2')}}" class="pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="NIDN/NID" >
                    </div>
                    <div>
                        <label for="nama_anggota3" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Nama Anggota 3</label>
                        <input type="text" id="nama_anggota3" name="nama_anggota3" value="{{ old('nama_anggota3')}}" class="pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama" >
                    </div>
                    <div>
                        <label for="nomor_induk_anggota3" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">NIDN/NID Anggota 3</label>
                        <input type="text" id="nomor_induk_anggota3" name="nomor_induk_anggota3" value="{{ old('nomor_induk_anggota3')}}" class="pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="NIDN/NID" >
                    </div>
                    <div>
                        <label for="nama_anggota4" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Nama Anggota 4</label>
                        <input type="text" id="nama_anggota4" name="nama_anggota4" value="{{ old('nama_anggota4')}}" class="pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama" >
                    </div>
                    <div>
                        <label for="nomor_induk_anggota4" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">NIDN/NID Anggota 4</label>
                        <input type="text" id="nomor_induk_anggota4" name="nomor_induk_anggota4" value="{{ old('nomor_induk_anggota4')}}" class="pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="NIDN/NID" >
                    </div>    
                </div>
                
                <div class="grid gap-6 mb-6 md:grid-cols-2 mt-4">
                    <div>
                        <label for="nama_mahasiswa1" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Nama Mahasiswa 1</label>
                        <input type="text" id="nama_mahasiswa1" name="nama_mahasiswa1" value="{{ old('nama_mahasiswa1')}}" class="pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama" >
                    </div>
                    <div>
                        <label for="nim_mahasiswa1" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">NIM Mahasiswa 1</label>
                        <input type="text" id="nim_mahasiswa1" name="nim_mahasiswa1" value="{{ old('nim_mahasiswa1')}}" class="pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nim" >
                    </div>
                    <div>
                        <label for="nama_mahasiswa2" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Nama Mahasiswa 2</label>
                        <input type="text" id="nama_mahasiswa2" name="nama_mahasiswa2" value="{{ old('nama_mahasiswa2')}}" class="pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama" >
                    </div>
                    <div>
                        <label for="nim_mahasiswa2" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">NIM Mahasiswa 2</label>
                        <input type="text" id="nim_mahasiswa2" name="nim_mahasiswa2" value="{{ old('nim_mahasiswa2')}}" class="pl-3 bg-white border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nim" >
                    </div>
                </div>
            </div>
        </div>
        {{-- form input 4 --}}
        <div class="mt-14 ml-28 mr-28 mb-10 rounded-sm shadow-lg bg-white pt-8">
            <div class="-mt-14 rounded-lg drop-shadow-lg bg-green-900 p-3 text-white font-semibold text-sm">
                LUARAN PENGABDIAN
            </div>
            <div action="" class="p-8">
                <div class="grid gap-6 mb-6 md:grid-cols-1">
                    <div>
                        <label for="produk" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Produk</label>
                        <select id="produk" name="produk" class="@error('produk')border-red-400 @enderror block w-full p-1 mb-1 text-xs text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="">Pilih Jenis Produk</option>
                            <option value="Produk">Produk</option>
                            <option value="Prototype">Prototype</option>
                            <option value="Desain">Desain</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                        <div class="text-red-500 text-sm italic">@error('produk')*{{ $message }} @enderror</div>
                    </div>
                </div>
                <div class="grid gap-6 mb-6 md:grid-cols-1">
                    <div>
                        <label for="publikasi_ilmiah" class="block mb-1 text-xs font-medium text-gray-900 dark:text-white">Publikasi Ilmiah</label>
                        <select id="publikasi_ilmiah" name="publikasi_ilmiah" class="@error('publikasi_ilmiah')border-red-400 @enderror block w-full p-1 mb-1 text-xs text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="">Pilih Publikasi Ilmiah</option>
                            <option value="JI">Jurnal Nasional ISSN</option>
                            <option value="JT">Jurnal Nasional Terakreditasi</option>
                            <option value="JB">Jurnal Internasional Bereputasi</option>
                            <option value="JA">Lainnya</option>
                        </select>
                        <div class="text-red-500 text-sm italic">@error('publikasi_ilmiah')*{{ $message }} @enderror</div>
                    </div>
                </div>
            </div>
        </div>
        {{-- button save --}}
        <div class=" flex justify-end mt-14 ml-28 mr-28 mb-16">
            <button type="button" class="py-1 px-5 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-red-600 rounded-lg border border-gray-200 hover:bg-red-400 hover:text-gray-200 focus:z-10 focus:ring-4 focus:ring-red-300 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                Close
            </button>
            <button type="submit" class="py-1 px-5 mr-2 mb-2 text-sm font-medium text-white focus:outline-none bg-green-900 rounded-lg border border-gray-200 hover:bg-green-700 hover:text-gray-200 focus:z-10 focus:ring-4 focus:ring-green-400 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                Save
            </button>
        </div>
    </form>
    @include('layout.footer')

{{-- js datepicker --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/datepicker.min.js"></script>

</body>
</html>
