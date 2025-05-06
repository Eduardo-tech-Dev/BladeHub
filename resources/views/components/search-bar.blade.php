<div class="w-full flex justify-center items-center mb-4 md:mb-0 px-2">
    <div class="relative w-full md:w-1/2">
        <form method="GET" action="{{ route('pages.index') }}">
            <input id="searchInput" type="text" name="search" value="{{ request()->search }}"
                placeholder="Buscar barbearias, serviços, locais..."
                class="search-bar w-full py-2 px-4 bg-gray-800 text-white rounded-full border border-gray-700 focus:outline-none focus:border-[#d19f68] transition-all">

            <button type="submit" class="absolute right-3 top-2">
                <ion-icon name="search" class="text-[#d19f68] text-xl"></ion-icon>
            </button>
        </form>
    </div>
</div>

@push('styles')
<style>
    .search-bar:focus {
        box-shadow: 0 0 10px rgba(209, 159, 104, 0.5);
    }
</style>
@endpush