<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporPost extends Model
{
    use HasFactory;

    protected $table = 'lapor_post';

    protected $fillable = ['id', 'id_post', 'nik',  'isi_laporan'];

    public function post()
    {
        return $this->belongsTo(Post::class, 'id_post');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'nik', 'nik');
    }
}
