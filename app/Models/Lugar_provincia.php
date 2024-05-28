<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LugarProvincia extends Model
{
    protected $table = 'lugar_provincia';
    protected $fillable = [
        'cod_dep',
        'cod_prov',
        'provincia',
        'cod_pais'
    ];
}
