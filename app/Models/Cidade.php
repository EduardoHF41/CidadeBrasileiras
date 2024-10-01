<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $fillable = ['id', 'nome', 'estado', 'populacao', 'area', 'pais'];
}
