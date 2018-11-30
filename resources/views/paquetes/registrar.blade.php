
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
	<div class="col-12 col-sm-6 col-md-3" {{-- style="background: red;" --}}>
		<div class="card m-0" style="width: 18rem;">
		  <img class="card-img-top" src="{{ asset('img/sillas/silla.jpg') }}" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Silla Ghera</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-primary btn-block">Añadir</a>
		  </div>
		</div>
	</div>
	<div class="col-12 col-sm-6 col-md-3" {{-- style="background: green;" --}}>
		<div class="card" style="width: 18rem;">
		  <img class="card-img-top" src="{{ asset('img/sillas/silla.jpg') }}" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Silla Ghera</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-primary btn-block">Añadir</a>
		  </div>
		</div>
	</div>
	<div class="col-12 col-sm-6 col-md-3" {{-- style="background: yellow;" --}}>
		<div class="card" style="width: 18rem;">
		  <img class="card-img-top" src="{{ asset('img/mesas/mesa-redonda.jpg') }}" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Silla Ghera</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-primary btn-block">Añadir</a>
		  </div>
		</div>
	</div>
	<div class="col-12 col-sm-6 col-md-3" {{-- style="background: black;" --}}>
		<div class="card" style="width: 18rem;">
		  <img class="card-img-top" src="{{ asset('img/sillas/silla.jpg') }}" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Silla Ghera</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-primary btn-block">Añadir</a>
		  </div>
		</div>
	</div>
</div>


<div class="row mt-3">
	<div class="col-12 col-sm-6 col-md-3" {{-- style="background: red;" --}}>
		<div class="card m-0" style="width: 18rem;">
		  <img class="card-img-top" src="{{ asset('img/mesas/tablon-plegable-plastico.jpg') }}" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Silla Ghera</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-primary btn-block">Añadir</a>
		  </div>
		</div>
	</div>
	<div class="col-12 col-sm-6 col-md-3" {{-- style="background: green;" --}}>
		<div class="card" style="width: 18rem;">
		  <img class="card-img-top" src="{{ asset('img/sillas/silla.jpg') }}" alt="Card image cap">
		  <div class="card-body">
		    <h5 class="card-title">Silla Ghera</h5>
		    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		    <a href="#" class="btn btn-primary btn-block">Añadir</a>
		  </div>
		</div>
	</div>
</div>

@include('pie');