<x-layout>
    <x-slot:title>Beyond the Bean - Kanara House Journal</x-slot:title>

    <div class="fixed top-0 left-0 w-full h-1.5 z-50 bg-transparent">
        <div id="reading-progress" class="h-full bg-accent w-0 transition-all duration-100 ease-out shadow-[0_0_15px_rgba(195,106,45,0.6)]"></div>
    </div>

    <main class="relative w-full pt-32 pb-24 overflow-hidden">
        
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-[800px] bg-gradient-to-b from-primary/5 via-transparent to-transparent -z-10 pointer-events-none"></div>

        <header class="w-full max-w-[1400px] mx-auto px-6 md:px-12 mb-16 md:mb-24 flex flex-col items-center text-center">
            
            <div class="inline-flex items-center gap-3 mb-8 animate-fade-in-up">
                <a href="#" class="px-5 py-2 rounded-full border border-accent/20 bg-accent/5 text-accent text-xs font-bold uppercase tracking-widest hover:bg-accent hover:text-white transition-all duration-300">
                    Ethical Sourcing
                </a>
                <span class="text-primary/20 text-xs">•</span>
                <span class="text-primary/60 dark:text-white/60 text-xs font-bold uppercase tracking-widest">5 Min Read</span>
            </div>

            <h1 class="font-serif text-5xl md:text-7xl lg:text-8xl text-primary dark:text-white leading-[1.05] mb-10 drop-shadow-sm tracking-tight max-w-5xl">
                <span class="italic font-light text-accent/90">{{ $blog->title }}</span>
            </h1>

            <div class="flex items-center gap-4">
                <div class="flex items-center gap-3 pr-6 border-r border-primary/10 dark:border-white/10">
                    <div class="w-12 h-12 rounded-full overflow-hidden border-2 border-white dark:border-white/10 shadow-md">
                        <img alt="Elena Rodriguez" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBQQc_5a5ZcF9uZuA0Hr-DMobIiMZH0hW_6kILV9UMQ_0qidsXuPPeC3MR7PwenVm9Fa3YcwrDslKW_8n4bqsGzD-XypjVvnQv9NcRoyfx12oBYSCIjPq8g_8qchWfodA4ndYRuYB8jwWATQ4t4RpnRP2CJzSCf0QzQEmDzEsoYLTirdmb1FCHIGD434MzgDlbykLKynrQa-Ds65_0wCAPO-VuGZ5NCvLUi-ocV-aIB2T-cl87vaIkXLaCZivv-A8YBXNLX_b4NJuYj"/>
                    </div>
                    <div class="text-left">
                        <p class="text-sm font-bold text-primary dark:text-white leading-tight">Elena Rodriguez</p>
                        <p class="text-[10px] uppercase tracking-wider text-primary/60 dark:text-gray-400 font-bold">Head of Coffee</p>
                    </div>
                </div>
                <div class="text-left pl-2">
                    <p class="text-xs font-bold uppercase tracking-wider text-primary/40 dark:text-white/40 mb-1">Published</p>
                    <p class="text-sm font-medium text-primary dark:text-white">Oct 24, 2023</p>
                </div>
            </div>
        </header>

        <div class="max-w-6xl mx-auto px-4 md:px-8 mb-20 md:mb-28">
    <div class="relative group overflow-hidden rounded-[2.5rem] shadow-[0_30px_80px_-20px_rgba(0,0,0,0.35)]">

        <!-- Gradient Overlay -->
        <div class="absolute inset-0 z-10 bg-gradient-to-t 
            from-black/70 via-black/30 to-transparent 
            transition-opacity duration-700 group-hover:from-black/60">
        </div>

        <!-- Image -->
        <img
            id="article-hero"
            alt="Ethiopian Coffee Farm"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuD_oNagFsGxTRoe4QrWwiYF2UfkWf6iCNVwKqUguMxeoFt2DJieFdZ2r5h0PO9FPYvUvRe9qd2zKRt3bLFTjdVk4GiNtQn3MLWyEqUNCOgBIIYMYSKXcPwsP0XwAtV9aqoxF8GkJAgcotfvr0wWzSbLHYeeJUpkKzjzi6ZLtyjh6gUMoYAT9tLr0WkK3rsAs1uTLwv9hCWWzer6ZzcejlowXTUu429H_jhHNJppaNThoEom56QOR0aUpI8IPrCnUjLS0uLjSoFTWyPc"
            class="w-full h-[360px] md:h-[500px] object-cover object-center 
                   scale-105 group-hover:scale-110 
                   transition-transform duration-[2500ms] ease-out"
        />

        <!-- Location Badge -->
        <div class="absolute bottom-6 left-6 z-20">
            <div class="flex items-center gap-3 rounded-2xl 
                        bg-white/90 dark:bg-black/70 
                        backdrop-blur-xl px-4 py-2 
                        border border-white/20 shadow-xl">

                <div class="w-9 h-9 rounded-full bg-accent/15 
                            flex items-center justify-center text-accent">
                    <span class="material-symbols-outlined text-[18px]">
                        location_on
                    </span>
                </div>

                <div class="leading-tight">
                    <p class="text-[10px] uppercase tracking-widest font-semibold 
                              text-primary/60 dark:text-white/60">
                        Location
                    </p>
                    <p class="text-sm font-semibold text-primary dark:text-white">
                        Guji Zone, Oromia
                    </p>
                </div>

            </div>
        </div>

        <!-- Subtle Bottom Fade -->
        <div class="absolute inset-x-0 bottom-0 h-24 
                    bg-gradient-to-t from-black/40 to-transparent z-10">
        </div>

    </div>
