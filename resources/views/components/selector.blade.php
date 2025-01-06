@props([
    'items'=>[],
    'name'=>'',
    'placeholder'=>'-- Select --',
    'label'=>'',
    'labelClass'=>'',
    'errorMessage'=>'This field is Required',
    'isError'=>false,
    'class'=>''])
<div class="w-full">
    @if ($label)<label class="text-sm mb-2 block font-medium {{$labelClass}}">{{ $label }}</label>@endif
    <div class="relative w-full ">
        <select class="block appearance-none w-full px-4 py-3 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 {{$class}}" name="{{ $name }}">
            <option value="" disabled selected hidden>{{ $placeholder }} </option>
            @forelse ($items as $item )
                    <option value="{{$item->id}}">{{$item->name}}</option>
            @empty
                <option value="" disabled > No data </option>
            @endforelse
        </select>
        <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
            <svg data-lucide="chevron-down" class="w-4 h-4 "></svg>
        </div>
    </div>
    @if($isError)<span class="text-red-500 text-sm">{{$errorMessage}}</span> @endif
</div>

