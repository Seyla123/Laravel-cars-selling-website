<x-base-layout>
    <div>
        {{-- header --}}
        @include('layouts.partials.header')

        {{-- content render here --}}
        {{ $slot }}

        {{-- footer --}}
        @include('layouts.partials.footer')

    </div>
</x-base-layout>
