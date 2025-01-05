<x-app-layout title="Car Detail">

    <main class="max-w-screen-2xl mx-auto h-full flex-grow w-full p-2 md:p-4 space-y-4">
        <div class="py-4">
            <h1 class="text-3xl font-bold ">{{$car->maker->name}} {{$car->model->name}} - {{$car->year}}</h1>
            <p class="text-gray-600">{{$car->city->name}} - {{$car->published_at}}</p>
        </div>
        <div class="flex gap-4 flex-col xl:flex-row ">
            {{-- lelf side --}}

            {{-- image details --}}
            <x-car-show-image 
                :primaryImage="$car->primaryImage->image_path" 
                :images="$car->images" 
                :imageTitle="$car->model->name" 
            />

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
