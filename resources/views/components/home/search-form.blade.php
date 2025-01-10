<form action="{{ route('car.search') }}" method="GET" class="flex flex-col md:flex-row bg-white rounded-md p-4 w-full gap-4 z-10">
<div class="grid grid-cols-2 sm:grid-cols-3  lg:grid-cols-5 gap-4 w-full" >
    <x-model-selector />
    <x-maker-selector />
    <x-state-selector />
    <x-city-selector />
    <x-car-type-selector />
    <x-input-field name="yearFrom"  placeholder="Year from" />
    <x-input-field name="yearTo"  placeholder="Year to" />
    <x-input-field name="priceFrom"  placeholder="Price from" />
    <x-input-field name="priceTo"  placeholder="Price to" />
    <x-fuel-type-selector />
</div>
    <div class="flex flex-col md:max-w-[100px] w-full gap-2 items-center justify-center">
        <x-button title="Reset"
        customClass="duration-500 flex gap-2 items-center justify-center w-full py-3 px-3  text-sm tracking-wider border-main-600 border-2 font-semibold text-main-600  hover:bg-main-600 hover:text-white focus:outline-none rounded-md  " />
        <x-button title="Search"  type="submit"/>
    </div>
</form>

