<x-app-layout title="Car Detail">

    <main class="max-w-screen-2xl mx-auto h-full flex-grow w-full p-2 md:p-4 ">
        <div class="py-4">
            <h1 class="text-3xl font-bold ">Lexus LC 500 - 2009</h1>
            <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae</p>
        </div>
        <div class="flex gap-8 flex-col xl:flex-row ">
            {{-- lelf side --}}

                {{-- image details --}}
                <div class="duration-500  flex gap-2 max-h-[300px] md:max-h-[500px] lg:max-h-[600px] h-full w-full transition-all ease-in-out">
                    {{-- big image --}}
                    <div class="rounded-lg overflow-hidden hover:shadow-xl hover:scale-110 duration-500">
                        <img class="w-full h-full object-cover duration-500 ease-in-out rounded-lg" src="{{ asset('assets/images/car2.webp')}}" alt="">
                    </div>
                    {{-- small images --}}
                    <div class="flex flex-col gap-1 w-full max-w-[200px] overflow-y-auto ">
                        @for ($i = 0; $i < 20; $i++)
                        <div class=" bg-gray-200 rounded-lg shadow-sm">
                            <img class=" w-44 rounded-lg  hover:scale-110  duration-500 ease-in-out" src="{{ asset('assets/images/car.png')}}" alt="">
                        </div>
                        @endfor
                    </div>

                </div>

            {{-- right side --}}
            @php
            $favorite = false;
            @endphp
            <div class="bg-white rounded-lg p-4 md:p-8 xl:max-w-[500px] w-full h-full ">
                <div class="flex items-center justify-between ">
                    <h1 class="text-3xl font-bold py-4  ">$25000</h1>
                    <button class="{{ $favorite && 'opacity-50'}} hover:opacity-100  hover:scale-110 transition-all duration-300">
                        <svg data-lucide="heart" class="w-5 h-5  {{ $favorite ? 'fill-red-500 text-red-500' : '' }}"></svg>
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
                    'Fuel Type' => 'Gasoline'
                ];
                @endphp

                <div class="flex flex-col space-y-2 py-4">
                    @foreach($carDetails as $key => $detail)
                        <div class="flex items-center text-xl justify-between">
                            <div class="text-gray-600 w-full">{{ $key }}:</div>
                            <div class="w-full">{{ $detail }}</div>
                        </div>
                    @endforeach
                </div>
                <hr>
                <div class="flex items-center space-x-4 w-full py-4">
                    <img src="{{ asset('assets/images/profile.png') }}" alt="Profile" class="w-12 h-12 rounded-full">
                    <div class="flex flex-col">
                        <h1 class="font-semibold">Seav Seyla</h1>
                        <p class="text-sm text-gray-500">Total Cars: 5</p>
                    </div>
                </div>
                <div class="flex justify-between border-2 border-orange-400 p-4 max-w-[600px]  items-center rounded-3xl bg-white shadow-sm hover:shadow-lg duration-500">
                    <svg data-lucide="phone" class="w-6 h-6 text-orange-500"></svg>
                    <p class="text-orange-500 font-bold flex items-center gap-2">
                        +1 234 567***
                    </p>
                    <button class="bg-orange-500 hover:bg-orange-700 flex items-center text-white font-bold py-2 px-4 rounded-full duration-500">
                        Tap to view
                        <svg data-lucide="chevron-right" class="w-4 h-4 ml-2"></svg>
                    </button>
                </div>

            </div>
        </div>
    </main>

</x-app-layout>
