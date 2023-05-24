<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UmkmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('umkm')->insert([
            'id' => 1,
            'nama_usaha' => 'Mitra Tani',
            'alamat' => 'Jl. Mawar No. 123',
            'gambar_produk' => 'gambar1.jpg',
            'telepon' => '08123456789',
            'deskripsi' => 'Toko ini menyediakan berbagai macam kebutuhan pokok sehari-hari seperti beras, gula, minyak goreng, tepung, telur, sayuran, dan buah-buahan segar.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('umkm')->insert([
            'id' => 1,
            'nama_usaha' => 'Rumah Makan Halak Kita',
            'alamat' => 'Jl. Arteri Raya N0. 17',
            'gambar_produk' => 'gambar1.jpg',
            'telepon' => '08234567890',
            'deskripsi' => 'Toko ini menyediakan berbagai macam kebutuhan pokok sehari-hari seperti beras, gula, minyak goreng, tepung, telur, sayuran, dan buah-buahan segar.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
