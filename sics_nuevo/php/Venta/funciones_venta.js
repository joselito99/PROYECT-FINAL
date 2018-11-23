/******************************************************** VENTAS ********************************************************/
/******************************************************** VENTAS ********************************************************/
/******************************************************** VENTAS ********************************************************/
/******************************************************** VENTAS ********************************************************/
/******************************************************** VENTAS ********************************************************/ 

function agregarVenta(Usuario_idUsuario,Platos_idPlatos,Adiccionales,mesa_idMesa,Cantidad,Metodo_Pago,Total_Pagar){

	cadena="Usuario_idUsuario=" + Usuario_idUsuario + 
			"&Platos_idPlatos=" + Platos_idPlatos +
			"&Adiccionales=" + Adiccionales +
			"&mesa_idMesa=" + mesa_idMesa +
			"&Cantidad=" + Cantidad +
			"&Metodo_Pago=" + Metodo_Pago +
			"&Total_Pagar=" + Total_Pagar;
			

	$.ajax({
		type:"POST",
		url:"php/Venta/agregarVenta.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('php/Venta/tablaventa.php');
				alertify.success("Venta Agregada Con Exito :)");
			}else{
				alertify.error(r);
			}
		}
	});

}

function agregaformventa(datosventa){

	d=datosventa.split('||');

	$('#idVen').val(d[0]);
	$('#usuario_idUsuariou').val(d[1]);
	$('#Platos_idPlatosu').val(d[2]);
	$('#Adiccionalesu').val(d[3]);
	$('#mesa_idMesau').val(d[4]);
	$('#Cantidadu').val(d[5]);
	$('#Metodo_Pagou').val(d[6]);
	$('#Total_Pagaru').val(d[7]);
	
}

function actualizaVenta(){


	idVenta=$('#idVen').val();
	Usuario_idUsuario=$('#usuario_idUsuariou').val();
	Platos_idPlatos=$('#Platos_idPlatosu').val();
	Adiccionales=$('#Adiccionalesu').val();
	mesa_idMesa=$('#mesa_idMesau').val();
	Cantidad=$('#Cantidadu').val();
	Metodo_Pago=$('#Metodo_Pagou').val();
	Total_Pagar=$('#Total_Pagaru').val();
	cadena= "idVenta=" + idVenta +
			"&Usuario_idUsuario=" + Usuario_idUsuario + 
			"&Platos_idPlatos=" + Platos_idPlatos +
			"&Adiccionales=" + Adiccionales +
			"&mesa_idMesa=" + mesa_idMesa +
			"&Cantidad=" + Cantidad +
			"&Metodo_Pago=" + Metodo_Pago +
			"&Total_Pagar=" + Total_Pagar;

	$.ajax({
		type:"POST",
		url:"php/Venta/actualizaVenta.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('php/Venta/tablaventa.php');
				alertify.success("Actualizada con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function preguntarSiNoVenta(idProducto){
	alertify.confirm('Eliminar Producto', '¿Esta seguro de eliminar este producto?', 
					function(){ eliminarProducto(idProducto) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarVenta(idProducto){

	cadena="idProducto=" + idProducto;

		$.ajax({
			type:"POST",
			url:"php/eliminarProducto.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('componentes/tablaproducto.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}


