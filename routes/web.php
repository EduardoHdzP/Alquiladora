<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// RUTAS PRINCIPALES
Route::get('/', function () {
    return view('login');
});

Route::get("/home",function(){
	return view("inicio");
});
// FIN RUTAS PRINCIPALES






/*#############################################################################################
#################################### RUTAS DE CATEGORIAS ####################################*/
Route::post('/categorias/nuevo', "CategoriasController@store")->name("store");
/*################################ FIN RUTAS DE CATEGORIAS ####################################
#############################################################################################*/



/*#############################################################################################
#################################### RUTAS DE PRODUCTOS #####################################*/
Route::get('/products',"ProductosController@index")->name("index");
Route::get('/products/search/{categoria}',"ProductosController@search")->name("search");
// Route::get('/products/search',"ProductosController@search")->name("search");
Route::get('/products/{id}',"ProductosController@show")->where("id","[0-9]+");
Route::get('/products/create',"ProductosController@create")->name("createProduct");
Route::get('/products/store',"ProductosController@store")->name("storeProduct");
Route::get("/products/edit/{id}","ProductosController@edit")->name("editProduct");
Route::get("/products/update/{id}","ProductosController@update")->name("updateProduct");
Route::get("/products/operations","ProductosController@operations")->name("operationsProduct");
Route::get("/products/destroy/{id}","ProductosController@destroy")->name("destroyProduct");
/*################################ FIN RUTAS DE PRODUCTOS #####################################
#############################################################################################*/


/*#############################################################################################
#################################### RUTAS DE PAQUESTES #####################################*/
// Route::get("/paquetes/modificar", function(){
// 	return view("paquetes.modificar");
// });

// Route::get("/paquetes/eliminar", function(){
// 	return view("paquetes.eliminar");
// });
// Route::get('/paquetes',"PaquetesController@index");
// Route::get('/paquetes/{id}',"PaquetesController@show")->where("id","[0-9]+");
// Route::get('paquetes/nuevo',"PaquetesController@create");

Route::get('packages',"PaquetesController@index")->name("indexPackage");
Route::get('/packages/{id}',"PaquetesController@show")->where("id","[0-9]+");
Route::get('/package/create',"PaquetesController@create")->name("createPackage");
Route::get('/package/store',"PaquetesController@store")->name("storePackage");
Route::get('/package/update/{id}',"PaquetesController@addProduct")->name("addProductPackage");
Route::get("/packages/destroy/{id}","PaquetesController@destroy")->name("destroyPackage");
Route::get('/package/destroyPaqpros/{idPaq}/{idPapr}','PaquetesController@destroyPaqpros')->name('destroyPaqpros');
/*################################ FIN RUTAS DE PAQUESTES #####################################
#############################################################################################*/