<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller{

	public function index(){
		// if (request()->has("empty")) {
		// 	$productos=[];
		// } else {
		// 	$productos=[
		// 		"Silla",
		// 		"Mesas",
		// 		"Equipo de audio",
		// 		"<script>alert('Hola mundo');</script>"
		// 	];
		// }
		
		// return view("productos",[
		// 	"productos"=>$productos,
		// 	"titulo"=>"Listado de Productos"
		// ]);
		return view("productos.productos");
	}

	public function show($id){
		return "Detalles de producto: {$id}";
	}

	public function create(){
		return view("productos/registrar");
	}
    
}
