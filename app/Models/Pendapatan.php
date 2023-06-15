<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pendapatan extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $table = 'pendapatan_desa';
    protected $fillable = ['sumber', 'jumlah', 'tahun'];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logFillable()->logOnlyDirty();
        // Chain fluent methods for configuration options
    }
}
