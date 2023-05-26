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
        Schema::create('lapor_post', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_post');
            $table->foreign('id_post')->references('id')->on('post');
            $table->char('nik', 16);
            $table->foreign('nik')-> references('nik')->on('user');
            $table->string('isi_laporan');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lapor_post');
    }
};
