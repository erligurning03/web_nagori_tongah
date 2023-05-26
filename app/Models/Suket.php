<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suket extends Model
{
    use HasFactory;

    protected $table = 'sukets';
    protected $fillable = ['suket', 'syarat'];

    public function pengajuan()
    {
        return $this->hasMany(Pengajuan::class, 'id_suket');
    }
}
