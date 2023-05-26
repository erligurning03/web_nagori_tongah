<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sukets')->insert([
            'id' => 1,
            'suket' => 'Suket Mengurus KTP',
            'syarat' => 'Kartu Keluarga(KK)',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('sukets')->insert([
            'id' => 2,
            'suket' => 'Suket Mengurus Akta Nikah',
            'syarat' => 'Surat Nikah dari Gereja, Surat Pindah(jika ada), Kartu Keluarga(KK), Fotocopy Ijazah',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('sukets')->insert([
            'id' => 3,
            'suket' => 'Suket Mengurus Akta Lahir',
            'syarat' => 'Kartu Keluarga(KK), Surat Lahir atau Surat Baptis',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
