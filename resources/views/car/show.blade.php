<x-app-layout title="Car Detail">

    <main class="max-w-screen-2xl mx-auto h-full flex-grow w-full p-2 md:p-4 space-y-4">
        <div class="py-4">
            <h1 class="text-3xl font-bold ">Lexus LC 500 - 2009</h1>
            <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae</p>
        </div>
        <div class="flex gap-8 flex-col xl:flex-row ">
            {{-- lelf side --}}
            {{-- image details --}}
            <div
                class="duration-500  flex flex-col md:flex-row gap-2  md:max-h-[500px] lg:max-h-[600px] h-full w-full transition-all ease-in-out">
                {{-- big image --}}
                <div class="rounded-lg overflow-hidden hover:shadow-xl hover:scale-110 duration-500">
                    <img class="w-full h-full object-cover duration-500 ease-in-out rounded-lg"
                        src="{{ asset('assets/images/car2.webp') }}" alt="">
                </div>
                {{-- small images --}}
                <div class="flex flex-row md:flex-col gap-1 w-full md:max-w-[200px] overflow-y-auto ">
                    @for ($i = 0; $i < 20; $i++)
                        <div class=" bg-gray-200 rounded-lg shadow-sm">
                            <img class="h-32 min-w-32 md:w-44 rounded-lg  hover:scale-110  duration-500 ease-in-out"
                                src="{{ asset('assets/images/car.png') }}" alt="">
                        </div>
                    @endfor
                </div>
            </div>

            {{-- right side --}}
            @php
                $favorite = false;
            @endphp
            <div class="bg-white rounded-lg p-4 md:p-8 xl:max-w-[500px] w-full flex flex-col justify-between ">
                {{-- car price and favorite --}}
                <div class="flex items-center justify-between ">
                    <h1 class="text-3xl font-bold py-4  ">$25000</h1>
                    <button
                        class="{{ $favorite && 'opacity-50' }} hover:opacity-100  hover:scale-110 transition-all duration-300">
                        <svg data-lucide="heart"
                            class="w-5 h-5  {{ $favorite ? 'fill-red-500 text-red-500' : '' }}"></svg>
                    </button>
                </div>
                <hr>
                @php
                    $carDetails = [
                        'Maker' => 'Lexus',
                        'Model' => 'LC 500',
                        'Year' => 2009,
                        'Price' => '$25000',
                        'Mileage' => '30,000 miles',
                        'Fuel Type' => 'Gasoline',
                    ];
                @endphp
                {{-- car details --}}
                <div class="flex flex-col space-y-2 py-4 ">
                    @foreach ($carDetails as $key => $detail)
                        <div class="flex items-center text-xl justify-between">
                            <div class="text-gray-600 w-full">{{ $key }}:</div>
                            <div class="w-full">{{ $detail }}</div>
                        </div>
                    @endforeach
                </div>
                <hr>
                {{-- profile details --}}
                <div class="flex items-center space-x-4 w-full py-4">
                    <img src="{{ asset('assets/images/profile.png') }}" alt="Profile" class="w-12 h-12 rounded-full">
                    <div class="flex flex-col">
                        <h1 class="font-semibold">Seav Seyla</h1>
                        <p class="text-sm text-gray-500">Total Cars: 5</p>
                    </div>
                </div>
                {{-- contact --}}
                <div
                    class="flex justify-between border-2 border-main-400 p-4 max-w-[600px]  items-center rounded-3xl bg-white shadow-sm hover:shadow-lg duration-500">
                    <svg data-lucide="phone" class="w-6 h-6 text-main-500"></svg>
                    <p class="text-main-500 font-bold flex items-center gap-2">
                        +1 234 567***
                    </p>
                    <button
                        class="bg-main-500 hover:bg-main-700 flex items-center text-white font-bold py-2 px-4 rounded-full duration-500">
                        Tap to view
                        <svg data-lucide="chevron-right" class="w-4 h-4 ml-2"></svg>
                    </button>
                </div>

            </div>
        </div>
        <div class="bg-white rounded-lg p-4 space-y-4">
            <h1 class="text-xl md:text-2xl font-semibold mt-4">Detailed Description</h1>
            <p class="details max-h-[200px] overflow-hidden">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dolor ipsum, ultricies et sapien tempor,
                ultrices varius mi. Nulla placerat, lectus a porttitor rutrum, tortor velit bibendum massa, et laoreet
                augue risus sed ipsum. Etiam ultricies purus sed nulla vestibulum ultricies. Phasellus bibendum urna eu
                neque consequat iaculis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                inceptos himenaeos. Integer sit amet consequat leo. Sed accumsan, sem non commodo tempor, libero nunc
                congue ipsum, et laoreet ante justo non ligula. Ut lobortis condimentum molestie. Sed non lorem eu massa
                commodo porta placerat ac leo. Aliquam erat volutpat. Etiam maximus lobortis elit a commodo. Donec
                consectetur dolor quis turpis laoreet tincidunt. Donec blandit metus ex, eget finibus orci aliquam a.
                Nulla facilisi.

                Fusce tincidunt mollis purus nec sollicitudin. Integer pharetra convallis sapien, id finibus purus
                tempor id. Quisque sed lacus justo. Pellentesque rhoncus malesuada quam, eu sodales sapien pharetra vel.
                Vivamus et diam eget massa dapibus gravida quis ac mauris. Vestibulum sit amet fermentum lorem.
                Phasellus volutpat scelerisque accumsan. Etiam lacus ipsum, pulvinar ac rutrum ac, luctus ut elit. Ut
                ullamcorper arcu nibh, nec posuere turpis cursus non. Phasellus commodo hendrerit risus dignissim porta.
                Fusce tincidunt mollis purus nec sollicitudin. Integer pharetra convallis sapien, id finibus purus
                tempor id. Quisque sed lacus justo. Pellentesque rhoncus malesuada quam, eu sodales sapien pharetra vel.
                Vivamus et diam eget massa dapibus gravida quis ac mauris. Vestibulum sit amet fermentum lorem.
                Phasellus volutpat scelerisque accumsan. Etiam lacus ipsum, pulvinar ac rutrum ac, luctus ut elit. Ut
                ullamcorper arcu nibh, nec posuere turpis cursus non. Phasellus commodo hendrerit risus dignissim porta.
                Fusce tincidunt mollis purus nec sollicitudin. Integer pharetra convallis sapien, id finibus purus
                tempor id. Quisque sed lacus justo. Pellentesque rhoncus malesuada quam, eu sodales sapien pharetra vel.
                Vivamus et diam eget massa dapibus gravida quis ac mauris. Vestibulum sit amet fermentum lorem.
                Phasellus volutpat scelerisque accumsan. Etiam lacus ipsum, pulvinar ac rutrum ac, luctus ut elit. Ut
                ullamcorper arcu nibh, nec posuere turpis cursus non. Phasellus commodo hendrerit risus dignissim porta.
                Fusce tincidunt mollis purus nec sollicitudin. Integer pharetra convallis sapien, id finibus purus
                tempor id. Quisque sed lacus justo. Pellentesque rhoncus malesuada quam, eu sodales sapien pharetra vel.
                Vivamus et diam eget massa dapibus gravida quis ac mauris. Vestibulum sit amet fermentum lorem.
                Phasellus volutpat scelerisque accumsan. Etiam lacus ipsum, pulvinar ac rutrum ac, luctus ut elit. Ut
                ullamcorper arcu nibh, nec posuere turpis cursus non. Phasellus commodo hendrerit risus dignissim porta.
                Fusce tincidunt mollis purus nec sollicitudin. Integer pharetra convallis sapien, id finibus purus
                tempor id. Quisque sed lacus justo. Pellentesque rhoncus malesuada quam, eu sodales sapien pharetra vel.
                Vivamus et diam eget massa dapibus gravida quis ac mauris. Vestibulum sit amet fermentum lorem.
                Phasellus volutpat scelerisque accumsan. Etiam lacus ipsum, pulvinar ac rutrum ac, luctus ut elit. Ut
                ullamcorper arcu nibh, nec posuere turpis cursus non. Phasellus commodo hendrerit risus dignissim porta.
            </p>
            <button
                class="bg-main-500 hover:bg-main-700 flex items-center text-white font-bold py-2 px-4 rounded-full duration-500"
                id="show-more-details" onclick="toggleDetails()">
                See More Details            </button>
        </div>

        <script>
            function toggleDetails() {
                const details = document.querySelector('.details');
                const button = document.getElementById('show-more-details');
                if (details.classList.contains('max-h-[200px]')) {
                    details.classList.remove('max-h-[200px]', 'overflow-hidden');
                    button.innerHTML = 'See Less Details ';
                } else {
                    details.classList.add('max-h-[200px]', 'overflow-hidden');
                    button.innerHTML = 'See More Details';
                }
            }
        </script>
    </main>

</x-app-layout>
