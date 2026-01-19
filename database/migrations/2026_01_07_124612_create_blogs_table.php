<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id(); // PK

            $table->foreignId('author_id')
                  ->constrained('users')
                  ->cascadeOnDelete(); // FK ke users (admin)

            $table->string('title'); // judul artikel
            $table->string('slug')->unique(); // url friendly
            $table->longText('content'); // isi blog
            $table->string('image')->nullable(); // gambar utama

            $table->timestamp('created_at')->useCurrent(); // waktu posting
            $table->timestamp('updated_at')->nullable(); // optional
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
