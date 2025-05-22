<form role="search" method="get" class="flex items-center justify-center gap-4 w-full max-w-xl mx-auto" action="<?php echo esc_url(home_url('/')); ?>">
    <label for="search-input" class="sr-only">Search for:</label>
    <input 
        type="search" 
        id="search-input" 
        class="w-full px-5 py-1 rounded-full bg-gray-100 text-gray-600 text-sm focus:outline-none focus:ring-2 focus:ring-gray-400" 
        placeholder="Search..." 
        value="<?php echo get_search_query(); ?>" 
        name="s"
    />
    <button 
        type="submit" 
        class="px-5 py-1 bg-gray-100 text-gray-400 text-sm font-semibold rounded-full hover:bg-gray-100 transition-all duration-200">
        Search
    </button>
</form>