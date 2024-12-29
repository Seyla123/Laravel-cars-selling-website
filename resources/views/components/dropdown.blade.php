<div class="relative">
    <button onclick="toggleDropdown()">
        {{ $slot }}
    </button>
    <div id="dropdown" class="absolute right-0 mt-2 w-48 bg-white border rounded-md shadow-lg hidden">
        {{ $dropdownContent }}
    </div>
</div>
<script>
    function toggleDropdown() {
        const dropdown = document.getElementById('dropdown');
        dropdown.classList.toggle('hidden');
    }
</script>
