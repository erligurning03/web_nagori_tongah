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
        Schema::create('komentar_berita', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_berita');
            $table->foreign('id_berita')->references('id')->on('berita');
            $table->char('nik', 16);
            $table->foreign('nik')-> references('nik')->on('user');
            $table->string('isi_komentar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komentar_berita');
    }
};
