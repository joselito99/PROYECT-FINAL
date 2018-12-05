/******************************************************** PRODUCTOS_ADMIN ********************************************************/
/******************************************************** PRODUCTOS_ADMIN ********************************************************/
/******************************************************** PRODUCTOS_ADMIN ********************************************************/
/******************************************************** PRODUCTOS_ADMIN ********************************************************/
/******************************************************** PRODUCTOS_ADMIN ********************************************************/ 


function agregaformadmin(datosproductadmin){

	d=datosproductadmin.split('||');

	$('#idPro').val(d[0]);
	$('#Nombre_pro').val(d[1]);
	$('#Codigo_pro').val(d[2]);
	$('#Descripcion_pro').val(d[3]);
	$('#Cantidad_pro').val(d[4]);
	$('#Fecha_pro').val(d[5]);
	$('#Precio_pro').val(d[6]);
	$('#Estado_pro').val(d[7]);
	
}

function actualizaProduct(){

	idProducto=$('#idPro').val();
	Nombre_producto=$('#Nombre_pro').val();
	Codigo_producto=$('#Codigo_pro').val();
	Descripcion_producto=$('#Descripcion_pro').val();
	Cantidad_producto=$('#Cantidad_pro').val();
	Fecha_producto=$('#Fecha_pro').val();
	Precio_producto=$('#Precio_pro').val();
	Estado_producto=$('#Estado_pro').val();
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
				$('#tabla').load('php/Producto_admin/tablaproductoadmin.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function preguntarSiNoadmin(idProducto){
	alertify.confirm('Eliminar Producto', '¿Esta seguro de eliminar este producto?', 
					function(){ eliminarProductoadmin(idProducto) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarProductoadmin(idProducto){

	cadena="idProducto=" + idProducto;

		$.ajax({
			type:"POST",
			url:"php/Producto/eliminarProducto.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('php/Producto_admin/tablaproductoadmin.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}
