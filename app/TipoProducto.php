<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoProducto extends Model
{
    protected $fillable = ['id','nombre'];

    protected $attributes = [
    	'estado'	=>	'a'
    ];
}
