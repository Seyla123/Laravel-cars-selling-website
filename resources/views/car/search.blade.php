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

    $data = ["cars" => "Cars", "boats" => "Boats", "trucks" => "Trucks", "motorcycles" => "Motorcycles"]
@endphp
    <main class="max-w-screen-2xl mx-auto h-full flex-grow w-full p-2 md:p-4 space-y-4">
        {{-- header  --}}
        <section class="py-4 space-y-4 md:gap-2  flex flex-col w-full  justify-between md:flex-row  md:items-center">
            <div>
                <h1 class="text-3xl font-bold text-nowrap ">Define Your Search Criteria</h1>
            </div>
           <div class="w-full md:max-w-[500px] gap-2 flex-col md:flex-row flex">
            <x-input-field name="search"  placeholder="Search" />
            <div class="md:max-w-[200px] w-full">
                <x-selector name="orderBy" placeholder="Order By" :$data/>
            </div>
           </div>
        </section>
        {{-- main --}}
       <section class="flex flex-col md:flex-row gap-4">
         {{-- search --}}
         <div class="md:max-w-[400px] w-full flex flex-col gap-6 bg-white p-4 rounded-lg">
            {{-- total result search --}}
            <div class="p-4 border border-dashed border-gray-300 rounded-lg">
                <h1 class="text-xl  text-nowrap ">Total Result: <span class="font-bold">5000</span> Cars</h1>
            </div>
            {{-- categories search --}}
            <div class="w-full h-[700px] bg-white p-4 rounded-lg"></div>
        </div>
        {{-- cars result --}}
        <div class="bg-gray-500 w-full h-screen">

        </div>
       </section>
    </main>

</x-app-layout>
