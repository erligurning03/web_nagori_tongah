<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user', function (Blueprint $table) {
            $table->char('nik', 16)->primary();
            $table->string('nama_lengkap');
            $table->char('username', 50)->unique();
            $table->string('password');
            $table->char('email', 50)->unique();
            $table->char('telepon', 15);
            $table->enum('role', ['admin', 'operator', 'warga']);
            $table->string('foto_profil')->nullable();
            $table->enum('status_akun', ['terdaftar', 'menunggu'])->default('menunggu');
            $table->timestamps();
            $table->softDeletes();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
