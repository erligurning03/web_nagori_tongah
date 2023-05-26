<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerangkatDesa extends Model
{
    use HasFactory;
    protected $table = 'perangkat_desa';
    protected $fillable = ['nama', 'jabatan', 'id_periode', 'foto'];

    // public function periode()
    // {
    //     // return $this->belongsTo(Periode::class);
    //     return $this->belongsToMany('app\Models\Periode');
    // }
    public function periode()
    {
        return $this->belongsTo(Periode::class, 'id_periode');
    }
}
