<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LugarDepartamento extends Model
{
    protected $table = 'lugar_departamento';
    protected $primaryKey = 'cod_dep';
    public $incrementing = true;
    protected $fillable = [
        'departamento',
        'cod_pais'
    ];
}
