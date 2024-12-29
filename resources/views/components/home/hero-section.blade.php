<section class="flex flex-col sm:flex-row sm:justify-between h-[calc(100vh-100px)] max-h-[1000px] bg-no-repeat bg-center bg-cover"
    style="background-image: url({{ asset('assets/images/home-background.jpg') }})">

    <div class="max-w-screen-2xl mx-auto flex items-center flex-col sm:flex-row">
        {{-- title --}}
        <div class="flex flex-col justify-center p-8 ">
            <div class="space-y-4">
                <h1 class="text-5xl font-bold">
                    <span class="text-main-600">Explore</span>
                    Land and Sea Like Never Before
                </h1>
                <p class="text-gray-600 text-lg">Get the best deals on cars, from sedans to SUVs. Find your dream car today!</p>
                <div class="max-w-sm flex gap-2">
                    <x-button title="Sell Car" />
                    <x-button title="Buy Car"
                        customClass="duration-500 flex gap-2 items-center justify-center w-full py-3 px-4  text-sm tracking-wider border-main-600 border-2 font-semibold text-main-600  hover:bg-main-600 hover:text-white focus:outline-none rounded-md  " />
                </div>
            </div>
        </div>
        {{-- image --}}
        <div>
            <img src="{{ asset('/assets/images/car.png') }}" alt="cars" srcset="">
        </div>
    </div>
</section>

