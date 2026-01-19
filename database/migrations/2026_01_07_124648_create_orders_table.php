<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // PK

            $table->string('name'); // Nama lengkap
            $table->string('email')->unique(); // Email login
            $table->string('phone')->nullable(); // Nomor WhatsApp
            $table->text('address')->nullable(); // Alamat default

            $table->decimal('total_price', 12, 2); // total harga

            $table->enum('status', [
                'pending',
                'processing',
                'completed',
                'cancelled',
            ])->default('pending');

            $table->enum('payment_status', [
                'unpaid',
                'paid',
            ])->default('unpaid');

            $table->text('shipping_address'); // alamat kirim

            $table->timestamp('created_at')->useCurrent(); // waktu transaksi
            $table->timestamp('updated_at')->nullable(); // optional
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
