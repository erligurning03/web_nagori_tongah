<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

// class UserSeeder extends Seeder
// {
//     /**
//      * Run the database seeds.
//      */
//     public function run(): void
//     {
//         // DB::table('user')->insert([
//         //     'nik' => '1111122222333334',
//         //     'nama_lengkap' => 'Admin',
//         //     'username' => 'admin123',
//         //     'password' => Hash::make('admin123'),
//         //     'email' => 'admin@gmail.com',
//         //     'telepon' => '081234567890',
//         //     'role' => 'admin',
//         //     'foto_profil' => 'img/admin.jpg',
//         //     'status_akun' => 'terdaftar',
//         //     'created_at' => date('Y-m-d H:i:s'),
//         //     'updated_at' => date('Y-m-d H:i:s')
//         // ]);

//         // DB::table('user')->insert([
//         //     'nik' => '1234567890123456',
//         //     'nama_lengkap' => 'Putrija Malau',
//         //     'username' => 'putrija',
//         //     'password' => Hash::make('12345678'),
//         //     'email' => 'putrija@gmail.com',
//         //     'telepon' => '081234567890',
//         //     'role' => 'warga',
//         //     'foto_profil' => 'img/foto_profil.jpg',
//         //     'status_akun' => 'terdaftar',
//         //     'created_at' => date('Y-m-d H:i:s'),
//         //     'updated_at' => date('Y-m-d H:i:s')
//         // ]);

//         // DB::table('user')->insert([
//         //     'nik' => '1234567890432156',
//         //     'nama_lengkap' => 'Erli Gurning',
//         //     'username' => 'earlym',
//         //     'password' => Hash::make('12345678'),
//         //     'email' => 'erli@gmail.com',
//         //     'telepon' => '081234568765',
//         //     'role' => 'warga',
//         //     'foto_profil' => 'img/foto_profil.jpg',
//         //     'status_akun' => 'terdaftar',
//         //     'created_at' => date('Y-m-d H:i:s'),
//         //     'updated_at' => date('Y-m-d H:i:s')
//         // ]);

//         // DB::table('user')->insert([
//         //     'nik' => '1611111122222222',
//         //     'nama_lengkap' => 'Ninna Siahaan',
//         //     'username' => 'ninna.s',
//         //     'password' => Hash::make('12345678'),
//         //     'email' => 'ninna@gmail.com',
//         //     'telepon' => '081234567890',
//         //     'role' => 'warga',
//         //     'foto_profil' => 'img/foto_profil2.jpg',
//         //     'status_akun' => 'terdaftar',
//         //     'created_at' => date('Y-m-d H:i:s'),
//         //     'updated_at' => date('Y-m-d H:i:s')
//         // ]);
        
//         // DB::table('user')->insert([
//         //     'nik' => '1111111122222226',
//         //     'nama_lengkap' => 'Agnes Simbolon',
//         //     'username' => 'agnes',
//         //     'password' => Hash::make('12345678'),
//         //     'email' => 'agnes@gmail.com',
//         //     'telepon' => '081231231231',
//         //     'role' => 'warga',
//         //     'foto_profil' => 'img/foto_profil2.jpg',
//         //     'status_akun' => 'terdaftar',
//         //     'created_at' => date('Y-m-d H:i:s'),
//         //     'updated_at' => date('Y-m-d H:i:s')
//         // ]);

//         // DB::table('user')->insert([
//         //     'nik' => '1116111122222222',
//         //     'nama_lengkap' => 'Putri Anis',
//         //     'username' => 'ninna.s',
//         //     'password' => Hash::make('12345678'),
//         //     'email' => 'ninna@gmail.com',
//         //     'telepon' => '081234567890',
//         //     'role' => 'warga',
//         //     'foto_profil' => 'img/foto_profil2.jpg',
//         //     'status_akun' => 'terdaftar',
//         //     'created_at' => date('Y-m-d H:i:s'),
//         //     'updated_at' => date('Y-m-d H:i:s')
//         // ]);

//         // DB::table('user')->insert([
//         //     'nik' => '1111111122226222',
//         //     'nama_lengkap' => 'Gideon Manurung',
//         //     'username' => 'ninna.s',
//         //     'password' => Hash::make('12345678'),
//         //     'email' => 'ninna@gmail.com',
//         //     'telepon' => '081234567890',
//         //     'role' => 'warga',
//         //     'foto_profil' => 'img/foto_profil2.jpg',
//         //     'status_akun' => 'terdaftar',
//         //     'created_at' => date('Y-m-d H:i:s'),
//         //     'updated_at' => date('Y-m-d H:i:s')
//         // ]);

//         $faker = Faker::create();

//         for ($i = 0; $i < 100; $i++) {
//             $nik = $faker->numerify('################'); // Menghasilkan NIK acak dengan panjang 16 digit            
//             $nama = $faker->name();
//             $username = generateRandomUsername();
//             $password = Hash::make(generateRandomPassword());
//             $email = generateRandomEmail($nama);
//             $telepon = generateRandomTelepon();
        
//             DB::table('users')->insert([
//                 'nik' => $nik,
//                 'nama_lengkap' => $nama,
//                 'username' => $username,
//                 'password' => $password,
//                 'email' => $email,
//                 'telepon' => $telepon,
//                 'role' => 'warga',
//                 'foto_profil' => 'img/foto_profil2.jpg',
//                 'status_akun' => 'terdaftar',
//                 'created_at' => date('Y-m-d H:i:s'),
//                 'updated_at' => date('Y-m-d H:i:s')
//             ]);
//         }
        
