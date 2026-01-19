
<x-layout>
    <x-slot:title>Kanara House - Urban Sanctuary for Coffee Lovers</x-slot:title>

     <section class="relative py-20 px-6 md:px-12 bg-background-light dark:bg-background-dark">
                <div class="max-w-4xl mx-auto text-center flex flex-col items-center gap-6">
                    <span class="text-accent text-sm font-bold tracking-[0.2em] uppercase">The Journal</span>
                    <h1 class="font-serif text-5xl md:text-6xl lg:text-7xl font-medium text-primary dark:text-white leading-tight">
                        Stories from the <br /><span class="italic text-accent">Sanctuary</span>
                    </h1>
                    <p class="text-lg md:text-xl text-primary/70 dark:text-white/70 max-w-2xl font-light">
                        Exploring coffee culture, sustainable living, and the art of slowing down in a fast-paced world.
                    </p>
                </div>
            </section>

            <section class="px-6 md:px-12 pb-16">
                <div class="max-w-7xl mx-auto">
                    <div class="relative rounded-3xl overflow-hidden bg-white dark:bg-surface-dark shadow-xl group cursor-pointer">
                        <div class="grid grid-cols-1 lg:grid-cols-2 min-h-[500px]">
                            <div class="relative h-full min-h-[400px] overflow-hidden">
                                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-105" data-alt="Barista pouring water into a V60 coffee dripper with precision" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuASPpWG0Q5NBfdw86LGmGkYBayuAsCWj5gKINiWUgIuGl7d_CtLIe0Prwo_oA_c2B-5Epv3kbC9TIRjoSGqEimxDrWiuDV4k6h0Gfemm3q7Pc950JdMyVUT0wefujPCwEzAs_ZNTOqkyawbIk1x-NSIJLUXco4uBh7P0CVeSN1dzf0U4vRG_Jcx3rXAaBfVOS2uj_NBiSwJwcv9ZgrwRjexRQwjWMm1993Kf9BuBWgZSIjPaI_vr56t4nTnJ1ugLIyjK4Z0M7JqTJUp");'></div>
                                <div class="absolute inset-0 bg-primary/10"></div>
                            </div>
                            <div class="flex flex-col justify-center p-8 md:p-16 gap-6">
                                <div class="flex items-center gap-3 text-sm font-medium">
                                    <span class="px-3 py-1 rounded-full bg-accent/10 text-accent uppercase tracking-wider text-xs font-bold">Brewing Guide</span>
                                    <span class="w-1 h-1 rounded-full bg-primary/40 dark:bg-white/40"></span>
                                    <span class="text-primary/60 dark:text-white/60">Oct 24, 2023</span>
                                    <span class="w-1 h-1 rounded-full bg-primary/40 dark:bg-white/40"></span>
                                    <span class="text-primary/60 dark:text-white/60">5 min read</span>
                                </div>
                                <h2 class="font-serif text-3xl md:text-4xl lg:text-5xl text-primary dark:text-white leading-tight group-hover:text-accent transition-colors duration-300">
                                    The Ritual of Pour-Over: Finding Patience in a Cup
                                </h2>
                                <p class="text-primary/70 dark:text-white/70 text-lg leading-relaxed">
                                    In an age of instant gratification, the slow, deliberate process of a V60 pour-over offers a moment of meditation. Learn how to master the bloom, the pour, and the pause.
                                </p>
                                <div class="pt-4">
                                    <span class="inline-flex items-center gap-2 text-primary dark:text-white font-bold border-b-2 border-accent pb-1 hover:gap-4 transition-all">
                                        Read Full Story <span class="material-symbols-outlined text-lg text-accent">arrow_forward</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="px-6 md:px-12 sticky top-20 z-40 bg-background-light/95 dark:bg-background-dark/95 backdrop-blur-sm border-b border-primary/5 py-4">
                <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-6">
                    <div class="flex items-center gap-2 overflow-x-auto w-full md:w-auto pb-2 md:pb-0 scrollbar-hide">
                        <button class="whitespace-nowrap px-5 py-2 rounded-full bg-primary text-[#F5F1E3] text-sm font-medium transition-colors shadow-sm">
                            All Stories
                        </button>
                        <button class="whitespace-nowrap px-5 py-2 rounded-full border border-primary/20 hover:border-accent hover:text-accent text-primary dark:text-white/80 text-sm font-medium transition-colors">
                            Brewing Guides
                        </button>
                        <button class="whitespace-nowrap px-5 py-2 rounded-full border border-primary/20 hover:border-accent hover:text-accent text-primary dark:text-white/80 text-sm font-medium transition-colors">
                            Culture & Community
                        </button>
                        <button class="whitespace-nowrap px-5 py-2 rounded-full border border-primary/20 hover:border-accent hover:text-accent text-primary dark:text-white/80 text-sm font-medium transition-colors">
                            Wellness
                        </button>
                        <button class="whitespace-nowrap px-5 py-2 rounded-full border border-primary/20 hover:border-accent hover:text-accent text-primary dark:text-white/80 text-sm font-medium transition-colors">
                            Events
                        </button>
                    </div>
                    <div class="relative w-full md:w-64">
                        <input class="w-full bg-white dark:bg-white/5 border border-primary/10 dark:border-white/10 rounded-full pl-10 pr-4 py-2 text-sm focus:ring-2 focus:ring-accent focus:border-transparent outline-none transition-all placeholder:text-primary/40" placeholder="Search articles..." type="text" />
                        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-primary/40 text-lg">search</span>
                    </div>
                </div>
            </section>

            <section class="px-6 md:px-12 py-16 bg-background-light dark:bg-background-dark">
                <div class="max-w-7xl mx-auto">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-12">
                        @foreach ($articels as $articel)
                            <a href="{{ route('blog.show', $articel->slug) }}"> 
                                <article class="flex flex-col gap-4 group cursor-pointer">
                                    <div class="w-full aspect-[4/3] overflow-hidden rounded-3xl relative">
                                        <div class="w-full h-full bg-cover bg-center transition-transform duration-700 group-hover:scale-105" data-alt="Cinematic shot of a warm, dimly lit coffee shop interior" style='background-image: url("{{ $articel->image }}");'></div>
                                    </div>
                                    <div class="flex flex-col gap-2 mt-2">
                                        <div class="flex items-center gap-2 text-xs text-primary/50 dark:text-white/50 font-medium">
                                            <span>{{ $articel->created_at->format('M d, Y') }}</span>
                                        </div>
                                        <h3 class="font-serif text-2xl text-primary dark:text-white group-hover:text-accent transition-colors leading-tight">
                                            {{ $articel->title }}
                                        </h3>
                                        <p class="text-primary/70 dark:text-white/70 text-sm line-clamp-2 leading-relaxed">
                                            {{ Str::limit($articel->content, 10, '...') }}
                                        </p>
                                    </div>
                                </article>
                            </a>  
                        @endforeach

                        

                       
                    </div>
                    
                    <div class="flex justify-center mt-20">
                        <button class="flex items-center justify-center h-12 px-10 border border-primary/20 hover:border-accent hover:text-accent dark:border-white/20 dark:hover:border-white bg-transparent transition-all rounded-full text-sm font-bold tracking-wide uppercase">
                            Load More Stories
                        </button>
                    </div>
                </div>
            </section>

            <section class="px-6 py-20 bg-primary dark:bg-surface-dark relative overflow-hidden">
                <div class="absolute inset-0 opacity-10 pointer-events-none" style="background-image: radial-gradient(#F5F1E3 1px, transparent 1px); background-size: 30px 30px;"></div>
                <div class="max-w-4xl mx-auto text-center relative z-10 flex flex-col items-center gap-8 text-[#F5F1E3]">
                    <h2 class="font-serif text-3xl md:text-5xl font-medium leading-tight">
                        Stay Grounded.
                    </h2>
                    <p class="text-white/80 max-w-md text-lg font-light">
                        Join our digital sanctuary. Receive weekly brewing tips, event invites, and stories from the coffee world.
                    </p>
                    <form class="flex flex-col sm:flex-row gap-3 w-full max-w-md mt-4">
                        <input class="flex-1 px-6 h-14 rounded-full bg-white/5 border border-white/20 text-white placeholder:text-white/40 focus:outline-none focus:ring-2 focus:ring-accent focus:border-transparent transition-all" placeholder="Enter your email" type="email" />
                        <button class="px-8 h-14 bg-accent hover:bg-accent/90 text-white font-bold rounded-full transition-colors shadow-lg" type="button">Subscribe</button>
                    </form>
                    <p class="text-xs text-white/40">We respect your inbox. Unsubscribe at any time.</p>
                </div>
            </section>
</x-layout>