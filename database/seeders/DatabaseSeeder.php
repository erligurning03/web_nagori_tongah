<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\LaporPost;
use App\Models\Umkm;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            PostSeeder::class,
            FotoPostSeeder::class,
            KomentarPostSeeder::class,
            LikePostSeeder::class,
            BeritaSeeder::class,
            FotoBeritaSeeder::class,
            KomentarBeritaSeeder::class,
            WisataSeeder::class,
            GaleriSeeder::class,
            PeriodeSeeder::class,
            PerangkatDesaSeeder::class,
            BpdSeeder::class,
            VisiMisiSeeder::class,
            KetDesaSeeder::class,
            PendapatanSeeder::class,
            PengeluaranSeeder::class,
            SuketSeeder::class,
            PengajuanSeeder::class,
            PersyaratanSeeder::class,
            LaporPostSeeder::class,
            UmkmSeeder::class,
        ]);
    }
}
