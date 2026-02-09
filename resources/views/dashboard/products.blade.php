<x-dashboard-layout>

<main class="flex-1 w-full flex flex-col h-full overflow-hidden relative transition-all">
        
        <header class="lg:hidden bg-cream border-b border-gray-200 p-4 flex items-center justify-between shrink-0">
            <button @click="sidebarOpen = true" class="text-primary p-1 rounded-md hover:bg-gray-200">
                <span class="material-symbols-outlined">menu</span>
            </button>
            <span class="font-bold text-primary">Products</span>
            <div class="size-8 rounded-full bg-primary/10"></div> </header>

        <div class="flex-1 w-full overflow-y-auto p-2 md:p-4">
            <div class="max-w-[1200px] mx-auto flex flex-col gap-6 md:gap-8 pb-10">
                
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-end gap-4">
                    <div class="flex flex-col gap-1">
                        <h2 class="text-primary text-2xl md:text-3xl font-bold tracking-tight">Product List</h2>
                        <p class="text-gray-500 text-sm md:text-base">Manage inventory, prices, and stock levels.</p>
                    </div>
                    <a href="{{route('products.add')}}" class="flex items-center justify-center gap-2 rounded-lg h-10 px-5 bg-primary hover:bg-primary-hover text-white text-sm font-semibold shadow-md transition-colors duration-200 w-full sm:w-auto">
                        <span class="material-symbols-outlined text-[20px]">add</span>
                        <span>Add Product</span>
                    </a>
                </div>

                <form>
                    @if(request()->has('category_id') && request('category_id') != '')
                        <input type="hidden" name="category_id" value="{{ request('category_id') }}">
                    @endif
                    <div class="flex flex-col md:flex-row gap-4 items-center justify-between bg-white/50 p-2 rounded-xl backdrop-blur-sm border border-gray-200/50">
                        <div class="relative w-full md:w-80 group">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <span class="material-symbols-outlined text-gray-400 group-focus-within:text-primary transition-colors text-[20px]">
                                    search
                                </span>
                            </div>

                            <input 
                                value="{{ request('search') }}"
                                name ="search"
                                type="text"
                                class="block w-full py-2.5 pl-10 pr-3 text-sm text-gray-900 border-0 rounded-lg bg-white shadow-sm ring-1 ring-gray-200 placeholder-gray-400 focus:ring-2 focus:ring-primary focus:outline-none transition-all" 
                                placeholder="Search product or SKU..." 
                            />
                        </div>

                        @error('searchQuery')
                            <p class="mt-2 text-sm text-red-600 font-medium italic">
                                {{ $message }}
                            </p>
                        @enderror
                        <div class="mb-5">
                            <label for="category_id" class="block mb-2 text-sm font-medium text-gray-700">
                                Pilih Kategori
                            </label>

                            
                            <div class="relative">
                                
                                <select 
                                    onchange="this.form.submit()"
                                    id="category_id" 
                                    name="category_id" 
                                    class="w-full appearance-none rounded-lg border border-gray-300 bg-white py-3 px-4 pr-10 text-gray-700 shadow-sm transition duration-200 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20 disabled:bg-gray-100 disabled:text-gray-400"
                                >
                                    <option value="" {{ request('category_id') == null ? 'selected' : '' }}> -- Semua -- </option>
                                    
                                    {{-- Loop Data Kategori --}}
                                    @foreach($categories as $category)
                                        <option 
                                            value="{{ $category->id }}" 
                                            {{ request('category_id') == $category->id ? 'selected' : '' }}
                                        >
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>

                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-500">
                                    <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="bg-white rounded-xl shadow-sm border  border-gray-200 overflow-hidden flex flex-col">
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
    
                        <div class="overflow-x-auto w-full">
                            <table class="w-full text-left border-collapse min-w-[800px]">
                                <thead>
                                    <tr class="bg-gray-50/80 border-b border-gray-200">
                                        <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider w-20">Image</th>
                                        <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">Product Name</th>
                                        <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">Category</th>
                                        <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">Price</th>
                                        <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-100">
                                    @forelse ($products as $product)
                                        <tr class="hover:bg-gray-50 transition-colors group">
                                            <td class="px-6 py-4">
                                                <div class="size-12 rounded-lg bg-gray-100 flex items-center justify-center text-gray-300 overflow-hidden shadow-sm border border-gray-100">
                                                    @if($product->image_url)
                                                        <img src="{{ asset($product->image_url) }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                                                    @else
                                                        <span class="material-symbols-outlined text-xl">image</span>
                                                    @endif
                                                </div>
                                            </td>

                                            <td class="px-6 py-4">
                                                <div class="flex flex-col">
                                                    <span class="text-gray-900 text-sm font-semibold">{{ $product->name }}</span>
                                                    <span class="text-gray-400 text-xs font-normal mt-0.5 line-clamp-1 max-w-[200px]" title="{{ $product->description }}">
                                                        {{ Str::limit($product->description, 40) }}
                                                    </span>
                                                </div>
                                            </td>

                                            <td class="px-6 py-4">
                                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium border bg-blue-50 text-blue-700 border-blue-100">
                                                    {{ $product->category->name ?? 'Uncategorized' }}
                                                </span>
                                            </td>

                                            <td class="px-6 py-4 text-sm font-medium text-gray-900">
                                                Rp {{ number_format($product->price, 0, ',', '.') }}
                                            </td>

                                            <td class="px-6 py-4 text-right">
                                                <div class="flex items-center justify-end gap-1 opacity-100 sm:opacity-60 sm:group-hover:opacity-100 transition-opacity">
                                                    <a href="{{ route('products.edit', $product->id) }}" class="size-8 flex items-center justify-center text-gray-500 hover:text-blue-600 hover:bg-blue-50 rounded-full transition-colors" title="Edit">
                                                        <span class="material-symbols-outlined text-[18px]">edit</span>
                                                    </a>
                                                    
                                                    <form action="{{ route('products.delete', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
                                                        @csrf
                                                        <button type="submit" class="size-8 flex items-center justify-center text-gray-500 hover:text-red-600 hover:bg-red-50 rounded-full transition-colors" title="Delete">
                                                            <span class="material-symbols-outlined text-[18px]">delete</span>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="px-6 py-12 text-center text-gray-500 bg-white">
                                                <div class="flex flex-col items-center justify-center">
                                                    <span class="material-symbols-outlined text-5xl mb-3 text-gray-300">inventory_2</span>
                                                    <p class="text-gray-900 font-medium">No products found</p>
                                                    <p class="text-sm text-gray-400 mt-1">Try adjusting your search or add a new product.</p>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        @if($products->hasPages())
                        <div class="flex flex-col sm:flex-row items-center justify-between px-6 py-4 border-t border-gray-200 bg-gray-50/50 gap-4">
                            
                            <p class="text-sm text-gray-500 text-center sm:text-left">
                                Showing 
                                <span class="font-medium text-gray-900">{{ $products->firstItem() }}</span> 
                                to 
                                <span class="font-medium text-gray-900">{{ $products->lastItem() }}</span> 
                                of 
                                <span class="font-medium text-gray-900">{{ $allproduct}} </span> 
                                results
                            </p>

                            <div class="flex gap-2">
                                {{-- 
                                Pastikan di AppServiceProvider sudah diset Paginator::useTailwind();
                                Jika ingin simple (hanya prev/next tanpa nomor halaman), gunakan ->links('pagination::simple-tailwind') 
                                --}}
                                {{ $products->links('pagination::simple-tailwind') }}
                            </div>
                        </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </main>


</x-dashboard-layout>