<x-app-layout title="Car Detail">
    @php
        $carTypes = [
            ['id' => 'sedan', 'value' => 'sedan', 'label' => 'Sedan'],
            ['id' => 'hatchback', 'value' => 'hatchback', 'label' => 'Hatchback'],
            ['id' => 'suv', 'value' => 'suv', 'label' => 'SUV (Sport Utility Vehicle)'],
        ];

        $fuelTypes = [
            ['id' => 'gasoline', 'value' => 'gasoline', 'label' => 'Gasoline'],
            ['id' => 'diesel', 'value' => 'diesel', 'label' => 'Diesel'],
            ['id' => 'electric', 'value' => 'electric', 'label' => 'Electric'],
            ['id' => 'hybrid', 'value' => 'hybrid', 'label' => 'Hybrid'],
        ];

        $data = ['cars' => 'Cars', 'boats' => 'Boats', 'trucks' => 'Trucks', 'motorcycles' => 'Motorcycles'];
    @endphp
    <main class="max-w-screen-2xl mx-auto h-full flex-grow w-full p-2 md:p-4 space-y-4">
        {{-- header  --}}
        <section class="py-4 space-y-4 md:gap-2  flex flex-col w-full  justify-between md:flex-row  md:items-center">
            <div>
                <h1 class="text-3xl font-bold md:text-nowrap ">Define Your Search Criteria</h1>
            </div>
            <div class="w-full md:max-w-[500px] gap-2 flex-col md:flex-row flex">
                <x-input-field name="search" placeholder="Search" />
                <div class="md:max-w-[200px] w-full">
                    <x-selector name="orderBy" placeholder="Order By" :$data />
                </div>
            </div>
        </section>
        {{-- main --}}
        <section class="flex flex-col md:flex-row gap-4">
            {{-- search --}}
            <div class="md:max-w-[350px] w-full h-full flex flex-col gap-6 bg-white rounded-lg p-4">
                {{-- total result search --}}
                <div class="p-4 border-2 border-dashed border-gray-300 rounded-lg">
                    <h1 class="text-xl  md:text-nowrap ">Total Result: <span class="font-bold">5000</span> Cars</h1>
                </div>
                {{-- categories search --}}
                <h1 class="text-xl font-bold text-nowrap ">By Categories</h1>
                <div class="w-full flex flex-col gap-2">
                    <x-selector name="Maker" placeholder="Maker" label="Maker" :$data />
                    <x-selector name="Model" placeholder="Model" label="Model" :$data />
                    <x-selector name="type" placeholder="Type" :data="$data" label="Type" />
                    <div>
                        <h1 class="text-sm mb-2 block font-medium">Year</h1>
                        <div class="flex gap-2 ">
                            <x-input-field name="yearFrom" placeholder="Year from" />
                            <x-input-field name="yearTo" placeholder="Year to" />
                        </div>
                    </div>
                    <div>
                        <h1 class="text-sm mb-2 block font-medium">Price</h1>
                        <div class="flex gap-2 ">
                            <x-input-field name="priceFrom" placeholder="Price from" />
                            <x-input-field name="priceTo" placeholder="Price to" />
                        </div>
                    </div>
                    <x-selector name="mileage" placeholder="Any Mileage" :data="$data" label="Mileage" />
                    <x-selector name="state" placeholder="State/Region" :data="$data" label="State/Region" />
                    <x-selector name="city" placeholder="City" :data="$data" label="City" />
                    <x-selector name="fuelType" placeholder="Fuel Type" :data="$data" label="Fuel Type" />
                    {{-- submit and reset --}}
                    <div class="flex gap-2">
                        <x-button title="Reset"
                            customClass="duration-500 flex gap-2 items-center justify-center w-full py-3 px-3  text-sm tracking-wider border-main-600 border-2 font-semibold text-main-600  hover:bg-main-600 hover:text-white focus:outline-none rounded-md  " />
                        <x-button title="Search" type="submit" />
                    </div>
                </div>
            </div>
            {{-- cars result --}}

            <div class="flex gap-2 md:gap-6 flex-col">
                <div class="grid grid-cols-2 gap-4">
                    @foreach ($cars as $key => $value)
                        <x-car-card :name="$value['name']" :year="$value['year']" :price="$value['price']" :location="$value['location']"
                            :type="$value['type']" :favorite="$value['favorite']" />
                    @endforeach
                </div>
                {{-- pagination --}}
                <div class="bg-white dark:bg-gray-800 flex justify-center items-center py-2 md:py-4 rounded-lg">
                    <x-pagination totalPage="5" selectedPage="1" />
                </div>
            </div>

        </section>
    </main>

</x-app-layout>
