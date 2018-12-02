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

