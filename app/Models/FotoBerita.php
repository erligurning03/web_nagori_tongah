<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoBerita extends Model
{
    use HasFactory;

    protected $table = 'foto_berita';

    public function berita()
    {
        return $this->belongsTo(Berita::class, 'id_berita');
    }
}
