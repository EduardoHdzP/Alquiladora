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
	<div class="col-12 col-sm-12 col-md-6">
				<div class="ct-chart ct-perfect-fourth"></div>
	</div>
	<div class="col-12 col-sm-12 col-md-6">
		<figure class="figure">
			<img class="img-fluid rounded" src="{{ asset('img/graficas/linechart.png') }}" alt="">
			<figcaption class="figure-caption">
				<p class="text-center"> Lorem ipsum.</p>
			</figcaption>
		</figure>
	</div>
</div>

@include("pie")

<script>
	// $(document).ready(function(){
	// 	graficarPedidos();
	// });
	var data = {
		  labels: ['Matematicas', 'Español', 'Comprension'],
		  series: [
		    [5, 2, 4]
		  ]
		};
		new Chartist.Line('.ct-chart', data);
</script>