<x-layout>
    <x-slot:title>Kanara House - Urban Sanctuary for Coffee Lovers</x-slot:title>

    
        <section class="relative pt-32 pb-12 flex flex-col justify-center items-center px-4 md:px-10 bg-background-light dark:bg-background-dark">
            <div class="w-full max-w-4xl text-center space-y-6">
                <h1 class="font-serif text-5xl md:text-6xl font-medium text-primary dark:text-white leading-tight">
                    The Pantry & Goods
                </h1>
                <p class="text-primary/70 dark:text-white/70 text-lg md:text-xl font-light tracking-wide max-w-2xl mx-auto leading-relaxed">
                    Bring the sanctuary home with our selection of ethically sourced beans, artisanal brewing equipment, and signature merchandise.
                </p>
            </div>
        </section>

        <div class="sticky top-20 z-40 bg-background-light/95 dark:bg-background-dark/95 backdrop-blur-sm border-b border-primary/10 dark:border-white/10 w-full mb-8">
            <div class="max-w-7xl mx-auto px-6 lg:px-12 py-4 flex flex-col sm:flex-row justify-between items-center gap-4">
                <div class="flex items-center gap-6 overflow-x-auto no-scrollbar w-full sm:w-auto pb-2 sm:pb-0">
                    <button class="text-sm font-bold text-accent border-b-2 border-accent pb-0.5">All Products</button>
                    <button class="text-sm font-medium text-primary/60 hover:text-primary transition-colors pb-0.5">Coffee Beans</button>
                    <button class="text-sm font-medium text-primary/60 hover:text-primary transition-colors pb-0.5">Brewing Gear</button>
                    <button class="text-sm font-medium text-primary/60 hover:text-primary transition-colors pb-0.5">Merch</button>
                    <button class="text-sm font-medium text-primary/60 hover:text-primary transition-colors pb-0.5">Subscriptions</button>
                </div>
                <div class="flex items-center gap-4 w-full sm:w-auto">
                    <div class="relative group w-full sm:w-48">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="material-symbols-outlined text-primary/40 text-lg">search</span>
                        </div>
                        <input class="block w-full pl-10 pr-3 py-2 border border-primary/20 rounded-xl leading-5 bg-white/50 dark:bg-surface-dark placeholder-primary/40 focus:outline-none focus:bg-white focus:ring-1 focus:ring-accent focus:border-accent sm:text-sm transition-colors" placeholder="Search..." type="text" />
                    </div>
                    <div class="relative w-full sm:w-40">
                        <select class="block w-full pl-3 pr-10 py-2 text-base border-primary/20 bg-white/50 dark:bg-surface-dark focus:outline-none focus:ring-accent focus:border-accent sm:text-sm rounded-xl text-primary cursor-pointer">
                            <option>Sort by: Newest</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                            <option>Best Selling</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <section class="pb-20 px-6 md:px-12 bg-background-light dark:bg-background-dark min-h-screen">
            <div class="max-w-7xl mx-auto">
                {{-- Container Utama --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10 p-4">
                    @foreach ($products as $product)
                    {{-- Card Begin --}}
                    <div class="group relative flex flex-col bg-white dark:bg-[#121212] rounded-2xl overflow-hidden transition-all duration-500 hover:-translate-y-2">
                        
                        {{-- Image Area --}}
                        <div class="relative aspect-[4/5] m-3 overflow-hidden rounded-2xl bg-gray-100 dark:bg-zinc-800">
                            <a href="{{ route('shop.detail', $product->id) }}" class="block w-full h-full">
                                <img 
                                    alt="{{ $product->name }}" 
                                    class="w-full h-full object-cover object-center scale-105 group-hover:scale-110 transition-transform duration-700 ease-in-out" 
                                    src="{{ asset('storage/' . $product->image) }}"
                                    onerror="this.src='https://images.unsplash.com/photo-1559056199-641a0ac8b55e?q=80&w=800&auto=format&fit=crop'"
                                />
                            </a>

                            {{-- Glassmorphism Badge --}}
                            @if($loop->first)
                            <div class="absolute top-4 left-4">
                                <span class="backdrop-blur-md bg-white/70 dark:bg-black/40 border border-white/20 text-primary dark:text-white text-[10px] font-bold px-4 py-2 rounded-full uppercase tracking-[0.15em] shadow-sm">
                                    Bestseller
                                </span>
                            </div>
                            @endif

                            {{-- Quick Add Button --}}
                            <a href="{{ route('order', $product->id) }}"
                                class="absolute bottom-4 right-4 translate-y-4 opacity-0
                                    group-hover:translate-y-0 group-hover:opacity-100
                                    transition-all duration-500
                                    bg-accent text-white px-5 py-3 rounded-2xl shadow-xl
                                    hover:scale-110 active:scale-95
                                    flex items-center gap-2"
                            >
                                <span class="material-symbols-outlined text-xl">shopping_bag</span>
                                <span class="font-semibold">Beli</span>
                            </a>

                        </div>

                        {{-- Content Area --}}
                        <div class="px-7 pb-8 pt-4 flex flex-col flex-grow">
                            {{-- Category & Roast Level --}}
                            <div class="flex justify-between items-center mb-3">
                                <span class="text-[11px] text-accent font-bold uppercase tracking-widest leading-none">
                                    {{ $product->category->name }}
                                </span>
                                <div class="flex -space-x-1">
                                    <span class="w-3 h-3 rounded-full border-2 border-white dark:border-zinc-900 bg-[#5D4037]" title="Dark"></span>
                                    <span class="w-3 h-3 rounded-full border-2 border-white dark:border-zinc-900 bg-[#795548]" title="Medium"></span>
                                </div>
                            </div>

                            {{-- Title --}}
                            <h3 class="font-serif text-2xl font-medium text-primary dark:text-zinc-100 mb-3 group-hover:text-accent transition-colors duration-300">
                                <a href="{{ route('shop.detail', $product->id) }}">
                                    {{ $product->name }}
                                </a>
                            </h3>

                            {{-- Description --}}
                            <p class="text-sm text-gray-500 dark:text-zinc-400 mb-6 line-clamp-2 leading-relaxed font-light">
                                {{ $product->description }}
                            </p>

                            {{-- Price & Action --}}
                            <div class="mt-auto flex items-end justify-between">
                                <div class="flex flex-col">
                                    <span class="text-[10px] text-gray-400 dark:text-zinc-500 uppercase tracking-tighter mb-1">Price</span>
                                    <span class="text-2xl font-bold text-primary dark:text-white tracking-tight">
                                        <span class="text-sm font-medium mr-0.5">Rp</span>{{ number_format($product->price, 0, ',', '.') }}
                                    </span>
                                </div>
                                
                                <a href="{{route('shop.detail', $product->id)}}">
                                    <div class="h-12 w-12 rounded-2xl border border-gray-100 dark:border-zinc-800 flex items-center justify-center group-hover:border-accent group-hover:bg-accent/5 transition-all duration-500">
                                        <span class="material-symbols-outlined text-primary dark:text-white group-hover:text-accent">arrow_forward</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                {{-- paginate begin --}}
                    @if ($products->hasPages())
                        <div class="mt-16 flex justify-center">
                            <nav aria-label="Pagination">
                                <ul class="flex items-center space-x-2">

                                    {{-- Previous Page --}}
                                    <li>
                                        @if ($products->onFirstPage())
                                            <span class="flex h-10 w-10 items-center justify-center rounded-xl border border-primary/10 bg-gray-100 text-gray-400 cursor-not-allowed">
                                                <span class="material-symbols-outlined text-sm">chevron_left</span>
                                            </span>
                                        @else
                                            <a href="{{ $products->previousPageUrl() }}"
                                            class="flex h-10 w-10 items-center justify-center rounded-xl border border-primary/10 bg-white text-primary hover:bg-primary/5 dark:bg-surface-dark dark:text-white dark:border-white/10">
                                                <span class="material-symbols-outlined text-sm">chevron_left</span>
                                            </a>
                                        @endif
                                    </li>

                                    {{-- Page Numbers --}}
                                    @foreach ($products->links()->elements[0] ?? [] as $page => $url)
                                        <li>
                                            @if ($page == $products->currentPage())
                                                <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-primary text-white shadow-md font-bold dark:bg-white dark:text-primary">
                                                    {{ $page }}
                                                </span>
                                            @else
                                                <a href="{{ $url }}"
                                                class="flex h-10 w-10 items-center justify-center rounded-xl border border-primary/10 bg-white text-primary hover:bg-primary/5 dark:bg-surface-dark dark:text-white dark:border-white/10">
                                                    {{ $page }}
                                                </a>
                                            @endif
                                        </li>
                                    @endforeach

                                    {{-- Next Page --}}
                                    <li>
                                        @if ($products->hasMorePages())
                                            <a href="{{ $products->nextPageUrl() }}"
                                            class="flex h-10 w-10 items-center justify-center rounded-xl border border-primary/10 bg-white text-primary hover:bg-primary/5 dark:bg-surface-dark dark:text-white dark:border-white/10">
                                                <span class="material-symbols-outlined text-sm">chevron_right</span>
                                            </a>
                                        @else
                                            <span class="flex h-10 w-10 items-center justify-center rounded-xl border border-primary/10 bg-gray-100 text-gray-400 cursor-not-allowed">
                                                <span class="material-symbols-outlined text-sm">chevron_right</span>
                                            </span>
                                        @endif
                                    </li>

                                </ul>
                            </nav>
                        </div>
                    @endif

                {{-- paginate end --}}
            </div>
        </section>

        <section class="py-20 px-6 bg-primary text-background-light">
            <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-10">
                <div class="flex flex-col gap-4 max-w-xl">
                    <h3 class="font-serif text-3xl text-white">Subscribe & Save</h3>
                    <p class="text-white/80 font-light text-lg">Never run out of your favorite beans. Join our subscription club for 15% off every order and exclusive access to limited releases.</p>
                </div>
                <div class="flex gap-4">
                    <button class="px-8 h-12 bg-accent hover:bg-accent/90 text-white font-bold rounded-xl transition-colors shadow-lg">
                        View Plans
                    </button>
                </div>
            </div>
        </section>
  
</x-layout>




{{-- <x-layout>
    <x-slot:title>Kanara House - Urban Sanctuary for Coffee Lovers</x-slot:title>

  
</x-layout> --}}