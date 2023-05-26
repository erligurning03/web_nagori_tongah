<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    protected $table = 'periode';
    protected $fillable = ['periode_mulai','periode_akhir'];
    //public function perangkat_desa()
    // {
    //     //return $this->hasMany(PerangkatDesa::class);
    //     return $this->belongsToMany('app\Models\PerangkatDesa');
    // }
    public function perangkat_desa()
    {
        return $this->hasMany(PerangkatDesa::class, 'id_periode');
    }

}
