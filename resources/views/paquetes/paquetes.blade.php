@include("encabezado")
@include("menu")


<div id="detalles">	

</div>


<div class="row mt-3">
	<div class="col-12 col-sm-12 col-md-12">
		@if ($paquetes)
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12">
					<div class="alert alert-info">
						<p class="h2 text-center text-info">Nuestros paquetes</p>
					</div>
				</div>
				@foreach ($paquetes as $p)
					<div class="col-12 col-sm-6 col-md-3 mb-2">
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
				<a href=""><p class="h5 text-center">Registrar un paquete</p></a>
			</div>
		@endif
		
	</div> 
</div>

	
@include("pie")

<?php if(isset($_GET["update"])){ unset($_GET["update"]);?>
	<script>
		$(document).ready(function(){
			swal({
				position: 'top-center',
				type: 'success',
				title: 'Producto actualizado correctamente',
				showConfirmButton: false,
				timer: 1500
			}).then(function(){
				location.href="/products";
			})
		});
		
	</script>
<?php }else{ ?>

<?php } ?>