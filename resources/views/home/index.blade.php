<x-app-layout title="Home">
    <x-home.hero-section/>
    <div class="h-[500px]  bg-slate-100 px-12 py-4">
        <div class="max-w-screen-2xl mx-auto">
            <x-home.search-form/>
        </div>
    </div>
    <x-slot:footerLinks>
        <a href="#">Link 3</a>
        <a href="#">Link 4</a>
    </x-slot:footerLinks>
</x-app-layout>
