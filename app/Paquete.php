<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Paquete extends Model{
    protected $table = 'paquetes';
	protected $fillable = ['nombre','imagen','descuento','descripcion','status','precio'];
}
