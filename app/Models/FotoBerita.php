<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FotoBerita extends Model
{
    use HasFactory;

    protected $table = 'foto_berita';


    public function berita()
    {
        // return $this->belongsTo(Berita::class, 'id_berita');
    }
}
