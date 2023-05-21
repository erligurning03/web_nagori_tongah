<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BidPelaksanaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bidang_pelaksanaan')->insert([
            'id' => 1,
            'keterangan' => 'Insetip Kader',
            'anggaran' => 24000000,
            'tahun' => 2021,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('bidang_pelaksanaan')->insert([
            'id' => 2,
            'keterangan' => 'Insetip KPM',
            'anggaran' => 3600000,
            'tahun' => 2021,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('bidang_pelaksanaan')->insert([
            'id' => 3,
            'keterangan' => 'Operasional',
            'anggaran' => 16540000,
            'tahun' => 2021,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('bidang_pelaksanaan')->insert([
            'id' => 4,
            'keterangan' => 'Insetip Kader',
            'anggaran' => 31000000,
            'tahun' => 2022,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('bidang_pelaksanaan')->insert([
            'id' => 5,
            'keterangan' => 'Insetip KPM',
            'anggaran' => 4000000,
            'tahun' => 2022,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('bidang_pelaksanaan')->insert([
            'id' => 6,
            'keterangan' => 'Operasional',
            'anggaran' => 17500123,
            'tahun' => 2022,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
