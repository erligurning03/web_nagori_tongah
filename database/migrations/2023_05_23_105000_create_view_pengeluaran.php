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
        DB::statement("CREATE VIEW `view_pengeluaran` AS select `webnagoritongah`.`pengeluaran_desa`.`tahun` AS `tahun`,sum(`webnagoritongah`.`pengeluaran_desa`.`jumlah`) AS `total_pengeluaran` from `webnagoritongah`.`pengeluaran_desa` group by `webnagoritongah`.`pengeluaran_desa`.`tahun`");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS `view_pengeluaran`");
    }
};
