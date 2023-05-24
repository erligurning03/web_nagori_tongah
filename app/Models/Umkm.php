<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    use HasFactory;
    protected $table = 'umkm'; 

    protected $fillable = ['nama_usaha', 'alamat', 'gambar_produk', 'telepon', 'deskripsi'];
    public function getGambarAttribute($value)
    {
        if (!$value) {
            return 'default.jpg';
        }

        return 'path/to/images/' . $value;
    }

}
