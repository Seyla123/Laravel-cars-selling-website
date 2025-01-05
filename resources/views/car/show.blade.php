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

                {{-- car details --}}
                <x-car-detail :$car/>
                <hr>
                
                {{-- profile details --}}
                <x-car-owner-profile 
                    :name="$car->owner->name" 
                    :totalCars="$car->owner->cars()->count()" 
                />

                {{-- car owner contact --}}
                <x-car-owner-contact :phone="$car->owner->phone" />

            </div>
        </div>
        {{-- car description --}}
        <x-car-description :carDescription="$car->description"/>
        
        {{-- car specifications --}}
        <x-car-spectification :carFeatures="$car->features" />
    </main>

</x-app-layout>
