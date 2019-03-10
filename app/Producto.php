<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['id','nombre'];

    protected $attributes = [
    	'estado'	=>	'a',
    	'sexo'		=>	'u'
    ];
}
