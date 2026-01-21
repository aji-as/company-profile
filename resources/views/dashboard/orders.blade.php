<x-dashboard-layout>

<main class="flex-1 flex flex-col h-full overflow-hidden relative transition-all duration-300">

        
        

        <div class="flex-1 overflow-y-auto p-4 md:p-8 scroll-smooth">
            <div class="max-w-[1200px] mx-auto flex flex-col gap-6 md:gap-8 pb-10">
                
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="bg-white rounded-xl p-5 shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-gray-500 text-sm font-medium">Total Orders</span>
                            <span class="p-2 bg-green-50 text-primary rounded-lg"><span class="material-symbols-outlined text-lg">shopping_bag</span></span>
                        </div>
                        <p class="text-gray-900 text-3xl font-bold" x-text="orders.length"></p>
                        <p class="text-green-600 text-xs font-medium flex items-center gap-1 mt-1"><span class="material-symbols-outlined text-sm">trending_up</span> +12% today</p>
                    </div>
                    <div class="bg-white rounded-xl p-5 shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-gray-500 text-sm font-medium">Pending</span>
                            <span class="p-2 bg-orange-50 text-orange-600 rounded-lg"><span class="material-symbols-outlined text-lg">hourglass_empty</span></span>
                        </div>
                        <p class="text-gray-900 text-3xl font-bold" x-text="orders.filter(o => o.status === 'Processing').length"></p>
                        <p class="text-orange-600 text-xs font-medium flex items-center gap-1 mt-1">Needs attention</p>
                    </div>
                    <div class="bg-white rounded-xl p-5 shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-gray-500 text-sm font-medium">Revenue</span>
                            <span class="p-2 bg-blue-50 text-blue-600 rounded-lg"><span class="material-symbols-outlined text-lg">payments</span></span>
                        </div>
                        <p class="text-gray-900 text-3xl font-bold">$1,450</p>
                        <p class="text-green-600 text-xs font-medium flex items-center gap-1 mt-1"><span class="material-symbols-outlined text-sm">trending_up</span> +8.2%</p>
                    </div>
                    <div class="bg-white rounded-xl p-5 shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-gray-500 text-sm font-medium">Canceled</span>
                            <span class="p-2 bg-red-50 text-red-600 rounded-lg"><span class="material-symbols-outlined text-lg">cancel</span></span>
                        </div>
                        <p class="text-gray-900 text-3xl font-bold" x-text="orders.filter(o => o.status === 'Canceled').length"></p>
                        <p class="text-red-600 text-xs font-medium flex items-center gap-1 mt-1">-1% rate</p>
                    </div>
                </div>

                <div class="flex flex-col bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                    
                    <div class="p-5 border-b border-gray-100 flex flex-col lg:flex-row lg:items-center justify-between gap-4">
                        
                        <div class="md:hidden relative w-full">
                            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">search</span>
                            <input x-model="searchQuery" class="w-full h-10 pl-10 pr-4 rounded-xl bg-gray-50 border-none text-sm focus:ring-2 focus:ring-primary/20" placeholder="Search orders..." type="text"/>
                        </div>

                        <div class="flex items-center gap-2 overflow-x-auto pb-2 lg:pb-0 no-scrollbar">
                            <template x-for="tab in ['All', 'Processing', 'Completed', 'Canceled']">
                                <button @click="currentTab = tab; currentPage = 1"
                                        :class="currentTab === tab ? 'bg-primary text-white' : 'bg-gray-50 text-gray-600 hover:bg-gray-100'"
                                        class="whitespace-nowrap px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200"
                                        x-text="tab === 'All' ? 'All Orders' : tab">
                                </button>
                            </template>
                        </div>
                        
                        <div class="flex items-center gap-3 self-end lg:self-auto">
                            <button class="flex items-center gap-2 px-3 py-2 rounded-lg border border-gray-200 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-primary transition-colors">
                                <span class="material-symbols-outlined text-[18px]">download</span>
                                <span class="hidden sm:inline">Export</span>
                            </button>
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-gray-50/50 border-b border-gray-100">
                                    <th class="py-4 px-6 text-xs font-semibold uppercase tracking-wider text-gray-500">Order ID</th>
                                    <th class="py-4 px-6 text-xs font-semibold uppercase tracking-wider text-gray-500">Date & Time</th>
                                    <th class="py-4 px-6 text-xs font-semibold uppercase tracking-wider text-gray-500">Customer</th>
                                    <th class="py-4 px-6 text-xs font-semibold uppercase tracking-wider text-gray-500">Items</th>
                                    <th class="py-4 px-6 text-xs font-semibold uppercase tracking-wider text-gray-500">Total</th>
                                    <th class="py-4 px-6 text-xs font-semibold uppercase tracking-wider text-gray-500">Status</th>
                                    <th class="py-4 px-6 text-xs font-semibold uppercase tracking-wider text-gray-500 text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                <template x-for="order in paginatedOrders" :key="order.id">
                                    <tr class="hover:bg-gray-50 transition-colors group">
                                        <td class="py-4 px-6 text-sm font-medium text-primary" x-text="order.id"></td>
                                        <td class="py-4 px-6 text-sm text-gray-500" x-text="order.date"></td>
                                        <td class="py-4 px-6">
                                            <div class="flex items-center gap-3">
                                                <div class="size-8 rounded-full bg-gray-200 overflow-hidden">
                                                    <img :src="`https://ui-avatars.com/api/?name=${order.customer}&background=random&color=fff`" alt="Avatar">
                                                </div>
                                                <span class="text-sm font-medium text-gray-900" x-text="order.customer"></span>
                                            </div>
                                        </td>
                                        <td class="py-4 px-6 text-sm text-gray-500 truncate max-w-[150px]" x-text="order.items"></td>
                                        <td class="py-4 px-6 text-sm font-bold text-gray-900" x-text="order.total"></td>
                                        <td class="py-4 px-6">
                                            <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium border"
                                                  :class="{
                                                      'bg-green-100 text-green-800 border-green-200': order.status === 'Completed',
                                                      'bg-orange-100 text-orange-800 border-orange-200': order.status === 'Processing',
                                                      'bg-red-100 text-red-800 border-red-200': order.status === 'Canceled'
                                                  }"
                                                  x-text="order.status">
                                            </span>
                                        </td>
                                        <td class="py-4 px-6 text-right">
                                            <button @click="openModal(order)" class="text-secondary hover:text-orange-700 text-sm font-medium transition-colors hover:underline">Details</button>
                                        </td>
                                    </tr>
                                </template>
                                <tr x-show="paginatedOrders.length === 0">
                                    <td colspan="7" class="py-8 text-center text-gray-500">
                                        No orders found matching your criteria.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="px-6 py-4 border-t border-gray-100 flex items-center justify-between bg-gray-50/30">
                        <span class="text-sm text-gray-500">
                            Showing <span class="font-medium text-gray-900" x-text="((currentPage - 1) * itemsPerPage) + 1"></span> 
                            to <span class="font-medium text-gray-900" x-text="Math.min(currentPage * itemsPerPage, filteredOrders.length)"></span> 
                            of <span class="font-medium text-gray-900" x-text="filteredOrders.length"></span> results
                        </span>
                        <div class="flex items-center gap-2">
                            <button @click="currentPage > 1 ? currentPage-- : null" 
                                    :disabled="currentPage === 1"
                                    class="size-8 flex items-center justify-center rounded-lg border border-gray-200 text-gray-500 hover:bg-white hover:border-gray-300 disabled:opacity-50 disabled:cursor-not-allowed transition-all bg-white">
                                <span class="material-symbols-outlined text-sm">chevron_left</span>
                            </button>
                            
                            <template x-for="page in totalPages">
                                <button @click="currentPage = page"
                                        x-text="page"
                                        :class="currentPage === page ? 'bg-secondary text-white border-secondary' : 'bg-white text-gray-600 border-gray-200 hover:bg-gray-50'"
                                        class="size-8 flex items-center justify-center rounded-lg border text-sm font-medium transition-all">
                                </button>
                            </template>

                            <button @click="currentPage < totalPages ? currentPage++ : null" 
                                    :disabled="currentPage === totalPages"
                                    class="size-8 flex items-center justify-center rounded-lg border border-gray-200 text-gray-500 hover:bg-white hover:border-gray-300 disabled:opacity-50 disabled:cursor-not-allowed transition-all bg-white">
                                <span class="material-symbols-outlined text-sm">chevron_right</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div x-show="modalOpen" x-cloak class="relative z-50" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div x-show="modalOpen" x-transition.opacity class="fixed inset-0 bg-black/60 backdrop-blur-sm transition-opacity"></div>
            <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
                    <div x-show="modalOpen" 
                         x-transition:enter="ease-out duration-300"
                         x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                         x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                         class="relative transform overflow-hidden rounded-2xl bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                        
                        <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4" x-data="{ order: selectedOrder }">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h3 class="text-lg font-bold leading-6 text-gray-900" id="modal-title">Order Details</h3>
                                    <p class="text-sm text-gray-500 mt-1" x-text="order?.id + ' • ' + order?.date"></p>
                                </div>
                                <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium border"
                                      :class="{
                                          'bg-green-100 text-green-800 border-green-200': order?.status === 'Completed',
                                          'bg-orange-100 text-orange-800 border-orange-200': order?.status === 'Processing',
                                          'bg-red-100 text-red-800 border-red-200': order?.status === 'Canceled'
                                      }"
                                      x-text="order?.status">
                                </span>
                            </div>
                            
                            <div class="border-t border-gray-100 py-4">
                                <div class="flex items-center gap-3 mb-4">
                                    <img :src="`https://ui-avatars.com/api/?name=${order?.customer}&background=random`" class="size-10 rounded-full">
                                    <div>
                                        <p class="font-medium text-gray-900" x-text="order?.customer"></p>
                                        <p class="text-xs text-gray-500">Customer</p>
                                    </div>
                                </div>
                                <div class="bg-gray-50 rounded-lg p-3">
                                    <p class="text-xs font-bold text-gray-500 uppercase mb-2">Items</p>
                                    <div class="flex justify-between text-sm mb-1">
                                        <span x-text="order?.items"></span>
                                        <span class="font-medium" x-text="order?.total"></span>
                                    </div>
                                    <div class="flex justify-between text-sm text-gray-500 border-t border-gray-200 mt-2 pt-2">
                                        <span>Tax (10%)</span>
                                        <span>$1.20</span>
                                    </div>
                                    <div class="flex justify-between font-bold text-primary text-base mt-2">
                                        <span>Total Paid</span>
                                        <span x-text="order?.total"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                            <button @click="modalOpen = false" type="button" class="inline-flex w-full justify-center rounded-lg bg-primary px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-primary-hover sm:ml-3 sm:w-auto transition-colors">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <script>
        function orderApp() {
            return {
                sidebarOpen: false,
                currentTab: 'All',
                searchQuery: '',
                currentPage: 1,
                itemsPerPage: 6,
                modalOpen: false,
                selectedOrder: null,
                
                // Data Pesanan (Dummy Data)
                orders: [
                    { id: '#ORD-001', date: 'Oct 24, 10:30 AM', customer: 'Alice Smith', items: '2x Latte, 1x Croissant', total: '$12.50', status: 'Completed' },
                    { id: '#ORD-002', date: 'Oct 24, 10:45 AM', customer: 'Bob Jones', items: '1x Cold Brew (L)', total: '$5.00', status: 'Processing' },
                    { id: '#ORD-003', date: 'Oct 24, 11:00 AM', customer: 'Charlie Day', items: '1x Espresso', total: '$3.50', status: 'Canceled' },
                    { id: '#ORD-004', date: 'Oct 24, 11:15 AM', customer: 'Dana White', items: '1x Cappuccino, 1x Muffin', total: '$9.25', status: 'Completed' },
                    { id: '#ORD-005', date: 'Oct 24, 11:22 AM', customer: 'Evan King', items: '2x Iced Tea', total: '$4.00', status: 'Processing' },
                    { id: '#ORD-006', date: 'Oct 24, 11:45 AM', customer: 'Fiona Gallagher', items: '1x Machiato, 1x Cake', total: '$8.50', status: 'Completed' },
                    { id: '#ORD-007', date: 'Oct 24, 12:10 PM', customer: 'George Miller', items: '3x Americano', total: '$9.00', status: 'Completed' },
                    { id: '#ORD-008', date: 'Oct 24, 12:30 PM', customer: 'Hannah Lee', items: '1x Sandwich, 1x Soda', total: '$14.00', status: 'Processing' },
                    { id: '#ORD-009', date: 'Oct 24, 01:15 PM', customer: 'Ian Wright', items: '1x Flat White', total: '$4.50', status: 'Completed' },
                ],

                // Logika Filter
                get filteredOrders() {
                    return this.orders.filter(order => {
                        const matchesTab = this.currentTab === 'All' || order.status === this.currentTab;
                        const matchesSearch = order.customer.toLowerCase().includes(this.searchQuery.toLowerCase()) || 
                                              order.id.toLowerCase().includes(this.searchQuery.toLowerCase());
                        return matchesTab && matchesSearch;
                    });
                },

                // Logika Pagination
                get totalPages() {
                    return Math.ceil(this.filteredOrders.length / this.itemsPerPage);
                },

                get paginatedOrders() {
                    const start = (this.currentPage - 1) * this.itemsPerPage;
                    const end = start + this.itemsPerPage;
                    return this.filteredOrders.slice(start, end);
                },

                // Modal Functions
                openModal(order) {
                    this.selectedOrder = order;
                    this.modalOpen = true;
                }
            }
        }
    </script>
</x-dashboard-layout>