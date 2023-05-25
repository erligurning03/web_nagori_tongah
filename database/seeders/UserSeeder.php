<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user')->insert([
            'nik' => '1111122222333334',
            'nama_lengkap' => 'Admin',
            'username' => 'admin123',
            'password' => Hash::make('admin123'),
            'email' => 'admin@gmail.com',
            'telepon' => '081234567890',
            'role' => 'admin',
            'foto_profil' => 'img/admin.jpg',
            'status_akun' => 'terdaftar',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('user')->insert([
            'nik' => '1234567890123456',
            'nama_lengkap' => 'Putrija Malau',
            'username' => 'putrija.m',
            'password' => Hash::make('12345678'),
            'email' => 'putrija@gmail.com',
            'telepon' => '081234567890',
            'role' => 'warga',
            'foto_profil' => 'img/foto_profil.jpg',
            'status_akun' => 'terdaftar',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('user')->insert([
            'nik' => '1234567890432156',
            'nama_lengkap' => 'Erli Gurning',
            'username' => 'earlym',
            'password' => Hash::make('12345678'),
            'email' => 'erli@gmail.com',
            'telepon' => '081234568765',
            'role' => 'warga',
            'foto_profil' => 'img/foto_profil.jpg',
            'status_akun' => 'terdaftar',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('user')->insert([
            'nik' => '1111111122222222',
            'nama_lengkap' => 'Ninna Siahaan',
            'username' => 'ninna.s',
            'password' => Hash::make('12345678'),
            'email' => 'ninna@gmail.com',
            'telepon' => '081234567890',
            'role' => 'warga',
            'foto_profil' => 'img/foto_profil2.jpg',
            'status_akun' => 'terdaftar',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
