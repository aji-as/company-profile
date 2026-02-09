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
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                    {{-- card product begin --}}
                        @foreach ($products as $product)
                        <a href="{{ route('shop.detail', $product->id) }}">
                            <div class="group flex flex-col bg-white dark:bg-surface-dark rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-primary/5">
                                <div class="relative aspect-[4/5] overflow-hidden bg-gray-100">
                                    <img alt="Sanctuary Blend Coffee Bag" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAZKW06Ac4mwyFLJHs_1V9X0f7RRFiGb838XjHwxay8UqWa9SUuIapPXmCn6BmNnYsTSHlL8mfypVImeno729QQsvCrzehPUuPh3YGVpVNLb8dIzHpPvAlNTJtYQ7g4f0a5j1a7eiUXvjOssbwl3iSCyIVP1rSRU1fWkbIFS-CqTpERJjY81FOGW9Ml02mtOAT3EO-sd6dXtKt6v78cJNxSEpmFjfjrjxnLggcawNtMepD_8td6t6L3yjDIXzHdMyGnsjpB_U1YulQ0" />
                                    <div class="absolute top-3 left-3 bg-accent text-white text-xs font-bold px-2 py-1 rounded-md uppercase tracking-wide">Bestseller</div>
                                    <button class="absolute bottom-4 right-4 bg-white text-primary p-2 rounded-full shadow-lg opacity-0 group-hover:opacity-100 transform translate-y-2 group-hover:translate-y-0 transition-all duration-300 hover:bg-accent hover:text-white">
                                        <span class="material-symbols-outlined text-xl block">add_shopping_cart</span>
                                    </button>
                                </div>
                                <div class="p-5 flex flex-col flex-grow">
                                    <div class="mb-1">
                                        <p class="text-xs text-primary/50 uppercase tracking-widest font-semibold">{{$product->category->name}}</p>
                                    </div>
                                    <h3 class="font-serif text-xl font-medium text-primary dark:text-white mb-2 group-hover:text-accent transition-colors">
                                        <a href="#">{{ $product->name}}</a>
                                    </h3>
                                    <p class="text-sm text-primary/70 dark:text-white/70 mb-4 line-clamp-2">
                                        {{ $product->description}}
                                    </p>
                                    <div class="mt-auto flex items-center justify-between">
                                        <span class="font-serif text-lg font-bold text-primary dark:text-white">{{ $product->price }}</span>
                                        <div class="flex gap-1">
                                            <span class="w-3 h-3 rounded-full bg-[#5D4037]" title="Dark Roast"></span>
                                            <span class="w-3 h-3 rounded-full bg-[#795548]" title="Medium-Dark"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                            
                        @endforeach
                    {{-- card product end --}}
                    

                  

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