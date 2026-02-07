<x-dashboard-layout>
    <main x-data="blogApp()" class="flex-1 flex flex-col h-full overflow-hidden relative bg-gray-50 dark:bg-black">
        
        <header class="md:hidden bg-primary text-white p-4 flex items-center justify-between shrink-0 shadow-md z-20">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined filled">coffee</span>
                <span class="font-bold">Kanara House</span>
            </div>
            <button @click="sidebarOpen = true" class="p-1 rounded hover:bg-white/10 transition-colors">
                <span class="material-symbols-outlined">menu</span>
            </button>
        </header>

        <div class="flex-1 overflow-y-auto p-4 md:p-8 lg:p-12 scroll-smooth">
            <div class="max-w-[1400px] mx-auto flex flex-col gap-8 pb-10">
                
                <header class="flex flex-col gap-6">
                    <nav class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                        <a class="hover:text-primary transition-colors" href="#">Dashboard</a>
                        <span class="mx-2">/</span>
                        <span class="text-primary font-medium">Blog Management</span>
                    </nav>
                    
                    <div class="flex flex-wrap justify-between items-end gap-4">
                        <div class="flex flex-col gap-1">
                            <h1 class="text-gray-900 dark:text-white text-3xl md:text-4xl font-black tracking-tight">Blog Management</h1>
                            <p class="text-gray-500 dark:text-gray-400 text-base font-normal">Manage your blog posts, events, and community updates.</p>
                        </div>
                        <button class="flex items-center gap-2 bg-primary hover:bg-primary-dark text-white px-6 py-3 rounded-xl shadow-lg hover:shadow-primary/30 transition-all active:scale-95 group">
                            <span class="material-symbols-outlined group-hover:rotate-90 transition-transform">add</span>
                            <span class="font-semibold uppercase tracking-wide text-sm">Add New Post</span>
                        </button>
                    </div>
                </header>

                <section class="bg-white dark:bg-gray-800 p-2 rounded-2xl shadow-sm border border-gray-200 dark:border-gray-700 flex flex-col md:flex-row gap-3 items-center sticky top-0 z-10 backdrop-blur-md bg-white/90 dark:bg-gray-800/90">
                    <div class="relative flex-1 w-full group">
                        <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 group-focus-within:text-primary transition-colors">search</span>
                        <input x-model="searchQuery" 
                               class="w-full bg-gray-100 dark:bg-white/5 border-none rounded-xl py-3 pl-12 pr-4 text-sm focus:ring-2 focus:ring-primary/20 transition-all placeholder:text-gray-400 dark:text-white h-12 outline-none" 
                               placeholder="Search posts by title..." type="text"/>
                    </div>
                    <div class="flex gap-2 overflow-x-auto w-full md:w-auto pb-2 md:pb-0 no-scrollbar px-2 md:px-0">
                        <template x-for="cat in categories">
                            <button @click="activeFilter = cat"
                                    :class="activeFilter === cat ? 'bg-primary text-white shadow-md' : 'bg-gray-100 dark:bg-white/5 text-gray-600 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-white/10'"
                                    class="whitespace-nowrap flex items-center gap-2 px-4 h-12 rounded-xl font-medium text-sm transition-all"
                                    x-text="cat">
                            </button>
                        </template>
                    </div>
                </section>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    <template x-for="post in filteredPosts" :key="post.id">
                        <article x-transition:enter="transition ease-out duration-300"
                                 x-transition:enter-start="opacity-0 transform scale-95"
                                 x-transition:enter-end="opacity-100 transform scale-100"
                                 class="group bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-200 dark:border-gray-700 flex flex-col h-full">
                            
                            <div class="relative h-56 w-full overflow-hidden">
                                <div class="absolute top-4 left-4 z-10">
                                    <span :class="post.status === 'Published' ? 'bg-emerald-100 text-emerald-800 border-emerald-200' : 'bg-gray-100 text-gray-600 border-gray-200'"
                                          class="px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider shadow-sm border backdrop-blur-md bg-opacity-90"
                                          x-text="post.status"></span>
                                </div>
                                
                                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-60 z-[1]"></div>
                                
                                <div class="h-full w-full bg-cover bg-center group-hover:scale-110 transition-transform duration-700"
                                     :style="`background-image: url('${post.image}')`"
                                     role="img" 
                                     :aria-label="post.title">
                                </div>

                                <div class="absolute bottom-4 left-4 right-4 flex justify-between items-end text-white z-10">
                                    <div class="flex items-center gap-2 text-xs font-medium opacity-90">
                                        <span class="material-symbols-outlined text-base">calendar_today</span>
                                        <span x-text="post.date"></span>
                                    </div>
                                    <span class="text-xs bg-white/20 px-2 py-1 rounded backdrop-blur-md border border-white/20" x-text="post.category"></span>
                                </div>
                            </div>

                            <div class="p-5 flex flex-col flex-1 gap-4">
                                <div class="flex-1">
                                    <h3 class="text-xl font-bold text-gray-900 dark:text-white leading-tight mb-2 group-hover:text-primary transition-colors cursor-pointer" x-text="post.title"></h3>
                                    <p class="text-gray-500 dark:text-gray-400 text-sm line-clamp-2" x-text="post.excerpt"></p>
                                </div>
                                
                                <div class="pt-4 border-t border-gray-100 dark:border-gray-700 flex justify-end gap-2">
                                    <button class="p-2 rounded-lg text-gray-400 hover:text-primary hover:bg-primary/10 transition-colors" title="Edit">
                                        <span class="material-symbols-outlined">edit</span>
                                    </button>
                                    <button class="p-2 rounded-lg text-gray-400 hover:text-red-600 hover:bg-red-50 dark:hover:bg-red-900/20 transition-colors" title="Delete">
                                        <span class="material-symbols-outlined">delete</span>
                                    </button>
                                </div>
                            </div>
                        </article>
                    </template>

                    <article x-show="true" class="group bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300 border-2 border-dashed border-gray-300 dark:border-gray-600 flex flex-col h-full min-h-[300px]">
                        <button class="flex flex-col items-center justify-center h-full w-full text-gray-400 hover:text-primary transition-colors gap-4 p-6 outline-none focus:ring-2 focus:ring-primary/20 rounded-2xl">
                            <div class="bg-gray-100 dark:bg-white/5 p-4 rounded-full group-hover:bg-primary/10 transition-colors transform group-hover:scale-110 duration-300">
                                <span class="material-symbols-outlined text-4xl">add</span>
                            </div>
                            <div class="text-center">
                                <span class="font-bold text-lg block text-gray-600 dark:text-gray-300 group-hover:text-primary">Create Post</span>
                                <span class="text-xs font-normal opacity-70">Write something new for your audience</span>
                            </div>
                        </button>
                    </article>

                </div>

                <div x-show="filteredPosts.length === 0" 
                     x-transition 
                     class="text-center py-12 text-gray-400" 
                     style="display: none;">
                    <span class="material-symbols-outlined text-5xl mb-3 text-gray-300">search_off</span>
                    <p>No posts found matching "<span x-text="searchQuery" class="font-medium"></span>"</p>
                    <button @click="searchQuery = ''; activeFilter = 'All Posts'" class="text-primary text-sm font-bold mt-2 hover:underline">Clear filters</button>
                </div>

                <section class="bg-white dark:bg-gray-800 rounded-2xl p-6 md:p-8 shadow-sm border border-gray-200 dark:border-gray-700 mt-4">
                    <div class="flex flex-col md:flex-row gap-8 items-start">
                        <div class="flex-1 space-y-2">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="p-2 bg-orange-100 text-orange-700 rounded-lg">
                                    <span class="material-symbols-outlined">add_a_photo</span>
                                </div>
                                <h2 class="text-xl font-bold text-gray-900 dark:text-white">Quick Gallery Upload</h2>
                            </div>
                            <p class="text-gray-500 dark:text-gray-400 text-sm">Upload raw photos from recent community events directly to the gallery feed without creating a full blog post.</p>
                            <div class="mt-4">
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Caption</label>
                                <textarea class="w-full bg-gray-100 dark:bg-white/5 border-none rounded-xl p-4 text-sm focus:ring-2 focus:ring-primary/20 placeholder:text-gray-400 resize-none dark:text-white outline-none" placeholder="Write a quick caption..." rows="3"></textarea>
                            </div>
                        </div>
                        
                        <div class="w-full md:w-96 flex-shrink-0">
                            <label @dragover.prevent="isDragging = true" 
                                   @dragleave.prevent="isDragging = false"
                                   @drop.prevent="isDragging = false; handleDrop($event)"
                                   :class="isDragging ? 'border-primary bg-primary/5' : 'border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-white/5'"
                                   class="flex flex-col items-center justify-center w-full h-64 border-2 border-dashed rounded-2xl cursor-pointer hover:bg-primary/5 transition-all group relative overflow-hidden">
                                
                                <div class="flex flex-col items-center justify-center pt-5 pb-6 relative z-10 pointer-events-none">
                                    <span :class="isDragging ? 'scale-110 text-primary' : 'text-gray-400'" 
                                          class="material-symbols-outlined text-4xl mb-3 transition-all duration-300">cloud_upload</span>
                                    <p class="mb-2 text-sm text-gray-500 font-medium">Click to upload or drag and drop</p>
                                    <p class="text-xs text-gray-400">SVG, PNG, JPG (MAX. 800x400px)</p>
                                </div>
                                <input class="hidden" type="file" @change="handleFileSelect"/>
                            </label>
                        </div>
                    </div>
                </section>

                <footer class="mt-8 text-center text-xs text-gray-400 pb-4">
                    <p>© 2023 Kanara House Coffee. All rights reserved.</p>
                </footer>

            </div>
        </div>
    </main>

    <script>
        function blogApp() {
            return {
                sidebarOpen: false,
                isDragging: false,
                searchQuery: '',
                activeFilter: 'All Posts',
                categories: ['All Posts', 'Events', 'New Beans', 'Community'],
                
                posts: [
                    {
                        id: 1,
                        title: "Introduction to Pour Over Coffee",
                        excerpt: "Learn the basics of brewing the perfect cup using the V60 method. It's easier than you think...",
                        date: "Oct 24, 2023",
                        category: "New Beans",
                        status: "Published",
                        image: "https://images.unsplash.com/photo-1541167760496-1628856ab772?auto=format&fit=crop&w=600&q=80"
                    },
                    {
                        id: 2,
                        title: "New Ethiopian Roast Arrived",
                        excerpt: "Our latest shipment from Yirgacheffe brings floral notes and citrus brightness to your morning cup.",
                        date: "Oct 22, 2023",
                        category: "New Beans",
                        status: "Draft",
                        image: "https://images.unsplash.com/photo-1611854779393-1b2ae939b6e5?auto=format&fit=crop&w=600&q=80"
                    },
                    {
                        id: 3,
                        title: "Community Night Recap",
                        excerpt: "Thanks to everyone who joined our open mic night! Here are some highlights from the evening.",
                        date: "Oct 20, 2023",
                        category: "Events",
                        status: "Published",
                        image: "https://images.unsplash.com/photo-1511632765486-a01980e01a18?auto=format&fit=crop&w=600&q=80"
                    },
                    {
                        id: 4,
                        title: "The Art of Latte",
                        excerpt: "A deep dive into how milk texture affects taste and presentation.",
                        date: "Oct 15, 2023",
                        category: "Community",
                        status: "Published",
                        image: "https://images.unsplash.com/photo-1550950378-0091807d472a?auto=format&fit=crop&w=600&q=80"
                    }
                ],

                get filteredPosts() {
                    return this.posts.filter(post => {
                        const matchesSearch = post.title.toLowerCase().includes(this.searchQuery.toLowerCase());
                        const matchesCategory = this.activeFilter === 'All Posts' || post.category === this.activeFilter;
                        return matchesSearch && matchesCategory;
                    });
                },

                // Added simple simulation methods for the file upload
                handleDrop(e) {
                    console.log('File dropped:', e.dataTransfer.files[0]);
                    alert('File dropped: ' + e.dataTransfer.files[0].name);
                },

                handleFileSelect(e) {
                    console.log('File selected:', e.target.files[0]);
                    alert('File selected: ' + e.target.files[0].name);
                }
            }
        }
    </script>
</x-dashboard-layout>