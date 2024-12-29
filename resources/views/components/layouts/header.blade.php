<nav class="flex items-center justify-between md:flex-wrap bg-white p-6 border">
    <div class="flex items-center flex-shrink-0 text-white ">
        <a href="/" class="font-semibold text-xl tracking-tight max-w-20">
            <img src="{{ asset('/assets/images/seyla-logo.png') }}" alt="logo" class='w-40 inline-block' />
        </a>
    </div>
    <div class="hidden md:flex">
        <ul class="flex items-center space-x-4">
            {{-- add new car --}}
            <li>
                <a href="/" class="text-gray-800 hover:text-gray-600">

                    <x-button title="Add new car"
                        customClass="duration-500 flex gap-2 items-center w-full py-3 px-6  text-sm tracking-wider border-main-600 border-2 font-semibold text-main-600  hover:bg-main-600 hover:text-white focus:outline-none rounded-full  ">
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
                            @foreach (['My Cars', 'My Favourites Cars', 'Logout'] as $item)
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-main-100   dark:hover:text-purple-200">{{ $item }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </x-slot:dropdownContent>
                </x-dropdown>
            </li>
            <li>
                {{-- signup --}}
                <a href="/signup">
                    <x-button title="Signup" class="duration-300 rounded-full w-full py-4 px-7 flex gap-2 items-center ">
                        <x-slot:leftIcon>
                            <svg data-lucide="user-plus" class="w-5 h-5 "></svg>
                        </x-slot:leftIcon>
                    </x-button>
                </a>
            </li>
            <li>
                {{-- login --}}
                <a href="/login">
                    <x-button title="Login" customClass="bg-white duration-300  flex gap-2 items-center hover:px-1  hover:text-main-700 hover:font-bold group">
                        <x-slot:leftIcon>
                            <svg data-lucide="log-out" class="w-5 h-5 transition-transform duration-500 group-hover:rotate-[360deg] transform"></svg>
                        </x-slot:leftIcon>
                    </x-button>
                </a>
            </li>
        </ul>
    </div>

    <div class="block md:hidden">
        <svg data-lucide="align-justify" class="w-8 h-8 "></svg>
    </div>
</nav>
