<x-dashboard-layout>
    <main class="flex-1 w-full flex flex-col h-full overflow-hidden relative bg-[#f8fafc]">
        
        <div class="flex-1 w-full overflow-y-auto pt-4">
            <div class="max-w-4xl mx-auto ">
                
                {{-- Breadcrumb & Title --}}
                <div class="flex flex-col md:flex-row md:items-center justify-between mb-8 gap-4">
                    <div>
                        <nav class="flex mb-2" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 md:space-x-3 text-xs font-medium text-gray-500">
                                <li><a href="{{ route('products') }}" class="hover:text-primary">Produk</a></li>
                                <li><span class="mx-1 text-gray-400">/</span></li>
                                <li class="text-gray-900">Tambah Baru</li>
                            </ol>
                        </nav>
                        <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight">Tambah Produk Baru</h2>
                        <p class="text-sm text-gray-500 mt-1">Buat produk baru untuk katalog toko Anda.</p>
                    </div>
                    <a href="{{ route('products') }}" 
                        class="inline-flex items-center gap-2 text-sm font-semibold text-gray-600 bg-white border border-gray-200 px-4 py-2.5 rounded-xl shadow-sm hover:bg-gray-50 hover:text-gray-900 transition-all active:scale-95">
                        <span class="material-symbols-outlined text-sm">arrow_back</span>
                        Kembali
                    </a>
                </div>

                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                        
                        {{-- Kiri: Form Utama --}}
                        <div class="lg:col-span-2 space-y-6">
                            <div class="bg-white p-6 md:p-8 rounded-2xl shadow-sm border border-gray-100">
                                <h3 class="text-lg font-bold text-gray-900 mb-6 flex items-center gap-2">
                                    <span class="p-1.5 bg-blue-50 text-blue-600 rounded-lg material-symbols-outlined">info</span>
                                    Informasi Produk
                                </h3>
                                
                                <div class="space-y-5">
                                    {{-- Nama Produk --}}
                                    <div>
                                        <label for="name" class="block text-sm font-semibold text-gray-700 mb-1.5">Nama Produk <span class="text-red-500">*</span></label>
                                        <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Misal: Sepatu Running  " 
                                            class="w-full rounded-xl border-gray-200 focus:border-primary focus:ring focus:ring-primary/20 transition-all px-2 py-2 border border-primary placeholder:text-gray-400 @error('name') border-red-500 @enderror">
                                        @error('name') <p class="text-red-500 text-xs mt-1.5 font-medium">{{ $message }}</p> @enderror
                                    </div>

                                    {{-- Deskripsi --}}
                                    <div>
                                        <label for="description" class="block text-sm font-semibold text-gray-700 mb-1.5">Deskripsi Detail</label>
                                        <textarea name="description" id="description" rows="6" 
                                            class="w-full rounded-xl border-gray-200 focus:border-primary focus:ring focus:ring-primary/20 border border-primary transition-all resize-none px-2 py-2" 
                                            placeholder="Ceritakan keunggulan produk Anda...">{{ old('description') }}</textarea>
                                        @error('description') <p class="text-red-500 text-xs mt-1.5 font-medium">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white p-6 md:p-8 rounded-2xl shadow-sm border border-gray-100">
                                <h3 class="text-lg font-bold text-gray-900 mb-6 flex items-center gap-2">
                                    <span class="p-1.5 bg-green-50 text-green-600 rounded-lg material-symbols-outlined">payments</span>
                                    Harga & Kategori
                                </h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    {{-- Kategori --}}
                                    <div>
                                        <label for="category_id" class="block text-sm font-semibold text-gray-700 mb-1.5">Kategori <span class="text-red-500">*</span></label>
                                        <select name="category_id" id="category_id" class="w-full rounded-xl border-gray-200 focus:border-primary focus:ring input focus:ring-primary/20 transition-all appearance-none cursor-pointer">
                                            <option value="" disabled selected>Pilih Kategori</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    {{-- Harga --}}
                                    <div>
                                        <label for="price" class="block text-sm font-semibold text-gray-700 mb-1.5">Harga Jual (Rp) <span class="text-red-500">*</span></label>
                                        <div class="relative group">
                                            <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-gray-400 group-focus-within:text-primary font-bold"></span>
                                            <input type="number" name="price" id="price" value="{{ old('price') }}" 
                                                class="w-full left-8 rounded-xl input border-gray-200  focus:border-primary focus:ring focus:ring-primary/20 transition-all font-semibold" placeholder="20000">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Kanan: Media & Status --}}
                        <div class="lg:col-span-1 space-y-6">
                            {{-- Section Upload --}}
                            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100" x-data="{ photoPreview: null }">
                                <label class="block text-sm font-bold text-gray-900 mb-4 uppercase tracking-wider text-[11px]">Foto Produk</label>
                                
                                <div class="space-y-4">
                                    <input type="file" name="image_url" id="image" class="hidden" x-ref="photo"
                                        x-on:change="
                                            const reader = new FileReader();
                                            reader.onload = (e) => { photoPreview = e.target.result; };
                                            reader.readAsDataURL($refs.photo.files[0]);
                                        ">

                                    {{-- Preview Area --}}
                                    <div class="relative aspect-square w-full rounded-2xl border-2 border-dashed border-gray-200 bg-gray-50 flex items-center justify-center overflow-hidden transition-all hover:border-primary/50"
                                         :class="photoPreview ? 'border-solid border-primary' : ''">
                                        
                                        <div x-show="!photoPreview" class="text-center p-4">
                                            <span class="material-symbols-outlined text-gray-300 text-5xl mb-2">add_a_photo</span>
                                            <p class="text-[11px] text-gray-400 px-4">Drag and drop atau klik tombol di bawah</p>
                                        </div>

                                        <template x-if="photoPreview">
                                            <img :src="photoPreview" class="absolute inset-0 w-full h-full object-cover">
                                        </template>
                                        
                                        <button x-show="photoPreview" type="button" @click="photoPreview = null; $refs.photo.value = ''" 
                                            class="absolute top-2 right-2 bg-red-500 text-white rounded-full p-1 shadow-lg hover:bg-red-600 transition-colors">
                                            <span class="material-symbols-outlined text-sm">close</span>
                                        </button>
                                    </div>
                                    
                                    <button type="button" x-on:click.prevent="$refs.photo.click()" 
                                        class="w-full py-2.5 px-4 bg-gray-50 hover:bg-gray-100 text-gray-700 text-sm font-semibold rounded-xl border border-gray-200 transition-all flex items-center justify-center gap-2">
                                        <span class="material-symbols-outlined text-sm">upload</span>
                                        Pilih Gambar
                                    </button>
                                </div>
                                @error('image') <p class="text-red-500 text-xs mt-3 font-medium">{{ $message }}</p> @enderror
                            </div>

                            {{-- Section Status --}}
                            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                                <label class="block text-sm font-bold text-gray-900 mb-4 uppercase tracking-wider text-[11px]">Pengaturan Status</label>
                                <div x-data="{ on: true }" class="flex items-center justify-between p-3 bg-gray-50 rounded-xl border border-gray-100">
                                    <span class="text-sm font-semibold text-gray-700" x-text="on ? 'Tersedia' : 'Stok Habis'"></span>
                                    <input type="hidden" name="is_available" :value="on ? 1 : 0">
                                    <button type="button" @click="on = !on" 
                                        :class="on ? 'bg-primary' : 'bg-gray-300'"
                                        class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out">
                                        <span :class="on ? 'translate-x-5' : 'translate-x-0'"
                                            class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow transition duration-200"></span>
                                    </button>
                                </div>
                                <p class="text-[11px] text-gray-400 mt-3 italic">* Produk tidak akan muncul di katalog jika status Stok Habis.</p>
                            </div>
                        </div>
                    </div>

                    {{-- Action Buttons --}}
                    <div class="flex items-center justify-end gap-4 pb-12">
                        <a href="{{ route('products') }}" class="px-6 py-3 text-sm font-bold text-gray-500 hover:text-gray-700 transition-colors">
                            Batal
                        </a>
                        <button type="submit" class="px-8 py-3 text-sm font-bold text-white bg-primary rounded-xl hover:bg-primary-hover shadow-lg shadow-primary/20 transform transition-all active:scale-95">
                            Simpan Produk
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </main>
</x-dashboard-layout>