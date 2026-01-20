<header class="h-20 flex-shrink-0 px-4 md:px-8 flex items-center justify-between bg-cream/90 backdrop-blur-md z-20 border-b border-primary/5 sticky top-0">
            
            <div class="flex items-center gap-4">
                <button @click="sidebarOpen = true" class="lg:hidden p-2 -ml-2 text-primary hover:bg-primary/5 rounded-lg transition-colors">
                    <span class="material-symbols-outlined">menu</span>
                </button>

                <div class="hidden sm:flex items-center gap-2 text-sm">
                    <span class="text-gray-500">Dashboard</span>
                    <span class="text-gray-400 material-symbols-outlined text-[16px]">chevron_right</span>
                    <span class="font-semibold text-primary">Overview</span>
                </div>
            </div>

            <div class="flex items-center gap-3 md:gap-4">
                <div class="relative hidden md:block group">
                    <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 material-symbols-outlined text-[20px] group-focus-within:text-primary transition-colors">search</span>
                    <input x-model="searchQuery" 
                           class="bg-white border-transparent rounded-lg h-10 pl-10 pr-4 text-sm w-48 lg:w-64 focus:ring-2 focus:ring-primary/20 focus:border-primary/20 placeholder-gray-400 shadow-sm transition-all" 
                           placeholder="Search orders..." type="text"/>
                </div>

                <div class="relative" x-data>
                    <button @click="notificationsOpen = !notificationsOpen" @click.outside="notificationsOpen = false"
                            class="size-10 bg-white rounded-lg flex items-center justify-center text-gray-500 shadow-sm hover:text-primary hover:shadow-md transition-all relative">
                        <span class="material-symbols-outlined text-[22px]">notifications</span>
                        <span class="absolute top-2.5 right-2.5 size-2 bg-red-500 rounded-full border border-white animate-pulse"></span>
                    </button>

                    <div x-show="notificationsOpen"
                         x-transition:enter="transition ease-out duration-100"
                         x-transition:enter-start="transform opacity-0 scale-95"
                         x-transition:enter-end="transform opacity-100 scale-100"
                         class="absolute right-0 mt-2 w-64 bg-white rounded-xl shadow-lg border border-gray-100 p-2 z-50 origin-top-right" style="display: none;">
                         <div class="p-2 border-b border-gray-50 text-xs font-bold text-gray-500">NOTIFICATIONS</div>
                         <div class="p-3 text-sm hover:bg-gray-50 rounded cursor-pointer">New order from Sarah</div>
                         <div class="p-3 text-sm hover:bg-gray-50 rounded cursor-pointer">Stock alert: Coffee Beans</div>
                    </div>
                </div>
            </div>
        </header>
