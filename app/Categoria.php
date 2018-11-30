<?php

namespace App;

use App\Categoria;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model{
	protected $table = 'categorias';
	protected $fillable = ['nombre'];

}
