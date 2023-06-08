<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengeluaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pengeluaran_desa')->insert([
            'id' => 1,
            'bidang' => 'Bidang Pelaksanaan Pembangunan Nagori',
            'keterangan' => 'PMT',
            'jumlah' => 705589000,
            'tahun' => 2021,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('pengeluaran_desa')->insert([
            'id' => 2,
            'bidang' => 'Bidang Pelaksanaan Pembangunan Nagori',
            'keterangan' => 'Insetif Kader Posyandu',
            'jumlah' => 705589000,
            'tahun' => 2021,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('pengeluaran_desa')->insert([
            'id' => 3,
            'bidang' => 'Bidang Pembinaan Kemasyarakatan Nagori',
            'keterangan' => 'Insetif Kader Posyandu',
            'jumlah' => 605589000,
            'tahun' => 2021,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('pengeluaran_desa')->insert([
            'id' => 4,
            'bidang' => 'Bidang Pelaksanaan Pembangunan Nagori',
            'keterangan' => 'PMT',
            'jumlah' => 505589000,
            'tahun' => 2023,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('pengeluaran_desa')->insert([
            'id' => 5,
            'bidang' => 'Bidang Pelaksanaan Pembangunan Nagori',
            'keterangan' => 'Insetif Kader Posyandu',
            'jumlah' => 805589000,
            'tahun' => 2023,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('pengeluaran_desa')->insert([
            'id' => 6,
            'bidang' => 'Bidang Pembinaan Kemasyarakatan Nagori',
            'keterangan' => 'Insetif Kader Posyandu',
            'jumlah' => 505589000,
            'tahun' => 2023,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
