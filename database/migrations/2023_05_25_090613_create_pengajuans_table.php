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
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id();
            $table->char('nik', 16);
            $table->foreign('nik')-> references('nik')->on('user');
            $table->unsignedBigInteger('id_suket');
            $table->foreign('id_suket')->references('id')->on('sukets');
            $table->string('deskripsi');
            $table->enum('status_pengajuan', ['menunggu', 'diterima', 'ditolak'])->default('menunggu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuans');
    }
};
