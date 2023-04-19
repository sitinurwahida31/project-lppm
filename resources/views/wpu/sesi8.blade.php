<!DOCTYPE html>
{{-- ini tag html yang di tambahkan scrool-smooth --}}
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Taileindcss sesi8</title>
    @vite('resources/css/app.css')
</head>
<body>
    <hr class="my-20 border-t-4"/>
    <div class="container px-8 mx-auto">
        <div class="border rounded-lg shadow-lg p-10">
            <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione repellat facere dolores. Eaque repellendus, tempore deleniti atque, nihil modi dolorem iste laudantium ab at odit, animi consectetur sunt dolore voluptas! Assumenda est, eaque odio corrupti veritatis, dignissimos accusamus dicta laboriosam earum hic cumque, culpa doloremque sequi eligendi beatae in cupiditate.</p>
        </div>
    </div>
    <hr class="my-10 border-t-4"/>
    <p class="font-bold text-center my-10 text-xl">Floats</p>
    <div class="container px-8 mx-auto">
        <div class="border rounded-lg shadow-lg p-10">
            <img src="./img/2.jpeg" alt="img" width="150" class ="float-left mr-3">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione repellat facere dolores. Eaque repellendus, tempore deleniti atque, nihil modi dolorem iste laudantium ab at odit, animi consectetur sunt dolore voluptas! Assumenda est, eaque odio corrupti veritatis, dignissimos accusamus dicta laboriosam earum hic cumque, culpa doloremque sequi eligendi beatae in cupiditate.</p>
        </div>
    </div>
    <hr class="my-10 border-t-4"/>
    <p class="font-bold text-center my-10 text-xl">positions</p>
    <div class="container px-8 mx-auto">
        <div class="border rounded-lg shadow-lg p-10 relative">
            <div class="w-10 h-10 bg-pink-200 rounded-full flex absolute -top-5 -right-5 cursor-pointer">
                <span class="text-xl m-auto">❌</span>
            </div>
            <img src="https://source.unsplash.com/600x400" alt="img" width="150" class ="float-left mr-3">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione repellat facere dolores. Eaque repellendus, tempore deleniti atque, nihil modi dolorem iste laudantium ab at odit, animi consectetur sunt dolore voluptas! Assumenda est, eaque odio corrupti veritatis, dignissimos accusamus dicta laboriosam earum hic cumque, culpa doloremque sequi eligendi beatae in cupiditate.</p>
        </div>
    </div>
    <div class="container px-8 mx-auto mt-10">
        <div class="border rounded-lg shadow-lg p-10 relative">
            <div class="w-10 h-10 bg-pink-200 rounded-full flex absolute -top-5 left-1/2 -translate-x-1/2 cursor-pointer">
                <span class="text-xl m-auto">❌</span>
            </div>
            <img src="https://source.unsplash.com/600x400" width="150" class ="float-left mr-3">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione repellat facere dolores. Eaque repellendus, tempore deleniti atque, nihil modi dolorem iste laudantium ab at odit, animi consectetur sunt dolore voluptas! Assumenda est, eaque odio corrupti veritatis, dignissimos accusamus dicta laboriosam earum hic cumque, culpa doloremque sequi eligendi beatae in cupiditate.</p>
        </div>
    </div>
    <hr class="my-10 border-t-4"/>
    <p class="font-bold text-center my-10 text-xl">Smooth Scrolling</p>
    {{-- penambahan class smooth-scroll di tambahkan pada tag html di atas --}}
    <div class="container px-8 mx-auto mt-10">
        <div class="border rounded-lg shadow-lg p-10 relative">
            <div class="w-10 h-10 bg-sky-200 rounded-full flex fixed bottom-5 right-5 cursor-pointer">
                <a href="#" class="text-xl m-auto">🔝</a>
            </div>
            <img src="https://source.unsplash.com/600x400" alt="img" width="150" class ="float-left mr-3">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione repellat facere dolores. Eaque repellendus, tempore deleniti atque, nihil modi dolorem iste laudantium ab at odit, animi consectetur sunt dolore voluptas! Assumenda est, eaque odio corrupti veritatis, dignissimos accusamus dicta laboriosam earum hic cumque, culpa doloremque sequi eligendi beatae in cupiditate.</p>
        </div>
    </div>
    <hr class="my-10 border-t-4"/>
    <p class="font-bold text-center my-10 text-xl">Columns</p>
    <div class="container px-8 mx-auto my-7">
        <div class=" container mx-auto border rounded-lg shadow-lg p-10 columns-3">
            <img src="https://source.unsplash.com/600x400" alt="image" class="mb-2"/>
            <img src="https://source.unsplash.com/600x400" alt="image" class="mb-2"/>
            <img src="https://source.unsplash.com/600x400" alt="image" class="mb-2"/>
            <img src="https://source.unsplash.com/600x400" alt="image" class="mb-2"/>
            <img src="https://source.unsplash.com/600x400" alt="image" class="mb-2"/>
            <img src="https://source.unsplash.com/600x400" alt="image" class="mb-2"/>
        </div>


</body>
</html>
