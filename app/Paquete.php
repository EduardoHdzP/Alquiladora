<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Paquete extends Model{
	protected $primaryKey = 'paq_id';
    protected $table = 'paquetes';
	protected $fillable = ['nombre','imagen','descuento','descripcion','status','precio'];
}
