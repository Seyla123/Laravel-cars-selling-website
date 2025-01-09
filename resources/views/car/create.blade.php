<x-app-layout title="Add New Car">
    <x-layouts.main-layout title="Add New Car">
        <div class="p-4">
            <form action="{{route('car.store')}}" method="POST" class="flex w-full flex-col xl:flex-row gap-4 " enctype="multipart/form-data">
                @csrf
                {{-- form field --}}
                <div class="flex gap-6 w-full flex-col ">
                    {{-- makers , models , year --}}
                    <div class="flex gap-4 w-full">
                        <x-selector name="maker" placeholder="Maker" label="Maker" :items="$makers" />
                        <x-selector name="model" placeholder="Model" label="Model" :items="$models" />
                        <x-input-field name="year" placeholder="Year" label="Year" labelClass="font-medium	" />
                    </div>
                    {{-- Car Type --}}
                    <div>
                        <x-radio-selector name="carType" title="Car Type" :items="$carTypes" />
                    </div>
                    {{-- price , vin code , mileage --}}
                    <div class="flex gap-4 w-full">

                        <x-input-field name="price" placeholder="Price" label="Price" labelClass="font-medium	" />
                        <x-input-field name="vin" placeholder="Vin Code" label="Vin Code"
                            labelClass="font-medium	" />
                        <x-input-field name="mileage" placeholder="Mileage" label="Mileage (ml)"
                            labelClass="font-medium	" />
                    </div>
                    {{-- Fuel Types --}}
                    <div>
                        <x-radio-selector name="fuelType" title="Fuel Type" :items="$fuelTypes"  />
                    </div>
                    {{-- state and city --}}
                    <div class="flex gap-4 w-full">
                        <x-selector name="state" placeholder="Stae/Region" label="Stae/Region" :items="$states" />
                        <x-selector name="city" placeholder="City" label="City" :items="$cities" />
                    </div>
                    {{-- address and phone --}}
                    <div class="flex gap-4 w-full">
                        <x-input-field name="address" placeholder="Addess" label="Addess" labelClass="font-medium" />
                        <x-input-field name="phone" placeholder="Phone" label="Phone" labelClass="font-medium	" />
                    </div>
                    {{-- description --}}
                    <div>
                        <textarea name="description" id="description" cols="30" rows="10" placeholder="Enter car description"
                            class="block w-full px-4 py-3 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500"></textarea>
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
                <div class=" border border-dashed border-gray-300 rounded-lg p-4 w-full xl:max-w-[500px] max-h-[200px]">
                    {{-- image upload --}}
                    <div
                        class="flex flex-col justify-center w-full items-center bg-gray-50 rounded-lg border-2 border-dashed border-gray-300 h-full">
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
                        const formElement = document.querySelector('form');
                        const previewContainer = document.getElementById('images-preview');
                    
                        inputElement.addEventListener("change", (e) => {
                            previewContainer.innerHTML = ""; // Clear the preview container
                            const files = e.target.files;
                    
                            for (const file of files) {
                                const fileReader = new FileReader();
                                fileReader.onload = (e) => {
                                    // Create a container for each previewed image
                                    const container = document.createElement('div');
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
                    
                        formElement.addEventListener('submit', (e) => {
                            // Ensure files are sent as part of FormData
                            const formData = new FormData(formElement);
                    
                            // Attach files manually to the FormData (if needed)
                            for (const file of inputElement.files) {
                                formData.append('images[]', file);
                            }
                    
                            // Debugging: Log the FormData to ensure files are added
                            for (const [key, value] of formData.entries()) {
                                console.log(key, value);
                            }
                    
                            // Uncomment this if you handle form submission via JavaScript
                            // e.preventDefault(); // Prevent default submission
                            // fetch(formElement.action, {
                            //     method: 'POST',
                            //     body: formData,
                            // })
                            // .then(response => response.json())
                            // .then(data => console.log(data))
                            // .catch(error => console.error(error));
                        });
                    </script>
                    
                    {{-- <script>
                        const inputElement = document.getElementById('images');
                        inputElement.addEventListener("change", (e) => {
                            const previewContainer = document.getElementById('images-preview');
                            previewContainer.innerHTML = "";
                            const files = e.target.files;
                            for (const file of files) {
                                const fileReader = new FileReader();
                                fileReader.onload = (e) => {
                                    const container = document.createElement('div');
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
                    </script> --}}
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
