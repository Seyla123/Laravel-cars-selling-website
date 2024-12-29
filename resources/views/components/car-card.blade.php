<div class="w-[300px] border h-[400px] flex flex-col rounded-lg">
    {{-- image --}}
   <div class="bg-gray-200">
      <img src="{{ asset('/assets/images/car.png') }}" alt="cars" srcset="">
   </div>
   {{-- details --}}
   <div class="p-4 space-y-2">
    {{-- location and favorite --}}
    <div class="flex items-center justify-between ">
        <p>Lorem ipsum dolor</p>
        <button>
            <svg data-lucide="heart" class="w-4 h-4 "></svg>
        </button>
    </div>
    {{-- name --}}
    <h1>2024 - Lexus RX350</h1>
    <p>Lorem ipsum dolor sit amet</p>
    <div>
        <hr class="border-t-1 border-gray-300 my-2">
        <button class="bg-gray-200 py-2 px-3 text-sm rounded-md">
            SUV
        </button>
        <button class="bg-gray-200 py-2 px-3 text-sm rounded-md">
            Hybride
        </button>
    </div>
   </div>
</div>
