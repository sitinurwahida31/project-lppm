<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>Surat Tugas Penelitian{{ $surat->nama_ketua }}{{ $surat->created_at }}</title>
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
            <div class="bg-white items-center">
                <div class="mx-20 mb-20">
                    {{-- kop surat --}}
                    <div class="flex items-center justify-between">
                        <div class="w-20 mr-1 h-auto justify-start">
                            <img class="h-auto w-auto" src="/img/logo.png" alt="">
                        </div>
                        <div class="w-auto h-auto text-center">
                            <p class="font-bold text-black text-[16px] tracking-wide">UNIVERSITAS COKROAMINOTO PALOPO</p>
                            <p class="font-bold text-black text-[16px] tracking-wide">LEMBAGA PENELITIAN DAN PENGABDIAN MASYARAKAT</p>
                            <p class="font-medium text-black text-xs tracking-wide">Jl.Latamacelling No. 19 Kota Palopo 91921 - Sulawesi Selatan</p>
                            <p class="font-medium text-black text-xs tracking-wide">Telp. (0471) 22111, fax. (0471) 325055. Website http://www.lppm.uncp.ac.id</p>
                        </div>
                    </div>
                    <hr class="border-[2px] border-opacity-100 border-black mt-1 mb-2">
                    {{-- Ket Surat --}}
                    <div class="text-center">
                        <p class="font-bold text-black text-base tracking-wide">SURAT TUGAS</p>
                        <hr class="border-[1px] border-opacity-100 border-black ml-[218px] mr-[218px]">
                        <p class="text-black text-base font-normal tracking-wide">Nomor: {{ $surat->nomor_surat }}</p>
                    </div>
                    <div class="pt-2 ">
                        <p class="text-base text-black tracking-wide">Yang bertanda tangan di bawah ini:</p>
                    </div>
                    {{-- info ketua --}}
                    <div class="ml-4 flex text-base text-black mt-2 text-left tracking-wide">
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
                    <div class="pt-2 tracking-wide">
                        <p class="text-base">Menugaskan kepada saudara:</p>
                    </div>
                    {{-- Anggota --}}
                        <div class="ml-4 flex text-base text-black mt-2 text-left font-normal tracking-wide">
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
                        {{-- new --}}
                        <div class="pt-2 tracking-wide">
                            <p class="text-base">Melibatkan:</p>
                        </div>
                         {{-- mahasiswa --}}
                        <div class="ml-4 flex text-base text-black mt-2 text-left font-normal tracking-wide">
                            <div class="mr-4">
                                @foreach ($anggotaMahasiswa as $item)
                                    <p>{{ $loop->iteration }}</p>                        
                                @endforeach
                            </div>
                            <div class="mr-14">
                                @foreach ($anggotaMahasiswa as $item)
                                    <p>{{ $item->nama }}</p>                        
                                @endforeach
                            </div>
                            <div class="mr-14">
                                @foreach ($anggotaMahasiswa as $item)
                                    <p>({{ $item->nim }})</p>                        
                                @endforeach
                            </div>
                            <div class="mr-7">
                                <p>(Mahasiswa)</p>
                                <p>(Mahasiswa)</p>
                            </div>
                        </div>
                        {{-- perihal surat --}}
                        <div class="text-justify text-base text-black font-normal mt-2 tracking-wide">
                            <p>Untuk melakukan penelitian yang berjudul <span>"{{ $surat->judul_surat }}"</span> dengan jangka waktu penelitian <span>{{ $surat->jangka_waktu }}</span>, mulai pada <span>{{ $surat->tanggal_mulai }}</span> sampai <span>{{ $surat->tanggal_selesai }}</span>. Selanjutnya, Saudara melaporkan hasil penelitian ke ketua LPPM sebanyak 1 buah laporan. </p>
                        </div>
                        <div class="text-left text-base text-black font-normal mt-2 tracking-wide">
                            <p>Demikian Surat Tugas ini dibuat untuk dapat digunakan sebagaimana mestinya.</p>
                        </div>
                        {{-- tanda tangan ketua lppm --}}
                        <div class="flex items-center justify-end text-base text-black mt-5 tracking-wide">
                            <div>
                                <p>Palopo, {{ $surat->created_at }}</p>
                                <p class="font-bold mb-[70px] mt-3">Plt Ketua LPPM</p>
                                <P class="font-bold">{{ $ketualppm->nama_lppm }}</P>
                                <p>NIDN. <span>{{ $ketualppm->nidn_lppm }}</span></p>
                            </div>
                        </div>
                    {{-- Tembusan --}}
                    <div class="text-base text-black font-normal mt-5 tracking-wide">
                        <p>Tembusan disampaikan dengan hormat kepada:</p>
                    </div>
                    <div class="flex text-base text-black mt-1 text-left font-normal tracking-wide">
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
        <script>
            window.print();
        </script>
    </body>
</html>
