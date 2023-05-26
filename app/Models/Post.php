<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nik', 'judul', 'judul', 'isi_post', 'jumlah_like', 'jumlah_komentar'];


    protected $table = 'post';

    public function user()
    {
        return $this->belongsTo(User::class, 'nik', 'nik');
    }

    public function fotoPosts()
    {
        return $this->hasMany(FotoPost::class, 'id_post');
    }

    public function likes()
    {
        return $this->hasMany(LikePost::class, 'id_post');
    }

    public function isLikedByUser()
    {
        $userNik = Auth::user()->nik;

        return LikePost::where('id_post', $this->id)
            ->where('nik', $userNik)
            ->exists();
    }

    public function komentarPosts()
    {
        return $this->hasMany(KomentarPost::class, 'id_post');
    }

    public function laporPost()
    {
        return $this->hasMany(LaporPost::class, 'id_post');
    }

}
