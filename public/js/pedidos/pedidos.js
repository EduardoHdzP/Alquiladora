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
		console.log(ht)
		var meses=new Array();
		var datos=new Array();

		for (var i = 0; i < ht.length; i++) {
			meses.push(getMes(ht[i].mes))
			datos.push(ht[i].total)
			console.log(ht[i].mes);
		}
		
		$('#grafica').highcharts({
             title:{text:'Pedidos'},
             xAxis:{categories:meses},
             yAxis:{title:'Porcentaje %',plotLines:[{value:0,width:3,color:"#FA0808"}]},
             tooltip:{valueSuffix:''},
             legend:{layout:'vertical',align:'right',verticalAlign:'middle',borderWidth:0},
             series: [{
				        name: 'Pedidos',
				        data:datos
				    }],

             plotOptions:{line:{dataLabels:{enabled:true}}}
         });
		
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
}



function getMes(nMes){
	switch (nMes) {
		case 1:
			return "Enero"
			break;
		case 2:
			return "Febero"
			break;
		case 3:
			return "Marzo"
			break;
		case 4:
			return "Abril"
			break;
		case 5:
			return "Mayo"
			break;
		case 6:
			return "Junio"
			break;
		case 7:
			return "Julio"
			break;
		case 8:
			return "Agosto"
			break;
		case 9:
			return "Septiembre"
			break;
		case 10:
			return "Octubre"
			break;
		case 11:
			return "Noviembre"
			break;
		case 12:
			return "Diciembre"
			break;
	}
}