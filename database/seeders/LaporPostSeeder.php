<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaporPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('lapor_post')->insert([
            'id' => 1,
            'id_post' => 3,
            'nik' => '1839890822775882',
            'isi_laporan' => 'Post tidak bermutu',
            'created_at' => '2023-05-20 09:00:00',
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('lapor_post')->insert([
            'id' => 2,
            'id_post' => 2,
            'nik' => '1516403572360194',
            'isi_laporan' => 'Post menggunakan kata-kata yang kasar',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
