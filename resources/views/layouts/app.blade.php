@props(['title'=>'Seyla', 'footerLinks'=>''])
<x-base-layout :$title>
    <div>
        {{-- header --}}
        <x-layouts.header/>

        {{-- content render here --}}
        {{ $slot }}

        {{-- footer --}}
        <footer>
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            {{$footerLinks}}
        </footer>

    </div>
</x-base-layout>
