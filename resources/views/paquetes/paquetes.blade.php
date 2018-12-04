@include("encabezado")
@include("menu")


<div id="detalles">	

</div>


<div class="row mt-3">
	<div class="col-12 col-sm-12 col-md-12 mb-3">
		<div class="row">
			<div class="col-md-12 pt-3">
				<p class="h1 text-center text-info">Nuestros paquetes</p>
			</div>
		</div>
		{{-- <div id="acordion" role="tablist" aria-multiselectable="true">
			<form action="/products/search" method="get">
				
				<div class="row justify-content-center">
					<div class="col-md-3 bg-info p-3">

						<div class="card">
							<div class="card-header" role="tab" id="heading1">
								<h5 class="mb-0">
									<a href="#collapse1" data-toggle="collapse" data-parent="#acordion" aria-expanded="true" aria-controls="collapse1">
										Categoria
									</a>
								</h5>
							</div>

							<div id="collapse1" class="collapse" role="tabpanel" aria-labelledby="heading1">
								<div class="card-block pl-4">
									<div class="btn-group btn-group-vertical btn-block" data-toggle="buttons">
										<label class="btn btn-outline-primary text-left">
											<input  type="checkbox" name="cSilla" id="cSilla"> Sillas
										</label>
										<label class="btn btn-outline-primary text-left">
											<input type="checkbox" name="cMesa" id="cMesa"> Mesas
										</label>

										<label class="btn btn-outline-primary text-left">
											<input value="1" type="checkbox" name="cLona" id="cLona"> Lonas
										</label>

										<label class="btn btn-outline-primary text-left">
											<input type="checkbox" name="cCarpa" id="cCarpa"> Carpas
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-3 bg-info p-3">
						<div class="card">
							<div class="card-header" role="tab" id="heading1">
								<h5 class="mb-0">
									<a href="#collapse2" data-toggle="collapse" data-parent="#acordion" aria-expanded="true" aria-controls="collapse2">
										Utilidad (%)
									</a>
								</h5>
							</div>
							<div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading2">
								<div class="card-block pl-4">
									<div class="btn-group btn-group-vertical btn-block" data-toggle="buttons">
										<label class="btn btn-outline-primary text-left">
											<input type="checkbox" name="u1-10" id="u1-10"> 1 - 10									</label>
										<label class="btn btn-outline-primary text-left">
											<input type="checkbox" name="u11-20" id="u11-20"> 11 - 20
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-3 bg-info p-3">
						<div class="card">
							<div class="card-header" role="tab" id="heading3">
								<h5 class="mb-0">
									<a href="#collapse3" data-toggle="collapse" data-parent="#acordion" aria-expanded="true" aria-controls="collapse3">
										Demanda
									</a>
								</h5>
							</div>

							<div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="heading3">
								<div class="card-block pl-4">
									<div class="btn-group btn-group-vertical btn-block" data-toggle="buttons">
										<label class="btn btn-outline-primary text-left">
											<input type="checkbox" name="dMas" id="dMas"> Mas rentadas
										</label>
										<label class="btn btn-outline-primary text-left">
											<input type="checkbox" name="dMenos" id="dMenos"> Menos Rentadas
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-2 bg-info p-3">
						<button type="submit" class="btn btn-lg btn-block bg-danger text-white rounded">Buscar</button>
					</div>
				</div>
			</form>
		</div> --}}
	</div>
	<div class="col-12 col-sm-12 col-md-12">
		@if ($paquetes)
			<div class="row">
				
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
						    	<a onclick="detallesPaquete('{{ $p->paq_id }}')" class="btn btn-sm btn-info">Detalles</a>
						    	<a href="/package/update/{{ $p->paq_id }}" class="btn btn-sm btn-warning">Editar</a>
						    	<a onclick="eliminarProducto('{{ $p->paq_id }}')" href="#" class="btn btn-sm btn-danger">Eliminar</a>
						    </center>
						  </div>
						</div>
					</div>
				@endforeach
			</div>
		@else
			<div class="alert alert-warning">
				<p class="h3 text-center">No hay paquetes registrados</p>
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