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
        Schema::create('umkm', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 16);
            $table->string('upload_ktp');
            $table->string('pas_foto');
            $table->string('nama_usaha');
            $table->string('alamat');
            $table->char('telepon', 15);
            $table->string('gambar_produk')->nullable();
            $table->text('deskripsi');
            $table->enum('status_validasi', ['menunggu', 'diterima', 'ditolak'])->default('menunggu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umkm');
    }
};
