<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersyaratanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('persyaratan')->insert([
            'id' => 1,
            'nama_persy' => 'persyaratan akta lahir',
            'desk_persy' => 'Anda harus menyiapkan surat ketengan lahir, kartu identitas kedua orang tua(KTP), surat nikah orang tua, surat keterangan pengakuan anak',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('persyaratan')->insert([
            'id' => 2,
            'nama_persy' => 'domisili',
            'desk_persy' => 'Anda harus menyiapkan kartus identas anda(KTP), bukti tempat tinggdal, surat permohonan, pas foto',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('persyaratan')->insert([
            'id' => 3,
            'nama_persy' => 'ktp',
            'desk_persy' => 'Anda harus menyiapkan surat pengantar, kartu keluarga (KK), surat keterangan domisili, kartu idenitas lain, pas foto',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

    }
}
