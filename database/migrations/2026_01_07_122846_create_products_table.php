<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // id (PK)

            $table->foreignId('category_id')
                  ->constrained('categories')
                  ->cascadeOnDelete(); // FK ke categories

            $table->string('name'); // nama produk
            $table->text('description')->nullable(); // deskripsi
            $table->decimal('price', 10, 2); // harga
            $table->string('image_url')->nullable(); // link gambar
            $table->boolean('is_available')->default(true); // stok
            $table->timestamps(); // created_at & updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
