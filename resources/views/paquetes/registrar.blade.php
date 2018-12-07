
@include('encabezado')
@include('menu')

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
		            <input required="" type="text" class="form-control" id="nombre" name="nombre">
		          </div>
		          <div class="form-group">
					<label>Imagen</label>				
					<div class="custom-file">
					  <input required="" type="file" class="custom-file-input" id="imagen" name="imagen">
					  <label class="custom-file-label" for="imagen" id="img">default</label>
					</div>
				  </div>
		          <div class="form-group">
		            <label for="descuento" class="col-form-label">Descuento</label>
		            <input required="" type="text" class="form-control" id="descuento" name="descuento"></input>
		          </div>
		          <div class="form-group">
		            <label for="descripcion" class="col-form-label">Descripción</label>
		            <textarea required="" class="form-control" id="descripcion" name="descripcion"></textarea>
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

<div class="row mt-4 mb-1">
	<div class="col-12 col-sm-12 col-md-12 " >
		<table class="table table-striped table-bordered table-sm table-responsive-sm">
			<thead class="thead-dark">
				<tr style="background: #000000;">
					<th colspan="6" style="font-size: 22px"><i>Paquete:
					</i></th>
					<th><center>
						<button type="button" class="btn btn-info btn-block text-white" data-toggle="modal" data-target="#modalRegistro" data-whatever="@mdo">Nuevo</button>
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

<div class="row">
	<div class="col-12 col-sm-12 col-md-12">
		@if ($paquetes)
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12">
					<div class="alert alert-info">
						<p class="h2 text-center text-info">Nuestros paquetes</p>
					</div>
				</div>
				@foreach ($paquetes as $p)
					<div class="col-12 col-sm-6 col-md-3">
						<div class="card" style="width: 18rem;">
						  <img class="card-img-top imgCards" src="{{ asset('img/paquetes/'.$p->imagen.'') }}" alt="Card image cap">
						  <div class="card-body">
						  	<div class="row">
						  		<div class="col-md-9"> <h5 class="card-title">{{ $p->nombre }}</h5></div>
						  		<div class="col-md-3"><h5><span class="badge badge-success">$ {{ $p->precio }}</span></h5></div>
						  	</div>
						    <p class="card-text m-0"><strong>Descripcion:</strong>
						    	@if (strlen($p->descripcion)>54)
							    	<?php echo substr($p->descripcion,0,52)."...";?>
						    	@else
						    		{{$p->descripcion}}
						    	@endif
						    </p>
						    <p class="card-text m-0"><strong>Descuento: </strong>{{ $p->descuento }}%</p>

						    <center>
						    	<a onclick="detallesPaquete('{{ $p->paq_id }}')" class="btn btn-info">Detalles</a>
						    	<a href="/package/update/{{ $p->paq_id }}" class="btn btn-warning">Editar</a>
						    	<a onclick="eliminarPaquete('{{ $p->paq_id }}')" class="btn btn-danger">Eliminar</a>
						    </center>
						  </div>
						</div>
					</div>
				@endforeach
			</div>
		@else
			<div class="alert alert-info">
				<p class="h2 text-center">No hay paquetes</p>
				{{-- <a href=""><p class="h5 text-center">Registrar un paquete</p></a> --}}
			</div>
		@endif
	</div> 
	
</div>

@include('pie');