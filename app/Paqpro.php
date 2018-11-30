<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paqpro extends Model{
    protected $table = 'paqpros';
	protected $fillable = ['paq_id','pro_id','cantidad'];
}
