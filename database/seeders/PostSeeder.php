<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('post')->insert([
            'id' => 1,
            'nik' => '1234567890432156',
            'judul' => 'Jalan Rusak',
            'isi_post' => 'Sedang rusak jalan Mawar, tolong hati-hati jika melewati jalan itu',
            'jumlah_like' => 100,
            'jumlah_komentar' => 0,
            'created_at' => '2023-04-04 08:00:00',
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('post')->insert([
            'id' => 2,
            'nik' => '1111111122222222',
            'judul' => 'Kebakaran',
            'isi_post' => 'Sedang terjadi kebakaran di Jalan Halat',
            'jumlah_like' => 100,
            'jumlah_komentar' => 3,
            'created_at' => '2023-05-20 08:00:00',
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('post')->insert([
            'id' => 3,
            'nik' => '1234567890123456',
            'judul' => 'Lowongan pekerjaan',
            'isi_post' => 'Dibuka lowongan pekerjaan untuk Toko Mixue, hubungi contact person: 081234456678',
            'jumlah_like' => 5129,
            'jumlah_komentar' => 5,
            'created_at' => '2023-05-24 08:00:00',
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
