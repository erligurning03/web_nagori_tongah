<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikePost extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'id_post', 'nik'];

    protected $table = 'like_post';

    public function post()
    {
        return $this->belongsTo(Post::class, 'id_post');
    }
}
