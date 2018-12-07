@include("encabezado")
@include("menu")

<div class="row">
	<div class="col-12">
		<img class="img-fluid rounded" src={{asset("img/galeria/carousel1.jpg")}} alt="No hay imagen">
	</div>
</div>
<div class="row mt-4">
	<div class="col-12">
		<div class="alert">
			<h2 class="text-center color-subtitulos"><strong>Datos estadisticos.</strong></h2>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-12 col-sm-12 col-md-12 pb-4">
		<div id="grafica" class="grafica"></div>
	</div>
</div>

@include("pie")


<script>
	$(document).ready(function(){
		graficarPedidos();
	});
</script>