<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    use HasFactory;
    protected $table = 'berita';
    protected $fillable = ['judulberita', 'lokasi', 'date', 'isiberita', 'imageberita'];
    public $timestamps = false;
}
