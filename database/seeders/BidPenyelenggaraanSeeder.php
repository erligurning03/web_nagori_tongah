<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BidPenyelenggaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bidang_penyelenggaraan')->insert([
            'id' => 1,
            'keterangan' => 'Penghasilan Tetap Tunjangan Pangulu',
            'anggaran' => 65560000,
            'tahun' => 2021,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('bidang_penyelenggaraan')->insert([
            'id' => 2,
            'keterangan' => 'Penghasilan Tetap Tungkat Nagori',
            'anggaran' => 150308000,
            'tahun' => 2021,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('bidang_penyelenggaraan')->insert([
            'id' => 3,
            'keterangan' => 'Tunjangan Maujana Nagori',
            'anggaran' => 45000789,
            'tahun' => 2021,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('bidang_penyelenggaraan')->insert([
            'id' => 4,
            'keterangan' => 'Penghasilan Tetap Tunjangan Pangulu',
            'anggaran' => 75560000,
            'tahun' => 2022,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('bidang_penyelenggaraan')->insert([
            'id' => 5,
            'keterangan' => 'Penghasilan Tetap Tungkat Nagori',
            'anggaran' => 220308000,
            'tahun' => 2022,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('bidang_penyelenggaraan')->insert([
            'id' => 6,
            'keterangan' => 'Tunjangan Maujana Nagori',
            'anggaran' => 35000789,
            'tahun' => 2022,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
