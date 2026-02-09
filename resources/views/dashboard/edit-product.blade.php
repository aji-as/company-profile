<x-dashboard-layout>
    <main class="flex-1 w-full flex flex-col h-full overflow-hidden relative bg-[#f8fafc]">
        
        <div class="flex-1 w-full overflow-y-auto p-4 md:p-8">
            <div class="max-w-4xl mx-auto">
                
                {{-- Breadcrumb & Title --}}
                <div class="flex flex-col md:flex-row md:items-center justify-between mb-8 gap-4">
                    <div>
                        <nav class="flex mb-2" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 md:space-x-3 text-xs font-medium text-gray-500">
                                <li><a href="{{ route('products') }}" class="hover:text-primary transition-colors">Produk</a></li>
                                <li><span class="mx-1 text-gray-400">/</span></li>
                                <li class="text-gray-900 font-semibold">Edit Produk</li>
                            </ol>
                        </nav>
                        <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight">Edit Produk</h2>
                        <p class="text-sm text-gray-500 mt-1">Mengubah detail untuk <span class="text-primary font-medium">{{ $product->name }}</span></p>
                    </div>
                    <a href="{{ route('products') }}" 
                        class="inline-flex items-center gap-2 text-sm font-semibold text-gray-600 bg-white border border-gray-200 px-4 py-2.5 rounded-xl shadow-sm hover:bg-gray-50 hover:text-gray-900 transition-all active:scale-95">
                        <span class="material-symbols-outlined text-sm">arrow_back</span>
                        Kembali
                    </a>
                </div>

                <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf

                    
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                        
                        {{-- Sisi Kiri: Form Utama --}}
                        <div class="lg:col-span-2 space-y-6">
                            {{-- Informasi Dasar --}}
                            <div class="bg-white p-6 md:p-8 rounded-2xl shadow-sm border border-gray-100">
                                <h3 class="text-lg font-bold text-gray-900 mb-6 flex items-center gap-2">
                                    <span class="p-1.5 bg-blue-50 text-blue-600 rounded-lg material-symbols-outlined text-lg">edit_note</span>
                                    Detail Informasi
                                </h3>
                                
                                <div class="space-y-5">
                                    <div>
                                        <label for="name" class="block text-sm font-semibold text-gray-700 mb-1.5">Nama Produk <span class="text-red-500">*</span></label>
                                        <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}" 
                                            class="w-full input rounded-xl border-gray-200 focus:border-primary focus:ring focus:ring-primary/20 transition-all @error('name') border-red-500 @enderror">
                                        @error('name') <p class="text-red-500 text-xs mt-1.5 font-medium">{{ $message }}</p> @enderror
                                    </div>

                                    <div>
                                        <label for="description" class="block text-sm font-semibold text-gray-700 mb-1.5">Deskripsi Produk</label>
                                        <textarea name="description" id="description" rows="6" 
                                            class="w-full input rounded-xl border-gray-200 focus:border-primary focus:ring focus:ring-primary/20 transition-all resize-none">{{ old('description', $product->description) }}</textarea>
                                        @error('description') <p class="text-red-500 text-xs mt-1.5 font-medium">{{ $message }}</p> @enderror
                                    </div>
                                </div>
                            </div>

                            {{-- Harga & Kategori --}}
                            <div class="bg-white p-6 md:p-8 rounded-2xl shadow-sm border border-gray-100">
                                <h3 class="text-lg font-bold text-gray-900 mb-6 flex items-center gap-2">
                                    <span class="p-1.5 bg-green-50 text-green-600 rounded-lg material-symbols-outlined text-lg">sell</span>
                                    Klasifikasi & Harga
                                </h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label for="category_id" class="block text-sm font-semibold text-gray-700 mb-1.5">Kategori <span class="text-red-500">*</span></label>
                                        <select name="category_id" id="category_id" class="w-full input rounded-xl border-gray-200 focus:border-primary focus:ring focus:ring-primary/20 transition-all cursor-pointer">
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div>
                                        <label for="price" class="block text-sm font-semibold text-gray-700 mb-1.5">Harga (Rp) <span class="text-red-500">*</span></label>
                                        <div class="relative group">
                                            <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-gray-400 group-focus-within:text-primary font-bold">Rp</span>
                                            <input type="number" name="price" id="price" value="{{ old('price', $product->price) }}" 
                                                class="w-full input rounded-xl border-gray-200 pl-12 focus:border-primary focus:ring focus:ring-primary/20 transition-all font-semibold">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Sisi Kanan: Sidebar --}}
                        <div class="lg:col-span-1 space-y-6">
                            {{-- Image Management --}}
                            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100" 
                                x-data="{ photoPreview: '{{ $product->image_url ? asset($product->image_url) : '' }}' }">
                                <label class="block text-sm font-bold text-gray-900 mb-4 uppercase tracking-wider text-[11px]">Foto Produk</label>
                                
                                <div class="space-y-4">
                                    <input type="file" name="image" id="image" class="hidden" x-ref="photo"
                                        x-on:change="
                                            const reader = new FileReader();
                                            reader.onload = (e) => { photoPreview = e.target.result; };
                                            reader.readAsDataURL($refs.photo.files[0]);
                                        ">

                                    {{-- Image Preview --}}
                                    <div class="relative aspect-square w-full rounded-2xl border-2 border-dashed border-gray-200 bg-gray-50 flex items-center justify-center overflow-hidden group">
                                        <template x-if="photoPreview">
                                            <img :src="photoPreview" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                                        </template>
                                        
                                        <template x-if="!photoPreview">
                                            <div class="text-center">
                                                <span class="material-symbols-outlined text-gray-300 text-5xl">image</span>
                                                <p class="text-[10px] text-gray-400 mt-2">Belum ada foto</p>
                                            </div>
                                        </template>

                                        {{-- Overlay saat Hover --}}
                                        <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                            <button type="button" @click="$refs.photo.click()" class="text-white bg-white/20 backdrop-blur-md px-4 py-2 rounded-lg text-xs font-bold border border-white/30">
                                                Ubah Gambar
                                            </button>
                                        </div>
                                    </div>
                                    
                                    <p class="text-[11px] text-gray-400 text-center italic">Klik gambar atau tombol untuk mengganti</p>
                                </div>
                                @error('image') <p class="text-red-500 text-xs mt-3 font-medium">{{ $message }}</p> @enderror
                            </div>

                            {{-- Status --}}
                            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                                <label class="block text-sm font-bold text-gray-900 mb-4 uppercase tracking-wider text-[11px]">Status Ketersediaan</label>
                                <div x-data="{ on: {{ $product->is_available ? 'true' : 'false' }} }" 
                                     class="flex items-center justify-between p-4 rounded-xl border transition-colors"
                                     :class="on ? 'bg-green-50 border-green-100' : 'bg-gray-50 border-gray-200'">
                                    
                                    <div class="flex flex-col">
                                        <span class="text-sm font-bold" :class="on ? 'text-green-700' : 'text-gray-700'" x-text="on ? 'Aktif' : 'Nonaktif'"></span>
                                        <span class="text-[10px]" :class="on ? 'text-green-600' : 'text-gray-500'" x-text="on ? 'Muncul di Katalog' : 'Disembunyikan'"></span>
                                    </div>

                                    <input type="hidden" name="is_available" :value="on ? 1 : 0">
                                    <button type="button" @click="on = !on" 
                                        :class="on ? 'bg-green-600' : 'bg-gray-300'"
                                        class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none">
                                        <span :class="on ? 'translate-x-5' : 'translate-x-0'"
                                            class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Footer Actions --}}
                    <div class="flex items-center justify-end gap-4 pb-12 mt-4">
                        <a href="{{ route('products') }}" class="px-6 py-3 text-sm font-bold text-gray-500 hover:text-gray-800 transition-colors">
                            Batalkan Perubahan
                        </a>
                        <button type="submit" class="px-10 py-3 text-sm font-bold text-white bg-primary rounded-xl hover:bg-primary-hover shadow-lg shadow-primary/20 transform transition-all active:scale-95 flex items-center gap-2">
                            <span class="material-symbols-outlined text-sm">save</span>
                            Simpan Perubahan
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </main>
</x-dashboard-layout>