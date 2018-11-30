@include('encabezado')
@include('menu')

@php
$paC=$paC[0];
$p=null;
if($pa){
	$p=$pa[0];
}
@endphp

<div class="modal fade" id="modalAgregaRegistro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <form action="/package/update/@php if($p){echo $p->paq_id; }else{echo $paC->paq_id;} @endphp" method="get">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Agregar producto</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		          <div class="form-group">
		            <label for="cantidad" class="col-form-label">Cantidad</label>
		            <input type="number" class="form-control" id="cantidad" name="cantidad">
		            <input type="hidden" class="form-control" id="paquete" name="paquete" value="">
		            <input type="hidden" class="form-control" id="producto" name="producto" value="">
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
						<th colspan="6" style="font-size: 22px"><i>Paquete: @php if($p){echo $p->paquete; }else{echo $paC->nombre;} @endphp
						</i></th>
						<th colspan="2" class="text-danger">Costo Total : $@php if($p){echo $p->precio; }else{echo 0000;} @endphp</th>
					</tr>
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Medidad</th>
						<th>Costo/U ($)</th>
						<th>Cantidad</th>
						<th>Utilidad (%)</th>
						<th>Total ($)</th>
						<th>Acción</th>
					</tr>
				</thead>
				@foreach ($pa as $pro)
					<tr>
						<td>{{ $pro->pro_id }}</td>
						<td>{{ $pro->producto }}</td>
						<td>{{ $p->medidas }}</td>
						<td>{{ $p->ppu }}</td>
						<td>{{ $p->cantidad }}</td>
						<td>{{ $p->ganancia }}</td>
						<td>@php
							$a=($p->ganancia/100)*$p->ppu*$p->cantidad;
							echo($a);
						@endphp</td>
						<td><button class="btn btn-danger btn-block btn-sm">Eliminar</button></td>
					</tr>
				@endforeach
				
			</table>
		</div>
	</div>
</div>

<div class="row mt-3">
	@foreach ($productos as $p)
		<div class="col-12 col-sm-6 col-md-3">
			<div class="card m-0" style="width: 18rem;">
			  <img class="card-img-top" src="{{ asset('img/productos/'.$p->imagen) }}" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">{{ $p->nombre }}</h5>
			    <p class="card-text">{{ $p->descripcion }}</p>
			    <button class="btn btn-primary btn-block" onclick="agregarProductoAPaquete(@php if($pa){echo $pa[0]->paq_id; }else{echo $paC->paq_id;} @endphp,{{ $p->pro_id }} )">Añadir</button>
			  </div>
			</div>
		</div>
	@endforeach
	
</div>

@include('pie');