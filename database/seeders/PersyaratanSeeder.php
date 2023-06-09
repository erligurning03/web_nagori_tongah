<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersyaratanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('persyaratans')->insert([
            'id' => 1,
            'id_pengajuan' => 1,
            'berkas' => 'kk.pdf',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('persyaratans')->insert([
            'id' => 2,
            'id_pengajuan' => 1,
            'berkas' => 'ktp.pdf',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('persyaratans')->insert([
            'id' => 3,
            'id_pengajuan' => 2,
            'berkas' => 'ktp.pdf',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('persyaratans')->insert([
            'id' => 4,
            'id_pengajuan' => 3,
            'berkas' => 'ktp.pdf',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
