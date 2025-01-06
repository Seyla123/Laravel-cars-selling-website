@props([
    'myAccountData'=>['My Cars' => 'car.index', 'My Favourites Cars' => 'car.watchlist', 'Logout' => 'signup']
])
<div class="hidden md:flex z-10">
    <ul class="flex items-center space-x-4">
        {{-- add new car --}}
        <li>
            <a href="{{ route('car.create') }}" class="text-gray-800 hover:text-gray-600">

                <x-button title="Add new car"
                    customClass="duration-500 flex gap-2 items-center w-full py-3 px-6  text-sm tracking-wider border-main-600 border-2 font-semibold text-main-600  hover:bg-main-600 hover:text-white focus:outline-none rounded-full transition-transform transform hover:scale-110 animate-spin-slow group ">
                    <x-slot:leftIcon>
                        <svg data-lucide="circle-plus" class="w-6 h-6 "></svg>
                    </x-slot:leftIcon>
                </x-button>
            </a>
        </li>
        <li>
            {{-- dropdown my account --}}
            <x-dropdown>
                My account
                <svg data-lucide="chevron-down" class="w-6 h-6 "></svg>
                <x-slot:dropdownContent>
                    <ul class="py-2 text-sm text-gray-700 dark:text-main-200 " aria-labelledby="dropdownDefaultButton">
                        @foreach ($myAccountData as $item => $value)
                            <li>
                                <a href="{{ route($value) }}"
                                    class="block px-4 py-2 hover:bg-main-100 dark:hover:text-purple-200">{{ $item }}</a>
                            </li>
                        @endforeach
                    </ul>
                </x-slot:dropdownContent>
            </x-dropdown>
        </li>
        <li>
            {{-- signup --}}
            <a href="{{route('signup')}}">
                <x-button title="Signup" class="duration-500 rounded-full w-full py-4 px-7 flex gap-2 items-center transition-transform transform hover:scale-110 animate-spin-slow ">
                    <x-slot:leftIcon>
                        <svg data-lucide="user-plus" class="w-5 h-5 "></svg>
                    </x-slot:leftIcon>
                </x-button>
            </a>
        </li>
        <li>
            {{-- login --}}
            <a href="{{route('login')}}">
                <x-button title="Login" customClass="bg-white duration-300  flex gap-2 items-center hover:px-1  hover:text-main-700 hover:font-bold group">
                    <x-slot:leftIcon>
                        <svg data-lucide="log-out" class="w-5 h-5 transition-transform duration-500 group-hover:rotate-[360deg] transform"></svg>
                    </x-slot:leftIcon>
                </x-button>
            </a>
        </li>
    </ul>
</div>
