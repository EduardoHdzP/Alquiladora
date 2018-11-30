function urlUsuarios(){
}



$("#imagen").change(function(event) {
	// $("#imagen").attr("placeholder","ASASDASDFSDSF");
	name=document.getElementById('imagen').files[0].name;
	$("#img").html(name);
	// alert(name);
});


function detallesProducto(idP){
	$.ajax({
		url: '/products/'+idP,
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
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
}


function eliminarProducto(idP){

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
					url: '/products/destroy/'+idP,
						method: 'GET',
						dataType: 'html',
						// headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
						data: {
							id:idP,
						}
				})
				.done(function(ht) {
					swal(
				      'Borrado!',
				      'Su registro ha sido borrado',
				      'success'
				    ).then((result) => {
					  if (result.value){
					  		location.href="/products";
					  }else{location.href="/products";}})
				    
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



function delay2(milisegundos){
	for(i=0;i<=milisegundos;i++){
		setTimeout('return 0',1);
	}
}