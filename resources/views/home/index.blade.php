<x-app-layout title="Home">
    <x-home.hero-section/>
    <div class="bg-slate-100 px-4 xl:px-12 py-4">
        <div class="max-w-screen-2xl mx-auto ">
            <x-home.search-form/>
            <section>
                <h1 class="text-3xl font-bold py-4 md:py-6 ">Lastest Added Cars</h1>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                    @foreach ($cars as $key => $value)
                    <x-car-card
                        :name="$value['name']"
                        :year="$value['year']"
                        :price="$value['price']"
                        :location="$value['location']"
                        :type="$value['type']"
                        :favorite="$value['favorite']"
                    />
                    @endforeach
                </div>
            </section>
        </div>
    </div>
</x-app-layout>
