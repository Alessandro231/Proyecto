<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pokemon extends Model
{
    protected $table = "pokemon";
    protected $fillable = [
        'nombre','imagen', 'tipo', 'categoria', 'habilidad','debilidad','url'
    ];
}
