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
        DB::statement("CREATE VIEW `view_pengeluaran` AS select `total_anggaran_per_tahun`.`tahun` AS `tahun`,sum(`total_anggaran_per_tahun`.`anggaran`) AS `total_anggaran` from (select `webnagoritongah`.`bidang_pelaksanaan`.`tahun` AS `tahun`,`webnagoritongah`.`bidang_pelaksanaan`.`anggaran` AS `anggaran` from `webnagoritongah`.`bidang_pelaksanaan` union all select `webnagoritongah`.`bidang_pemberdayaan`.`tahun` AS `tahun`,`webnagoritongah`.`bidang_pemberdayaan`.`anggaran` AS `anggaran` from `webnagoritongah`.`bidang_pemberdayaan` union all select `webnagoritongah`.`bidang_pembiayaan`.`tahun` AS `tahun`,`webnagoritongah`.`bidang_pembiayaan`.`anggaran` AS `anggaran` from `webnagoritongah`.`bidang_pembiayaan` union all select `webnagoritongah`.`bidang_pembinaan`.`tahun` AS `tahun`,`webnagoritongah`.`bidang_pembinaan`.`anggaran` AS `anggaran` from `webnagoritongah`.`bidang_pembinaan` union all select `webnagoritongah`.`bidang_penanggulangan`.`tahun` AS `tahun`,`webnagoritongah`.`bidang_penanggulangan`.`anggaran` AS `anggaran` from `webnagoritongah`.`bidang_penanggulangan` union all select `webnagoritongah`.`bidang_penyelenggaraan`.`tahun` AS `tahun`,`webnagoritongah`.`bidang_penyelenggaraan`.`anggaran` AS `anggaran` from `webnagoritongah`.`bidang_penyelenggaraan`) `total_anggaran_per_tahun` group by `total_anggaran_per_tahun`.`tahun`");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS `view_pengeluaran`");
    }
};
