<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grado_academico extends Model
{
    protected $table = 'grados_academicos';
    protected $primaryKey = 'id_grado';
    public $incrementing = true;
    protected $fillable = [
        'grado_academico'
    ];
}
