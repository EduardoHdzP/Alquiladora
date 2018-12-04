$("#imagen").change(function(event) {
	// $("#imagen").attr("placeholder","ASASDASDFSDSF");
	name=document.getElementById('imagen').files[0].name;
	$("#img").html(name);
	// alert(name);
});

function agregarProductoAPaquete(paqId, proId){
	$("#modalAgregaRegistro").modal('show');

	$("#paquete").val(paqId);
	$("#producto").val(proId);
}


function detallesPaquete(idP){
	$.ajax({
		url: '/packages/'+idP,
			method: 'GET',
			dataType: 'html',
			// headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			data: {
				id:idP,
			}
	})
	.done(function(ht) {
		$("#detalles").html(ht);
		$("#modalDetalles").modal('toggle');
		console.log(ht);
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
}