<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BerkasPersyaratanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('berkas_persy')->insert([
            'id' => 1,
            'id_pengajuan' => 1,
            'id_persyaratan' => 1,
            'nama_file' => 'surat permohonan.pdf',
            'status_validasi' => 'menunggu',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('berkas_persy')->insert([
            'id' => 2,
            'id_pengajuan' => 2,
            'id_persyaratan' => 2,
            'nama_file' => 'surat permohonan.pdf',
            'status_validasi' => 'menunggu',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('berkas_persy')->insert([
            'id' => 3,
            'id_pengajuan' => 3,
            'id_persyaratan' => 3,
            'nama_file' => 'surat permohonan.pdf',
            'status_validasi' => 'menunggu',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
