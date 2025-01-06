<x-app-layout title="My Favourites Cars">
    <div class="bg-slate-100 px-4 xl:px-12 py-4 flex flex-grow justify-center ">
        <div class="max-w-screen-2xl flex w-full">
            <section class="space-y-2 w-full justify-center flex flex-col ">
                <h1 class="text-3xl font-bold py-4 md:py-6 flex-none">My Favourites Cars</h1>
                @if ($cars->count() > 0)
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                        @foreach ($cars as $car )
                            <x-car-card :$car />
                        @endforeach
                    </div>
                @else
                <div class="bg-white rounded-lg flex w-full justify-center flex-col items-center flex-1">
                    <p class="text-center text-lg ">No Cars Found in your Watchlist</p>
                </div>
                @endif
                {{-- pagination --}}
                <div class="bg-white flex justify-center items-center flex-none py-2 md:py-4 rounded-lg">
                    <x-pagination totalPage="5" selectedPage="1" />
                </div>
            </section>
        </div>
    </div>
</x-app-layout>
