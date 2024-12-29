<nav class="  md:flex-wrap bg-white border p-6 ">
    <div class="max-w-screen-2xl mx-auto flex items-center justify-between">
        <div class="flex items-center flex-shrink-0 text-white ">
            <a href="/" class="font-semibold text-xl tracking-tight max-w-20">
                <img src="{{ asset('/assets/images/seyla-logo.png') }}" alt="logo" class='w-40 inline-block' />
            </a>
        </div>

        <x-layouts.menu/>
        <x-layouts.mobile-menu/>
    </div>
</nav>
