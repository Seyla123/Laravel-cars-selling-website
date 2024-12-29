<nav class="flex items-center justify-between flex-wrap bg-white p-6 shadow-sm">
    <div class="flex items-center flex-shrink-0 text-white ">
        <a href="/" class="font-semibold text-xl tracking-tight max-w-20">
            <img src="{{ asset('/assets/images/seyla-logo.png') }}" alt="logo"
                class='w-40 inline-block' />
        </a>
    </div>
    <ul class="flex items-center space-x-4">
        <li >
            <a href="/" class="text-gray-800 hover:text-gray-600">
                <x-button  title="Add new car"
                customClass="w-full py-3 px-4  text-sm tracking-wider border-main-600 border-2 font-semibold text-main-600  hover:bg-main-600 hover:text-white focus:outline-none rounded-full px-6 "/>
            </a>
        </li>
        <li >
            <button  class="text-gray-800 hover:text-gray-600">My Account</button>
        </li>
        <li >
            <a href="/signup">
                <x-button  title="Signup" class="rounded-full px-6"/>
            </a>
        </li>
        <li >
            <a href="/login">
                Login
            </a>
        </li>
    </ul>
</nav>
