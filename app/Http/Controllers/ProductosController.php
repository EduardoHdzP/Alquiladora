<?php

namespace App\Http\Controllers;


use App\Producto;
use App\Resurtido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductosController extends Controller{
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
        // print_r($productos);
        return view("productos.productos",compact("productos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $cateproduc=array();

        $categorias=DB::select("
            select cat_id idcat,nombre categoria 
            from categorias
            ");
        foreach ($categorias as $cat) {
            $producto=DB::select("
                select nombre producto 
                    from productos 
                where status=1 and cat_id=".$cat->idcat
                );
            array_push($producto, $cat);
            array_push($cateproduc, $producto);
        }

        // var_dump($cateproduc);


        $productos=DB::select("
                select c.cat_id idCat,c.nombre categoria,p.nombre producto 
                    from productos p,categorias c 
                where status=1  and c.cat_id=p.cat_id 
                order by p.cat_id
            ");

        $data=DB::select("
                SELECT cat_id id, nombre
                    FROM categorias
            ");
        // print_r($productos);
        return view("productos/registrar",compact("data"),compact("cateproduc"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $producto=$request->all();
        $p=new Producto;
        $p->cat_id=$producto["categoria"];
        $p->nombre=$producto["nombre"];
        $p->status=1;
        // $p->costo=$producto["costo"];
        $p->ganancia=$producto["ganancia"];
        $p->imagen=$producto["imagen"];
        $p->medidas=$producto["medidas"];
        $p->descripcion=$producto["descripcion"];
        $p->save();


        $r=new Resurtido;
        $r->pro_id=$p->pro_id;
        $r->cantidad=$producto["cantidad"];
        $r->ppu=$producto["ppu"];
        $r->save();

        print_r($producto);
        return "Producto registrado correctamente";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $p=DB::select("
                SELECT p.*, c.nombre categoria
                    FROM productos p, categorias c 
                WHERE p.cat_id=c.cat_id and p.pro_id=".$id
            );
        // print_r($p);
        return view("productos.detalles",compact("p"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $data=DB::select("
                SELECT cat_id id, nombre
                    FROM categorias"
            );
        $producto=DB::select("
                SELECT p.*, c.nombre categoria
                    FROM productos p, categorias c 
                WHERE p.cat_id=c.cat_id and pro_id=".$id
            );
        return view("productos.modificar",compact("data","producto"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $p=$request->all();
        $pr=Producto::find($id);
        $pr->nombre=$p["nombre"];
        // $pr->costo=$p['costo'];
        $pr->ganancia=$p['ganancia'];
        $pr->descripcion=$p['descripcion'];
        $pr->medidas=$p['medidas'];
        if ($p["imagen"]) {
            $pr->imagen=$p['imagen'];
        }
        $pr->cat_id=$p['categoria'];
        if ($pr->save()) {
            return redirect()->route("index",["update"=>"ok"]);
        }else{
            return redirect()->route("index");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $p=Producto::find($id);
        $p->status=0;
        $p->save();
        return "Eliminado logicamente";
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
        
        
        
        return view("productos.listadoOperaciones",compact("productos"));
     }


     public function operations(){
        $productos=DB::select("
            select * 
                from productos 
            where status=1;
            ");
        // print_r($productos);
        return view("productos.listadoOperaciones",compact("productos"));
    }
}
