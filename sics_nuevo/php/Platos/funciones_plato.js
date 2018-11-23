/******************************************************** PLATOS ********************************************************/
/******************************************************** PLATOS ********************************************************/
/******************************************************** PLATOS ********************************************************/
/******************************************************** PLATOS ********************************************************/
/******************************************************** PLATOS ********************************************************/ 





function agregarPlato(Tipo_Plato_idTipo_Plato,Nombre_plato,Descripcion_plato,Precio_plato,Estado_plato,Fecha_plato,Imagen_plato){

	cadena="Tipo_Plato_idTipo_Plato=" + Tipo_Plato_idTipo_Plato + 
			"&Nombre_plato=" + Nombre_plato +
			"&Descripcion_plato=" + Descripcion_plato +
			"&Precio_plato=" + Precio_plato +
			"&Estado_plato=" + Estado_plato +
			"&Fecha_plato=" + Fecha_plato +			
			"&Imagen_plato=" + Imagen_plato;
			

	$.ajax({
		type:"POST",
		url:"php/Platos/agregarPlato.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('php/Platos/tablaplatos.php');
				alertify.success("Agregado con exito");
			}else{
				alertify.error(r);
			}
		}
	});

}

function agregaformplato(datosplato){

	d=datosplato.split('||');

	$('#idPla').val(d[0]);
	$('#Tipo_Plato_idTipo_Platou').val(d[1]);
	$('#Nombre_platou').val(d[2]);
	$('#Descripcion_platou').val(d[3]);
	$('#Precio_platou').val(d[4]);
	$('#Estado_platou').val(d[5]);
	$('#Fecha_platou').val(d[6]);
	$('#Imagen_platou').val(d[7]);
	
	
}

function actualizaPlato(){


	idPlatos=$('#idPla').val();
	Tipo_Plato_idTipo_Plato=$('#Tipo_Plato_idTipo_Platou').val();
	Nombre_plato=$('#Nombre_platou').val();
	Descripcion_plato=$('#Descripcion_platou').val();
	Precio_plato=$('#Precio_platou').val();
	Estado_plato=$('#Estado_platou').val();
	Fecha_plato=$('#Fecha_platou').val();
	Imagen_plato=$('#Imagen_platou').val();
	cadena= "idPlatos=" + idPlatos +
			"&Tipo_Plato_idTipo_Plato=" + Tipo_Plato_idTipo_Plato +
			"&Nombre_plato=" + Nombre_plato + 
			"&Descripcion_plato=" + Descripcion_plato + 
			"&Precio_plato=" + Precio_plato + 
			"&Estado_plato=" + Estado_plato + 
			"&Fecha_plato=" + Fecha_plato +
			"&Imagen_plato=" + Imagen_plato;
			

	$.ajax({
		type:"POST",
		url:"php/Platos/actualizaPlato.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('php/Platos/tablaplatos.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function preguntarSiNoPlato(idPlatos){
	alertify.confirm('Eliminar Plato', '¿Esta seguro de eliminar este plato?', 
					function(){ eliminarPlato(idPlatos) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarPlato(idPlatos){

	cadena="idPlatos=" + idPlatos;

		$.ajax({
			type:"POST",
			url:"php/Platos/eliminarPlato.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('php/Platos/tablaplatos.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}

