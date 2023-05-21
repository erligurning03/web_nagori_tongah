<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            PengajuanSeeder::class,
            PersyaratanSeeder::class,
            BerkasPersyaratanSeeder::class,
            WisataSeeder::class,
            GaleriSeeder::class,
            PeriodeSeeder::class,
            PerangkatDesaSeeder::class,
            BpdSeeder::class,
            VisiMisiSeeder::class,
            KetDesaSeeder::class,
            PendapatanSeeder::class,
            BidPelaksanaanSeeder::class,
            BidPemberdayaanSeeder::class,
            BidPembiayaanSeeder::class,
            BidPembinaanSeeder::class,
            BidPenanggulanganSeeder::class,
            BidPenyelenggaraanSeeder::class,
        ]);
    }
}
