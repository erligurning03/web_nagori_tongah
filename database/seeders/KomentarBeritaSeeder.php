<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KomentarBeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('komentar_berita')->insert([
            'id' => 1,
            'id_berita' => 1,
            'nik' => '1234567890123456',
            'isi_komentar' => 'bagus sekali',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('komentar_berita')->insert([
            'id' => 2,
            'id_berita' => 2,
            'nik' => '1234567890123456',
            'isi_komentar' => 'bagus sekali',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('komentar_berita')->insert([
            'id' => 3,
            'id_berita' => 1,
            'nik' => '1234567890432156',
            'isi_komentar' => 'bagus sekali',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
