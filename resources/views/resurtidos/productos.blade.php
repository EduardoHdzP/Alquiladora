@include("encabezado")
@include("menu")

{{-- 
<div id="detalles">	
</div>
 --}}
 <div class="modal fade" id="modalRegistroCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo resurtido</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="/refill/store">
	      <div class="modal-body">
	      	  <input type="hidden" id="pro_id" name="pro_id" value="">
	          <div class="form-group">
	            <label for="cantidad" class="col-form-label">Cantidad</label>
	            <input type="text" class="form-control" id="cantidad" name="cantidad">
	          </div>
	          <div class="form-group">
	            <label for="ppu" class="col-form-label">Precio unitario</label>
	            <input type="text" class="form-control" id="ppu" name="ppu">
	          </div>

	      </div>
	      <div class="modal-footer">
	        <button type="button"  class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        <button type="submit"  class="btn btn-primary">Guardar</button>
	      </div>
        </form>
    </div>
  </div>
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
				          <a class="dropdown-item" href="/refill/search/Sillas">Sillas</a>
				          <a class="dropdown-item" href="/refill/search/Mesas">Mesas</a>
				          <a class="dropdown-item" href="/refill/search/Lonas">Lonas</a>
				          <a class="dropdown-item" href="/refill/search/Carpas">Carpas</a>
				        </div>
				      </li>
				    </ul>
				    <form class="form-inline my-2 my-lg-0" action="/refill/search/@">
				      <input class="form-control mr-sm-2" name="buscar" id="buscar" type="search" placeholder="Buscar" aria-label="Buscar">
				      <button class="btn btn-danger my-2 my-sm-0" type="submit">Buscar</button>
				    </form>
				  </div>
				</nav>
			</div>
		</div>
	</div>
	<div class="col-12 col-sm-12 col-md-12">
		@if ($productos)
			<div class="row">
				@foreach ($productos as $p)
					<div class="col-12 col-sm-6 col-md-3 mb-2">
						<div class="card" style="width: 18rem;">
						  <img class="card-img-top imgCards" src="{{ asset('img/productos/'.$p->imagen.'') }}" alt="Card image cap">
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
						    	{{-- <a onclick="detallesProducto('{{ $p->pro_id }}')" class="btn btn-info">Detalles</a> --}}
						    	<button onclick="cargarIdProducto({{ $p->pro_id }})" class="btn btn-block btn-info" data-toggle="modal" data-target="#modalRegistroCategoria" data-whatever="@mdo">Resurtir</button>
						    	{{-- <button type="button" class="btn btn-primary ml-2" >Nuevo</button> --}}
{{-- 						    	<a onclick="eliminarProducto('{{ $p->pro_id }}')" href="#" class="btn btn-danger">Eliminar</a>
 --}}						    </center>
						  </div>
						</div>
					</div>
				@endforeach
			</div>
		@else
			<div class="alert alert-info">
				<p class="h2 text-center">No hay productos</p>
				<p class="h6 text-center"><a href="/products/create"><strong>Registrar un producto</strong></a></p>
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