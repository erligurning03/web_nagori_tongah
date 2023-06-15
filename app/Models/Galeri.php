<?php

namespace App\Models;

//use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Model;
//use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Galeri extends Model
{
    protected $fillable = ['gambar'];
    use HasFactory;
    //use LogsActivity;

    protected $table = 'galeri';
    // public function getActivitylogOptions(): LogOptions
    // {
    //     return LogOptions::defaults()
    //     ->logOnly(['gambar'])
    //     ->logFillable()->logOnlyDirty();
    //     // Chain fluent methods for configuration options
    // }
}
