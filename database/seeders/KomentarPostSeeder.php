<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KomentarPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('komentar_post')->insert([
            'id' => 1,
            'id_post' => 2,
            'nik' => '1839890822775882',
            'isi_komentar' => 'Wah, mengerikan',
            'created_at' => '2023-05-20 09:00:00',
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('komentar_post')->insert([
            'id' => 2,
            'id_post' => 2,
            'nik' => '1516403572360194',
            'isi_komentar' => 'Semoga tidak ada yang terluka',
            'created_at' => '2023-05-20 10:00:00',
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('komentar_post')->insert([
            'id' => 3,
            'id_post' => 2,
            'nik' => '1297068228529557',
            'isi_komentar' => 'Sedih sekali',
            'created_at' => '2023-05-20 11:00:00',
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('komentar_post')->insert([
            'id' => 4,
            'id_post' => 3,
            'nik' => '1111111122222222',
            'isi_komentar' => 'Ice cream Mixue enak banget',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('komentar_post')->insert([
            'id' => 5,
            'id_post' => 3,
            'nik' => '1839890822775882',
            'isi_komentar' => 'Mixue bisa turunin harga kah? hehe',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('komentar_post')->insert([
            'id' => 6,
            'id_post' => 3,
            'nik' => '1516403572360194',
            'isi_komentar' => 'Saya hanya ingin menjadi pelanggan, bukan kasir hehehe',
            'created_at' => '2023-05-24 10:00:00',
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('komentar_post')->insert([
            'id' => 7,
            'id_post' => 3,
            'nik' => '1297068228529557',
            'isi_komentar' => 'Wah saya berminat sekali',
            'created_at' => '2023-05-25 08:00:00',
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('komentar_post')->insert([
            'id' => 8,
            'id_post' => 3,
            'nik' => '1234567890432156',
            'isi_komentar' => 'Wahh saya sangat tertarik',
            'created_at' => '2023-05-25 15:00:00',
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
