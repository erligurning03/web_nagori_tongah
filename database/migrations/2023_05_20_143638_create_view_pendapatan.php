<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement("CREATE VIEW `view_pendapatan` AS select `webnagoritongah`.`pendapatan_desa`.`tahun` AS `tahun`,sum(`webnagoritongah`.`pendapatan_desa`.`jumlah`) AS `total_pendapatan` from `webnagoritongah`.`pendapatan_desa` group by `webnagoritongah`.`pendapatan_desa`.`tahun`");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW IF EXITS `view_pendapatan`");
    }
};
