@props(['title'=>'Seyla', 'footerLinks'=>''])
<x-base-layout :$title>
    <div>
        {{-- header --}}
        <x-layouts.header/>

        {{-- content render here --}}
        {{ $slot }}

        {{-- footer --}}
        <x-layouts.footer />


    </div>
</x-base-layout>
