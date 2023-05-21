<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PendapatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pendapatan_desa')->insert([
            'id' => 1,
            'sumber' => 'Dana Desa',
            'jumlah' => 705589000,
            'tahun' => 2021,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('pendapatan_desa')->insert([
            'id' => 2,
            'sumber' => 'Alokasi Dana Nagori',
            'jumlah' => 303314346,
            'tahun' => 2021,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('pendapatan_desa')->insert([
            'id' => 3,
            'sumber' => 'Bagi Hasil Pajak',
            'jumlah' => 20095369,
            'tahun' => 2021,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('pendapatan_desa')->insert([
            'id' => 4,
            'sumber' => 'Pendapatan Lainnya',
            'jumlah' => 8450000,
            'tahun' => 2021,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('pendapatan_desa')->insert([
            'id' => 5,
            'sumber' => 'Dana Desa',
            'jumlah' => 778589000,
            'tahun' => 2022,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('pendapatan_desa')->insert([
            'id' => 6,
            'sumber' => 'Alokasi Dana Nagori',
            'jumlah' => 432314346,
            'tahun' => 2022,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('pendapatan_desa')->insert([
            'id' => 7,
            'sumber' => 'Bagi Hasil Pajak',
            'jumlah' => 30095369,
            'tahun' => 2022,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('pendapatan_desa')->insert([
            'id' => 8,
            'sumber' => 'Pendapatan Lainnya',
            'jumlah' => 7890000,
            'tahun' => 2022,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

    }
}
