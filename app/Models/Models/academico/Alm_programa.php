<?php

namespace App\Models\Models\academico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alm_programa extends Model
{
    protected $table = 'academico.alm_programas';
    protected $primaryKey = 'id_programa';
    public $incrementing = false;
    protected $fillable = [
        'id_programa',
        'programa',
        'id_facultad',
        'tipo',
        'sede'
    ];
}
