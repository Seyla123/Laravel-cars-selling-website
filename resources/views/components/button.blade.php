@props(['type' => 'button', 'class' => '', 'title' => ''])

{{--
    This is a reusable button component.
    Use it like this:
    <x-button type="submit" class="additional-classes" title="Click Me" />
--}}

<button type="{{ $type }}"
    class="w-full py-3 px-4 text-sm tracking-wider font-semibold rounded-md text-white bg-main-600 hover:bg-main-700 focus:outline-none {{ $class }}">
    {{ $title }}
</button>

