<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($filtro){
        $ped=null;

        if ($filtro=="all") {
            $ped=DB::select("
                SELECT concat(persona.nombre,' ',persona.app,' ',persona.apm) AS persona,persona.tel ,destino.direccion, destino.nombre AS destino, pedidos.*
                FROM destino
                    INNER JOIN pedidos ON pedidos.des_id = destino.des_id
                    INNER JOIN usuario ON destino.usu_id = usuario.usu_id
                    INNER JOIN persona ON usuario.per_id = persona.per_id
                ORDER BY pedidos.created_at DESC"
            );
        }elseif ($filtro=="today") {
             $ped=DB::select("
                SELECT concat(persona.nombre,' ',persona.app,' ',persona.apm) AS persona,persona.tel, destino.direccion, destino.nombre AS destino, pedidos.*
                FROM destino
                    INNER JOIN pedidos ON pedidos.des_id = destino.des_id
                    INNER JOIN usuario ON destino.usu_id = usuario.usu_id
                    INNER JOIN persona ON usuario.per_id = persona.per_id
                WHERE pedidos.fecha=curdate()
                ORDER BY pedidos.created_at DESC"
            );

        }elseif ($filtro=="unconfirmed") {
            
        }
        

        // print_r($ped);

        return view("pedidos.pedidos",compact('ped'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
