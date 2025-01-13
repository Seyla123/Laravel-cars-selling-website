<x-app-layout title="Edit Car">
    <x-layouts.main-layout title="Edit Car">
        <div class="p-4">
            <form action="{{route('car.update',$car)}}" method="POST" class="flex w-full flex-col xl:flex-row gap-4 " enctype="multipart/form-data">
                @csrf
                @method('PUT')
                {{-- form field --}}
                <div class="flex gap-6 w-full flex-col ">
                    {{-- makers , models , year --}}
                    <div class="flex gap-4 w-full">
                        <x-model-selector  label="Model" :value="$car->model->id" />
                        <x-maker-selector  label="Maker" :value="$car->maker->id"/>
                        <x-input-field name="year" placeholder="Year" label="Year" :value="$car->year"  labelClass="font-medium	" />
                    </div>
                    {{-- Car Type --}}
                    <div>
                        <x-car-type-selector type="radio" :value="$car->carType->id"/>
                    </div>
                    {{-- price , vin code , mileage --}}
                    <div class="flex gap-4 w-full">

                        <x-input-field name="price" placeholder="Price" label="Price" labelClass="font-medium" :value="$car->price" />
                        <x-input-field name="vin" placeholder="Vin Code" label="Vin Code" :value="$car->vin" 
                            labelClass="font-medium	" />
                        <x-input-field name="mileage" placeholder="Mileage" label="Mileage (ml)" :value="$car->mileage" 
                            labelClass="font-medium	" />
                    </div>
                    {{-- Fuel Types --}}
                    <div>
                        <x-fuel-type-selector type="radio" :value="$car->fuelType->id"/>
                    </div>
                    {{-- state and city --}}
                    <div class="flex gap-4 w-full">
                        <x-state-selector  label="State/Region"  :value="$car->city->state->id"/>
                        <x-city-selector  label="City"  :value="$car->city->id"/>
                    </div>
                    {{-- address and phone --}}
                    <div class="flex gap-4 w-full">
                        <x-input-field name="address"  :value="$car->address" placeholder="Addess" label="Addess" labelClass="font-medium" />
                        <x-input-field name="phone"  :value="$car->phone" placeholder="Phone" label="Phone" labelClass="font-medium	" />
                    </div>
                    {{-- description --}}
                    <div>
                        <textarea name="description" id="description" cols="30" rows="10" placeholder="Enter car description"
                            class="block w-full px-4 py-3 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                            {{$car->description}}
                        </textarea>
                    </div>
                    {{-- submit and reset big screen --}}
                    <div class="hidden xl:flex  w-full  items-center justify-end">
                        <div class="max-w-[300px] flex w-full gap-4">
                            <x-button title="Reset"
                                customClass="duration-500 flex gap-2 items-center justify-center w-full py-3 px-3  text-sm tracking-wider border-main-600 border-2 font-semibold text-main-600  hover:bg-main-600 hover:text-white focus:outline-none rounded-md  " />
                            <x-button title="Create" type="submit" />
                        </div>
                    </div>

                </div>
                <span class="bg-gray-200 w-[2px]"></span>
                {{-- image upload --}}
                <div class=" border border-dashed border-gray-300 rounded-lg p-4 w-full xl:max-w-[500px] lg:max-h-[200px] ">
                    {{-- image upload --}}
                    <div
                        class=" flex flex-col justify-center w-full items-center bg-gray-50 rounded-lg border-2 border-dashed border-gray-300 h-full">
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
                  
                </div>
                <div class="flex xl:hidden  w-full  items-center justify-center sm:justify-end">
                    <div class="sm:max-w-[300px] flex w-full gap-4">
                        <x-button title="Reset"
                            customClass="duration-500 flex gap-2 items-center justify-center w-full py-3 px-3  text-sm tracking-wider border-main-600 border-2 font-semibold text-main-600  hover:bg-main-600 hover:text-white focus:outline-none rounded-md  " />
                        <x-button title="Create" type="submit" />
                    </div>
                </div>
            </form>
        </div>
    </x-layouts.main-layout>
</x-app-layout>
<script>
    const inputElement = document.getElementById('images');
    const formElement = document.querySelector('form');
    const previewContainer = document.getElementById('images-preview');
    const fetchImage = @js($car->images);
    
    
    function loadImage (files){
        files.forEach(image => {
            console.log(image.image_path);
            
            const container = document.createElement('div');
                container.className = "relative";
                container.innerHTML = `
                    <img src="{{ asset('/storage/'. '${image.image_path}')}}" class="w-[150px] h-[150px] object-cover rounded-lg border border-gray-300"/>
                    <button id="buttonRemove" class="absolute top-0 right-0 bg-gray-200 rounded-full p-1 hover:bg-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="x" class="lucide lucide-x w-4 h-4"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg>
                    </button>
                `;
                container.querySelector('#buttonRemove').onclick = () => {
                    container.remove();
                };
                previewContainer.appendChild(container);
        });
    }
    loadImage(fetchImage);
    
</script>

