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
            'nik' => '1234567890432156',
            'upload_ktp' => 'ktp1.jpg',
            'pas_foto' => 'pas1.jpg',
            'nama_usaha' => 'Bolu Amanda ',
            'alamat' => 'Jl. Mutiara',
            'telepon' => '08123456789',
            'gambar_produk' => 'umkm3.png',
            'deskripsi' => 'Toko ini menyediakan berbagai macam kebutuhan pokok sehari-hari seperti beras, gula, minyak goreng, tepung, telur, sayuran, dan buah-buahan segar.',
            'status_validasi' => 'menunggu',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('umkm')->insert([
            'id' => 2,
            'nik' => '1111111122222222',
            'upload_ktp' => 'ktp2.jpg',
            'pas_foto' => 'pas2.jpg',
            'nama_usaha' => 'Rumah Makan Halak Kita',
            'alamat' => 'Jl. Harmoni',
            'telepon' => '08234567890',
            'gambar_produk' => 'gambar2.jpg',
            'deskripsi' => 'Toko ini menyediakan berbagai macam kebutuhan pokok sehari-hari seperti beras, gula, minyak goreng, tepung, telur, sayuran, dan buah-buahan segar.',
            'status_validasi' => 'menunggu',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('umkm')->insert([
            'id' => 3,
            'nik' => '1839890822775882',
            'upload_ktp' => 'ktp4.png',
            'pas_foto' => 'pas3.jpeg',
            'nama_usaha' => 'Toko Sinar Jaya',
            'alamat' => 'Jl. Harmoni No.17',
            'telepon' => '08234567213',
            'gambar_produk' => 'umkm5.png',
            'deskripsi' => 'Toko ini menyediakan berbagai macam kebutuhan pokok sehari-hari seperti beras, gula, minyak goreng, tepung, telur, sayuran, dan buah-buahan segar.',
            'status_validasi' => 'menunggu',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
