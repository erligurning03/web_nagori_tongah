<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BpdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bpd')->insert([
            'id' => 1,
            'id_periode' => 2,
            'nama' => 'Riden Purba',
            'jabatan' => 'Ketua',
            'foto' => 'foto.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('bpd')->insert([
            'id' => 2,
            'id_periode' => 2,
            'nama' => 'Jarunggu Purba',
            'jabatan' => 'Wakil Ketua',
            'foto' => 'foto.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('bpd')->insert([
            'id' => 3,
            'id_periode' => 2,
            'nama' => 'Jadialam Purba',
            'jabatan' => 'Sekretaris',
            'foto' => 'foto.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
