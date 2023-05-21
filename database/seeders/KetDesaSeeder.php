<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KetDesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ket_desa')->insert([
            'nama' => 'Nagori Nagoritongah',
            'id_visi_misi' => 1,
            'alamat' => 'Kecamatan Purba, Kabupaten Simalungun',
            'kode_pos' => '12345',
            'email' => 'nagori@gmail.com',
            'telepon' => '081239871122',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
