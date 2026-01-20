

<x-dashboard-layout>

    <div class="flex-1 overflow-y-auto p-4 md:p-8 pt-2 pb-20 scroll-smooth">
            <div class="max-w-[1400px] mx-auto flex flex-col gap-8">
                
                <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-4">
                    <div>
                        <h2 class="text-2xl md:text-3xl font-bold text-primary tracking-tight">Good Morning, Alex 👋</h2>
                        <p class="text-gray-500 mt-1 text-sm md:text-base">Here's what's happening at Kanara House today.</p>
                    </div>
                    <div class="flex gap-3 w-full md:w-auto">
                        <button class="flex-1 md:flex-none justify-center items-center gap-2 bg-white px-4 py-2 rounded-lg text-sm font-medium text-primary shadow-sm hover:bg-gray-50 hover:shadow-md border border-transparent transition-all">
                            <span class="material-symbols-outlined text-[18px]">calendar_today</span>
                            Today
                        </button>
                        <button class="flex-1 md:flex-none justify-center items-center gap-2 bg-primary px-4 py-2 rounded-lg text-sm font-medium text-white shadow-md hover:bg-primary-dark hover:shadow-lg transition-all active:scale-95">
                            <span class="material-symbols-outlined text-[18px]">download</span>
                            Export
                        </button>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-6">
                    <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 flex flex-col gap-4 border border-gray-100/50">
                        <div class="flex justify-between items-start">
                            <div class="bg-cream-dark p-3 rounded-xl text-primary">
                                <span class="material-symbols-outlined">payments</span>
                            </div>
                            <span class="flex items-center gap-1 text-green-700 bg-green-100/50 px-2 py-1 rounded-full text-xs font-bold">
                                <span class="material-symbols-outlined text-sm">trending_up</span> +12%
                            </span>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm font-medium">Total Revenue</p>
                            <h3 class="text-3xl font-bold text-primary mt-1">$12,450</h3>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 flex flex-col gap-4 border border-gray-100/50">
                        <div class="flex justify-between items-start">
                            <div class="bg-cream-dark p-3 rounded-xl text-primary">
                                <span class="material-symbols-outlined">shopping_cart</span>
                            </div>
                            <span class="flex items-center gap-1 text-green-700 bg-green-100/50 px-2 py-1 rounded-full text-xs font-bold">
                                <span class="material-symbols-outlined text-sm">trending_up</span> +5%
                            </span>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm font-medium">Total Orders</p>
                            <h3 class="text-3xl font-bold text-primary mt-1">1,240</h3>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow duration-300 flex flex-col gap-4 border border-gray-100/50">
                        <div class="flex justify-between items-start">
                            <div class="bg-cream-dark p-3 rounded-xl text-primary">
                                <span class="material-symbols-outlined">person_add</span>
                            </div>
                            <span class="flex items-center gap-1 text-green-700 bg-green-100/50 px-2 py-1 rounded-full text-xs font-bold">
                                <span class="material-symbols-outlined text-sm">trending_up</span> +2%
                            </span>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm font-medium">New Customers</p>
                            <h3 class="text-3xl font-bold text-primary mt-1">85</h3>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <div class="bg-white lg:col-span-2 rounded-xl shadow-sm border border-gray-100/50 p-6 flex flex-col">
                        <div class="flex flex-row justify-between items-center mb-6">
                            <h3 class="font-bold text-lg text-primary">Revenue Analytics</h3>
                            <div class="flex bg-gray-50 rounded-lg p-1 border border-gray-100">
                                <button class="px-3 py-1 bg-white rounded shadow-sm text-xs font-medium text-primary transition-all">Weekly</button>
                                <button class="px-3 py-1 rounded text-xs font-medium text-gray-400 hover:text-primary transition-all">Monthly</button>
                            </div>
                        </div>
                        
                        <div class="relative h-64 w-full">
                            <canvas id="revenueChart"></canvas>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl shadow-sm border border-gray-100/50 p-6 flex flex-col h-full">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="font-bold text-lg text-primary">Popular Items</h3>
                            <button class="text-xs text-primary font-medium hover:underline">See All</button>
                        </div>
                        
                        <div class="flex flex-col gap-5 flex-1">
                            <div class="flex items-center gap-4 group cursor-pointer">
                                <img src="https://images.unsplash.com/photo-1572442388796-11668a67e53d?w=150&h=150&fit=crop" class="size-12 rounded-lg object-cover group-hover:scale-105 transition-transform" alt="Coffee">
                                <div class="flex-1">
                                    <p class="font-semibold text-sm text-gray-800 group-hover:text-primary transition-colors">Caramel Macchiato</p>
                                    <div class="w-full bg-gray-100 rounded-full h-1.5 mt-1">
                                        <div class="bg-primary h-1.5 rounded-full" style="width: 85%"></div>
                                    </div>
                                    <p class="text-[10px] text-gray-400 mt-1">124 orders</p>
                                </div>
                                <span class="font-bold text-sm text-primary">$4.50</span>
                            </div>

                            <div class="flex items-center gap-4 group cursor-pointer">
                                <img src="https://images.unsplash.com/photo-1555507036-ab1f4038808a?w=150&h=150&fit=crop" class="size-12 rounded-lg object-cover group-hover:scale-105 transition-transform" alt="Croissant">
                                <div class="flex-1">
                                    <p class="font-semibold text-sm text-gray-800 group-hover:text-primary transition-colors">Butter Croissant</p>
                                    <div class="w-full bg-gray-100 rounded-full h-1.5 mt-1">
                                        <div class="bg-primary/70 h-1.5 rounded-full" style="width: 65%"></div>
                                    </div>
                                    <p class="text-[10px] text-gray-400 mt-1">98 orders</p>
                                </div>
                                <span class="font-bold text-sm text-primary">$3.00</span>
                            </div>

                            <div class="flex items-center gap-4 group cursor-pointer">
                                <img src="https://images.unsplash.com/photo-1561047029-3000c68339ca?w=150&h=150&fit=crop" class="size-12 rounded-lg object-cover group-hover:scale-105 transition-transform" alt="Burger">
                                <div class="flex-1">
                                    <p class="font-semibold text-sm text-gray-800 group-hover:text-primary transition-colors">Avocado Toast</p>
                                    <div class="w-full bg-gray-100 rounded-full h-1.5 mt-1">
                                        <div class="bg-primary/50 h-1.5 rounded-full" style="width: 45%"></div>
                                    </div>
                                    <p class="text-[10px] text-gray-400 mt-1">72 orders</p>
                                </div>
                                <span class="font-bold text-sm text-primary">$8.50</span>
                            </div>
                        </div>

                        <button class="w-full mt-6 py-2.5 rounded-lg border border-gray-200 text-sm font-medium text-gray-500 hover:bg-gray-50 hover:text-primary hover:border-primary/30 transition-all">
                            View Full Menu
                        </button>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm border border-gray-100/50 overflow-hidden mb-8">
                    <div class="p-6 border-b border-gray-100 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                        <h3 class="font-bold text-lg text-primary">Recent Orders</h3>
                        <div class="md:hidden w-full sm:w-auto relative">
                             <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 material-symbols-outlined text-[18px]">search</span>
                             <input x-model="searchQuery" class="w-full bg-gray-50 border-none rounded-lg py-2 pl-9 pr-4 text-sm focus:ring-1 focus:ring-primary" placeholder="Filter orders...">
                        </div>
                        <a class="hidden sm:block text-sm font-medium text-primary hover:underline" href="#">View All History</a>
                    </div>
                    
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse whitespace-nowrap">
                            <thead>
                                <tr class="bg-gray-50/50 text-gray-500 text-xs uppercase tracking-wider">
                                    <th class="px-6 py-4 font-medium">Order ID</th>
                                    <th class="px-6 py-4 font-medium">Customer</th>
                                    <th class="px-6 py-4 font-medium">Items</th>
                                    <th class="px-6 py-4 font-medium">Total</th>
                                    <th class="px-6 py-4 font-medium">Status</th>
                                    <th class="px-6 py-4 font-medium text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100 text-sm">
                                <tr class="hover:bg-gray-50/80 transition-colors" x-show="searchQuery === '' || '#ORD-2491 Sarah Jenkins'.toLowerCase().includes(searchQuery.toLowerCase())">
                                    <td class="px-6 py-4 font-bold text-primary">#ORD-2491</td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-2">
                                            <div class="size-6 rounded-full bg-purple-100 text-purple-600 flex items-center justify-center text-xs font-bold">SJ</div>
                                            <span class="text-gray-800">Sarah Jenkins</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-gray-500">2x Latte, 1x Bagel</td>
                                    <td class="px-6 py-4 font-medium text-gray-800">$14.50</td>
                                    <td class="px-6 py-4">
                                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-amber-100 text-amber-700 border border-amber-200">
                                            Preparing
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <button class="text-gray-400 hover:text-primary p-1 rounded-full hover:bg-gray-100 transition-colors"><span class="material-symbols-outlined text-lg">more_horiz</span></button>
                                    </td>
                                </tr>
                                
                                <tr class="hover:bg-gray-50/80 transition-colors" x-show="searchQuery === '' || '#ORD-2490 Michael Chen'.toLowerCase().includes(searchQuery.toLowerCase())">
                                    <td class="px-6 py-4 font-bold text-primary">#ORD-2490</td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-2">
                                            <div class="size-6 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center text-xs font-bold">MC</div>
                                            <span class="text-gray-800">Michael Chen</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-gray-500">1x Americano</td>
                                    <td class="px-6 py-4 font-medium text-gray-800">$3.50</td>
                                    <td class="px-6 py-4">
                                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700 border border-green-200">
                                            Completed
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <button class="text-gray-400 hover:text-primary p-1 rounded-full hover:bg-gray-100 transition-colors"><span class="material-symbols-outlined text-lg">more_horiz</span></button>
                                    </td>
                                </tr>

                                <tr class="hover:bg-gray-50/80 transition-colors" x-show="searchQuery === '' || '#ORD-2489 Emma Watson'.toLowerCase().includes(searchQuery.toLowerCase())">
                                    <td class="px-6 py-4 font-bold text-primary">#ORD-2489</td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-2">
                                            <div class="size-6 rounded-full bg-pink-100 text-pink-600 flex items-center justify-center text-xs font-bold">EW</div>
                                            <span class="text-gray-800">Emma Watson</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-gray-500">1x Cappuccino, 1x Cake</td>
                                    <td class="px-6 py-4 font-medium text-gray-800">$8.20</td>
                                    <td class="px-6 py-4">
                                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700 border border-green-200">
                                            Completed
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <button class="text-gray-400 hover:text-primary p-1 rounded-full hover:bg-gray-100 transition-colors"><span class="material-symbols-outlined text-lg">more_horiz</span></button>
                                    </td>
                                </tr>

                                <tr class="hover:bg-gray-50/80 transition-colors" x-show="searchQuery === '' || '#ORD-2488 James Doo'.toLowerCase().includes(searchQuery.toLowerCase())">
                                    <td class="px-6 py-4 font-bold text-primary">#ORD-2488</td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-2">
                                            <div class="size-6 rounded-full bg-orange-100 text-orange-600 flex items-center justify-center text-xs font-bold">JD</div>
                                            <span class="text-gray-800">James Doo</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-gray-500">3x Espresso</td>
                                    <td class="px-6 py-4 font-medium text-gray-800">$9.00</td>
                                    <td class="px-6 py-4">
                                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-600 border border-gray-200">
                                            Cancelled
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <button class="text-gray-400 hover:text-primary p-1 rounded-full hover:bg-gray-100 transition-colors"><span class="material-symbols-outlined text-lg">more_horiz</span></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>

    </x-dashboard-layout>