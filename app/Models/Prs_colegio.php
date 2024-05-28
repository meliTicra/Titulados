<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prs_colegio extends Model
{
    protected $table = 'prs_colegios';
    protected $primaryKey = 'id_colegio';
    public $incrementing = false;
    protected $fillable = [
        'id_colegio',
        'colegio',
        'tipo',
        'turno',
        'cod_dep',
        'cod_prov',
        'cod_loc',
        'id_pais',
        'fecha'
    ];
}
