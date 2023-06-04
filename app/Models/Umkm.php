<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    use HasFactory;
    protected $table = 'umkm'; 

    protected $fillable = ['nik', 'upload_ktp', 'pas_foto', 'nama_usaha', 'alamat', 'telepon', 'gambar_produk', 'deskripsi', 'status_validasi'];
}
