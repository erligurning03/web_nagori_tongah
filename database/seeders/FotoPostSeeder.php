<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FotoPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('foto_post')->insert([
            'id' => 1,
            'id_post' => 1,
            'foto' => 'jalan_rusak.jpg',
            'created_at' => '2023-04-04 08:00:00',
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('foto_post')->insert([
            'id' => 2,
            'id_post' => 2,
            'foto' => 'kebakaran.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('foto_post')->insert([
            'id' => 3,
            'id_post' => 3,
            'foto' => 'mixue1.webp',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('foto_post')->insert([
            'id' => 4,
            'id_post' => 3,
            'foto' => 'mixue2.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
