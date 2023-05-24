<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    public function perangkat_desa()
    {
        return $this->hasMany(PerangkatDesa::class);
    }
}