/******************************************************** PRODUCTO ********************************************************/
/******************************************************** PRODUCTO ********************************************************/
/******************************************************** PRODUCTO ********************************************************/
/******************************************************** PRODUCTO ********************************************************/
/******************************************************** PRODUCTO ********************************************************/ 

function agregarProducto(Nombre_producto,Codigo_producto,Descripcion_producto,Cantidad_producto,Fecha_producto,Precio_producto,Estado_producto){

	cadena="Nombre_producto=" + Nombre_producto + 
			"&Codigo_producto=" + Codigo_producto +
			"&Descripcion_producto=" + Descripcion_producto +
			"&Cantidad_producto=" + Cantidad_producto +
			"&Fecha_producto=" + Fecha_producto +
			"&Precio_producto=" + Precio_producto +
			"&Estado_producto=" + Estado_producto;
			

	$.ajax({
		type:"POST",
		url:"php/Producto/agregarProducto.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('php/Producto/tablaproducto.php');
				alertify.success("agregado con exito :)");
			}else{
				alertify.error(r);
			}
		}
	});

}

function agregaformproduct(datos){

	d=datos.split('||');

	$('#idProduct').val(d[0]);
	$('#Nombre_productou').val(d[1]);
	$('#Codigo_productou').val(d[2]);
	$('#Descripcion_productou').val(d[3]);
	$('#Cantidad_productou').val(d[4]);
	$('#Fecha_productou').val(d[5]);
	$('#Precio_productou').val(d[6]);
	$('#Estado_productou').val(d[7]);
	
}

function actualizaProducto(){


	idProducto=$('#idProduct').val();
	Nombre_producto=$('#Nombre_productou').val();
	Codigo_producto=$('#Codigo_productou').val();
	Descripcion_producto=$('#Descripcion_productou').val();
	Cantidad_producto=$('#Cantidad_productou').val();
	Fecha_producto=$('#Fecha_productou').val();
	Precio_producto=$('#Precio_productou').val();
	Estado_producto=$('#Estado_productou').val();
	cadena= "idProducto=" + idProducto +
			"&Nombre_producto=" + Nombre_producto + 
			"&Codigo_producto=" + Codigo_producto +
			"&Descripcion_producto=" + Descripcion_producto +
			"&Cantidad_producto=" + Cantidad_producto +
			"&Fecha_producto=" + Fecha_producto +
			"&Precio_producto=" + Precio_producto +
			"&Estado_producto=" + Estado_producto;

	$.ajax({
		type:"POST",
		url:"php/Producto/actualizaProducto.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('php/Producto/tablaproducto.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function preguntarSiNo(idProducto){
	alertify.confirm('Eliminar Producto', '¿Esta seguro de eliminar este producto?', 
					function(){ eliminarProducto(idProducto) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarProducto(idProducto){

	cadena="idProducto=" + idProducto;

		$.ajax({
			type:"POST",
			url:"php/Producto/eliminarProducto.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('php/Producto/tablaproducto.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}