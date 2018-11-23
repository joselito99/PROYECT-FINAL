/******************************************************** TIPO_PLATO ********************************************************/
/******************************************************** TIPO_PLATO ********************************************************/
/******************************************************** TIPO_PLATO ********************************************************/
/******************************************************** TIPO_PLATO ********************************************************/
/******************************************************** TIPO_PLATO ********************************************************/ 





function agregarTipoPlato(Nombre_tipo_plato){

	cadena="Nombre_tipo_plato=" + Nombre_tipo_plato;

	$.ajax({
		type:"POST",
		url:"php/Categoriaplato/agregarTipoPlato.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('php/Categoriaplato/tablatipoplato.php');
				alertify.success("Agregada con exito :)");
			}else{
				alertify.error(r);
			}
		}
	});

}

function agregaformtipoplato(datostipoplato){

	d=datostipoplato.split('||');

	$('#idtip').val(d[0]);
	$('#Nombre_tipo_platou').val(d[1]);
	
}

function actualizaTipoPlato(){


	idTipo_Plato=$('#idtip').val();
	Nombre_tipo_plato=$('#Nombre_tipo_platou').val();
	cadena= "idTipo_Plato=" + idTipo_Plato +
			"&Nombre_tipo_plato=" + Nombre_tipo_plato;
			

	$.ajax({
		type:"POST",
		url:"php/Categoriaplato/actualizaTipoPlato.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('php/Categoriaplato/tablatipoplato.php');
				alertify.success("Actualizada con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function preguntarSiNoTipoPlato(idTipo_Plato){
	alertify.confirm('Eliminar Categoria', '¿Esta seguro de eliminar esta Categoria?', 
					function(){ eliminarTipoPlato(idTipo_Plato) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarTipoPlato(idTipo_Plato){

	cadena="idTipo_Plato=" + idTipo_Plato;

		$.ajax({
			type:"POST",
			url:"php/Categoriaplato/eliminarTipoPlato.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('php/Categoriaplato/tablatipoplato.php');
					alertify.success("Eliminada con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}