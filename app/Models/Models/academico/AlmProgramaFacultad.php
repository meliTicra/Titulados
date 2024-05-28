<?php

namespace App\Models\Models\academico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlmProgramaFacultad extends Model
{
    protected $table = 'academico.alm_programas_facultades';
    protected $primaryKey = 'id_facultad';
    public $incrementing = true;
    protected $fillable = [
        'facultad'
    ];
}

