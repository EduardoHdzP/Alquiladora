@include("encabezado")
@include("menu")


<div id="detalles">	

</div>


<div class="row mt-3">
	<div class="col-12 col-sm-12 col-md-12 mb-3">
		<div class="row justify-content-center">
			<div class="col-md-12 pt-3">
				<p class="h1 text-center text-info">Nuestros productos</p>
			</div>
			<div class="col-md-8">
				<nav class="navbar navbar-expand-lg navbar-light bg-info">
				  <a class="navbar-brand text-white" href="#">Filtros directos</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto">
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Categorias
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="/products/search/Sillas">Sillas</a>
				          <a class="dropdown-item" href="/products/search/Mesas">Mesas</a>
				          <a class="dropdown-item" href="/products/search/Lonas">Lonas</a>
				          <a class="dropdown-item" href="/products/search/Carpas">Carpas</a>
				        </div>
				      </li>
				    </ul>
				    <form class="form-inline my-2 my-lg-0" action="hola">
				      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
				      <button class="btn btn-danger my-2 my-sm-0" type="submit">Buscar</button>
				    </form>
				  </div>
				</nav>
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
		@if ($productos)
			<div class="row">
				@foreach ($productos as $p)
					<div class="col-12 col-sm-6 col-md-3 mb-2" {{-- style="background: yellow;" --}}>
						<div class="card" style="width: 18rem;">
						  <img class="card-img-top imgCards" src="{{ asset('img/productos/'.$p->imagen.'') }}" alt="Card image cap">
						  <div class="card-body">
						  	<div class="row">
						  		<div class="col-md-9"> <h5 class="card-title">{{ $p->nombre }}</h5></div>
						  		<div class="col-md-3"><h5><span class="badge badge-success">{{ $p->ganancia }}%</span></h5></div>
						  	</div>
						   
						    {{-- <h6>Precio  <span class="badge badge-secondary">$ {{ $p->costo }}</span></h6> --}}
						    {{-- <p class="card-text bg-dark rounded">Precio:{{ $p->costo }}</p> --}}
						    <p class="card-text m-0"><strong>Descripcion:</strong>
						    	@if (strlen($p->descripcion)>54)
							    	<?php echo substr($p->descripcion,0,52)."...";?>
						    		
						    	@else
						    		{{$p->descripcion}}
						    	@endif
						    </p>
						    <p class="card-text m-0"><strong>Medidas:</strong>{{ $p->medidas }}</p>
						    <p class="card-text m-0"><strong>Utilidad:</strong>{{ $p->ganancia }}</p>

						    {{-- <p class="card-text">Precio:{{ $p->costo }}</p> --}}
						    <center>
						    	{{-- <a href="#" class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal-lg">Detalles</a> --}}
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
			<h1>No hay productos registrados</h1>
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