</div>


        <article class="w-full max-w-[1400px] mx-auto px-6 md:px-12 grid grid-cols-1 lg:grid-cols-12 gap-12 relative">
            
            

            <div class="lg:col-span-8 lg:col-start-4 font-display text-lg md:text-xl leading-relaxed text-primary/80 dark:text-gray-300" id="intro">
                
                <p class="mb-12">
                    {{ $blog->content }}
                </p>
                

                <div class="mt-24 pt-10 border-t border-primary/10 dark:border-white/10">
                    <div class="flex flex-wrap gap-3">
                        <span class="text-sm font-bold text-primary/40 dark:text-white/40 self-center mr-2">Tags:</span>
                        <a href="#" class="px-5 py-2 rounded-full border border-primary/10 dark:border-white/10 text-primary dark:text-white text-xs font-bold hover:bg-primary hover:text-white hover:border-primary transition-all duration-300">#CoffeeSourcing</a>
                        <a href="#" class="px-5 py-2 rounded-full border border-primary/10 dark:border-white/10 text-primary dark:text-white text-xs font-bold hover:bg-primary hover:text-white hover:border-primary transition-all duration-300">#Sustainability</a>
                        <a href="#" class="px-5 py-2 rounded-full border border-primary/10 dark:border-white/10 text-primary dark:text-white text-xs font-bold hover:bg-primary hover:text-white hover:border-primary transition-all duration-300">#Ethiopia</a>
                    </div>
                </div>
            </div>
        </article>

        <div class="w-full max-w-[1400px] mx-auto my-24 px-6 md:px-12">
            <div class="h-px w-full bg-gradient-to-r from-transparent via-primary/20 dark:via-white/20 to-transparent"></div>
        </div>

        <section class="w-full max-w-[1400px] mx-auto px-6 md:px-12">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
                <div>
                    <span class="text-accent font-bold uppercase tracking-[0.2em] text-xs mb-3 block">Keep Reading</span>
                    <h2 class="font-serif text-4xl md:text-5xl font-bold text-primary dark:text-white">Related Stories</h2>
                </div>
                <a class="group inline-flex items-center gap-3 text-sm font-bold text-primary dark:text-white hover:text-accent transition-colors" href="#">
                    <span>View Journal</span>
                    <div class="w-8 h-8 rounded-full border border-primary/20 flex items-center justify-center group-hover:bg-accent group-hover:border-accent group-hover:text-white transition-all">
                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </div>
                </a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
               
                @foreach($relatedArticels as $related)
                    <a href="{{ route('blog.show', $related->slug) }}">
                        <article class="group cursor-pointer">
                            <div class="aspect-[4/3] rounded-[2rem] overflow-hidden mb-6 relative shadow-lg">
                                <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="https://lh3.googleusercontent.com/aida-public/AB6AXuASPpWG0Q5NBfdw86LGmGkYBayuAsCWj5gKINiWUgIuGl7d_CtLIe0Prwo_oA_c2B-5Epv3kbC9TIRjoSGqEimxDrWiuDV4k6h0Gfemm3q7Pc950JdMyVUT0wefujPCwEzAs_ZNTOqkyawbIk1x-NSIJLUXco4uBh7P0CVeSN1dzf0U4vRG_Jcx3rXAaBfVOS2uj_NBiSwJwcv9ZgrwRjexRQwjWMm1993Kf9BuBWgZSIjPaI_vr56t4nTnJ1ugLIyjK4Z0M7JqTJUp" alt="Roastery"/>
                                <span class="absolute top-4 left-4 bg-white/90 backdrop-blur-md px-4 py-1.5 rounded-full text-[10px] font-bold text-accent uppercase tracking-wider shadow-sm">Roastery</span>
                            </div>
                            <h3 class="font-serif text-2xl text-primary dark:text-white mb-3 group-hover:text-accent transition-colors leading-tight">{{ $related->title }}</h3>
                            <p class="text-primary/60 dark:text-gray-400 line-clamp-2 text-sm">{{ $related->excerpt }}  </p>
                        </article>
                    </a>
                @endforeach
            </div>
        </section>

    </main>

    <script>
        document.addEventListener('scroll', () => {
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height) * 100;
            const progressBar = document.getElementById("reading-progress");
            if(progressBar) progressBar.style.width = scrolled + "%";

            const heroImage = document.getElementById('article-hero');
            if(heroImage) {
                heroImage.style.transform = `scale(1.05) translateY(${winScroll * 0.05}px)`;
            }
        });
    </script>
</x-layout>