<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class birokrasi extends Model
{
    use HasFactory;
    protected $table = 'birokrasi';
    protected $fillable = ['judul-birokrasi', 'lokasi-birokrasi', 'date-birokrasi', 'isibirokrasi', 'image-birokrasi'];
    public $timestamps = false;
}
