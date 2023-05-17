<?php

use Brick\Math\BigInteger;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Type\Integer;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('post', function (Blueprint $table) {
            $table->id();
            $table->char('nik', 16);
            $table->foreign('nik')-> references('nik')->on('user');
            $table->string('judul');
            $table->string('isi_post');
            $table->date('tanggal_post');
            $table->bigInteger('jumlah_like');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post');
    }
};
