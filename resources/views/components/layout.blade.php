<!DOCTYPE html>
<html class="light" lang="en" style="scroll-behavior: smooth;">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{ $title ?? 'Kanara House - Urban Sanctuary' }}</title>
    
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')

    <style>
          /* Custom scrollbar */
    ::-webkit-scrollbar {
        width: 8px;
    }
    ::-webkit-scrollbar-track {
        background: #F5F1E3;
    }
    ::-webkit-scrollbar-thumb {
        background: #2e4837;
        border-radius: 4px;
    }
    ::-webkit-scrollbar-thumb:hover {
        background: #1f3025;
    }

    .font-serif { font-family: 'Playfair Display', serif; }
    .font-sans { font-family: 'Work Sans', sans-serif; }

    /* Scroll Reveal Animation Classes */
    .reveal {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.8s cubic-bezier(0.5, 0, 0, 1);
    }
    .reveal.active {
        opacity: 1;
        transform: translateY(0);
    }
    
    /* Staggered delays for grids */
    .delay-100 { transition-delay: 0.1s; }
    .delay-200 { transition-delay: 0.2s; }
    .delay-300 { transition-delay: 0.3s; }

    </style>
    
</head>

<body class="bg-background-light dark:bg-background-dark text-primary dark:text-background-light font-body antialiased selection:bg-primary selection:text-white overflow-x-hidden">

    <x-navabar />
    
    <main class="mt-20">
        {{ $slot }}
    </main>
    <footer class="bg-primary text-[#F5F1E3] pt-20 pb-10 border-t border-white/5">
        <div class="max-w-7xl mx-auto px-6 md:px-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                <div class="flex flex-col gap-6">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-2xl">local_cafe</span>
                        <h3 class="font-serif text-2xl font-bold">Kanara House</h3>
                    </div>
                    <p class="text-white/60 text-sm leading-relaxed max-w-xs">
                        An urban sanctuary for coffee lovers, creators, and dreamers. Sustainable sips in a serene space.
                    </p>
                    <div class="flex gap-4">
                        <a aria-label="Instagram" class="w-10 h-10 rounded-full border border-white/20 flex items-center justify-center hover:bg-white/10 hover:border-white transition-all hover:-translate-y-1" href="#">
                            <span class="material-symbols-outlined text-lg">photo_camera</span>
                        </a>
                        <a aria-label="Twitter" class="w-10 h-10 rounded-full border border-white/20 flex items-center justify-center hover:bg-white/10 hover:border-white transition-all hover:-translate-y-1" href="#">
                            <span class="material-symbols-outlined text-lg">flutter_dash</span>
                        </a>
                        <a aria-label="Facebook" class="w-10 h-10 rounded-full border border-white/20 flex items-center justify-center hover:bg-white/10 hover:border-white transition-all hover:-translate-y-1" href="#">
                            <span class="material-symbols-outlined text-lg">public</span>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col gap-4">
                    <h4 class="font-bold text-lg mb-2 text-white">Explore</h4>
                    <a class="text-white/70 hover:text-white hover:translate-x-1 transition-all text-sm" href="#menu">Our Menu</a>
                    <a class="text-white/70 hover:text-white hover:translate-x-1 transition-all text-sm" href="#shop">Shop Beans</a>
                    <a class="text-white/70 hover:text-white hover:translate-x-1 transition-all text-sm" href="#">Wholesale</a>
                    <a class="text-white/70 hover:text-white hover:translate-x-1 transition-all text-sm" href="#">Catering</a>
                    <a class="text-white/70 hover:text-white hover:translate-x-1 transition-all text-sm" href="#">Gift Cards</a>
                </div>
                <div class="flex flex-col gap-4">
                    <h4 class="font-bold text-lg mb-2 text-white">Hours</h4>
                    <div class="flex justify-between max-w-[200px] text-sm text-white/70 border-b border-white/10 pb-2">
                        <span>Mon - Fri</span>
                        <span>7:00am - 7:00pm</span>
                    </div>
                    <div class="flex justify-between max-w-[200px] text-sm text-white/70 border-b border-white/10 pb-2">
                        <span>Saturday</span>
                        <span>8:00am - 8:00pm</span>
                    </div>
                    <div class="flex justify-between max-w-[200px] text-sm text-white/70">
                        <span>Sunday</span>
                        <span>8:00am - 6:00pm</span>
                    </div>
                </div>
                <div class="flex flex-col gap-4">
                    <h4 class="font-bold text-lg mb-2 text-white">Find Us</h4>
                    <p class="text-sm text-white/70 flex items-start gap-2">
                        <span class="material-symbols-outlined text-base mt-0.5">location_on</span>
                        1248 Evergreen Avenue<br/>Seattle, WA 98101
                    </p>
                    <p class="text-sm text-white/70 flex items-center gap-2">
                        <span class="material-symbols-outlined text-base">call</span>
                        (206) 555-0198
                    </p>
                    <p class="text-sm text-white/70 flex items-center gap-2">
                        <span class="material-symbols-outlined text-base">mail</span>
                        hello@kanarahouse.com
                    </p>
                </div>
            </div>
            <div class="flex flex-col md:flex-row justify-between items-center pt-8 border-t border-white/10 text-xs text-white/40 gap-4">
                <p>© 2024 Kanara House. All rights reserved.</p>
                <div class="flex gap-6">
                    <a class="hover:text-white transition-colors" href="#">Privacy Policy</a>
                    <a class="hover:text-white transition-colors" href="#">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            /* 1. MOBILE MENU LOGIC */
            const menuBtn = document.getElementById('mobile-menu-btn');
            const closeBtn = document.getElementById('close-menu-btn');
            const sidebar = document.getElementById('mobile-sidebar');
            const backdrop = document.getElementById('mobile-backdrop');
            const links = document.querySelectorAll('.mobile-link');

            function toggleMenu(isOpen) {
                if (isOpen) {
                    backdrop.classList.remove('hidden');
                    // Lock body scroll
                    document.body.style.overflow = 'hidden';
                    setTimeout(() => backdrop.classList.remove('opacity-0'), 10);
                    sidebar.classList.remove('translate-x-full');
                } else {
                    backdrop.classList.add('opacity-0');
                    sidebar.classList.add('translate-x-full');
                    // Unlock body scroll
                    document.body.style.overflow = '';
                    setTimeout(() => backdrop.classList.add('hidden'), 300);
                }
            }

            menuBtn.addEventListener('click', () => toggleMenu(true));
            closeBtn.addEventListener('click', () => toggleMenu(false));
            backdrop.addEventListener('click', () => toggleMenu(false));
            links.forEach(link => link.addEventListener('click', () => toggleMenu(false)));

            /* 2. SCROLL REVEAL ANIMATION */
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        // Optional: Stop observing once revealed
                        // observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            const revealElements = document.querySelectorAll('.reveal');
            revealElements.forEach(el => observer.observe(el));

            /* 3. NAVBAR SCROLL EFFECT */
            const header = document.getElementById('main-header');
            
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    header.classList.add('shadow-md');
                    header.classList.replace('bg-background-light/90', 'bg-background-light');
                    header.classList.replace('dark:bg-background-dark/80', 'dark:bg-background-dark');
                    header.classList.remove('border-transparent');
                    header.classList.add('border-primary/5', 'dark:border-white/5');
                } else {
                    header.classList.remove('shadow-md');
                    header.classList.replace('bg-background-light', 'bg-background-light/90');
                    header.classList.replace('dark:bg-background-dark', 'dark:bg-background-dark/80');
                    header.classList.add('border-transparent');
                    header.classList.remove('border-primary/5', 'dark:border-white/5');
                }
            });
        });
    </script>
</body>
</html>