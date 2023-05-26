<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;

    protected $table = 'pengajuans';

    protected $fillable = ['nik', 'id_suket', 'deskripsi', 'status_pengajuan'];

    public function user()
    {
        return $this->belongsTo(User::class, 'nik', 'nik');
    }

    public function suket()
    {
        return $this->belongsTo(Suket::class, 'id_suket');
    }

    public function persyaratan()
    {
        return $this->hasMany(Persyaratan::class, 'id_pengajuan');
    }

    public function tolakan()
{
    return $this->hasMany(Tolak::class, 'id_pengajuan');
}

}
