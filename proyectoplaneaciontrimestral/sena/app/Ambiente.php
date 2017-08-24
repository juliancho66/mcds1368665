<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ambiente extends Model
{
    protected $fillable = [
        'nombre','estado', 'descripcion',
    ];
}

