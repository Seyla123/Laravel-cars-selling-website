<x-app-layout title="Home">
    <x-home.hero-section/>
    <div class="bg-slate-100 px-12 py-4">
        <div class="max-w-screen-2xl mx-auto ">
            <x-home.search-form/>
            <section>
                <h1 class="text-3xl font-bold py-4">Lastest Added Cars</h1>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                    <x-car-card/>
                    <x-car-card/>
                    <x-car-card/>
                    <x-car-card/>
                    <x-car-card/>
                    <x-car-card/>
                    <x-car-card/>
                    <x-car-card/>
                    <x-car-card/>
                </div>
            </section>
        </div>
    </div>
    <x-slot:footerLinks>
        <a href="#">Link 3</a>
        <a href="#">Link 4</a>
    </x-slot:footerLinks>
</x-app-layout>
