<x-layout>
    <x-slot:title>Kanara House - Urban Sanctuary for Coffee Lovers</x-slot:title>

    <section class="relative pt-24 md:pt-20 flex min-h-[95vh] flex-col justify-center items-center px-4 md:px-10 pb-10">
        <div class="w-full max-w-7xl rounded-3xl overflow-hidden relative min-h-[600px] md:h-[80vh] flex items-center justify-center shadow-2xl reveal active">
            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-[20s] hover:scale-110" data-alt="Cinematic shot of a warm, dimly lit coffee shop interior" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDMWWr8IL8gNNs2DxO4p1XEAECd0uuTCdsDer4KbqXR1BSoCUcOzPbaUuD5Y75laz1PCNhllJOykRCnu_wFahRJ-_CO24dy4Brf6WDF5kVnniqwgcRr5Ig2auiHs23Urr39tEgluhJm_oWfqgoC0FKVus3yTEGbmZZYOOeV7oVIxzPxrEu3X6Tq0Ia1N-JNcMLXzy62hicBXkvE2rpmhQdrY-9Qow4M-FGCeA-Yteq6xEpGqIMPU9bs4H-6BgNoDhP9MTFuTiSt_VXT"); animation: zoomEffect 20s infinite alternate;'>
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-black/30"></div>
            
            <div class="relative z-10 flex flex-col items-center text-center max-w-4xl px-6 gap-6 md:gap-8">
                <span class="inline-block px-4 py-1 border border-white/30 rounded-full text-white/80 text-xs md:text-sm uppercase tracking-[0.2em] backdrop-blur-sm mb-2 reveal delay-100 active">Est. 2024 • Seattle</span>
                
                <h1 class="font-serif text-5xl md:text-7xl lg:text-8xl font-medium text-white leading-[1.1] tracking-tight drop-shadow-lg reveal delay-200 active">
                    Escape the Noise.<br/><span class="italic text-[#F5F1E3]">Find Your Ritual.</span>
                </h1>
                
                <p class="text-white/90 text-lg md:text-xl font-light tracking-wide max-w-xl mx-auto reveal delay-300 active">
                    Premium, ethically sourced coffee served in an urban sanctuary designed for your peace of mind.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 mt-6 reveal delay-300 active">
                    <button class="flex items-center justify-center h-14 px-10 bg-[#F5F1E3] text-primary hover:bg-white hover:scale-105 transition-all duration-300 rounded-full text-base font-bold tracking-wide shadow-lg">
                        View Menu
                    </button>
                    <button class="flex items-center justify-center h-14 px-10 border border-white/30 bg-black/20 backdrop-blur-md text-white hover:bg-white/10 hover:border-white transition-all duration-300 rounded-full text-base font-medium tracking-wide">
                        Visit Us
                    </button>
                </div>
            </div>
            
            <a href="#menu" class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 text-white/70 hover:text-white transition-colors animate-bounce cursor-pointer">
                <span class="text-xs uppercase tracking-widest">Scroll</span>
                <span class="material-symbols-outlined">keyboard_arrow_down</span>
            </a>
        </div>
    </section>

    <section class="py-24 px-6 md:px-12 bg-background-light dark:bg-background-dark scroll-mt-20" id="menu">
        <div class="max-w-7xl mx-auto flex flex-col gap-12">
            <div class="flex flex-col md:flex-row justify-between items-end gap-6 border-b border-primary/10 dark:border-white/10 pb-6 reveal">
                <div class="flex flex-col gap-2">
                    <span class="text-primary/60 dark:text-white/60 text-sm font-bold uppercase tracking-widest">Our Selection</span>
                    <h2 class="font-serif text-4xl md:text-5xl font-medium text-primary dark:text-white">Curated for your Mood</h2>
                </div>
                <a class="group flex items-center gap-2 text-primary dark:text-white font-medium hover:opacity-70 transition-opacity" href="#">
                    <span>Full Menu</span>
                    <span class="material-symbols-outlined text-lg transition-transform group-hover:translate-x-1">arrow_forward</span>
                </a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="group relative overflow-hidden rounded-3xl aspect-[4/5] cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-500 reveal delay-100">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110" data-alt="Workspace coffee" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCyTC-tsOSHZgaXFfjSCETp9h4ucw_b2dYTn_b1jmgPvlMkZ601edpldDJo48vVq9qC9wKDuRqIrnKDOK7q_txZFLQ6s9_1yRok5UZif-jr9yrBPutWv2bY_j1YI1IwMuACe-bEh5ZP8lT7I-TmJJQ8303KwH1t76EkoC46bbY21hspdedYaY8VlYPM5iSqMD4st1TeytoAJMWOTWTRpf2UlCRNgSQt267AtaPT8f_zl9M5bbkRjpI4aBY5TDwTqYjm0eGv-ulzxnQW");'></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-primary/20 to-transparent opacity-80 group-hover:opacity-95 transition-opacity"></div>
                    <div class="absolute bottom-0 left-0 p-8 flex flex-col gap-2 w-full transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                        <div class="flex items-center justify-between border-b border-white/20 pb-4 mb-2">
                            <h3 class="font-serif text-3xl text-white italic">Focus</h3>
                            <span class="material-symbols-outlined text-white">bolt</span>
                        </div>
                        <p class="text-white/90 text-sm font-light leading-relaxed opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">
                            Robust, complex blends designed to clarify the mind and sharpen your senses. Perfect for deep work sessions.
                        </p>
                    </div>
                </div>
                
                <div class="group relative overflow-hidden rounded-3xl aspect-[4/5] cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-500 reveal delay-200">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110" data-alt="Latte art" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD_UW57rGDWR5yJI3JR4Ue0KrvNq92BYTdhyic4Y7umSdzfk6VGCxmKiYyR3xCeUXeehkkDcT2eyGzgCxsSkM-cCEDSdXcrmXpjwW5Fd4z4_0HRSOJH95MSOmazoQoe9vLEqtaKUF7XB96JccVKwdQJawW-mmbrOK4HrrtfzsY7lzz1bOBENg2bsxYVICIHpaDhO4Vp1x1tmtxls598ngOySnafEk9uQLjU7FNUBgvVJShjtZM5jiib-pBPKM1Rl040GGQ1t9vV3isa");'></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-primary/20 to-transparent opacity-80 group-hover:opacity-95 transition-opacity"></div>
                    <div class="absolute bottom-0 left-0 p-8 flex flex-col gap-2 w-full transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                        <div class="flex items-center justify-between border-b border-white/20 pb-4 mb-2">
                            <h3 class="font-serif text-3xl text-white italic">Relax</h3>
                            <span class="material-symbols-outlined text-white">self_improvement</span>
                        </div>
                        <p class="text-white/90 text-sm font-light leading-relaxed opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">
                            Smooth, creamy textures and herbal infusions to slow down time. Unwind in our lounge area.
                        </p>
                    </div>
                </div>
                
                <div class="group relative overflow-hidden rounded-3xl aspect-[4/5] cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-500 reveal delay-300">
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110" data-alt="Cold brew" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAjAo2sOUIMufIHUXPaIItT0H-PFVSWcMq8TuB6bIO3FtlsEOxeP1GcePK7JFjbQtpibYTQPejziucOtW4NKHrZVmrjoK4QyX945ZA_vzCcL8Ae2gI1FNl6DvYodmdbHPk3n5t6f5MqeY7VEK5fW5UFFRp6dVjWIA1xkYFyzjDAy1F9KxsP-mJ6KoqffM302YzDvFLoy-wUGVZicW9owqgS89mXhjyUOenpw0eWuL11Kb_7N_uiD8piLn53_uE_LOZNMlWnGUD8lwQp");'></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-primary/20 to-transparent opacity-80 group-hover:opacity-95 transition-opacity"></div>
                    <div class="absolute bottom-0 left-0 p-8 flex flex-col gap-2 w-full transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                        <div class="flex items-center justify-between border-b border-white/20 pb-4 mb-2">
                            <h3 class="font-serif text-3xl text-white italic">Energize</h3>
                            <span class="material-symbols-outlined text-white">wb_sunny</span>
                        </div>
                        <p class="text-white/90 text-sm font-light leading-relaxed opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">
                            Bright, citrusy notes and cold brews to spark creativity and movement. Get that afternoon boost.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 px-6 md:px-12 bg-white dark:bg-surface-dark scroll-mt-20" id="story">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="flex flex-col gap-8 order-2 lg:order-1 reveal">
                <div class="space-y-6">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/5 dark:bg-white/5 text-primary dark:text-white text-xs font-bold uppercase tracking-wider w-fit">
                        <span class="w-2 h-2 rounded-full bg-primary dark:bg-white animate-pulse"></span>
                        Our Philosophy
                    </div>
                    <h2 class="font-serif text-4xl md:text-5xl lg:text-6xl text-primary dark:text-white leading-tight">
                        More Than Just<br/>Coffee.
                    </h2>
                    <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed font-light">
                        We believe in sustainable sourcing and creating a physical space that acts as a sanctuary from the urban hustle. Every cup tells a story of direct trade partnerships, precision roasting, and mindful preparation.
                    </p>
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 pt-4">
                    <div class="flex flex-col gap-3 group">
                        <div class="w-12 h-12 rounded-full bg-[#F5F1E3] dark:bg-white/10 flex items-center justify-center text-primary dark:text-white mb-2 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined">eco</span>
                        </div>
                        <h4 class="font-serif text-xl font-medium text-primary dark:text-white">Ethically Sourced</h4>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Direct trade beans from sustainable farms ensuring fair wages.</p>
                    </div>
                    <div class="flex flex-col gap-3 group">
                        <div class="w-12 h-12 rounded-full bg-[#F5F1E3] dark:bg-white/10 flex items-center justify-center text-primary dark:text-white mb-2 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined">volume_off</span>
                        </div>
                        <h4 class="font-serif text-xl font-medium text-primary dark:text-white">Quiet Atmosphere</h4>
                        <p class="text-sm text-gray-500 dark:text-gray-400">A noise-reduced environment specifically designed for focus and calm.</p>
                    </div>
                </div>
                
                <button class="mt-4 flex items-center gap-2 text-primary dark:text-white font-bold hover:gap-4 transition-all w-fit group">
                    Read Our Full Story <span class="material-symbols-outlined transition-transform group-hover:translate-x-1">arrow_right_alt</span>
                </button>
            </div>
            
            <div class="relative order-1 lg:order-2 h-full min-h-[500px] reveal delay-200">
                <div class="absolute top-0 right-0 w-4/5 h-4/5 rounded-3xl bg-cover bg-center shadow-2xl z-10 transition-transform duration-500 hover:scale-[1.02] hover:z-20" data-alt="Barista pouring V60" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuASPpWG0Q5NBfdw86LGmGkYBayuAsCWj5gKINiWUgIuGl7d_CtLIe0Prwo_oA_c2B-5Epv3kbC9TIRjoSGqEimxDrWiuDV4k6h0Gfemm3q7Pc950JdMyVUT0wefujPCwEzAs_ZNTOqkyawbIk1x-NSIJLUXco4uBh7P0CVeSN1dzf0U4vRG_Jcx3rXAaBfVOS2uj_NBiSwJwcv9ZgrwRjexRQwjWMm1993Kf9BuBWgZSIjPaI_vr56t4nTnJ1ugLIyjK4Z0M7JqTJUp");'></div>
                <div class="absolute bottom-0 left-0 w-3/5 h-3/5 rounded-3xl bg-cover bg-center shadow-xl z-20 border-8 border-white dark:border-surface-dark transition-transform duration-500 hover:scale-[1.02]" data-alt="Coffee beans roasting" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD_oNagFsGxTRoe4QrWwiYF2UfkWf6iCNVwKqUguMxeoFt2DJieFdZ2r5h0PO9FPYvUvRe9qd2zKRt3bLFTjdVk4GiNtQn3MLWyEqUNCOgBIIYMYSKXcPwsP0XwAtV9aqoxF8GkJAgcotfvr0wWzSbLHYeeJUpkKzjzi6ZLtyjh6gUMoYAT9tLr0WkK3rsAs1uTLwv9hCWWzer6ZzcejlowXTUu429H_jhHNJppaNThoEom56QOR0aUpI8IPrCnUjLS0uLjSoFTWyPc");'></div>
                <div class="absolute -z-0 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full h-full bg-[#F5F1E3] dark:bg-primary/20 rounded-full blur-3xl opacity-50"></div>
            </div>
        </div>
    </section>

    <section class="py-24 px-6 bg-primary text-white relative overflow-hidden reveal">
        <div class="absolute inset-0 opacity-10 pointer-events-none" style="background-image: radial-gradient(#F5F1E3 1px, transparent 1px); background-size: 30px 30px;"></div>
        <div class="max-w-4xl mx-auto text-center relative z-10 flex flex-col items-center gap-8">
            <span class="material-symbols-outlined text-6xl text-[#F5F1E3] opacity-50">format_quote</span>
            <p class="font-serif text-3xl md:text-5xl italic leading-tight">
                "Kanara House isn't just a coffee shop; it's a reset button for my day. The atmosphere is unmatched in the city."
            </p>
            <div class="flex flex-col items-center gap-2">
                <div class="w-16 h-16 rounded-full bg-cover bg-center border-2 border-[#F5F1E3] shadow-md" data-alt="Customer portrait" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBQQc_5a5ZcF9uZuA0Hr-DMobIiMZH0hW_6kILV9UMQ_0qidsXuPPeC3MR7PwenVm9Fa3YcwrDslKW_8n4bqsGzD-XypjVvnQv9NcRoyfx12oBYSCIjPq8g_8qchWfodA4ndYRuYB8jwWATQ4t4RpnRP2CJzSCf0QzQEmDzEsoYLTirdmb1FCHIGD434MzgDlbykLKynrQa-Ds65_0wCAPO-VuGZ5NCvLUi-ocV-aIB2T-cl87vaIkXLaCZivv-A8YBXNLX_b4NJuYj");'></div>
                <div class="text-center">
                    <p class="font-bold text-lg">Elena Rostova</p>
                    <p class="text-white/60 text-sm">Design Director</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 px-6 md:px-12 bg-background-light dark:bg-background-dark scroll-mt-20" id="events">
        <div class="max-w-7xl mx-auto flex flex-col gap-10">
            <div class="flex flex-col gap-4 text-center max-w-2xl mx-auto reveal">
                <h2 class="font-serif text-4xl md:text-5xl text-primary dark:text-white">Community & Culture</h2>
                <p class="text-gray-600 dark:text-gray-300">Stay updated with our latest workshops, brewing guides, and community events.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <article class="flex flex-col gap-4 group cursor-pointer reveal delay-100">
                    <div class="w-full aspect-[16/10] overflow-hidden rounded-3xl shadow-md">
                        <div class="w-full h-full bg-cover bg-center transition-transform duration-700 group-hover:scale-110" data-alt="Workshop event" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB6b9hfo5rNFhmgUVDq3H6m54ij3fLCxIpfEcJwWMcoexX6gACF5cvUOEfScygS5l37T9jwRTqY1Duigsis3Bjs89tCQ1fXPC6kGAB88zcqfG_nlBMI7LHdQexUslo7uUSzFO3FpAESetJiLA9_r-016BVfhiD3OqVXQWAt8Z_ao2lwDnGuDvUczaPu9v3ftALgKCbfzzFjnvfS-8g7o6FjuJDJijzRNViDsfKYoEwldnFsJkNGAHbX2mpXTNnXOyIMmlU_P5QrPiRi");'></div>
                    </div>
                    <div class="flex flex-col gap-2 p-2">
                        <span class="text-xs font-bold text-primary/60 dark:text-white/60 uppercase tracking-wider">Event</span>
                        <h3 class="font-serif text-2xl text-primary dark:text-white group-hover:text-primary-dark transition-colors">Sunday Cupping Sessions</h3>
                        <p class="text-sm text-gray-500 line-clamp-2">Join us every Sunday morning to taste and grade our newest bean arrivals from Ethiopia and Colombia.</p>
                        <span class="text-sm font-medium mt-2 flex items-center gap-1 text-primary dark:text-white group-hover:gap-2 transition-all">Register <span class="material-symbols-outlined text-base">arrow_right_alt</span></span>
                    </div>
                </article>
                
                <article class="flex flex-col gap-4 group cursor-pointer reveal delay-200">
                    <div class="w-full aspect-[16/10] overflow-hidden rounded-3xl shadow-md">
                        <div class="w-full h-full bg-cover bg-center transition-transform duration-700 group-hover:scale-110" data-alt="Brewing guide" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuArRVoGuC_Qt-EK8sz-J3xwWtFOJzjuLPxWxnvGgxfj8K69LAK-GVNBXLQCU0K3j5WufMVJhesdeOgIF38qlh9YhFwxvZlTDIxqZ9xCbfc451VDraDGsMrnnPxKePcwBQB1VN6Q7fMJWfCL3otmZ4oandGZ97GYnsVoQ3pOJfCFlUHii6bbZziPK_hw_2VfmlwhEmf4nZWtZUZOlzg9Rv7F0ToHsF8AkV0OWlrSC9V6lOUnSs6u4ynA54Txz3ZZ0aFEhgv0pyWrQkz-");'></div>
                    </div>
                    <div class="flex flex-col gap-2 p-2">
                        <span class="text-xs font-bold text-primary/60 dark:text-white/60 uppercase tracking-wider">Guide</span>
                        <h3 class="font-serif text-2xl text-primary dark:text-white group-hover:text-primary-dark transition-colors">Brew Better at Home</h3>
                        <p class="text-sm text-gray-500 line-clamp-2">Five simple tips to elevate your morning ritual using equipment you likely already own.</p>
                        <span class="text-sm font-medium mt-2 flex items-center gap-1 text-primary dark:text-white group-hover:gap-2 transition-all">Read Guide <span class="material-symbols-outlined text-base">arrow_right_alt</span></span>
                    </div>
                </article>
                
                <article class="flex flex-col gap-4 group cursor-pointer reveal delay-300">
                    <div class="w-full aspect-[16/10] overflow-hidden rounded-3xl shadow-md">
                        <div class="w-full h-full bg-cover bg-center transition-transform duration-700 group-hover:scale-110" data-alt="Deep work zone" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAnlwOCTI4Bbich71DtJl_Ur8t-qb7r_dJBpJ1HSJet2WVr9l_MjC-jyacq36BQ-im1F32z-G5qbnKCrlKgz_FLYmSkxLYQ7qQsgq-gLrI3XUbhq5ckwbSaaCYArp53Xp6P13kN45PKv1HX88kmSgshEr7UIotOu7qJF8Zhr_3c-m4_U0TgbybEhEIpI2DD8HiywgOz-4NCbUySxzaynTE3kj31LIRLiycydl8zQwJyLJAFEDjvweIIp8EoCO521gIVFDUwbBsZWIvA");'></div>
                    </div>
                    <div class="flex flex-col gap-2 p-2">
                        <span class="text-xs font-bold text-primary/60 dark:text-white/60 uppercase tracking-wider">Space</span>
                        <h3 class="font-serif text-2xl text-primary dark:text-white group-hover:text-primary-dark transition-colors">The "Deep Work" Zone</h3>
                        <p class="text-sm text-gray-500 line-clamp-2">Introducing our new designated silent area for freelancers and creatives who need zero distractions.</p>
                        <span class="text-sm font-medium mt-2 flex items-center gap-1 text-primary dark:text-white group-hover:gap-2 transition-all">Learn More <span class="material-symbols-outlined text-base">arrow_right_alt</span></span>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="px-6 py-20 bg-background-light dark:bg-background-dark reveal">
        <div class="max-w-5xl mx-auto bg-primary dark:bg-surface-dark rounded-3xl p-8 md:p-16 text-center shadow-xl relative overflow-hidden group">
            <div class="absolute -top-24 -left-24 w-64 h-64 rounded-full bg-white/10 blur-3xl transition-transform duration-1000 group-hover:translate-x-10 group-hover:translate-y-10"></div>
            <div class="absolute -bottom-24 -right-24 w-64 h-64 rounded-full bg-white/10 blur-3xl transition-transform duration-1000 group-hover:-translate-x-10 group-hover:-translate-y-10"></div>
            
            <div class="relative z-10 flex flex-col items-center gap-6">
                <h2 class="font-serif text-3xl md:text-4xl text-white">Join the Inner Circle</h2>
                <p class="text-white/70 max-w-md">Get exclusive access to limited bean releases, event invites, and brewing tips delivered to your inbox.</p>
                <form class="flex flex-col sm:flex-row gap-3 w-full max-w-md mt-4">
                    <input class="flex-1 px-6 h-12 rounded-full bg-white/10 border border-white/20 text-white placeholder:text-white/50 focus:outline-none focus:ring-2 focus:ring-[#F5F1E3] focus:border-transparent transition-all backdrop-blur-sm" placeholder="Email address" type="email" />
                    <button class="px-8 h-12 bg-[#F5F1E3] text-primary font-bold rounded-full hover:bg-white hover:shadow-lg transition-all" type="button">Subscribe</button>
                </form>
                <p class="text-xs text-white/40 mt-2">We respect your privacy. Unsubscribe at any time.</p>
            </div>
        </div>
    </section>
</x-layout>