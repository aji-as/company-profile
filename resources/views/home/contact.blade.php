
<x-layout>
    <x-slot:title>Kanara House - Urban Sanctuary for Coffee Lovers</x-slot:title>

     <section class="relative pt-32 pb-16 px-6 md:px-12 bg-primary text-background-light overflow-hidden">
            <div class="absolute inset-0 opacity-10 pointer-events-none" style="background-image: radial-gradient(#F5F1E3 1px, transparent 1px); background-size: 30px 30px;"></div>
            <div class="max-w-4xl mx-auto text-center relative z-10">
                <h1 class="font-serif text-5xl md:text-6xl lg:text-7xl font-medium mb-6">Get in Touch</h1>
                <p class="text-lg md:text-xl font-light text-background-light/80 max-w-2xl mx-auto">
                    Whether you have a question about our beans, want to host an event, or simply want to say hello, we're here for you.
                </p>
            </div>
        </section>

        <section class="py-20 px-6 md:px-12">
            <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16">
                
                <div class="flex flex-col gap-12">
                    <div>
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-accent/10 text-accent text-xs font-bold uppercase tracking-wider w-fit mb-4">
                            <span class="w-2 h-2 rounded-full bg-accent"></span>
                            Visit Us
                        </div>
                        <h2 class="font-serif text-4xl text-primary dark:text-white mb-6">Our Urban Sanctuary</h2>
                        <p class="text-primary/70 dark:text-white/70 leading-relaxed">
                            Located in the heart of the Evergreen district, our space is designed to be a calm refuge from the city noise. Come in for a cup, stay for the peace of mind.
                        </p>
                    </div>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                        <div class="flex flex-col gap-4">
                            <div class="w-12 h-12 rounded-full bg-primary/5 dark:bg-white/10 flex items-center justify-center text-accent">
                                <span class="material-symbols-outlined">location_on</span>
                            </div>
                            <div>
                                <h3 class="font-serif text-xl font-bold text-primary dark:text-white mb-2">Location</h3>
                                <p class="text-primary/70 dark:text-white/70 text-sm leading-relaxed">
                                    1248 Evergreen Avenue<br />
                                    Seattle, WA 98101<br />
                                    United States
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4">
                            <div class="w-12 h-12 rounded-full bg-primary/5 dark:bg-white/10 flex items-center justify-center text-accent">
                                <span class="material-symbols-outlined">chat</span>
                            </div>
                            <div>
                                <h3 class="font-serif text-xl font-bold text-primary dark:text-white mb-2">Contact</h3>
                                <p class="text-primary/70 dark:text-white/70 text-sm leading-relaxed mb-1">
                                    <a class="hover:text-accent transition-colors" href="mailto:hello@kanarahouse.com">hello@kanarahouse.com</a>
                                </p>
                                <p class="text-primary/70 dark:text-white/70 text-sm leading-relaxed">
                                    <a class="hover:text-accent transition-colors" href="tel:+12065550198">(206) 555-0198</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white dark:bg-surface-dark p-8 rounded-3xl shadow-sm border border-primary/5 dark:border-white/5">
                        <div class="flex items-center gap-3 mb-6">
                            <span class="material-symbols-outlined text-accent">schedule</span>
                            <h3 class="font-serif text-2xl font-bold text-primary dark:text-white">Opening Hours</h3>
                        </div>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center border-b border-primary/10 dark:border-white/10 pb-3">
                                <span class="text-sm font-medium text-primary/60 dark:text-white/60 uppercase tracking-wide">Monday - Friday</span>
                                <span class="text-primary dark:text-white font-serif text-lg">7:00am - 7:00pm</span>
                            </div>
                            <div class="flex justify-between items-center border-b border-primary/10 dark:border-white/10 pb-3">
                                <span class="text-sm font-medium text-primary/60 dark:text-white/60 uppercase tracking-wide">Saturday</span>
                                <span class="text-primary dark:text-white font-serif text-lg">8:00am - 8:00pm</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-sm font-medium text-primary/60 dark:text-white/60 uppercase tracking-wide">Sunday</span>
                                <span class="text-primary dark:text-white font-serif text-lg">8:00am - 6:00pm</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:pt-8 w-full">
                    <div class="bg-white dark:bg-surface-dark rounded-3xl p-6 sm:p-8 md:p-12 shadow-2xl shadow-primary/10 dark:shadow-none border-t-4 border-accent relative overflow-hidden group">
                        
                        <div class="absolute top-0 right-0 w-32 h-32 bg-accent/5 rounded-full blur-3xl -mr-16 -mt-16 pointer-events-none"></div>
                        
                        <div class="relative z-10">
                            <h3 class="font-serif text-3xl md:text-4xl font-bold text-primary dark:text-white mb-3">Send a Message</h3>
                            <p class="text-primary/60 dark:text-white/60 mb-10 text-sm md:text-base leading-relaxed">
                                Have a project in mind or just want to say hi? Fill out the form below and we'll get back to you within 24 hours.
                            </p>
                            
                            <form class="space-y-6">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="space-y-2 group/input">
                                        <label class="text-xs font-bold text-primary/70 dark:text-white/70 uppercase tracking-wider transition-colors group-focus-within/input:text-accent" for="firstName">First Name</label>
                                        <input class="w-full rounded-xl border border-primary/10 dark:border-white/10 bg-background-light/30 dark:bg-white/5 px-4 py-3 text-primary dark:text-white placeholder:text-primary/30 dark:placeholder:text-white/20 focus:outline-none focus:ring-2 focus:ring-accent/20 focus:border-accent hover:border-accent/50 transition-all duration-300" id="firstName" placeholder="Jane" type="text" />
                                    </div>
                                    
                                    <div class="space-y-2 group/input">
                                        <label class="text-xs font-bold text-primary/70 dark:text-white/70 uppercase tracking-wider transition-colors group-focus-within/input:text-accent" for="lastName">Last Name</label>
                                        <input class="w-full rounded-xl border border-primary/10 dark:border-white/10 bg-background-light/30 dark:bg-white/5 px-4 py-3 text-primary dark:text-white placeholder:text-primary/30 dark:placeholder:text-white/20 focus:outline-none focus:ring-2 focus:ring-accent/20 focus:border-accent hover:border-accent/50 transition-all duration-300" id="lastName" placeholder="Doe" type="text" />
                                    </div>
                                </div>

                                <div class="space-y-2 group/input">
                                    <label class="text-xs font-bold text-primary/70 dark:text-white/70 uppercase tracking-wider transition-colors group-focus-within/input:text-accent" for="email">Email Address</label>
                                    <input class="w-full rounded-xl border border-primary/10 dark:border-white/10 bg-background-light/30 dark:bg-white/5 px-4 py-3 text-primary dark:text-white placeholder:text-primary/30 dark:placeholder:text-white/20 focus:outline-none focus:ring-2 focus:ring-accent/20 focus:border-accent hover:border-accent/50 transition-all duration-300" id="email" placeholder="jane@example.com" type="email" />
                                </div>

                                <div class="space-y-2 group/input">
                                    <label class="text-xs font-bold text-primary/70 dark:text-white/70 uppercase tracking-wider transition-colors group-focus-within/input:text-accent" for="subject">Subject</label>
                                    <div class="relative">
                                        <select class="w-full rounded-xl border border-primary/10 dark:border-white/10 bg-background-light/30 dark:bg-white/5 px-4 py-3 text-primary dark:text-white appearance-none cursor-pointer focus:outline-none focus:ring-2 focus:ring-accent/20 focus:border-accent hover:border-accent/50 transition-all duration-300" id="subject">
                                            <option>General Inquiry</option>
                                            <option>Events & Catering</option>
                                            <option>Wholesale</option>
                                            <option>Careers</option>
                                            <option>Feedback</option>
                                        </select>
                                        <span class="absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none text-primary/50 dark:text-white/50">
                                            <span class="material-symbols-outlined text-sm">expand_more</span>
                                        </span>
                                    </div>
                                </div>

                                <div class="space-y-2 group/input">
                                    <label class="text-xs font-bold text-primary/70 dark:text-white/70 uppercase tracking-wider transition-colors group-focus-within/input:text-accent" for="message">Message</label>
                                    <textarea class="w-full rounded-xl border border-primary/10 dark:border-white/10 bg-background-light/30 dark:bg-white/5 px-4 py-3 text-primary dark:text-white placeholder:text-primary/30 dark:placeholder:text-white/20 focus:outline-none focus:ring-2 focus:ring-accent/20 focus:border-accent hover:border-accent/50 transition-all duration-300 min-h-[150px]" id="message" placeholder="How can we help you?" rows="5"></textarea>
                                </div>

                                <button class="group w-full rounded-full py-4 bg-accent hover:bg-accent/90 text-white font-bold  shadow-lg hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex items-center justify-center gap-3 mt-4" type="button">
                                    <span>Send Message</span>
                                    <span class="material-symbols-outlined text-sm transition-transform duration-300 group-hover:translate-x-1 group-hover:-translate-y-1">send</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w-full h-[500px] relative bg-gray-200 grayscale contrast-[0.9] border-t border-primary/10">
            <div class="absolute inset-0 bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDMWWr8IL8gNNs2DxO4p1XEAECd0uuTCdsDer4KbqXR1BSoCUcOzPbaUuD5Y75laz1PCNhllJOykRCnu_wFahRJ-_CO24dy4Brf6WDF5kVnniqwgcRr5Ig2auiHs23Urr39tEgluhJm_oWfqgoC0FKVus3yTEGbmZZYOOeV7oVIxzPxrEu3X6Tq0Ia1N-JNcMLXzy62hicBXkvE2rpmhQdrY-9Qow4M-FGCeA-Yteq6xEpGqIMPU9bs4H-6BgNoDhP9MTFuTiSt_VXT"); opacity: 0.1;'></div>
            <div class="absolute inset-0 flex items-center justify-center bg-[#e8e4d9]">
                <div class="text-center opacity-60">
                    <span class="material-symbols-outlined text-6xl text-primary mb-2">map</span>
                    <p class="font-serif text-xl text-primary tracking-widest">MAP VIEW</p>
                </div>
                <svg class="absolute inset-0 w-full h-full pointer-events-none opacity-20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0,100 Q400,150 800,100 T1600,150" fill="none" stroke="#2D4636" stroke-width="2"></path>
                    <path d="M0,300 Q400,250 800,300 T1600,250" fill="none" stroke="#2D4636" stroke-width="2"></path>
                    <path d="M200,0 Q250,300 200,600" fill="none" stroke="#2D4636" stroke-width="2"></path>
                    <path d="M1000,0 Q1050,300 1000,600" fill="none" stroke="#2D4636" stroke-width="2"></path>
                </svg>
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-full transform flex flex-col items-center">
                    <div class="bg-primary text-white text-xs font-bold px-3 py-1 rounded-lg shadow-lg mb-1 whitespace-nowrap">Kanara House</div>
                    <span class="material-symbols-outlined text-5xl text-accent drop-shadow-xl">location_on</span>
                </div>
            </div>
        </section>

        <section class="py-20 px-6 md:px-12 bg-white dark:bg-surface-dark">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="font-serif text-3xl text-primary dark:text-white mb-10">Common Questions</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-left">
                    <div class="flex flex-col gap-2 p-6 rounded-2xl bg-background-light dark:bg-white/5 border border-primary/5">
                        <h4 class="font-bold text-primary dark:text-white">Do you offer Wi-Fi?</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-300">Yes, we offer complimentary high-speed Wi-Fi. However, we have a "Deep Work" zone that is device-free for those seeking total focus.</p>
                    </div>
                    <div class="flex flex-col gap-2 p-6 rounded-2xl bg-background-light dark:bg-white/5 border border-primary/5">
                        <h4 class="font-bold text-primary dark:text-white">Are pets allowed?</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-300">We welcome well-behaved pets on our outdoor patio. Service animals are always welcome inside.</p>
                    </div>
                    <div class="flex flex-col gap-2 p-6 rounded-2xl bg-background-light dark:bg-white/5 border border-primary/5">
                        <h4 class="font-bold text-primary dark:text-white">Is the space wheelchair accessible?</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-300">Absolutely. Our main entrance, restrooms, and seating areas are fully ADA compliant.</p>
                    </div>
                    <div class="flex flex-col gap-2 p-6 rounded-2xl bg-background-light dark:bg-white/5 border border-primary/5">
                        <h4 class="font-bold text-primary dark:text-white">Do you take reservations?</h4>
                        <p class="text-sm text-gray-600 dark:text-gray-300">We operate on a first-come, first-served basis for individuals, but you can book our meeting room in advance.</p>
                    </div>
                </div>
            </div>
        </section>
</x-layout>