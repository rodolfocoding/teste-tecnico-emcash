<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retangulo extends Model
{
    use HasFactory;

    protected $fillable = [
        'base',
        'altura',
        'area',
    ];
}
