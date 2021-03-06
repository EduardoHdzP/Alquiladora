<?php

namespace App\Http\Controllers;

use App\Paquete;
use App\Paqpro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaquetesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $paquetes=null;
        $paquetes=DB::select("
            SELECT * 
                FROM paquetes 
            WHERE status=1;"
        );

        // print_r($paquetes);
        return view("paquetes.paquetes",compact('paquetes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $paquetes=null;
        $paquetes=DB::select("
            SELECT * 
                FROM paquetes 
            WHERE status=1;"
        );

        return view("paquetes.registrar",compact('paquetes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $pa=$request->all();
        print_r($pa);

        $p=new Paquete;
	// protected $fillable = ['nombre','descuento','descripcion','status','fecha'];
	$date = new \DateTime();
	$p->nombre=$pa["nombre"];
	$p->descripcion=$pa["descripcion"];
    $p->imagen=$pa["imagen"];
	$p->precio=0;
	$p->descuento=$pa["descuento"];
	$p->status=1;
	// $p->fecha=$date->format('Y-m-d'); 
	$p->save();
	$paC=DB::select('SELECT * FROM paquetes WHERE paq_id='.$p->paq_id);
    // return view('paquetes.productoPaquete',compact('pa',["registro"=>"ok"]));
    return redirect()->route("addProductPackage", $parameters = ["id"=>$p->paq_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $paquetes=DB::select("
            SELECT * 
                FROM paquetes
            WHERE paq_id=".$id
        );

        $pa=DB::select("
            SELECT paqpro_id,paquetes.paq_id,paquetes.nombre paquete,productos.nombre producto,resurtidos.ppu,paqpros.cantidad,paquetes.*, productos.*
                FROM productos
                    LEFT JOIN paqpros ON paqpros.pro_id = productos.pro_id
                    LEFT JOIN paquetes ON paqpros.paq_id = paquetes.paq_id
                    LEFT JOIN resurtidos on productos.pro_id=resurtidos.pro_id
            WHERE paquetes.paq_id=".$id
        );
        // print_r($pa);

        return view("paquetes.detalles",compact('paquetes','pa'));
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
    public function destroy($id){
        print_r("Clave:".$id);
        $p=Paquete::find($id);
        $p->status=0;
        $p->save();
        return "ok";
    }


    public function destroyPaqpros($idPaq,$idPapr){
        $pp=Paqpro::find($idPapr);
        $pp->delete();

        return redirect()->route('addProductPackage',$parameters = ['$id'=>$idPaq]);
    }


    public function addProduct(Request $request, $id){
        $prod=$request->all();
        if ($prod) {
            $pp=new Paqpro;
            $pp->paq_id=$prod["paquete"];
            $pp->pro_id=$prod["producto"];
            $pp->cantidad=$prod["cantidad"];
            $pp->save();
        }else{
            // echo "No hay valores para guardar";
        }
        $paC=DB::select('SELECT * FROM paquetes WHERE paq_id='.$id);
        $pa=DB::select("
            SELECT paqpro_id,paquetes.paq_id,paquetes.nombre paquete,productos.nombre producto,resurtidos.ppu,paqpros.cantidad,paquetes.*, productos.*
                FROM productos
                    LEFT JOIN paqpros ON paqpros.pro_id = productos.pro_id
                    LEFT JOIN paquetes ON paqpros.paq_id = paquetes.paq_id
                    LEFT JOIN resurtidos on productos.pro_id=resurtidos.pro_id
            WHERE paquetes.paq_id=".$id
            );

        $productos=DB::select("
            select * 
                from productos 
            where status=1;
            ");
        return view("paquetes.productoPaquete",compact('pa','productos','paC'));
        // return redirect()->route('addProductPackage', $parameters = ['$id'=>$id]);
    }
}
