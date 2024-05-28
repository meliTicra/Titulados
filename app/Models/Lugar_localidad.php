<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LugarLocalidad extends Model
{
    protected $table = 'lugar_localidad';
    protected $primaryKey = 'cod_loc';
    public $incrementing = true;
    protected $fillable = [
        'cod_prov',
        'cod_dep',
        'cod_pais',
        'localidad'
    ];
}
