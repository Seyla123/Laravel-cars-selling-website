<x-app-layout title="Home">
    <x-home.hero-section/>
    <div class="bg-slate-100 px-4 xl:px-12 py-4">
        <div class="max-w-screen-2xl mx-auto ">
            <x-home.search-form/>
            <section class="space-y-2">
                <h1 class="text-3xl font-bold py-4 md:py-6 ">Lastest Added Cars</h1>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                    @foreach ($cars as $key => $value)
                    <a href="{{ route('car.show', $value['id']) }}">
                        <x-car-card
                        :name="$value['name']"
                        :year="$value['year']"
                        :price="$value['price']"
                        :location="$value['location']"
                        :type="$value['type']"
                        :favorite="$value['favorite']"
                    />
                    </a>
                    @endforeach
                </div>
                {{-- pagination --}}
                <div class="bg-white flex justify-center items-center py-2 md:py-4 rounded-lg">
                    <x-pagination totalPage="5" selectedPage="1" />
                </div>
            </section>
        </div>
    </div>
</x-app-layout>
