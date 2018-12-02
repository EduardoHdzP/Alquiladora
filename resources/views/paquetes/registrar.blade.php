
@include('encabezado')
@include('menu')
<?php $paquetes=null;?>

<div class="modal fade" id="modalRegistro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form action="/package/store" method="get">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Registrar paquete</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		          <div class="form-group">
		            <label for="nombre" class="col-form-label">Nombre</label>
		            <input type="text" class="form-control" id="nombre" name="nombre">
		          </div>
		          <div class="form-group">
		            <label for="descuento" class="col-form-label">Descuento</label>
		            <input type="text" class="form-control" id="descuento" name="descuento"></input>
		          </div>
		          <div class="form-group">
		            <label for="descripcion" class="col-form-label">Descripción</label>
		            <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
		          </div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
		        <button type="submit" class="btn btn-primary">Guardar</button>
		      </div>
        </form>		      
    </div>
  </div>
</div>

<div class="row mt-4 mb-5">
	<div class="col-12 col-sm-12 col-md-12 " >
		<div class="card-block pl-4">
			<table class="table table-striped table-bordered table-hover table-sm table-responsive-sm">
				<thead class="thead-dark">
					<tr style="background: #000000;">
						<th colspan="6" style="font-size: 22px"><i>Paquete:
						</i></th>
						<th><center>
							<button type="button" class="btn bg-dark btn-block text-white" data-toggle="modal" data-target="#modalRegistro" data-whatever="@mdo">Nuevo</button>
						</center></th>
					</tr>
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Costo/U </th>
						<th>Medidad</th>
						<th>Cantidad</th>
						<th>Total ($)</th>
						<th>Acción</th>
					</tr>
				</thead>
				
			</table>
		</div>
	</div>
</div>

<div class="row mt-3">
	<div class="col-12 col-sm-12 col-md-12">
		@if ($paquetes)
			<div class="row">
				@foreach ($paquetes as $p)
					<div class="col-12 col-sm-6 col-md-3 mb-2" >
						<div class="card" style="width: 18rem;">
						  <img class="card-img-top imgCards" src="{{ asset('img/paquetes/'.$p->imagen.'') }}" alt="Card image cap">
						  <div class="card-body">
						  	<div class="row">
						  		<div class="col-md-9"> <h5 class="card-title">{{ $p->nombre }}</h5></div>
						  		<div class="col-md-3"><h5><span class="badge badge-success">{{ $p->ganancia }}%</span></h5></div>
						  	</div>
						    <p class="card-text m-0"><strong>Descripcion:</strong>
						    	@if (strlen($p->descripcion)>54)
							    	<?php echo substr($p->descripcion,0,52)."...";?>
						    		
						    	@else
						    		{{$p->descripcion}}
						    	@endif
						    </p>
						    <p class="card-text m-0"><strong>Medidas:</strong>{{ $p->medidas }}</p>
						    <p class="card-text m-0"><strong>Utilidad:</strong>{{ $p->ganancia }}</p>

						    <center>
						    	<a onclick="detallesProducto('{{ $p->pro_id }}')" class="btn btn-info">Detalles</a>
						    	<a href="/products/edit/{{ $p->pro_id }}" class="btn btn-warning">Editar</a>
						    	<a onclick="eliminarProducto('{{ $p->pro_id }}')" href="#" class="btn btn-danger">Eliminar</a>
						    </center>
						  </div>
						</div>
					</div>
				@endforeach
			</div>
		@else
			<div class="alert alert-danger text-center">
				<h1>No hay paquetes registrados</h1>
			</div>
		@endif
	</div> 
	
</div>

@include('pie');