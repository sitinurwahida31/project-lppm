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
    {{-- <div class="responsive-top sticky top-0 z-30 bg-yellow-400 p-5 sm:hidden">
        <div class="flex justify-center bg-white p-2 rounded-lg">
            Data tabel
        </div>
        <div class="container flex-column justify-between mt-4 mb-4 hidden">
            <img class="w-[300px] Logo_uncp" src="img/uncp.png" alt="Logo Universitas Cokroaminoto Palopo">
            <img src="img/icons/toggle_icons.svg" alt="toggle_dashboard" class="w-8 cursor-pointer" id="btnToggle">
        </div>
    </div> --}}

    @include('layout.sidebar')
    <!-- Header / Profile -->
    <div class=" w-full h-screen flex-auto flex-col gap-y-4 bg-slate-100 overflow-y-scroll">

         <!-- Header / Profile -->
         @include('layout.header_admin')

        <div class="bg-white h-9 w-auto m-6 mt-8 rounded-lg shadow-lg flex-row flex items-center">
            <span class="text-green-700 font-bold pl-5 text-base sm:flex">EDIT DATA PENELITIAN</span>
        </div>

        <div class="m-6 bg-white w-auto h-auto pl-7 pr-7 pb-8 pt-7 ml-6 mr-6 mt-8 rounded-xl shadow-lg">
            <form action="/updatepenelitian/{{ $surat->id }}" method="POST" class="p-8">
                @csrf
                {{-- row 1 --}}
                <div class="shadow-lg mb-4 bg-green-900 py-[8px] px-4 rounded">
                    <h2 class="font-semibold text-base text-white">Surat</h2>
                </div>
                <div class="grid gap-6 mb-4 md:grid-cols-2">
                    <div>
                        <label for="semester" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Semester</label>
                        <select id="semester" name="semester" class="block w-full p-2 py-2 mb-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @foreach ($semester as $itemSemester)
                                @if(old('semester', $surat->semester) == $itemSemester->tahun_semester)
                                    <option value="{{ $surat->semester }}" selected>{{ $surat->semester }}</option>
                                @else
                                    <option value="{{ $itemSemester->tahun_semester }}">{{ $itemSemester->tahun_semester }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="nomor_surat" class="block mb-1 text-sm font-medium fxsont-medium text-gray-900 dark:text-white">Nomor Surat</label>
                        <input type="text" required id="nomor_surat" name="nomor_surat" class="pl-3 border border-gray-300 text-gray-700 bg-slate-100 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled placeholder="{{ $surat->nomor_surat }}" >
                    </div>
                </div>
                {{-- row 2 --}}
                <div class="mb-4">
                    <label for="judul_surat" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Judul Penelitian</label>
                    <textarea id="judul_surat" name="judul_surat" rows="4" class="block pl-3 pt-2 pb-2 p-1 w-full h-16 text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Judul Penelitian">{{ old('judul_surat', $surat->judul_surat) }}</textarea>
                </div>
                {{-- row 3 --}}
                <div class="grid gap-6 mb-4 md:grid-cols-3">
                    <div>
                        <label for="jangka_waktu" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Jangka Waktu Penelitian</label>
                        <input type="text" id="jangka_waktu" name="jangka_waktu" value="{{ old('jangka_waktu', $surat->jangka_waktu) }}" class="pl-3 bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Jangka Waktu Penelitian" required>
                    </div>

                    <div>
                        <label for="tanggal_mulai" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Tanggal Mulai Lama</label>
                        <div class="relative">
                            <input type="date" name="tanggal_mulai" value="{{ $surat->tanggal_mulai }}" class=" bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full pl-3 p-1 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                        </div>
                    </div>
                    <div>
                        <label for="tanggal_selesai" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Tanggal Selesai</label>
                        <div class="relative">
                            <input type="date" name="tanggal_selesai" value="{{ $surat->tanggal_selesai }}" class=" bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full pl-10 p-1 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                        </div>
                    </div>
                </div>
                {{-- row 4 --}}
                <div class="grid gap-6 mb-4 md:grid-cols-2">
                    <div>
                        <label for="jarak_lokasi_mitra" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Jarak PT ke lokasi Mitra</label>
                        <input type="text" id="jarak_lokasi_mitra" name="jarak_lokasi_mitra" value="{{ old('jarak_lokasi_mitra', $surat->jarak_lokasi_mitra) }}" class="pl-3 bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Jarak PT Ke Lokasi" required>
                    </div>
                    <div>
                        <label for="mitra" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Mitra</label>
                        <input type="text" id="mitra" name="mitra" value="{{ old('mitra', $surat->mitra) }}" class="pl-3 bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Mitra" required>
                    </div>
                </div>
                <div class="grid gap-6 mb-4 md:grid-cols-2">
                    <div>
                        <label for="sumber_dana" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Sumber Dana</label>
                        <select id="sumber_dana" name="sumber_dana"  class="block w-full p-2 py-2 mb-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @foreach ($listSumberDana as $listDana)
                                    @if(old('sumber_dana', $surat->sumber_dana) == $listDana)
                                        <option value="{{ $surat->sumber_dana }}" selected>{{ $surat->sumber_dana }}</option>
                                    @else
                                        <option value="{{ $listDana }}">{{ $listDana }}</option>
                                    @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                {{-- row 5 --}}
                <div class="grid gap-6 mb-4 md:grid-cols-2">
                    <div>
                        <label for="biaya_penelitian_pengabdian" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Biaya Penelitian</label>
                        <input type="text" id="biaya_penelitian_pengabdian" name="biaya_penelitian_pengabdian" value="{{ old('biaya_penelitian_pengabdian', $surat->biaya_penelitian_pengabdian) }}" class="pl-3 py-2 bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Biaya Penelitian" required>
                    </div>
                    <div>
                        <label for="terbilang" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Terbilang</label>
                        <input type="text" id="terbilang" name="terbilang" value="{{ old('terbilang', $surat->terbilang) }}" class="pl-3 py-2 bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tiga Juta Rupiah" required>
                    </div>
                </div>

                <div class="shadow-lg mt-10 mb-4 bg-green-900 py-[8px] px-4 rounded">
                    <h2 class="font-semibold text-base text-white">Ketua Tim</h2>
                </div>

                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div>
                        <label for="nama_ketua" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Nama Ketua Tim</label>
                        <input type="text" id="nama_ketua" name="nama_ketua" value="{{ old('nama_ketua', $surat->nama_ketua) }}" class="pl-3 py-2 bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama Ketua" required>
                    </div>
                    <div>
                        <label for="nidn_ketua" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">NIDN/NID</label>
                        <input type="text" id="nidn_ketua" name="nidn_ketua" value="{{ old('nidn_ketua', $surat->nidn_ketua) }}" class="pl-3 py-2 bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="NIDN/NID" required>
                    </div>
                    <div>
                        <label for="prodi" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Program Studi</label>
                        <select id="prodi" name="prodi" class="block w-full p-2 py-2 mb-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @foreach ($prodi as $item)
                                @if(old('prodi', $surat->prodi) == $item->id)
                                    <option value="{{ $surat->prodi }}" selected>{{ $item->nama_prodi }}</option>
                                @else
                                    <option value="{{ $item->id }}">{{ $item->nama_prodi }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="jabatan_fungsional" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Jabatan Fungsional</label>
                        <select id="jabatan_fungsional" name="jabatan_fungsional" class="block w-full p-2 py-2 mb-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @foreach ($listJabatan as $item)
                                @if(old('jabatan_fungsional', $surat->jabatan_fungsional) == $item)
                                    <option value="{{ $surat->jabatan_fungsional }}" selected>{{ $surat->jabatan_fungsional }}</option>
                                @else
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endif
                            @endforeach

                        </select>
                    </div>
                    <div>
                        <label for="email" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Alamat Surel (Email)</label>
                        <input type="text" id="email" name="email" value="{{ old('email', $surat->email) }}" class="pl-3 py-2 bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email" required>
                    </div>
                    <div>
                        <label for="telepon" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Nomer Handphone (HP)</label>
                        <input type="number" id="telepon" name="telepon" value="{{ old('telepon', $surat->telepon) }}" class="pl-3 py-2 bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="HP" required>
                    </div>
                </div>

                <div class="shadow-lg mt-10 mb-4 bg-green-900 py-[8px] px-4 rounded">
                    <h2 class="font-semibold text-base text-white">Anggota</h2>
                </div>

                <div class="grid gap-6 mb-6 md:grid-cols-2 ">
                    @foreach ($anggota as $item)
                        <div>
                            <label for="nama_anggota{{ $loop->iteration }}" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Nama Anggota ({{ $loop->iteration }})</label>
                            <input type="text" id="nama_anggota{{ $loop->iteration }}" name="nama_anggota{{ $loop->iteration }}" value="{{ $item->nama_anggota }}" class="pl-3 py-2 bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama">
                            <input type="text" name="id{{ $loop->iteration }}" value="{{ $item->id }}" class="hidden">
                        </div>
                        <div>
                            <label for="nomor_induk_anggota" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">NIDN</label>
                            <input type="number" id="nomor_induk_anggota{{ $loop->iteration }}" name="nomor_induk_anggota{{ $loop->iteration }}" value="{{ $item->nomor_induk_anggota }}" class="pl-3 py-2 bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="NIDN/NID">
                        </div>
                    @endforeach
                    @if ($countAnggota <= 4)
                        @for ($x = 1; $x <= $batasLoopAnggota; $x++)
                            <div>
                                <label for="nama_anggota_baru{{ $x + $nomorAnggota }}" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Nama Anggota ({{ $x + $nomorAnggota }})</label>
                                <input type="text" id="nama_anggota_baru{{ $x + $nomorAnggota }}" name="nama_anggota_baru{{ $x + $nomorAnggota }}" value="" class="pl-3 py-2 bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama">
                            </div>
                            <div>
                                <label for="nomor_induk_anggota_baru{{ $x + $nomorAnggota }}" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">NIDN</label>
                                <input type="number" id="nomor_induk_anggota_baru{{ $x + $nomorAnggota }}" name="nomor_induk_anggota_baru{{ $x + $nomorAnggota }}" value="" class="pl-3 py-2 bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="NIDN/NID" >
                            </div>
                        @endfor
                    @endif
                </div>

                <div class="shadow-lg mt-10 mb-4 bg-green-900 py-[8px] px-4 rounded">
                    <h2 class="font-semibold text-base text-white">Mahasiswa</h2>
                </div>

                <div class="grid gap-6 mb-6 md:grid-cols-2 ">
                    @foreach ($mahasiswa as $item)
                        <div>
                            <label for="nama_mahasiswa{{ $loop->iteration }}" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Nama Mahasiswa ({{ $loop->iteration }})</label>
                            <input type="text" id="nama_mahasiswa{{ $loop->iteration }}" name="nama_mahasiswa{{ $loop->iteration }}" value="{{ $item->nama_mahasiswa }}" class="pl-3 py-2 bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama">
                            <input type="text" name="id_mahasiswa{{ $loop->iteration }}" value="{{ $item->id }}" class="hidden">
                        </div>
                        <div>
                            <label for="nim" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">NIDN</label>
                            <input type="number" id="nim{{ $loop->iteration }}" name="nim{{ $loop->iteration }}" value="{{ $item->nim }}" class="pl-3 py-2 bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="NIDN/NID">
                        </div>
                    @endforeach
                    @if ($countMahasiswa <= 4)
                        @for ($x = 1; $x <= $batasLoopMahasiswa; $x++)
                            <div>
                                <label for="nama_mahasiswa_baru{{ $x + $nomorMahasiswa }}" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Nama Mahasiswa ({{ $x + $nomorMahasiswa }})</label>
                                <input type="text" id="nama_mahasiswa_baru{{ $x + $nomorMahasiswa }}" name="nama_mahasiswa_baru{{ $x + $nomorMahasiswa }}" value="" class="pl-3 py-2 bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama">
                            </div>
                            <div>
                                <label for="nim_mahasiswa_baru{{ $x + $nomorMahasiswa }}" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">NIM</label>
                                <input type="number" id="nim_mahasiswa_baru{{ $x + $nomorMahasiswa }}" name="nim_mahasiswa_baru{{ $x + $nomorMahasiswa }}" value="" class="pl-3 py-2 bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="NIDN/NID" >
                            </div>
                        @endfor
                    @endif
                </div>

                <div class="shadow-lg mt-10 mb-4 bg-green-900 py-[8px] px-4 rounded">
                    <h2 class="font-semibold text-base text-white">Produk & Publikasi</h2>
                </div>

                <div class="grid gap-6 mb-6 md:grid-cols-1">
                    <div>
                        <label for="produk" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Produk</label>
                        <select id="produk" name="produk" class="block w-full p-2 py-2 mb-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                            @foreach ($listProduk as $itemProduk)
                                @if(old('produk', $surat->produk) == $itemProduk)
                                    <option value="{{ $surat->produk }}" selected>{{ $surat->produk }}</option>
                                @else
                                    <option value="{{ $itemProduk }}">{{ $itemProduk }}</option>
                                @endif
                            @endforeach


                        </select>
                    </div>
                </div>
                <div class="grid gap-6 mb-6 md:grid-cols-1">
                    <div>
                        <label for="publikasi_ilmiah" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Publikasi Ilmiah</label>
                        <select id="publikasi_ilmiah" name="publikasi_ilmiah" class="block w-full p-2 py-2 mb-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                            @foreach ($listPublikasi as $itemPublikasi)
                                @if(old('publikasi_ilmiah', $surat->publikasi_ilmiah) == $itemPublikasi)
                                    <option value="{{ $surat->publikasi_ilmiah }}" selected>{{ $surat->publikasi_ilmiah }}</option>
                                @else
                                    <option value="{{ $itemPublikasi }}">{{ $itemPublikasi }}</option>
                                @endif
                            @endforeach

                        </select>
                    </div>
                </div>
                <div class=" flex justify-end mt-6">
                    <button type="Reset" class="py-[5px] px-5 mr-2 mb-2 text-base font-medium text-white focus:outline-none bg-red-600 rounded-lg border border-gray-200 hover:bg-red-400 hover:text-gray-200 focus:z-10 focus:ring-4 focus:ring-red-300 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        Reset
                    </button>
                    <button type="submit" class="py-[5px] px-5 mb-2 text-base font-medium text-white focus:outline-none bg-green-900 rounded-lg border border-gray-200 hover:bg-green-700 hover:text-gray-200 focus:z-10 focus:ring-4 focus:ring-green-400 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        Save
                    </button>
                </div>
            </form>

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
