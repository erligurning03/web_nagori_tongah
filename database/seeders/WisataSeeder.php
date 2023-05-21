<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('wisata')->insert([
            'id' => 1,
            'nama_wisata' => 'kebun jeruk',
            'ket_wisata' => 'Kebun jeruk merupakan destinasi wisata yang menawarkan pengalaman yang menyegarkan dan penuh keindahan bagi pengunjungnya.',
            'foto' => 'wisata.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('wisata')->insert([
            'id' => 2,
            'nama_wisata' => 'pondok budaya',
            'ket_wisata' => 'Pondok budaya adalah sebuah tempat yang didedikasikan untuk melestarikan, mempromosikan, dan mengenalkan kebudayaan lokal kepada pengunjungnya.',
            'foto' => 'wisata.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
