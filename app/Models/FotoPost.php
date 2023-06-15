<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FotoPost extends Model
{
    use HasFactory;


    protected $table = 'foto_post';

    public function post()
    {
        return $this->belongsTo(Post::class, 'id_post');
    }

}
