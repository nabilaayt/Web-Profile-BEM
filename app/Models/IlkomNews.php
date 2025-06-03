<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IlkomNews extends Model
{
    use HasFactory;
    protected $table = 'ilkomnews';
    protected $fillable = ['judulilkomnews', 'date', 'isiilkomnews', 'imageilkomnews'];
    public $timestamps = false;
}
