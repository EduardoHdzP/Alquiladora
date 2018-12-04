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


function eliminarPaquete(idP){
	swal({
		  title: 'Esta seguro?',
		  text: "Los cambios no podran ser revertidos",
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  cancelButtonText: 'Cancelar',
		  confirmButtonText: 'Si, Borrarlo!'
		}).then((result) => {
		  if (result.value) {
				$.ajax({
					url: '/packages/destroy/'+idP,
						method: 'GET',
						dataType: 'html',
						// headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
						data: {
							id:idP,
						}
				})
				.done(function(ht) {
					console.log("Hola"+ht);
					swal(
				      'Borrado!',
				      'Su registro ha sido borrado',
				      'success'
				    ).then((result) => {
					  if (result.value){
					  		location.href="/packages";
					  }else{location.href="/packages";}})
				    
					setTimeout("urlUsuarios",3000);
				})
				.fail(function() {
					console.log("error");
				})
				.always(function() {
					console.log("complete");
				});
		    
		  }
		})
}