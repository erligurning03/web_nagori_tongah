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
        Schema::create('berita', function (Blueprint $table) {
            $table->id();
            $table->char('nik', 16);
            $table->foreign('nik')-> references('nik')->on('user');
            $table->enum('jenis_berita', ['berita', 'hoax']);
            $table->string('judul');
            $table->string('isi_post');
            $table->date('tanggal_post');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita');
    }
};
