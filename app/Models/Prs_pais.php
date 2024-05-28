<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prs_pais extends Model
{
    protected $table = 'prs_pais';
    protected $fillable = [
        'pais'
    ];
}