@props(['phone' => ''])
<div
    class="flex justify-between border-2 border-main-400 px-4 py-3 max-w-[600px]  items-center rounded-full bg-white shadow-sm hover:shadow-lg duration-500">
    <svg data-lucide="phone" class="w-6 h-6 text-main-500"></svg>
    <a href="tel:{{ \Illuminate\Support\Str::mask($phone, '*', -3) }}"
        class="text-main-500 font-bold flex items-center gap-2">
        {{ \Illuminate\Support\Str::mask($phone, '*', -3) }}
    </a>
    <button
        class="bg-main-500 hover:bg-main-700 flex items-center text-white font-bold py-2 px-4 rounded-full duration-500">
        Tap to view
        <svg data-lucide="chevron-right" class="w-4 h-4 ml-2"></svg>
    </button>
</div>
