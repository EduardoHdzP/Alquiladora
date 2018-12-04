<?php
$p=$paquetes[0];
?>
<div id="modalDetalles" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
       <div class="container-fluid">
		    <div class="row bg-info p-3">
		    	<div class="col-md-12">
		    		<p class="h3 text-center text-white" >{{ $p->nombre }}</p>
		    	</div>
		    </div>
		    <div class="row mb-1 pt-1">
		      <div class="col-md-12 p-1">
		      	<table class="table table-striped table-bordered table-hover table-sm table-responsive-md">
					<thead class="thead-dark">
						<tr style="background: #000000;">
							<th colspan="6" style="font-size: 15px"><p class="text-info">
								<i>Descripcion:</i>
							{{ $p->descripcion }}</p> 
							</th>
							{{-- <th colspan="1" class="text-danger">${{ $p->precio }}</th> --}}
						</tr>
						<tr style="font-size: 15px">
							<th>Nombre</th>
							<th>Medidad</th>
							<th>Costo/U ($)</th>
							<th>Cantidad</th>
							<th>Utilidad (%)</th>
							<th>Subtotal ($)</th>
							<!-- <th>Acción</th> -->
						</tr>
						@php
							$total=0;
							$subtotal=0;
						@endphp
						@foreach ($pa as $p)
							<tr style="font-size: 13px">
								<td>{{ $p->nombre }}</td>
								<td>{{ $p->medidas }}</td>
								<td>{{ $p->ppu }}</td>
								<td>{{ $p->cantidad }}</td>
								<td>{{ $p->ganancia }}</td>
								<td>@php $subtotal=($p->ppu/100)*$p->cantidad; echo $subtotal; $total=$total+$subtotal; @endphp</td>
								<!-- <th>Acción</th> -->
							</tr>
						@endforeach
						<tr style="font-size: 13px">
							<td colspan="5" ><i>TOTAL</i></td>
							<td colspan="1" class="text-danger">${{ $total }}</td>
						</tr>

					</thead>
				</table>
		      </div>
		    </div>
		 </div>

    </div>
  </div>
</div>
