<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Wpu sesi ke 6</title>
</head>
<body>
    {{-- darkmode --}}
    {{-- masih blum di praktikkan ada pada sesi ke 6 menit ke 21:38 --}}
    {{-- pseudo classes --}}
    <button class="my-10 bg-sky-400 px-5 py-2 rounded-full text-white font-semibold block mx-auto hover:bg-sky-600 focus:ring focus:ring-red-700">Simpan</button>
    {{-- core concepts----hover,focus ----pseudo-element --}}
    <div class="max-w-lg my-10 border border-slate-200 rounded-xl mx-auto p-5 shadow-md hover: bg-sky-600 group">
        <h5 class="font-bold text-slate-700 text-lg mb-3 group-hover:text-white">My Card</h5>
        <p class="text-slate-600 group-hover:text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque deserunt quaerat a, quasi, sed praesentium incidunt veniam hic corporis earum voluptatem perspiciatis esse beatae aliquid animi nesciunt quos nihil accusamus?</p>
    </div>
    <div class="max-w-lg my-10 border border-slate-200 rounded-xl mx-auto p-5 mt-12 shadow-md hover: bg-sky-600 group">
        <h5 class="font-bold text-slate-700 text-lg mb-3 group-hover:text-white">My Card</h5>
        <p class="text-slate-600 group-hover:text-white selection:bg-lime-300 selection:text-slate-900 first-line:uppercase first-line:tracking-widest first-letter:text-6xl first-letter:float-left first-letter:mr3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque deserunt quaerat a, quasi, sed praesentium incidunt veniam hic corporis earum voluptatem perspiciatis esse beatae aliquid animi nesciunt quos nihil accusamus?</p>
    </div>
    {{-- placeholder text, sibling state--}}
    <div class="max-w-lg border border-slate-200 rounded-xl mx-auto shadow-md font-serif p-5 mb-16">
        <form action="">
            <label for="email" class="block">
                <span class="block font-semibold mb-1 text-slate-700 after:content-['*'] after:text-pink-500 after:ml-0.5">Email</span>
                <input type="email" id="email" placeholder="masukkan email.." class="px-3 py-2 border shadow rounded w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 focus:border-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 invalid:focus:border-pink-700 peer">
                <p class="text-sm m-1 text-pink-700 invisible peer-invalid:visible">Email tidak valid</p>
            </label>

        </form>
    </div>

    <hr class="my-20"/>

     <div></div>

</body>
</html>
