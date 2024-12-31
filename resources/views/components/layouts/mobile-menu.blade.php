@props([
    'myAccountData'=>['My Cars' => 'car.index', 'My Favourites Cars' => 'signup', 'Logout' => 'signup']
])
<div class="block md:hidden">
    <svg data-lucide="align-justify" class="w-8 h-8 group cursor-pointer" onclick="toggleMenu()"></svg>
</div>
<div id="mobileMenu" class="duration-500 top-0 right-0 fixed h-screen bg-white border -right-full z-50">
    <div class="flex flex-col w-full h-full items-center justify-center p-8 bg-slate-200">
        <div class="w-full flex justify-end">
            <svg data-lucide="x" class="w-8 h-8 group cursor-pointer" onclick="toggleMenu()"></svg>
        </div>
       <div class="h-full flex flex-col items-center justify-center">
        <ul class="flex flex-col items-center justify-between p-6 gap-3">
            <li>
                <a href="{{ route('car.create') }}" class="text-gray-800 hover:text-gray-600">Add new car</a>
            </li>
            <li>
                <details class="group flex items-center flex-col">
                    <summary class="flex items-center cursor-pointer">
                        My account
                        <svg data-lucide="chevron-down" class="w-4 h-4 transition-transform duration-500 group-open:rotate-180"></svg>
                    </summary>
                    <ul class="text-sm text-gray-700 mt-2">
                        @foreach ($myAccountData as $item => $value)
                            <li class="group-open:block hidden">
                                <a href="{{route($value)}}"
                                    class="text-gray-800 hover:text-gray-600">{{ $item }}</a>
                            </li>
                        @endforeach
                    </ul>
                </details>
            </li>
            <li>
                <a href="/" class="text-gray-800 hover:text-gray-600">Signup</a>
            </li>
            <li>
                <a href="/" class="text-gray-800 hover:text-gray-600">Login</a>
            </li>
        </ul>
       </div>
    </div>
</div>
<script>
    let toggle=false;
    function toggleMenu() {
        const menu = document.getElementById('mobileMenu');
        document.body.classList.toggle('overflow-hidden');

        if(toggle){
            menu.classList.remove('w-screen');
            menu.classList.add('-right-full');
        }else{
            menu.classList.add('w-screen');
            menu.classList.remove('-right-full');
        }
        toggle=!toggle;

    }
</script>
