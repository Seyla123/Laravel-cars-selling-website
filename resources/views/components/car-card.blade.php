@props(
    ['image'=> '/assets/images/car.png',
    'name'=> 'Lexus RX350',
    'year'=>'2024',
    'price'=> '50000',
    'location'=> 'California',
    'type'=> ['SUV', 'Hybride'],
    'favorite'=> false]
)
<div class="w-full min-w-[200px] max-w- border h-full  flex flex-col rounded-lg bg-white shadow-sm hover:shadow-lg hover:scale-105 transition-all duration-300 cursor-pointer">
    {{-- image --}}
   <div class="bg-gray-200 overflow-hidden">
      <img src="{{ asset($image) }}" alt="{{ $name }} cars" srcset="" class="w-full h-full object-cover transition-all duration-300 transform hover:scale-110">
   </div>
   {{-- details --}}
   <div class="p-4 space-y-2 flex justify-between flex-col">
    {{-- location and favorite --}}
    <div class="flex items-center justify-between ">
        <p class="text-sm opacity-50">{{ $location }}</p>
        <button class="{{ $favorite && 'opacity-50'}} hover:opacity-100  hover:scale-110 transition-all duration-300">
            <svg data-lucide="heart" class="w-5 h-5  {{ $favorite ? 'fill-red-500 text-red-500' : '' }}"></svg>
        </button>
    </div>
    {{-- name --}}
    <h1 class="font-semibold">{{ $year }} - {{ $name }}</h1>
    <p class="font-semibold text-lg">${{ $price }}</p>
    <div class="flex flex-wrap gap-2">
        <div class="w-full border-t border-gray-200 my-2"></div>
        @foreach ($type as $item)
            <button class="bg-gray-200 py-2 px-3 text-sm rounded-md">
                {{ $item }}
            </button>
        @endforeach
    </div>
   </div>
</div>

