<x-app-layout title="Car Detail">

    <main class="max-w-screen-2xl mx-auto h-full flex-grow w-full p-2 md:p-4 space-y-4">
        <div class="py-4">
            <h1 class="text-3xl font-bold ">{{$car->maker->name}} {{$car->model->name}} - {{$car->year}}</h1>
            <p class="text-gray-600">{{$car->city->name}} - {{$car->published_at}}</p>
        </div>
        <div class="flex gap-4 flex-col xl:flex-row ">
            {{-- lelf side --}}
            {{-- image details --}}
            <div
                class="flex flex-col md:flex-row gap-2  md:max-h-[500px] lg:max-h-[600px] h-full w-full ">
                {{-- big image --}}
                <div class="rounded-lg  w-full hover:shadow-xl hover:scale-105 duration-500">
                    <img class="w-full h-full object-fit rounded-lg"
                        src="{{ $car->primaryImage->image_path  }}" alt="{{$car->model->name}}">
                </div>
                {{-- small images --}}
                <div class="flex flex-row md:flex-col gap-1 w-full md:max-w-[200px] overflow-y-auto ">
                    @foreach ($car->images as $image )
                        <div class=" rounded-lg  w-full  md:w-44 shadow-sm">
                            <img class="h-32 min-w-32 object-fit w-full rounded-lg  hover:scale-90 overflow-hidden  duration-500 ease-in-out"
                                src="{{ $image->image_path }}" alt="">
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- right side --}}
            <div class="bg-white rounded-lg p-4 md:p-8 xl:max-w-[500px] w-full flex flex-col justify-between ">
                {{-- car price and favorite --}}
                <div class="flex items-center justify-between ">
                    <h1 class="text-3xl font-bold py-4  ">${{$car->price}}</h1>
                    <button
                        class="{{ $favorite && 'opacity-50' }} hover:opacity-100  hover:scale-110 transition-all duration-300">
                        <svg data-lucide="heart"
                            class="w-5 h-5  {{ $favorite ? 'fill-red-500 text-red-500' : '' }}"></svg>
                    </button>
                </div>
                <hr>
                @php
                    $carDetails = [
                        'Maker' => $car->maker->name,
                        'Model' => $car->model->name,
                        'Year' => $car->year,
                        'Price' => '$' . $car->price,
                        'Mileage' => $car->mileage . ' miles',
                        'Fuel Type' => $car->fuelType->name,
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
                        <h1 class="font-semibold">{{$car->owner->name}}</h1>
                        <p class="text-sm text-gray-500">Total Cars: {{$car->owner->cars()->count()}}</p>
                    </div>
                </div>
                {{-- contact --}}
                <div
                    class="flex justify-between border-2 border-main-400 px-4 py-3 max-w-[600px]  items-center rounded-full bg-white shadow-sm hover:shadow-lg duration-500">
                    <svg data-lucide="phone" class="w-6 h-6 text-main-500"></svg>
                    <a href="tel:{{\Illuminate\Support\Str::mask($car->phone,'*',-3)}}" class="text-main-500 font-bold flex items-center gap-2">
                        {{\Illuminate\Support\Str::mask($car->phone,'*',-3)}}
                    </a>
                    <button
                        class="bg-main-500 hover:bg-main-700 flex items-center text-white font-bold py-2 px-4 rounded-full duration-500">
                        Tap to view
                        <svg data-lucide="chevron-right" class="w-4 h-4 ml-2"></svg>
                    </button>
                </div>

            </div>
        </div>
        {{-- car description --}}
        <x-car-description :carDescription="$car->description"/>
        
        {{-- car specifications --}}
        <x-car-spectification :carFeatures="$car->features" />
    </main>

</x-app-layout>
