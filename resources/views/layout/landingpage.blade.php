@include('layout.head')

<section class="bg-gray-50 flex justify-center items-center w-full fixed">
	<div class=" flex justify-center items-start">
		<div class="container grid grid-cols-3 my-8 px-14 py-14 bg-white rounded-2xl shadow-lg shadow-gray-400">
			<div class="flex flex-col text-justify font-semibold">
				<h1 class="text-2xl md:text-5xl pb-3 text-[#4caf50] tracking-loose">Welcome To</h1>
				<h2 class="text-lg md:text-4xl leading-relaxed md:leading-snug mb-2 text-[#4caf50]">LPPM <span class="text-[#FFDC00]"> UNIVERSITAS COKROAMONITO PALOPO</span>
				</h2>
				<p class="text-sm md:text-base text-[#4caf50] mb-10">Silahkan Masuk Terlebih Dahulu</p>
				<div class="w-auto flex justify-end">
                    <a href="/signin"
					class="focus:ring-2 focus:ring-[#FFDC00] flex items-center bg-[#FFDC00] hover:bg-[#4caf50] hover:text-white text-white rounded-xl shadow hover:shadow-lg py-1.5 px-8 border border-yellow-300 hover:border-transparent">
					<p class="font-bold text-">Masuk</p>
                    <div class="pl-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="currentColor" d="M2 16A14 14 0 1 0 16 2A14 14 0 0 0 2 16Zm6-1h12.15l-5.58-5.607L16 8l8 8l-8 8l-1.43-1.427L20.15 17H8Z"/><path fill="none" d="m16 8l-1.43 1.393L20.15 15H8v2h12.15l-5.58 5.573L16 24l8-8l-8-8z"/></svg>
                    </div>
                    </a>

                </div>
			</div>
			<div class=" col-span-2 flex justify-end items-center">
				<div class="flex flex-wrap content-center">
                    {{-- <img src="https://unsplash.com/photos/rxpThOwuVgE"></div> --}}
					{{-- <div>
						<img class=" mt-28 hidden xl:block" src="https://user-images.githubusercontent.com/54521023/116969935-c13d5b00-acd4-11eb-82b1-5ad2ff10fb76.png">
                    </div> --}}
						<div class="w-full">
							{{-- <img class="inline-block mt-24 md:mt-0 p-8 md:p-0 w-full"  src="img/icons/welcome.svg"></div> --}}
							<img src="https://source.unsplash.com/700x500?computer" alt="image" class=" md:visible mdx:hidden rounded-xl shadow-md hover:shadow-lg "/>
							{{-- <div>
								<img class="inline-block mt-28 lg:block" src="https://user-images.githubusercontent.com/54521023/116969939-c1d5f180-acd4-11eb-8ad4-9ab9143bdb50.png"></div>
							</div> --}}
						</div>
				</div>
			</div>
        </div>
    </div>
</section>
