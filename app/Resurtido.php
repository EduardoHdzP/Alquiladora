<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resurtido extends Model{
	protected $table = 'resurtidos';
	protected $fillable = ['pro_id','cantidad','ppu'];
    //
}
