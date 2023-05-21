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
        DB::table('pengajuan')->insert([
            'id' => 1,
            'nik' => '1234567890123456',
            'nama_suket' => 'akta_lahir',
            'deskripsi' => 'anak saya sudah lahir',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'status_pengajuan' => 'menunggu',
        ]);

        DB::table('pengajuan')->insert([
            'id' => 2,
            'nik' => '1111111122222222',
            'nama_suket' => 'domisili',
            'deskripsi' => 'keperluan sekolah',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'status_pengajuan' => 'menunggu',
        ]);

        DB::table('pengajuan')->insert([
            'id' => 3,
            'nik' => '1234567890432156',
            'nama_suket' => 'ktp',
            'deskripsi' => 'ktp saya hilang',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'status_pengajuan' => 'menunggu',
        ]);
    }
}
