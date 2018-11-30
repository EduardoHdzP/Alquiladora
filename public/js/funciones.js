/*$(document).ready(function() {
	cargarPersona();
});*/

function cargarAños(valor) {
	if (valor.value!="") {
		var año = valor.value.split("-")[0];
		var actual = Date().split(" ")[3];
		var edad = parseInt(actual)-parseInt(año);
		$('#anos').text(edad+" años");
	}
}

function cargarPersona() {
	var token = $('meta[name="csrf-token"]').attr('content');
	$.ajax({
		url:'/persona',
		headers:{'X-CSRF-TOKEN':token},
		type:'GET',
		dataType:'HTML',
	})
	.done(function(ht){
		console.log(ht);
		$('.jumbotron').html(ht);
	})
	.fail(function() {
		console.log('error');
	})
	.always(function() {
		console.log('complete');
	});
}

function listarPersona() {
	var token = $('meta[name="csrf-token"]').attr('content');
	$.ajax({
		url:'/listar',
		headers:{'X-CSRF-TOKEN':token},
		type:'POST',
		dataType:'HTML',
	})
	.done(function(ht){
		$('.jumbotron').html(ht);
		pedirDatosPersona();
	})
	.fail(function() {
		console.log('error');
	})
	.always(function() {
		console.log('complete');
	});
}

function pedirDatosPersona() {
	var token = $('meta[name="csrf-token"]').attr('content');
	$.ajax({
		url:'/datosPersona',
		headers:{'X-CSRF-TOKEN':token},
		type:'POST',
		dataType:'HTML',
	})
	.done(function(ht){
		$('#cuerpoListado').html(ht);
		console.log("ed");
		$("button[name=eliminar]").click(function() {
			console.log("ed");
		});
	})
	.fail(function() {
		console.log('error');
	})
	.always(function() {
		console.log('complete');
	});
}

function guardarPersona() {
	var token = $('meta[name="csrf-token"]').attr('content');
	var f = document.querySelector("#form-persona");
	$.ajax({
		url:'/persona',
		headers:{'X-CSRF-TOKEN':token},
		type:'POST',
		dataType:'JSON',
		data:{
			nombre:f.nombre.value,
			app:f.app.value,
			apm:f.apm.value,
			fnac:f.fnac.value,
		},
	})
	.done(function(ht){

		if (ht.mensaje=="ok") {
			alert("Se registro exitosamente.");
			f.reset();
		} else
			alert("Ocurrio un error al registrar.");
	})
	.fail(function(men) {
		alert(men.responseJSON.errors.nombre);
	})
	.always(function() {
		console.log('complete');
	});
}

function editarPersona($id) {
	var token = $('meta[name="csrf-token"]').attr('content');
	var f = document.querySelector("#form-persona");
	$.ajax({
		url:'/persona/'+$id,
		headers:{'X-CSRF-TOKEN':token},
		type:'PUT',
		dataType:'HTML',
		data:{
			nombre:f.nombre.value,
			app:f.app.value,
			apm:f.apm.value,
			fnac:f.fnac.value,
		},
	})
	.done(function(ht){
		console.log(ht);
		window.location = "/persona";
	})
	.fail(function() {
		console.log('error');
	})
	.always(function() {
		console.log('complete');
	});
}

function showEditarPersona(id) {
  window.location = "/persona/"+id+"/edit";
}
