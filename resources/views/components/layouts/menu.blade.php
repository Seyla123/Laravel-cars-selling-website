@props([
    'myAccountData' => [],
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
                    <ul class="py-2 text-sm text-gray-700  " aria-labelledby="dropdownDefaultButton">
                        @foreach ($myAccountData as $item => $value)
                            <li>
                                <a href="{{ route($value) }}"
                                    class="block px-4 py-2 hover:bg-gray-100 ">{{ $item }}</a>
                            </li>
                        @endforeach
                    </ul>
                </x-slot:dropdownContent>
            </x-dropdown>
        </li>
        @guest
            <li>
                {{-- Register --}}
                <a href="{{ route('register') }}">
                    <x-button title="Register"
                        class="duration-500 rounded-full w-full py-4 px-7 flex gap-2 items-center transition-transform transform hover:scale-110 animate-spin-slow ">
                        <x-slot:leftIcon>
                            <svg data-lucide="user-plus" class="w-5 h-5 "></svg>
                        </x-slot:leftIcon>
                    </x-button>
                </a>
            </li>
            <li>
                {{-- login --}}
                <a href="{{ route('login') }}">
                    <x-button title="Login"
                        customClass="bg-white duration-300  flex gap-2 items-center hover:px-1  hover:text-main-700 hover:font-bold group">
                        <x-slot:leftIcon>
                            <svg data-lucide="log-out"
                                class="w-5 h-5 transition-transform duration-500 group-hover:rotate-[360deg] transform"></svg>
                        </x-slot:leftIcon>
                    </x-button>
                </a>
            </li>
        @endguest
        @auth
        
        <li>
            {{-- User --}}
            <x-dropdown id="userDropdown" :default="false">
                <x-button :title="Illuminate\Support\Str::limit(ucwords(\Illuminate\Support\Facades\Auth::user()->name), 20, '...')"
                        class="rounded-full w-full py-3 px-6  flex gap-2 items-center">
                        <x-slot:leftIcon>
                            <svg data-lucide="user-circle" class="w-5 h-5 "></svg>
                        </x-slot:leftIcon>
                        <x-slot:rightIcon>
                            <svg data-lucide="chevron-down" class="w-6 h-6 "></svg>
                        </x-slot:rightIcon>
                </x-button>
                <x-slot:dropdownContent>
                    <p class="text-sm px-4 py-2 truncate">{{Str::ucfirst(\Illuminate\Support\Facades\Auth::user()->email)}}</p>
                    <hr>
                    <ul class="py-2 text-sm text-gray-700  " aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a >
                                    <button type="submit" href=""
                                    class="flex px-4 py-2 justify-start gap-1 hover:bg-gray-100 w-full items-center">
                                    <svg data-lucide="circle-user" class="w-4 h-4 "></svg>
                                    Profile</button>
                                </a>
                            </li>
                            <li>
                                <a href=""
                                    class="">
                                    <button type="submit" href=""
                                    class="flex px-4 py-2 justify-start gap-1 hover:bg-gray-100 w-full items-center">
                                    <svg data-lucide="settings" class="w-4 h-4 "></svg>
                                    Settings</button>
                                </a>
                            </li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" href=""
                                        class="flex px-4 py-2 justify-start gap-1 hover:bg-gray-100 w-full items-center">
                                        <svg data-lucide="log-out" class="w-4 h-4 "></svg>
                                        Logout</button>
                                </form>
                            </li>
                    </ul>
                </x-slot:dropdownContent>
            </x-dropdown>
                
           
        </li>
        @endauth
    </ul>
</div>
