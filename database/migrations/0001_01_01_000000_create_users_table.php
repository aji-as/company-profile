<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // PK
            $table->string('name'); // Nama lengkap
            $table->string('email')->unique(); // Email login
            $table->string('password'); // Hash password
            $table->string('phone')->nullable(); // Nomor WhatsApp
            $table->text('address')->nullable(); // Alamat default
            $table->enum('role', ['admin', 'customer'])->default('customer'); // Role
            $table->timestamp('email_verified_at')->nullable(); // Verifikasi email
            $table->rememberToken(); // Remember me
            $table->timestamps(); // created_at & updated_at
        });

        /*
        |--------------------------------------------------------------------------
        | PASSWORD RESET TOKENS
        |--------------------------------------------------------------------------
        | Untuk fitur lupa password
        */
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        /*
        |--------------------------------------------------------------------------
        | SESSIONS
        |--------------------------------------------------------------------------
        | Untuk login session database
        */
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('users');
    }
};
