<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
    protected $fillable = ['id','nombre','unidad_medida','cantidad_base','costo','estado'];

    protected $attributes = [
    	'estado'=>'a'
    ];
}
