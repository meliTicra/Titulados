<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class graduados_titulado extends Model
{
    protected $table = 'graduados_titulados';
    protected $primaryKey = 'id_alumno';
    public $incrementing = true;
    protected $fillable = [
        'fecha_defensa',
        'hora_defensa',
        'titulo_tema',
        'tipo_graduacion',
        'nota',
        'fecha_DA',
        'fecha_TPN',
        'id_grado'
    ];
}
