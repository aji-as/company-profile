<div x-show="sidebarOpen" 
         x-transition:enter="transition-opacity ease-linear duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition-opacity ease-linear duration-300"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @click="sidebarOpen = false"
         class="fixed inset-0 bg-black/50 z-30 lg:hidden glass"></div>

    <aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
           class="fixed inset-y-0 left-0 z-40 w-72 bg-primary flex flex-col justify-between p-6 transition-transform duration-300 ease-in-out lg:relative lg:translate-x-0 shadow-2xl lg:shadow-none">
        <div>
            <div class="flex items-center justify-between mb-10 px-2">
                <div class="flex items-center gap-3">
                    <div class="bg-white/10 p-2 rounded-lg text-white backdrop-blur-sm border border-white/10">
                        <span class="material-symbols-outlined text-2xl">coffee</span>
                    </div>
                    <div class="flex flex-col">
                        <h1 class="text-white text-xl font-bold leading-tight tracking-wide">Kanara House</h1>
                        <p class="text-white/60 text-xs font-normal">Admin Dashboard</p>
                    </div>
                </div>
                <button @click="sidebarOpen = false" class="lg:hidden text-white/70 hover:text-white">
                    <span class="material-symbols-outlined">close</span>
                </button>  
            </div>

            <nav class="flex flex-col gap-2">

                <x-dashboard-nav-link route="analytics" > 
                    <span class="material-symbols-outlined filled text-green-300 group-hover:text-white transition-colors">dashboard</span>
                    <span class="text-sm font-medium">Overview</span>
                </x-dashboard-nav-link>
                <x-dashboard-nav-link route="orders">
                    <span class="material-symbols-outlined group-hover:scale-110 transition-transform">shopping_bag</span>
                    <span class="text-sm font-medium">Orders</span>
                </x-dashboard-nav-link>
                <x-dashboard-nav-link route="products">
                    <span class="material-symbols-outlined group-hover:scale-110 transition-transform">restaurant_menu</span>
                    <span class="text-sm font-medium">Products</span>
                </x-dashboard-nav-link>
                {{-- <x-dashboard-nav-link route="customers">
                    <span class="material-symbols-outlined group-hover:scale-110 transition-transform">group</span>
                    <span class="text-sm font-medium">Customers</span>
                </x-dashboard-nav-link> --}}
                <x-dashboard-nav-link route="blogs">
                    <span class="material-symbols-outlined group-hover:scale-110 transition-transform">article</span>
                    <span class="text-sm font-medium">Blogs</span>
                </x-dashboard-nav-link>
            </nav>
        </div>

        <div class="flex flex-col gap-2">
            <div class="mt-4 pt-4 border-t border-white/10 flex items-center gap-3 px-2">
                <img src="https://ui-avatars.com/api/?name=Alex+Morgan&Zbackground=random&color=fff" alt="Profile" class="size-10 rounded-full border-2 border-white/20">
                <div class="flex flex-col">
                    <p class="text-white text-sm font-medium">{{ auth()->user()->name ?? 'aku' }}</p>
                    <p class="text-white/50 text-xs">Manager</p>
                </div>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="ml-auto text-white/50 hover:text-white transition-transform hover:translate-x-1">
                        <span class="material-symbols-outlined text-xl">logout</span>
                    </button>
                </form>
            </div>
        </div>
    </aside>