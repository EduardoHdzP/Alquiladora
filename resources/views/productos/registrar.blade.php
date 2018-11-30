
@include('encabezado')
@include('menu')
<div class="row mt-3 justify-content-center" >

	
<div class="modal fade" id="modalRegistroCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar Categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="javascript:registrarCategoria()">
	      <div class="modal-body">
	          <div class="form-group">
	            <label for="nombre" class="col-form-label">Nombre</label>
	            <input type="text" class="form-control" id="nombre">
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

	<div class="col-12 col-sm-12 col-md-9" >
		<form action="/products/store" method="get">
		    <div class="form-group">
		    	<label for="categoria">Categoria</label>
				<div class="input-group mb-3">
				  <select class="form-control" name="categoria">
				      @foreach ($data as $cat)
				      	<option value="{{ $cat->id }}">{{ $cat->nombre }}</option>}
				      @endforeach
				    </select>
				  <div class="input-group-append">
				  	<button type="button" class="btn btn-primary ml-2" data-toggle="modal" data-target="#modalRegistroCategoria" data-whatever="@mdo">Nuevo</button>
				  </div>
				</div>
		    </div>
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input type="text" class="form-control" name="nombre" id="nombre">
			</div>

			<div class="form-group">
				<label for="ganancia">Ganancia</label>
				<input type="number" class="form-control" name="ganancia" id="ganancia">
			</div>
			<div class="form-group">
				<label>Imagen</label>				
				<div class="custom-file">
				  <input type="file" class="custom-file-input" id="imagen" name="imagen">
				  <label class="custom-file-label" for="imagen" id="img"></label>
				</div>
			</div>
			<div class="form-group">
				<label for="medidas">Medidas</label>
				<input type="text" class="form-control" name="medidas" id="medidas">
			</div>
			<div class="form-group">
				<label for="descripcion">Descripción</label>
				<textarea class="form-control" name="descripcion" id="descripcion"></textarea> 
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label for="cantidad">Cantidad</label>
						<input type="number" class="form-control" name="cantidad" id="cantidad">
					</div>
				</div>

				<div class="col-md-4">
					<div class="form-group">
						<label for="ppu">Precio por unidad</label>
						<input type="number" class="form-control" name="ppu" id="ppu">
					</div>
				</div>

				<div class="col-md-4">
					<div class="form-group">
						<label for="costo">.</label>
					<button class="btn btn-primary form-control">Guardar</button>
					</div> 
				</div>
			</div>
	</form>
	</div>	

</div>
@include('pie');