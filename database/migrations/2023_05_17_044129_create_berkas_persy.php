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
        Schema::create('berkas_persy', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pengajuan');
            $table->foreign('id_pengajuan')->references('id')->on('pengajuan');
            $table->unsignedBigInteger('id_persyaratan');
            $table->foreign('id_persyaratan')->references('id')->on('persyaratan');
            $table->string('nama_file');
            $table->enum('status_validasi', ['menunggu', 'diterima', 'ditolak'])->default('menunggu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berkas_persy');
    }
};
