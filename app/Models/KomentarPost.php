<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KomentarPost extends Model
{
    use HasFactory;

    protected $table = 'komentar_post';

    protected $fillable = ['id_post', 'isi_komentar',];

    public function post()
    {
        return $this->belongsTo(Post::class, 'id_post');
    }
}
