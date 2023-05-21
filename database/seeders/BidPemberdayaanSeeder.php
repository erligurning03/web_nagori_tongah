<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BidPemberdayaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bidang_pemberdayaan')->insert([
            'id' => 1,
            'keterangan' => 'Pelatihan Pengelola Bumnag',
            'anggaran' => 16500000,
            'tahun' => 2021,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('bidang_pemberdayaan')->insert([
            'id' => 2,
            'keterangan' => 'Pelatihan Pengelola Bumnag',
            'anggaran' => 15500000,
            'tahun' => 2022,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
