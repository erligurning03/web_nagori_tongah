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
        Schema::create('ket_desa', function (Blueprint $table) {
            $table->string('nama')->primary();
            $table->unsignedBigInteger('id_visi_misi');
            $table->foreign('id_visi_misi')->references('id')->on('visi_misi');
            $table->string('alamat');
            $table->char('kode_pos', 5);
            $table->char('email', 50);
            $table->char('telepon', 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ket_desa');
    }
};
