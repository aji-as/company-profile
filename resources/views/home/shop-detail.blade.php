<x-layout>
    <x-slot:title>Kanara House - Urban Sanctuary for Coffee Lovers</x-slot:title>

    <section class="min-h-screen bg-[#FDFCFB] dark:bg-[#0F0F0F] py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            
            {{-- Breadcrumb & Back Button --}}
            <nav class="mb-8 flex items-center justify-between">
                <a href="{{ route('shop') }}" class="group flex items-center text-sm font-medium text-gray-500 dark:text-zinc-400 hover:text-accent transition-colors">
                    <span class="material-symbols-outlined mr-2 transition-transform group-hover:-translate-x-1">arrow_back</span>
                    Back to Collection
                </a>
                <div class="hidden sm:flex items-center gap-2 text-xs uppercase tracking-widest text-gray-400">
                    <span>Shop</span>
                    <span class="material-symbols-outlined text-[10px]">chevron_right</span>
                    <span class="text-accent font-bold">{{ $product->category->name }}</span>
                </div>
            </nav>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 xl:gap-20">
                
                {{-- Left: Image Gallery --}}
                <div class="space-y-6">
                    <div class="relative aspect-square rounded-[3rem] overflow-hidden bg-gray-100 dark:bg-zinc-800 border border-gray-100 dark:border-zinc-800 shadow-2xl">
                        <img 
                            src="{{ asset('storage/' . $product->image) }}" 
                            alt="{{ $product->name }}"
                            class="w-full h-full object-cover object-center transform hover:scale-105 transition-transform duration-1000"
                            onerror="this.src='https://images.unsplash.com/photo-1559056199-641a0ac8b55e?q=80&w=800&auto=format&fit=crop'"
                        >
                        {{-- Floating Badge --}}
                        <div class="absolute top-8 left-8">
                            <span class="backdrop-blur-xl bg-white/60 dark:bg-black/40 border border-white/20 text-primary dark:text-white text-xs font-bold px-5 py-2.5 rounded-full uppercase tracking-[0.2em] shadow-lg">
                                Freshly Roasted
                            </span>
                        </div>
                    </div>

                    {{-- Thumbnail Placeholder (Optional) --}}
                    <div class="grid grid-cols-4 gap-4">
                        @for ($i = 0; $i < 4; $i++)
                        <div class="aspect-square rounded-2xl overflow-hidden border-2 {{ $i == 0 ? 'border-accent' : 'border-transparent' }} bg-gray-100 dark:bg-zinc-800 cursor-pointer hover:border-accent/50 transition-all">
                            <img src="{{ asset('storage/' . $product->image) }}" class="w-full h-full object-cover opacity-60 hover:opacity-100" />
                        </div>
                        @endfor
                    </div>
                </div>

                {{-- Right: Product Info --}}
                <div class="flex flex-col">
                    <div class="mb-8">
                        <span class="inline-block text-accent font-bold uppercase tracking-[0.3em] text-xs mb-4">
                            {{ $product->category->name }}
                        </span>
                        <h1 class="font-serif text-4xl md:text-5xl lg:text-6xl text-primary dark:text-white font-medium leading-tight mb-6">
                            {{ $product->name }}
                        </h1>
                        
                        <div class="flex items-center gap-6 mb-8">
                            <span class="text-3xl font-bold text-primary dark:text-white">
                                Rp {{ number_format($product->price, 0, ',', '.') }}
                            </span>
                            <div class="h-6 w-px bg-gray-200 dark:bg-zinc-800"></div>
                            <div class="flex items-center gap-1.5">
                                <span class="text-sm font-medium text-gray-600 dark:text-zinc-400">Roast:</span>
                                <div class="flex gap-1">
                                    <span class="w-4 h-4 rounded-full bg-[#5D4037]" title="Dark"></span>
                                    <span class="w-4 h-4 rounded-full bg-[#795548]" title="Medium"></span>
                                    <span class="w-4 h-4 rounded-full bg-[#D7CCC8]" title="Light"></span>
                                </div>
                            </div>
                        </div>

                        <p class="text-gray-600 dark:text-zinc-400 leading-relaxed text-lg font-light mb-8">
                            {{ $product->description }}
                        </p>
                    </div>

                    {{-- Interactive Features --}}
                    <div class="bg-white dark:bg-zinc-900/50 border border-gray-100 dark:border-zinc-800 p-8 rounded-[2.5rem] shadow-sm mb-10">
                        <div class="flex flex-wrap gap-6 items-center">
                            {{-- Quantity Selector --}}
                            <div class="flex items-center border border-gray-200 dark:border-zinc-700 rounded-2xl p-1 bg-gray-50 dark:bg-zinc-800">
                                <button class="w-10 h-10 flex items-center justify-center hover:text-accent transition-colors">
                                    <span class="material-symbols-outlined text-sm">remove</span>
                                </button>
                                <input type="number" value="1" class="w-12 text-center bg-transparent border-none focus:ring-0 font-bold text-primary dark:text-white">
                                <button class="w-10 h-10 flex items-center justify-center hover:text-accent transition-colors">
                                    <span class="material-symbols-outlined text-sm">add</span>
                                </button>
                            </div>

                            {{-- Add to Cart --}}
                            <a href="{{ route('order', $product->id) }}" class="flex-grow bg-accent hover:bg-accent/90 text-white font-bold py-4 px-8 rounded-2xl transition-all shadow-lg shadow-accent/20 flex items-center justify-center gap-3 active:scale-95">
                                <span class="material-symbols-outlined text-xl">shopping_bag</span>
                                <span class="font-semibold">Beli</span>
                            </a>

                        </div>
                    </div>

                    {{-- Product Benefits --}}
                    <div class="grid grid-cols-2 gap-6">
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-accent/10 text-accent flex items-center justify-center flex-shrink-0">
                                <span class="material-symbols-outlined text-xl">local_shipping</span>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-primary dark:text-white uppercase tracking-wider mb-1">Fast Delivery</h4>
                                <p class="text-xs text-gray-500">Same day for local orders</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-xl bg-accent/10 text-accent flex items-center justify-center flex-shrink-0">
                                <span class="material-symbols-outlined text-xl">verified</span>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-primary dark:text-white uppercase tracking-wider mb-1">Premium Bean</h4>
                                <p class="text-xs text-gray-500">100% Arabica Specialty</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
</x-layout>




{{-- <x-layout>
    <x-slot:title>Kanara House - Urban Sanctuary for Coffee Lovers</x-slot:title>

  
</x-layout> --}}