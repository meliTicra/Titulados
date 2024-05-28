<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uatf_dato extends Model
{
    protected $table = 'uatf_datos';
    protected $primaryKey = 'id_ra';
    public $incrementing = false;
    protected $fillable = [
        'id_ra',
        'nro_dip',
        'paterno',
        'materno',
        'nombres',
        'id_sexo',
        'fec_nacimiento',
        'id_dep',
        'id_prov',
        'id_loc',
        'id_colegio',
        'egr_gestion',
        'tipo_nro_dip'
    ];
}
