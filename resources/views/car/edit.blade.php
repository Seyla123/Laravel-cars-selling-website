<x-app-layout title="Edit Car">
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
    <x-layouts.main-layout title="Edit Car">
        <div class="p-4">
            <form action="" class="flex w-full flex-col xl:flex-row gap-4 ">
                {{-- form field --}}
                <div class="flex gap-6 w-full flex-col ">
                    <div class="flex gap-4 w-full">
                        <x-selector name="Maker" placeholder="Maker" label="Maker" :$data/>
                        <x-selector name="Model" placeholder="Model" label="Model" :$data/>
                        <x-selector name="Year" placeholder="Year" label="Year" :$data />
                    </div>
                    <div>
                        <label for="carType" class="text-sm mb-2 block font-medium ">Car Type</label>
                        <div class="flex items-center space-x-4">
                            @foreach($carTypes as $carType)
                                <div class="flex items-center ">
                                    <input id="{{ $carType['id'] }}" type="radio" value="{{ $carType['value'] }}" name="carType" class="hidden peer" />
                                    <label for="{{ $carType['id'] }}" class="border border-gray-300 rounded-full px-4 py-2 text-sm font-medium text-gray-900 peer-checked:bg-blue-500 peer-checked:text-white dark:border-gray-600 cursor-pointer dark:text-gray-300 dark:peer-checked:bg-blue-600 dark:peer-checked:text-white">
                                        {{ $carType['label'] }}
                                    </label>
                                </div>
                            @endforeach
                        </div>

                    </div>
                    {{-- Car Type --}}
                    <div class="flex gap-4 w-full">
                        <x-input-field name="price"  placeholder="Price" label="Price" labelClass="font-medium	"/>
                        <x-input-field name="vinCode"  placeholder="Vin Code" label="Vin Code" labelClass="font-medium	"/>
                        <x-input-field name="mileage"  placeholder="Mileage" label="Mileage (ml)" labelClass="font-medium	"/>
                    </div>
                    <div class="flex gap-4 w-full">
                        <x-selector name="Maker" placeholder="Maker" label="Maker" />
                        <x-selector name="Model" placeholder="Model" label="Model" />
                        <x-selector name="Year" placeholder="Year" label="Year" />
                    </div>
                    {{-- Fuel Type --}}
                    <div>
                        <label for="fuelType" class="text-sm mb-2 block font-medium ">Fuel Type</label>
                        <div class="flex items-center space-x-4">
                            @foreach($fuelTypes as $fuelType)
                                <div class="flex items-center ">
                                    <input id="{{ $fuelType['id'] }}" type="radio" value="{{ $fuelType['value'] }}" name="fuelType" class="hidden peer" />
                                    <label for="{{ $fuelType['id'] }}" class="border border-gray-300 rounded-full px-4 py-2 text-sm font-medium text-gray-900 peer-checked:bg-blue-500 peer-checked:text-white dark:border-gray-600 cursor-pointer dark:text-gray-300 dark:peer-checked:bg-blue-600 dark:peer-checked:text-white">
                                        {{ $fuelType['label'] }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    {{-- state and city --}}
                    <div class="flex gap-4 w-full">
                        <x-selector name="state" placeholder="Stae/Region" label="Stae/Region" :$data/>
                        <x-selector name="city" placeholder="City" label="City" :$data/>
                    </div>
                    {{-- submit and reset big screen--}}
                    <div class="hidden xl:flex  w-full  items-center justify-end">
                        <div class="max-w-[300px] flex w-full gap-4">
                            <x-button title="Reset"
                            customClass="duration-500 flex gap-2 items-center justify-center w-full py-3 px-3  text-sm tracking-wider border-main-600 border-2 font-semibold text-main-600  hover:bg-main-600 hover:text-white focus:outline-none rounded-md  " />
                            <x-button title="Update"  type="submit"/>
                        </div>
                    </div>

                </div>
                <span class="bg-gray-200 w-[2px]"></span>
                {{-- image upload --}}
                <div class=" border border-dashed border-gray-300 rounded-lg p-4 w-full xl:max-w-[500px] max-h-[200px]">
                    {{-- image upload --}}
                    <div class="flex flex-col justify-center w-full items-center bg-gray-50 rounded-lg border-2 border-dashed border-gray-300 h-full">
                        <label for="images" class="flex flex-col items-center justify-center w-full h-full">
                            <svg data-lucide="image" class="w-12 h-12 text-gray-400"></svg>
                            <p class="text-gray-600 text-sm">Drag and drop images here</p>
                            <p class="text-gray-600 text-xs">Or click to select images</p>
                            <input type="file" name="images[]" id="images" multiple class="hidden">
                        </label>
                    </div>
                    {{-- image preview --}}
                    <ul id="images-preview" class="flex flex-wrap gap-4 mt-4">
                    </ul>
                    <script>
                        const inputElement = document.getElementById('images');
                        inputElement.addEventListener("change", (e) => {
                            const previewContainer = document.getElementById('images-preview');
                            previewContainer.innerHTML = "";
                            const files = e.target.files;
                            for (const file of files) {
                                const fileReader = new FileReader();
                                fileReader.onload = (e) => {
                                    const container = document.UpdateElement('div');
                                    container.className = "relative";
                                    container.innerHTML = `
                                        <img src="${e.target.result}" class="w-[150px] h-[150px] object-cover rounded-lg border border-gray-300"/>
                                        <button class="absolute top-0 right-0 bg-gray-200 rounded-full p-1 hover:bg-gray-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="x" class="lucide lucide-x w-4 h-4"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg>
                                        </button>
                                    `;
                                    container.querySelector('button').onclick = () => {
                                        container.remove();
                                    };
                                    previewContainer.appendChild(container);
                                };
                                fileReader.readAsDataURL(file);
                            }
                        });
                    </script>
                </div>
                <div class="flex xl:hidden  w-full  items-center justify-center sm:justify-end">
                    <div class="sm:max-w-[300px] flex w-full gap-4">
                        <x-button title="Reset"
                        customClass="duration-500 flex gap-2 items-center justify-center w-full py-3 px-3  text-sm tracking-wider border-main-600 border-2 font-semibold text-main-600  hover:bg-main-600 hover:text-white focus:outline-none rounded-md  " />
                        <x-button title="Create"  type="submit"/>
                    </div>
                </div>
            </form>
        </div>
    </x-layouts.main-layout>
</x-app-layout>