//         function generateRandomNik()
//         {
//             // Menghasilkan NIK acak dengan panjang 16 digit
//             return mt_rand(1000000000000000, 9999999999999999);
//         }
        
//         function generateRandomUsername()
//         {
//             // Menghasilkan username acak dengan panjang 8 karakter
//             return Str::random(8);
//         }
        
//         function generateRandomPassword()
//         {
//             // Menghasilkan password acak dengan panjang 8 karakter
//             return str_random(8);
//         }
        
//         function generateRandomEmail($nama)
//         {
//             // Menghasilkan email acak berdasarkan nama pengguna
//             $username = strtolower(str_replace(' ', '', $nama));
//             return $username . '@example.com';
//         }
        
//         function generateRandomTelepon()
//         {
//             // Menghasilkan nomor telepon acak dengan panjang 11 digit
//             return '08' . mt_rand(100000000, 999999999);
//         }
//     }
// }

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('user')->insert([
            'nik' => '1195861827735748',
            'nama_lengkap' => 'Admin',
            'username' => 'admin123',
            'password' => Hash::make('admin123'),
            'email' => 'admin@gmail.com',
            'telepon' => '081234567890',
            'role' => 'admin',
            'foto_profil' => 'admin.jpg',
            'status_akun' => 'terdaftar',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('user')->insert([
            'nik' => '1234567890123456',
            'nama_lengkap' => 'Putrija Malau',
            'username' => 'putrija',
            'password' => Hash::make('putrija'),
            'email' => 'putrija@gmail.com',
            'telepon' => '081234567890',
            'role' => 'warga',
            'foto_profil' => 'putrija.jpg',
            'status_akun' => 'terdaftar',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('user')->insert([
            'nik' => '1234567890432156',
            'nama_lengkap' => 'Erli Gurning',
            'username' => 'erli',
            'password' => Hash::make('erlicantik'),
            'email' => 'erli@gmail.com',
            'telepon' => '081234568765',
            'role' => 'warga',
            'foto_profil' => 'erli.png',
            'status_akun' => 'terdaftar',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('user')->insert([
            'nik' => '1111111122222222',
            'nama_lengkap' => 'Gabryelle Ninna Deffanya Siahaan',
            'username' => 'ninna.s',
            'password' => Hash::make('12345678'),
            'email' => 'ninna@gmail.com',
            'telepon' => '081234567890',
            'role' => 'warga',
            'foto_profil' => 'ninna.jpg',
            'status_akun' => 'terdaftar',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('user')->insert([
            'nik' => '1839890822775882',
            'nama_lengkap' => 'Putri Anisa Lina Br Hasibuan',
            'username' => 'putri_onz',
            'password' => Hash::make('kotakisaran123'),
            'email' => 'putri@gmail.com',
            'telepon' => '08955425206',
            'role' => 'warga',
            'foto_profil' => 'putri.jpg',
            'status_akun' => 'terdaftar',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('user')->insert([
            'nik' => '1516403572360194',
            'nama_lengkap' => 'Agnes Tryani Simbolon',
            'username' => 'agnes',
            'password' => Hash::make('agnes'),
            'email' => 'agnes@gmail.com',
            'telepon' => '08425637374',
            'role' => 'warga',
            'foto_profil' => 'agnes.jpg',
            'status_akun' => 'terdaftar',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('user')->insert([
            'nik' => '1297068228529557',
            'nama_lengkap' => 'Gideon Manurung',
            'username' => 'gideon',
            'password' => Hash::make('gideon'),
            'email' => 'gideon@gmail.com',
            'telepon' => '08287481179',
            'role' => 'warga',
            'foto_profil' => 'gideon.jpg',
            'status_akun' => 'terdaftar',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 20; $i++) {
            $nik = $faker->numerify('################'); // Menghasilkan NIK acak dengan panjang 16 digit
            $nama = $faker->name();
            $username = Str::random(8);
            $password = Hash::make(Str::random(8));
            $email = $this->generateRandomEmail($nama);
            $telepon = $this->generateRandomTelepon();

            DB::table('user')->insert([
                'nik' => $nik,
                'nama_lengkap' => $nama,
                'username' => $username,
                'password' => $password,
                'email' => $email,
                'telepon' => $telepon,
                'role' => 'warga',
                'foto_profil' => 'foto_profil.webp',
                'status_akun' => 'terdaftar',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
    }

    // Fungsi-fungsi lainnya

    function generateRandomPassword()
    {
        // Menghasilkan password acak dengan panjang 8 karakter
        return Str::random(8);
    }

    function generateRandomEmail($nama)
    {
        // Menghasilkan email acak berdasarkan nama pengguna
        $username = strtolower(str_replace(' ', '', $nama));
        $emailProvider = ['example.com', 'gmail.com', 'yahoo.com', 'hotmail.com'];
        $randomProvider = $emailProvider[array_rand($emailProvider)];
        return $username . '@' . $randomProvider;
    }

    function generateRandomTelepon()
    {
        // Menghasilkan nomor telepon acak dengan panjang 11 digit
        return '08' . mt_rand(100000000, 999999999);
    }
}