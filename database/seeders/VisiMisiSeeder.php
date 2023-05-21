<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VisiMisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('visi_misi')->insert([
            'id' => 1,
            'id_periode' => 2,
            'visi' => 'Meningkatkan kesejahteraan masyarakat yang bermartabat dan religius dengan mengembangkan potensi sumber daya. ',
            'misi' => 'Memberikan pelayanan yang positif kepada masyarakat dan membuat rencana pembangunan diberbagai sektor baik pertanian maupun perekonomian',
        ]);
    }
}
