<?php

namespace App;

use App\Producto;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model{
	protected $primaryKey = 'pro_id';
    protected $table = 'productos';
	protected $fillable = ['cat_id','nombre','status','ganancia','imagen','medidas','descripcion'];

}
