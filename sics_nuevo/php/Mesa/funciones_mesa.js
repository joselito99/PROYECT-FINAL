/******************************************************** MESAS ********************************************************/
/******************************************************** MESAS ********************************************************/
/******************************************************** MESAS ********************************************************/
/******************************************************** MESAS ********************************************************/
/******************************************************** MESAS ********************************************************/ 





function agregarMesa(Numero_mesa){

	cadena="Numero_mesa=" + Numero_mesa;

	$.ajax({
		type:"POST",
		url:"php/Mesa/agregarMesa.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('php/Mesa/tablamesa.php');
				alertify.success("Agregada con exito :)");
			}else{
				alertify.error(r);
			}
		}
	});

}

function agregaformmesa(datosmesa){

	d=datosmesa.split('||');

	$('#idMes').val(d[0]);
	$('#Numero_mesau').val(d[1]);
	
}

function actualizaMesa(){


	idMesa=$('#idMes').val();
	Numero_mesa=$('#Numero_mesau').val();
	cadena= "idMesa=" + idMesa +
			"&Numero_mesa=" + Numero_mesa;
			

	$.ajax({
		type:"POST",
		url:"php/Mesa/actualizaMesa.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('php/Mesa/tablamesa.php');
				alertify.success("Actualizada con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function preguntarSiNoMesa(Numero_mesa){
	alertify.confirm('Eliminar Mesa', '¿Esta seguro de eliminar esta mesa?', 
					function(){ eliminarMesa(Numero_mesa) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarMesa(Numero_mesa){

	cadena="Numero_mesa=" + Numero_mesa;

		$.ajax({
			type:"POST",
			url:"php/Mesa/eliminarMesa.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('php/Mesa/tablamesa.php');
					alertify.success("Eliminada con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}
