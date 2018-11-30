function registrarCategoria(){
	var nombre=$("#nombre").val()

	$.ajax({
		url: '/categorias/nuevo',
		method: 'POST',
		dataType: 'HTML',
		headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		data: {
			nombre: nombre,
		},
	})
	.done(function(ht) {
		swal({
		  position: 'top',
		  type: 'success',
		  title: 'Categoria guardada correctamente',
		  showConfirmButton: false,
		  timer: 1500
		})
		setInterval(function(){},2500);

		location.href="/products/create";
	})
	.fail(function() {
		console.log("error");	})
	.always(function() {
		console.log("complete");
	});
	



	$("#modalRegistroCategoria").modal('hide');

	// return false;
}
