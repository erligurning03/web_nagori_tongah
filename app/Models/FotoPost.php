<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoPost extends Model
{
    use HasFactory;

    protected $table = 'foto_post';

    public function post()
    {
        return $this->belongsTo(Post::class, 'id_post');
    }
}
