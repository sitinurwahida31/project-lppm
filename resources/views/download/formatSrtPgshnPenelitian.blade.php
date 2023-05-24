<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Surat Pengesahan Penelitian {{ $surat->nama }} {{ $surat->created_at }}</title>
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
     {{-- format --}}
     <div class="flex items-center justify-between text-base">
        <div class="mb-5 mt-8 ml-16">
            {{-- Ket Surat --}}
            <div class="text-center mb-8">
                <p class="font-bold text-black text-lg tracking-wide">HALAMAN PENGESAHAN</p>
            </div>
            {{-- judul --}}
            <div class="grid grid-cols-2 gap-0 mr-8">
                <div class="w-full">
                    <p>Judul Penelitian</p>
                </div>
                <div class="w-full flex">
                    <span class="mr-1">:</span>
                    <p>{{ $surat->judul_surat }}</p>
                </div>
            </div>
            <div class="text-base">
                Ketua Pelaksana
                <div class="grid grid-cols-2 gap-0 mr-8">
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
            <div class="text-base">
                Anggota Pelaksana
                <div class="grid grid-cols-2 gap-0 pr-8">
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
             <div class="grid grid-cols-2 gap-0 mr-8">
                <div class="w-full">
                    <p>Mitra</p>
                </div>
                <div class="w-full flex">
                    <span class="mr-1">:</span>
                    <p>{{ $surat->mitra }}</p>
                </div>
            </div>
             {{-- Jarak Mitra --}}
             <div class="grid grid-cols-2 gap-0 mr-8">
                <div class="w-full">
                    <p>Jarak PT Ke Lokasi Mitra</p>
                </div>
                <div class="w-full flex">
                    <span class="mr-1">:</span>
                    <p>{{ $surat->jarak_lokasi_mitra }}</p>
                </div>
            </div>
             {{-- Biaya --}}
             <div class="grid grid-cols-2 gap-0 mr-8">
                <div class="w-full">
                    <p>Biaya Penelitian <span class="italic">(terbilang)</span></p>
                </div>
                <div class="w-full flex">
                    <span class="mr-1">:</span>
                    <p>Rp. <span>{{ $surat->biaya_penelitian_pengabdian }},</span>- <span>({{ $surat->terbilang }})</span></p>
                </div>
            </div>
            {{-- sumber dana --}}
            <div class="grid grid-cols-2 gap-0 mr-8">
                <div class="w-full">
                    <p>Sumber Dana</p>
                </div>
                <div class="w-full flex">
                    <span class="mr-1">:</span>
                    <p>{{ $surat->sumber_dana }}</p>
                </div>
            </div>
            {{-- Luaran Penelitian --}}
            <div class="text-base">
                Luaran Penelitian
                <div class="grid grid-cols-2 gap-0 mr-8">
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
            <div class="flex justify-end mt-5 mr-16">
                <p>Palopo, {{ $surat->created_at }}</p>
            </div>
            {{-- Tanda Tangan --}}
            <div class="flex mt-0">
                {{-- Tanda tangan dekan --}}
                <div class="text-base text-black tracking-wide mr-[38%]">
                    <div>
                        <p>Mengetahui,</p>
                        <p class="font-bold mb-[50px] mt-1 w-full">Dekan <SPAn>{{ $surat->nama_fakultas }}</SPAn></p>
                        <P class="font-bold">{{ $surat->nama_dekan }}</P>
                        <p>NIP. <span>{{ $surat->nomor_induk_dekan }}</span></p>
                    </div>
                </div>
                {{-- tanda tangan ketua Pelaksana --}}
                <div class="text-base text-black tracking-wide">
                    <div>
                        <p class="font-bold mb-[50px] mt-7">Ketua Penelitian</p>
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
                        <p class="font-bold mb-[50px]">Plt Ketua LPPM</p>
                        <P class="font-bold">{{ $ketualppm->nama_lppm }}</P>
                        <p>NIDN. <span>{{ $ketualppm->nidn_lppm }}</span></p>
                    </div>
                </div>
            </div>
        </div>
     </div>
    <script>
        window.print();
    </script>
</body>
</html>
