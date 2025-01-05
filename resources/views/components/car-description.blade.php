@props(['carDescription'=>''])
<div class="bg-white rounded-lg p-4 space-y-4">
    <h1 class="text-xl md:text-2xl font-semibold mt-4">Detailed Description</h1>
    <p class="details max-h-[200px] overflow-hidden">
        {{ $carDescription }}
    </p>
    <button
        class="bg-main-500 hover:bg-main-700 flex items-center text-white font-bold py-2 px-4 rounded-full duration-500"
        id="show-more-details" onclick="toggleDetails()">
        See More Details 
    </button>
</div>
<script>
    function toggleDetails() {
        const details = document.querySelector('.details');
        const button = document.getElementById('show-more-details');
        if (details.classList.contains('max-h-[200px]')) {
            details.classList.remove('max-h-[200px]', 'overflow-hidden');
            button.innerHTML = 'See Less Details ';
        } else {
            details.classList.add('max-h-[200px]', 'overflow-hidden');
            button.innerHTML = 'See More Details';
        }
    }
</script>