
@include('encabezado')
@include('menu')

<div class="row">
	<div class="col-12 col-sm-12 col-md-12">
		@if ($res)
			<div class="alert alert-info m-0">
				<p class="h1 text-center">Listado de resurtidos</p>

		@else
			<div class="alert alert-info m-0">
				<p class="h2 text-center">No hay resurtidos</p>

		@endif
		</div>
	</div>
	<div class="col-12 col-sm-12 col-md-12">
		@if ($res)
			<table class="table table-striped table-bordered table-sm m-0">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">Producto</th>
			      <th scope="col">Cantidad</th>
			      <th scope="col">Precio unitario</th>
			      <th scope="col">Fecha</th>
			      <th scope="col"></th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach ($res as $r)
				    <tr>
				      <th scope="row">{{ $r->pro_id }}</th>
				      <td>{{ $r->nombre }}</td>
				      <td>{{ $r->cantidad }}</td>
				      <td>{{ $r->ppu }}</td>
				      <td>{{ $r->fecha }}</td>
				      <td><button class="btn btn-outline-danger btn-sm btn-block">Eliminar</button></td>
				    </tr>
				@endforeach
			  </tbody>
			</table>
		@endif
	</div>
</div>
	

@include('pie')
