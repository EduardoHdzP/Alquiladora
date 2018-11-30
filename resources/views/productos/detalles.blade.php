<?php
$pr=$p[0];
?>
<div id="modalDetalles" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
       <div class="container-fluid">
		    <div class="row bg-info p-3">
		    	<div class="col-md-12">
		    		<p class="h3 text-center text-white" >{{ $pr->nombre }}</p>
		    	</div>
		    </div>
		    <div class="row mb-1 pt-1">
		      <div class="col-md-6 ">
					<img class="img img-fluid p-0 m-0" src="{{ asset('img/productos/'.$pr->imagen) }}" alt="imgss">
		      </div>
		      <div class="col-md-6 ">
		      	<p>
		      		<strong>Categoria:</strong>{{ $pr->categoria }}<br>
		      		<strong>Descripcion:</strong>{{ $pr->descripcion }}<br>
		      		<strong>Costo:</strong>{{ $pr->ganancia }}<br>
		      		<strong>Ganancia:</strong>{{ $pr->ganancia }}<br>
		      		<strong>Medidas:</strong>{{ $pr->medidas }}<br>
		      		<strong>Unidades Totales:</strong>100<br>
		      		<strong>Stock:</strong>10<br>
		      	</p>
		      </div>
		    </div>
		 </div>

    </div>
  </div>
</div>
