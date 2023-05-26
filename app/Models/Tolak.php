<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tolak extends Model
{
    use HasFactory;

    protected $table = 'tolaks';
    protected $fillable = ['id_pengajuan', 'alasan'];

    public function pengajuan()
    {
        return $this->belongsTo(Pengajuan::class, 'id_pengajuan');
    }
}
