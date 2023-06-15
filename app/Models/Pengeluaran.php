<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Spatie\Activitylog\LogOptions;


class Pengeluaran extends Model
{
    use HasFactory;
    use LogsActivity;
    // use HasFactory, LogsActivity;

    protected $table = 'pengeluaran_desa';
    protected $fillable = ['bidang', 'keterangan', 'jumlah', 'tahun'];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logFillable()->logOnlyDirty();
        // Chain fluent methods for configuration options
    }
}
