<x-dashboard-layout>

<main class="flex-1 flex flex-col h-full overflow-hidden relative transition-all">
        
        <header class="lg:hidden bg-cream border-b border-gray-200 p-4 flex items-center justify-between shrink-0">
            <button @click="sidebarOpen = true" class="text-primary p-1 rounded-md hover:bg-gray-200">
                <span class="material-symbols-outlined">menu</span>
            </button>
            <span class="font-bold text-primary">Products</span>
            <div class="size-8 rounded-full bg-primary/10"></div> </header>

        <div class="flex-1 overflow-y-auto p-4 md:p-8">
            <div class="max-w-[1200px] mx-auto flex flex-col gap-6 md:gap-8 pb-10">
                
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-end gap-4">
                    <div class="flex flex-col gap-1">
                        <h2 class="text-primary text-2xl md:text-3xl font-bold tracking-tight">Product List</h2>
                        <p class="text-gray-500 text-sm md:text-base">Manage inventory, prices, and stock levels.</p>
                    </div>
                    <button class="flex items-center justify-center gap-2 rounded-lg h-10 px-5 bg-primary hover:bg-primary-hover text-white text-sm font-semibold shadow-md transition-colors duration-200 w-full sm:w-auto">
                        <span class="material-symbols-outlined text-[20px]">add</span>
                        <span>Add Product</span>
                    </button>
                </div>

                <div class="flex flex-col md:flex-row gap-4 items-center justify-between bg-white/50 p-2 rounded-xl backdrop-blur-sm border border-gray-200/50">
                    <div class="relative w-full md:w-80 group">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <span class="material-symbols-outlined text-gray-400 group-focus-within:text-primary transition-colors">search</span>
                        </div>
                        <input x-model="searchQuery" 
                               class="block w-full p-2.5 pl-10 text-sm text-dark border-transparent rounded-lg bg-white shadow-sm ring-1 ring-gray-200 placeholder-gray-400 focus:ring-2 focus:ring-primary focus:border-transparent transition-all" 
                               placeholder="Search product or SKU..." type="text"/>
                    </div>

                    <div class="flex gap-2 overflow-x-auto pb-1 md:pb-0 w-full md:w-auto px-1 no-scrollbar">
                        <template x-for="cat in categories">
                            <button @click="selectedCategory = cat; currentPage = 1"
                                    :class="selectedCategory === cat ? 'bg-primary text-white shadow-md' : 'bg-white text-dark hover:bg-gray-50 border border-gray-200'"
                                    class="whitespace-nowrap flex h-9 items-center justify-center rounded-lg px-4 text-sm font-medium transition-all duration-200"
                                    x-text="cat">
                            </button>
                        </template>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden flex flex-col">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse min-w-[800px]">
                            <thead>
                                <tr class="bg-gray-50/80 border-b border-gray-200">
                                    <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider w-20">Image</th>
                                    <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">Product Name</th>
                                    <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">Category</th>
                                    <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">Price</th>
                                    <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider">Stock Status</th>
                                    <th class="px-6 py-4 text-xs font-bold text-gray-500 uppercase tracking-wider text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                <template x-for="product in paginatedProducts" :key="product.id">
                                    <tr class="hover:bg-gray-50 transition-colors group">
                                        <td class="px-6 py-4">
                                            <div class="size-12 rounded-lg bg-gray-100 flex items-center justify-center text-gray-300 overflow-hidden shadow-sm border border-gray-100">
                                                <span class="material-symbols-outlined text-xl" x-show="!product.image">image</span>
                                                <img x-show="product.image" :src="product.image" class="w-full h-full object-cover">
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="flex flex-col">
                                                <span class="text-dark text-sm font-semibold" x-text="product.name"></span>
                                                <span class="text-gray-400 text-xs font-mono" x-text="'SKU: ' + product.sku"></span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium border"
                                                  :class="{
                                                      'bg-orange-50 text-orange-800 border-orange-200': product.category === 'Food',
                                                      'bg-amber-50 text-amber-900 border-amber-200': product.category === 'Coffee',
                                                      'bg-green-50 text-green-800 border-green-200': product.category === 'Non-Coffee'
                                                  }"
                                                  x-text="product.category">
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 text-sm font-medium text-dark" x-text="formatCurrency(product.price)"></td>
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-2">
                                                <span class="h-2 w-2 rounded-full"
                                                      :class="{
                                                          'bg-emerald-500': product.stock > 10,
                                                          'bg-yellow-500': product.stock <= 10 && product.stock > 0,
                                                          'bg-red-500': product.stock === 0
                                                      }"></span>
                                                <span class="text-xs font-medium px-2 py-1 rounded-md"
                                                      :class="{
                                                          'text-emerald-700 bg-emerald-50': product.stock > 10,
                                                          'text-yellow-700 bg-yellow-50': product.stock <= 10 && product.stock > 0,
                                                          'text-red-700 bg-red-50': product.stock === 0
                                                      }"
                                                      x-text="getStockLabel(product.stock)"></span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <div class="flex items-center justify-end gap-1 opacity-100 sm:opacity-60 sm:group-hover:opacity-100 transition-opacity">
                                                <button class="size-8 flex items-center justify-center text-gray-500 hover:text-primary hover:bg-primary/10 rounded-full transition-colors" title="Edit">
                                                    <span class="material-symbols-outlined text-[18px]">edit</span>
                                                </button>
                                                <button class="size-8 flex items-center justify-center text-gray-500 hover:text-red-600 hover:bg-red-50 rounded-full transition-colors" title="Delete">
                                                    <span class="material-symbols-outlined text-[18px]">delete</span>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </template>
                                
                                <tr x-show="filteredProducts.length === 0">
                                    <td colspan="6" class="px-6 py-10 text-center text-gray-500">
                                        <span class="material-symbols-outlined text-4xl mb-2 text-gray-300">search_off</span>
                                        <p>No products found matching "<span x-text="searchQuery"></span>"</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="flex flex-col sm:flex-row items-center justify-between px-6 py-4 border-t border-gray-200 bg-gray-50/50 gap-4">
                        <p class="text-sm text-gray-500">
                            Showing <span class="font-medium text-dark" x-text="startItem"></span> 
                            to <span class="font-medium text-dark" x-text="endItem"></span> 
                            of <span class="font-medium text-dark" x-text="filteredProducts.length"></span> results
                        </p>
                        <div class="flex gap-2">
                            <button @click="prevPage" :disabled="currentPage === 1"
                                    class="px-3 py-1.5 text-sm font-medium rounded-lg border border-gray-200 bg-white hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed transition-colors shadow-sm">
                                Previous
                            </button>
                            <button @click="nextPage" :disabled="currentPage === totalPages"
                                    class="px-3 py-1.5 text-sm font-medium rounded-lg border border-gray-200 bg-white hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed transition-colors shadow-sm">
                                Next
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <script>
        function productApp() {
            return {
                sidebarOpen: false,
                searchQuery: '',
                selectedCategory: 'All Products',
                categories: ['All Products', 'Coffee', 'Non-Coffee', 'Food'],
                activeNav: 'Products',
                navItems: [
                    { name: 'Dashboard', icon: 'dashboard', link: '#' },
                    { name: 'Products', icon: 'coffee', link: '#' },
                    { name: 'Orders', icon: 'shopping_bag', link: '#' },
                    { name: 'Customers', icon: 'group', link: '#' },
                    { name: 'Analytics', icon: 'bar_chart', link: '#' },
                ],
                currentPage: 1,
                itemsPerPage: 5,
                
                // Dummy Data
                products: [
                    { id: 1, name: 'Espresso Roast', sku: 'CF-001', category: 'Coffee', price: 15.00, stock: 45, image: 'https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?auto=format&fit=crop&w=100&q=80' },
                    { id: 2, name: 'Matcha Latte', sku: 'NC-024', category: 'Non-Coffee', price: 6.50, stock: 8, image: 'https://images.unsplash.com/photo-1515823662972-da6a2e1d3136?auto=format&fit=crop&w=100&q=80' },
                    { id: 3, name: 'Butter Croissant', sku: 'FD-108', category: 'Food', price: 3.50, stock: 0, image: 'https://images.unsplash.com/photo-1555507036-ab1f4038808a?auto=format&fit=crop&w=100&q=80' },
                    { id: 4, name: 'Cold Brew Bottle', sku: 'CF-005', category: 'Coffee', price: 8.00, stock: 20, image: 'https://images.unsplash.com/photo-1517701604599-bb29b5c73553?auto=format&fit=crop&w=100&q=80' },
                    { id: 5, name: 'Caramel Macchiato', sku: 'CF-012', category: 'Coffee', price: 5.50, stock: 15, image: null },
                    { id: 6, name: 'Chocolate Cake', sku: 'FD-112', category: 'Food', price: 4.50, stock: 5, image: null },
                    { id: 7, name: 'Oolong Tea', sku: 'NC-055', category: 'Non-Coffee', price: 4.00, stock: 30, image: null },
                ],

                // Computed Logic
                get filteredProducts() {
                    return this.products.filter(item => {
                        const matchesSearch = item.name.toLowerCase().includes(this.searchQuery.toLowerCase()) || 
                                              item.sku.toLowerCase().includes(this.searchQuery.toLowerCase());
                        const matchesCategory = this.selectedCategory === 'All Products' || item.category === this.selectedCategory;
                        
                        return matchesSearch && matchesCategory;
                    });
                },

                get totalPages() {
                    return Math.ceil(this.filteredProducts.length / this.itemsPerPage);
                },

                get paginatedProducts() {
                    const start = (this.currentPage - 1) * this.itemsPerPage;
                    const end = start + this.itemsPerPage;
                    return this.filteredProducts.slice(start, end);
                },

                get startItem() {
                    return this.filteredProducts.length === 0 ? 0 : (this.currentPage - 1) * this.itemsPerPage + 1;
                },

                get endItem() {
                    return Math.min(this.currentPage * this.itemsPerPage, this.filteredProducts.length);
                },

                // Actions
                nextPage() {
                    if (this.currentPage < this.totalPages) this.currentPage++;
                },

                prevPage() {
                    if (this.currentPage > 1) this.currentPage--;
                },

                formatCurrency(value) {
                    return new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD' }).format(value);
                },

                getStockLabel(stock) {
                    if (stock === 0) return 'Out of Stock';
                    if (stock <= 10) return 'Low Stock';
                    return 'In Stock';
                }
            }
        }
    </script>

</x-dashboard-layout>