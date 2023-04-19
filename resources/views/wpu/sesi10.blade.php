<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FlexBox TailwindCss</title>
    @vite('resources/css/app.css')

</head>
<body>
    <hr class="my-10 border-t-4"/>
    <p class="font-bold text-center my-20 text-xl mx-auto">Responsive</p>

    <div class="container px-6 font-serif max-w-md mx-auto sm:max-w-xl sm:bg-red-400 md:max-w-5xl md:bg-sky-300 lg:flex lg:max-w-full lg:bg-white lg:p-0">
        <div class="lg:p-12 lg:flex-1 ">
            <h3 class="text-4xl font-bold text-slate-800">Siti <span class="text-pink-600">Nurw</span>ahida</h3>
            <img src="./img/2.jpeg" alt="image" class="rounded-xl shadow-xl sm:h-64 sm:mt-6 sm:w-full sm-object-cover sm-object-center lg:hidden lg:bg-green-400">
            <h2 class="font-semibold mt-6 text-2xl text-slate-800 sm:mt-8 sm:text-4xl">Ku Kira Dia Sungguh Ehhh...Ternyata Hanya Singgah 😏 </h2>
            <p class="mt-2 text-slate-600 sm:mt-4 sm:text-xl">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi earum dignissimos voluptatum cumque sint provident quam quod excepturi perspiciatis error vel maiores dolorem id doloribus aliquam fuga, odit laboriosam blanditiis?</p>
            <div class="mt-4">
                <a href="#" class="inline-block px-5 py-3 bg-red-600 text-white rounded-lg shadow-lg uppercase font-semibold tracking-wider">Keep The Spirit 🔥🔥</a>
            </div>

        </div>
        <div class="hidden lg:flex lg:w-1/2">
            <img src="./img/2.jpeg" alt="image" class="object-cover rounded-l-3xl">
        </div>
    </div>

    <h2 class="mt-24 mb-10 text-center font-bold text-3xl text-slade-700">My Galery </h2>
    <div class="container mx-auto px-6 font-sans sm:flex sm:flex-wrap sm:gap-6 sm:justify-evenly">
        <div class="rounded-md shadow-lg overflow-hidden mb-10 sm:w-64 sm:mb-0 md:w-84 lg:w-72">
            <img src="https://source.unsplash.com/600x400" alt="image" class="w-full">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2 text-slate-700 ">Image Title</div>
                <p class="text-sm text-slite-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod cupiditate debitis voluptate excepturi eligendi voluptas exercitationem ut recusandae nostrum perspiciatis!</p>
            </div>
        </div>
        <div class="rounded-md shadow-lg overflow-hidden mb-10 sm:w-64 sm:mb-0 md:w-84 lg:w-72">
            <img src="https://source.unsplash.com/600x400" alt="image" class="w-full">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2 text-slate-700 ">Image Title</div>
                <p class="text-sm text-slite-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod cupiditate debitis voluptate excepturi eligendi voluptas exercitationem ut recusandae nostrum perspiciatis!</p>
            </div>
        </div>
        <div class="rounded-md shadow-lg overflow-hidden mb-10 sm:w-64 sm:mb-0 md:w-84 lg:w-72">
            <img src="https://source.unsplash.com/600x400" alt="image" class="w-full">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2 text-slate-700 ">Image Title</div>
                <p class="text-sm text-slite-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod cupiditate debitis voluptate excepturi eligendi voluptas exercitationem ut recusandae nostrum perspiciatis!</p>
            </div>
        </div>

    </div>
</body>
</html>
