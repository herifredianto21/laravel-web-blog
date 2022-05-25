<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viewartikel extends Model
{
    use HasFactory;
    protected $table = 'pengunjung_artikels';
    protected $fillable = [
        'id',
        'ip',
        'slug',
        'countryName',
        'regionName',
        'cityName',
        'tanggal',
        'created_at',
        'updated_at',
    ];
}
