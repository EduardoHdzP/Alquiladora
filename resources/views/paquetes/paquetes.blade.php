@include("encabezado")
@include("menu")

<div class="row mt-3">
	<div class="col-12 col-sm-12 col-md-3">
		<div id="acordion" role="tablist" aria-multiselectable="true">
			<div class="card">
				<div class="card-header" role="tab" id="heading1">
					<h5 class="mb-0">
						<a href="#collapse1" data-toggle="collapse" data-parent="#acordion" aria-expanded="true" aria-controls="collapse1">
							Categoria
						</a>
					</h5>
				</div>

				<div id="collapse1" class="collapse show" role="tabpanel" aria-labelledby="heading1">
					<div class="card-block pl-4">
						<div class="btn-group btn-group-vertical btn-block" data-toggle="buttons">
							<label class="btn btn-outline-primary text-left">
								<input type="checkbox" name="" id=""> Sillas
							</label>

							<label class="btn btn-outline-primary text-left">
								<input type="checkbox" name="" id=""> Mesas
							</label>

							<label class="btn btn-outline-primary text-left">
								<input type="checkbox" name="" id=""> Lonas
							</label>

							<label class="btn btn-outline-primary text-left">
								<input type="checkbox" name="" id=""> Carpas
							</label>
							<label class="btn btn-outline-primary text-left">
								<input type="checkbox" name="" id=""> Todos
							</label>
						</div>
					</div>
				</div>
			</div>
		
			<div class="card">
				<div class="card-header" role="tab" id="heading1">
					<h5 class="mb-0">
						<a href="#collapse2" data-toggle="collapse" data-parent="#acordion" aria-expanded="true" aria-controls="collapse2">
							Descuento
						</a>
					</h5>
				</div>

				<div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="heading2">
					<div class="card-block pl-4">
						<div class="btn-group btn-group-vertical btn-block" data-toggle="buttons">
							<label class="btn btn-outline-primary text-left">
								<input type="checkbox" name="" id=""> 1% - 10%
							</label>
							<label class="btn btn-outline-primary text-left">
								<input type="checkbox" name="" id=""> 11% - 20%
							</label>
						</div>
					</div>
				</div>
			</div>

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
								<input type="checkbox" name="" id=""> Mas rentadas
							</label>
							<label class="btn btn-outline-primary text-left">
								<input type="checkbox" name="" id=""> Menos Rentadas
							</label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-12 col-sm-12 col-md-9">
		<table class="table table-striped table-bordered table-hover">
			<thead class="thead-inverse">
				<th>Imagen</th>
				<th>Nombre</th>
				<th>Costo</th>
				<th>Descuento</th>
				<th>Medidad</th>

				
			</thead>
			<tr>
				<td>Error</td>
				<td>Mesa redonda</td>
				<td>$50.00</td>
				<td>10%</td>
				<td>3m x 1m</td>
			</tr>
			<tr>
				<td>Error</td>
				<td>Mesa redonda</td>
				<td>$50.00</td>
				<td>10%</td>
				<td>3m x 1m</td>
			</tr>
			<tr>
				<td>Error</td>
				<td>Mesa redonda</td>
				<td>$50.00</td>
				<td>10%</td>
				<td>3m x 1m</td>
			</tr>
		</table>
	</div> 
</div>

@include("pie")