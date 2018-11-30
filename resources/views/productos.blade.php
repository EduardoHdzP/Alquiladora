<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> {{ $titulo }} </title>
</head>
<body>

<ul>
	@if (! empty($productos))
		@foreach ($productos as $producto)
			<li>{{ $producto }}</li><!-- e():Escapa el html y js -->
		@endforeach	
	@else
		<p>No hay productos registrados</p>
	@endif

	
	
</ul>
	
</body>
</html>