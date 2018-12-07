function graficarPedidos(){
	$.ajax({
		url: '/orders/to/graphics',
			method: 'GET',
			dataType: 'json',
			// headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			// data: {
			// 	id:idP,
			// }
	})
	.done(function(ht) {
		ht=JSON.stringify(ht);
		ht=JSON.parse(ht);
		for (var i = 0; i < ht.length; i++) {
			console.log(ht[i].mes);
		}
		
		
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
}