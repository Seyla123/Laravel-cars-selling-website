@props(['name'=>'', 'type'=>'text', 'placeholder'=>'', 'class'=>'', 'label'=>''])
{{--
    This is a reusable input field component with label support.
    Use it like this:
    <x-input-field name="email" label="Email Address" placeholder="Enter your Email Address" />
 --}}
<div>
    <label class="text-gray-800 text-sm mb-2 block">{{ $label }}</label>
    <input name="{{ $name }}" type="{{ $type }}"
        class="text-gray-800 bg-white border border-gray-300 w-full text-sm px-4 py-3 rounded-md outline-main-400 {{ $class }}"
        placeholder="{{ $placeholder }}" />
</div>
