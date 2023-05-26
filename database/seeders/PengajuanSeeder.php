<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengajuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pengajuans')->insert([
            'id' => 1,
            'nik' => '1111111122222222',
            'id_suket' => 1,
            'deskripsi' => 'mengurus berkas',
            'status_pengajuan' => 'menunggu',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('pengajuans')->insert([
            'id' => 2,
            'nik' => '1234567890123456',
            'id_suket' => 2,
            'deskripsi' => 'mengurus berkas',
            'status_pengajuan' => 'menunggu',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        
        DB::table('pengajuans')->insert([
            'id' => 3,
            'nik' => '1234567890432156',
            'id_suket' => 3,
            'deskripsi' => 'mengurus berkas',
            'status_pengajuan' => 'menunggu',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
