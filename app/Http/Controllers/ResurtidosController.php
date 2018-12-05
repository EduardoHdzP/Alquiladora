<?php

namespace App\Http\Controllers;

use App\Resurtido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResurtidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $productos=DB::select("
            select * 
                from productos 
            where status=1;
            ");
        return view("resurtidos.productos",compact("productos"));
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
    public function store(Request $request){
    	$res=$request->all();
    	print_r($res);
        $r=new Resurtido;
        $r->pro_id=$res["pro_id"];
        $r->cantidad=$res["cantidad"];
        $r->ppu=$res["ppu"];
        $r->save();
        return redirect()->route("showResurtidos");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(){
        $res=DB::select("
    		SELECT productos.pro_id, productos.nombre, resurtidos.cantidad, resurtidos.ppu, resurtidos.created_at AS fecha
			FROM productos
			    INNER JOIN resurtidos ON resurtidos.pro_id = productos.pro_id
			ORDER BY resurtidos.created_at DESC"

        );

        return view("resurtidos.resurtidos",compact('res'));
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

    public function search(Request $request,$categoria){
        $productos;
        if ($categoria!="Sillas" &&
            $categoria!="Mesas" &&
            $categoria!="Lonas" &&
            $categoria!="Carpas"
        ) {
            $bus=$request->all();
            $nombre=$bus["buscar"];
            $productos=DB::select("select * from productos where nombre like '%".$nombre."%'");
        } else {
            $cat=DB::select("select cat_id from  categorias where nombre='".$categoria."'");
            $productos=DB::select("
                SELECT * 
                    FROM productos p
                WHERE status=1 and cat_id=".$cat[0]->cat_id
            );
        }
        return view("resurtidos.productos",compact("productos"));
     }
}
