<x-layout>
    <x-slot:title>Kanara House - Urban Sanctuary for Coffee Lovers</x-slot:title>

        <section class="min-h-screen bg-[#FDFCFB] dark:bg-[#0F0F0F] py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-6xl mx-auto">
                
                {{-- Header --}}
                <div class="mb-12">
                    <h1 class="font-serif text-4xl text-primary dark:text-white font-medium mb-2">Checkout</h1>
                    <p class="text-gray-500 dark:text-zinc-400">Silahkan lengkapi data pengiriman dan pembayaran Anda.</p>
                </div>

                <form action="#" method="POST" class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                    @csrf
                    
                    {{-- Left Column: Forms (8 Cols) --}}
                    <div class="lg:col-span-7 space-y-10">
                        
                        {{-- Section 1: Informasi Kontak --}}
                        <div class="bg-white dark:bg-zinc-900/50 p-8 rounded-[2.5rem] border border-gray-100 dark:border-zinc-800 shadow-sm">
                            <div class="flex items-center gap-3 mb-6">
                                <span class="material-symbols-outlined text-accent">person_pin</span>
                                <h2 class="text-lg font-bold text-primary dark:text-white uppercase tracking-wider">Informasi Kontak</h2>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-xs font-bold text-gray-400 uppercase ml-1">Nama Lengkap</label>
                                    <input type="text" name="name" placeholder="John Doe" class="w-full bg-gray-50 dark:bg-zinc-800 border-none rounded-2xl p-4 focus:ring-2 focus:ring-accent/50 dark:text-white transition-all">
                                </div>
                                <div class="space-y-2">
                                    <label class="text-xs font-bold text-gray-400 uppercase ml-1">Nomor WhatsApp</label>
                                    <input type="tel" name="phone" placeholder="0812..." class="w-full bg-gray-50 dark:bg-zinc-800 border-none rounded-2xl p-4 focus:ring-2 focus:ring-accent/50 dark:text-white transition-all">
                                </div>
                            </div>
                        </div>

                        {{-- Section 2: Alamat Pengiriman --}}
                        <div class="bg-white dark:bg-zinc-900/50 p-8 rounded-[2.5rem] border border-gray-100 dark:border-zinc-800 shadow-sm">
                            <div class="flex items-center gap-3 mb-6">
                                <span class="material-symbols-outlined text-accent">local_shipping</span>
                                <h2 class="text-lg font-bold text-primary dark:text-white uppercase tracking-wider">Alamat Pengiriman</h2>
                            </div>
                            <div class="space-y-6">
                                <div class="space-y-2">
                                    <label class="text-xs font-bold text-gray-400 uppercase ml-1">Alamat Lengkap</label>
                                    <textarea name="address" rows="3" placeholder="Nama jalan, nomor rumah, kec/kel..." class="w-full bg-gray-50 dark:bg-zinc-800 border-none rounded-2xl p-4 focus:ring-2 focus:ring-accent/50 dark:text-white transition-all"></textarea>
                                </div>
                                <div class="grid grid-cols-2 gap-6">
                                    <div class="space-y-2">
                                        <label class="text-xs font-bold text-gray-400 uppercase ml-1">Kota</label>
                                        <input type="text" name="city" class="w-full bg-gray-50 dark:bg-zinc-800 border-none rounded-2xl p-4 focus:ring-2 focus:ring-accent/50 dark:text-white transition-all">
                                    </div>
                                    <div class="space-y-2">
                                        <label class="text-xs font-bold text-gray-400 uppercase ml-1">Kode Pos</label>
                                        <input type="text" name="zip" class="w-full bg-gray-50 dark:bg-zinc-800 border-none rounded-2xl p-4 focus:ring-2 focus:ring-accent/50 dark:text-white transition-all">
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Section 3: Metode Pembayaran --}}
                        <div class="bg-white dark:bg-zinc-900/50 p-8 rounded-[2.5rem] border border-gray-100 dark:border-zinc-800 shadow-sm">
                            <div class="flex items-center gap-3 mb-6">
                                <span class="material-symbols-outlined text-accent">payments</span>
                                <h2 class="text-lg font-bold text-primary dark:text-white uppercase tracking-wider">Metode Pembayaran</h2>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <label class="relative flex items-center p-4 border border-gray-100 dark:border-zinc-700 rounded-2xl cursor-pointer hover:border-accent transition-all group">
                                    <input type="radio" name="payment" value="transfer" class="hidden peer">
                                    <div class="w-5 h-5 border-2 border-gray-300 dark:border-zinc-600 rounded-full mr-4 peer-checked:border-accent peer-checked:border-[6px] transition-all"></div>
                                    <span class="text-sm font-bold text-gray-600 dark:text-zinc-300 group-hover:text-accent">Bank Transfer</span>
                                </label>
                                <label class="relative flex items-center p-4 border border-gray-100 dark:border-zinc-700 rounded-2xl cursor-pointer hover:border-accent transition-all group">
                                    <input type="radio" name="payment" value="e-wallet" class="hidden peer">
                                    <div class="w-5 h-5 border-2 border-gray-300 dark:border-zinc-600 rounded-full mr-4 peer-checked:border-accent peer-checked:border-[6px] transition-all"></div>
                                    <span class="text-sm font-bold text-gray-600 dark:text-zinc-300 group-hover:text-accent">E-Wallet (OVO/Gopay)</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    {{-- Right Column: Order Summary (4 Cols) --}}
                    <div class="lg:col-span-5">
                        <div class="sticky top-8 space-y-6">
                            <div class="bg-primary dark:bg-zinc-900 p-8 rounded-[2.5rem] text-white shadow-2xl overflow-hidden relative">
                                {{-- Ornamen hiasan belakang --}}
                                <div class="absolute -top-10 -right-10 w-32 h-32 bg-accent opacity-20 rounded-full blur-3xl"></div>
                                
                                <h2 class="text-xl font-serif mb-8 relative">Ringkasan Pesanan</h2>
                                
                                {{-- Item List --}}
                                <div class="space-y-6 mb-8 relative">
                                    {{-- Contoh Item --}}
                                    <div class="flex items-center gap-4">
                                        <div class="w-16 h-16 rounded-2xl overflow-hidden flex-shrink-0 bg-white/10 border border-white/10">
                                            <img src="{{ asset('storage/' . $product->image) }}" class="w-full h-full object-cover">
                                        </div>
                                        <div class="flex-grow">
                                            <h4 class="text-sm font-bold">{{ $product->name }}</h4>
                                            <p class="text-xs text-white/50">1x Bean (250gr)</p>
                                        </div>
                                        <span class="text-sm font-medium">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                                    </div>
                                </div>

                                <div class="border-t border-white/10 pt-6 space-y-4 relative">
                                    <div class="flex justify-between text-sm text-white/60">
                                        <span>Subtotal</span>
                                        <span>Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                                    </div>
                                    <div class="flex justify-between text-sm text-white/60">
                                        <span>Ongkos Kirim</span>
                                        <span class="text-accent italic uppercase text-[10px] font-bold tracking-widest leading-none">Dihitung otomatis</span>
                                    </div>
                                    <div class="border-t border-white/10 pt-4 flex justify-between items-end">
                                        <span class="text-base font-serif">Total Bayar</span>
                                        <span class="text-2xl font-bold text-accent tracking-tighter">
                                            Rp {{ number_format($product->price, 0, ',', '.') }}
                                        </span>
                                    </div>
                                </div>

                                <button type="submit" class="w-full mt-8 bg-accent hover:bg-white hover:text-primary text-white font-bold py-4 rounded-2xl transition-all shadow-lg active:scale-95 flex items-center justify-center gap-2 group">
                                    Bayar Sekarang
                                    <span class="material-symbols-outlined text-lg group-hover:translate-x-1 transition-transform">arrow_right_alt</span>
                                </button>
                            </div>

                            {{-- Info Tambahan --}}
                            <div class="px-8 py-6 bg-gray-50 dark:bg-zinc-800/30 rounded-[2rem] flex items-center gap-4">
                                <span class="material-symbols-outlined text-accent">verified_user</span>
                                <p class="text-[11px] text-gray-500 dark:text-zinc-400 leading-tight uppercase tracking-wider font-medium">
                                    Pembayaran dijamin aman & terenkripsi 256-bit SSL.
                                </p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>

</x-layout>




{{-- <x-layout>
    <x-slot:title>Kanara House - Urban Sanctuary for Coffee Lovers</x-slot:title>

  
</x-layout> --}}