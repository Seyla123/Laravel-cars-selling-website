<section class="flex flex-col sm:flex-row sm:justify-between h-[calc(100vh-100px)] max-h-[1000px] bg-gradient-to-t from-slate-100 to-[#fffeff] via-[#7A00E6]">

    <div class="max-w-screen-2xl mx-auto flex items-center flex-col sm:flex-row">
        {{-- title --}}
        <div class="flex flex-col justify-center p-8 space-y-4 text-center sm:text-left transform hover:scale-105 transition-transform duration-500">
            <h1 class="text-5xl font-extrabold text-white animate-pulse drop-shadow-lg">
                <span class="text-black">SEYLA WHEEL</span>
                Explore Land and Sea Like Never Before
            </h1>
            <p class="text-gray-200 text-lg">Get the best deals on cars, from sedans to SUVs. Find your dream car today!</p>
            <div class="max-w-sm flex gap-4 justify-center sm:justify-start">
                <x-button title="Sell Car" customClass="bg-main-800 shadow-2xl flex items-center justify-center w-full py-3 px-4 text-sm gap-2 tracking-wider border-main-200 border-2 font-semibold text-main-200 hover:bg-main-200 hover:text-main-400 focus:outline-none rounded-md transition-transform transform hover:scale-110 animate-bounce shadow-2xl" >
                    <x-slot:leftIcon>
                        <svg data-lucide="badge-dollar-sign" class="w-4 h-4 ml-2"></svg>
                    </x-slot:leftIcon>
                </x-button>
                <x-button title="Buy Car"
                    customClass="duration-500 flex items-center justify-center w-full py-3 px-4 text-sm tracking-wider border-main-200 border-2 font-semibold text-main-200 hover:bg-main-200 hover:text-main-400 focus:outline-none rounded-md transition-transform transform hover:scale-110 animate-spin-slow shadow-2xl" >
                    <x-slot:leftIcon>
                        <svg data-lucide="check" class="w-4 h-4 mr-2"></svg>
                    </x-slot:leftIcon>
                </x-button>
            </div>
        </div>
        {{-- image --}}
        <div class="animate-spin-slow animate-bounce  transition-transform duration-700 ease-in-out hover:scale-110">
            <img class="animate-pulse" src="{{ asset('/assets/images/car.png') }}" alt="cars" srcset="">
        </div>
    </div>
</section>

