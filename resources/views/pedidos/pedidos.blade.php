
@include('encabezado')
@include('menu')

<div class="row">
	<div class="col-12 col-sm-12 col-md-12">
		@if ($ped)
			<div class="alert alert-info m-0">
				<p class="h1 text-center">Listado de pedidos</p>

		@else
			<div class="alert alert-danger m-0">
				<p class="h1 text-center">No hay pedidos</p>

		@endif
		</div>
	</div>
	<div class="col-12 col-sm-12 col-md-12">
		@if ($ped)
			<table class="table table-striped table-bordered table-sm m-0">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">Persona</th>
			      <th scope="col">Telefono</th>
			      <th scope="col">Direccion</th>
			      <th scope="col">Destino</th>
  			      <th scope="col">Fecha</th>
			      <th scope="col">Fecha requerida</th>
			      <th scope="col">Status</th>
			      <th scope="col"></th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach ($ped as $p)
				    <tr>
				      <th scope="row">{{ $p->ped_id }}</th>
				      <td>{{ $p->persona }}</td>
				      <td>{{ $p->tel }}</td>
				      <td>{{ $p->direccion  }}</td>
				      <td>{{ $p->destino }}</td>
				      <td>{{ $p->fecha }}</td>
				      <td>{{ $p->fecha }} {{ $p->horaent }}</td>
  				      <td>{{ $p->status}}</td>

				      <td><button class="btn btn-outline-danger btn-sm btn-block">Editar</button></td>
				    </tr>
				@endforeach
			  </tbody>
			</table>
		@endif
	</div>
</div>
	

@include('pie')
