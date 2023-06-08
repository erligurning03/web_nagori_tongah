<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerangkatDesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('perangkat_desa')->insert([
            'id' => 1,
            'id_periode' => 2,
            'nama' => 'Gideo Manurung',
            'jabatan' => 'Kepala Desa',
            'foto' => 'gideon.jpeg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('perangkat_desa')->insert([
            'id' => 2,
            'id_periode' => 2,
            'nama' => 'Putrija Malau',
            'jabatan' => 'Sekretaris Desa',
            'foto' => 'putrija.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('perangkat_desa')->insert([
            'id' => 3,
            'id_periode' => 2,
            'nama' => 'Erli Gurning',
            'jabatan' => 'Bendahara Desa',
            'foto' => 'erli.png',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('perangkat_desa')->insert([
            'id' => 4,
            'id_periode' => 2,
            'nama' => 'Gabryyelle Ninna',
            'jabatan' => 'Kaur keuangan',
            'foto' => 'gaby.jpeg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('perangkat_desa')->insert([
            'id' => 5,
            'id_periode' => 2,
            'nama' => 'Putri Anisa',
            'jabatan' => 'Kaur Pembangunan',
            'foto' => 'putan.jpeg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('perangkat_desa')->insert([
            'id' => 6,
            'id_periode' => 2,
            'nama' => 'Agnes Tryani Simbolon',
            'jabatan' => 'Gamot 5',
            'foto' => 'agnes.jpeg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);


    }
}
