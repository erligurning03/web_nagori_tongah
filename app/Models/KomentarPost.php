<?php

namespace App\Models;

use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KomentarPost extends Model
{
    use HasFactory;

    protected $table = 'komentar_post';

    protected $fillable = ['id', 'id_post', 'nik',  'isi_komentar'];

    public function post()
    {
        return $this->belongsTo(Post::class, 'id_post');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'nik', 'nik');
    }
}
