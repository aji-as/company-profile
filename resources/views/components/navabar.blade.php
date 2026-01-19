<div>
    <header id="main-header" class="fixed top-0 z-50 w-full transition-all duration-300 bg-background-light/90 dark:bg-background-dark/80 backdrop-blur-md border-b border-transparent">
        <div class="mx-auto flex h-20 max-w-7xl items-center justify-between px-6 lg:px-12">
            
            <div class="flex items-center gap-4 text-primary dark:text-white">
                <a href="#" class="flex items-center gap-2 group">
                    <span class="material-symbols-outlined text-3xl group-hover:rotate-12 transition-transform duration-300">local_cafe</span>
                    <h2 class="text-2xl font-serif font-bold tracking-tight">Kanara House</h2>
                </a>
            </div>

            <nav class="hidden md:flex items-center gap-8">
                <x-nav-link route="home">Home</x-nav-link>
                <x-nav-link route="about">About</x-nav-link>
                <x-nav-link route="shop">Shop</x-nav-link>
                <x-nav-link route="galery">The Place</x-nav-link>
                <x-nav-link route="contact">Contact</x-nav-link>
                <x-nav-link route="blog">Blog</x-nav-link>
            </nav>


            <div class="flex items-center gap-4">
                <button class="hidden sm:flex items-center justify-center rounded-lg h-10 px-6 bg-primary hover:bg-primary-dark hover:-translate-y-0.5 transition-all duration-300 text-white text-sm font-bold tracking-wide shadow-sm hover:shadow-lg">
                    Order Online
                </button>
                
                <button id="mobile-menu-btn" class="md:hidden p-2 text-primary dark:text-white hover:bg-black/5 rounded-md transition-colors transform active:scale-90">
                    <span class="material-symbols-outlined text-3xl">menu</span>
                </button>
            </div>
        </div>
    </header>

    <div id="mobile-backdrop" class="fixed inset-0 bg-black/60 z-[60] hidden transition-opacity duration-300 opacity-0 backdrop-blur-sm"></div>

    <div id="mobile-sidebar" class="fixed top-0 right-0 h-full w-[300px] bg-white dark:bg-gray-900 z-[70] transform translate-x-full transition-transform duration-300 ease-in-out shadow-2xl flex flex-col">
        <div class="flex items-center justify-between p-6 border-b border-gray-100 dark:border-gray-800">
            <h3 class="font-serif font-bold text-xl text-primary dark:text-white">Navigation</h3>
            <button id="close-menu-btn" class="p-2 text-gray-500 hover:text-primary transition-colors rounded-full hover:bg-gray-100 dark:hover:bg-gray-800 transform hover:rotate-90 duration-300">
                <span class="material-symbols-outlined">close</span>
            </button>
        </div>

        <div class="flex flex-col p-6 gap-6 overflow-y-auto">
            <x-mobile-nav-link route="home">Home</x-mobile-nav-link>
            <x-mobile-nav-link route="about">About</x-mobile-nav-link>
            <x-mobile-nav-link route="shop">Shop</x-mobile-nav-link>
            <x-mobile-nav-link route="galery">The Place</x-mobile-nav-link>
            <x-mobile-nav-link route="contact">Contact</x-mobile-nav-link>
            <x-mobile-nav-link route="blog">Blog</x-mobile-nav-link>
        </div>


        <div class="mt-auto p-6 border-t border-gray-100 dark:border-gray-800">
            <button class="w-full flex items-center justify-center rounded-lg h-12 bg-primary hover:bg-primary-dark transition-colors text-white font-bold tracking-wide shadow-lg">
                Order Online
            </button>
        </div>
    </div>
</div>