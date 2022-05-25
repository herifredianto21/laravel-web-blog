<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    // public $timestamps = false;
    protected $table = 'artikel';
    protected $fillable = [
        'id',
        'nama',
        'umur',
        'lama_penyakit',
        'no_telp',
        'keluhan',
        'domisili',
        'created_at',
        'update_at',
    ];
}
