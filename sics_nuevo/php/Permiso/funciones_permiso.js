/******************************************************** PERMISOS ********************************************************/
/******************************************************** PERMISOS ********************************************************/
/******************************************************** PERMISOS ********************************************************/
/******************************************************** PERMISOS ********************************************************/
/******************************************************** PERMISOS ********************************************************/ 


function agregarPermiso(usuario_idUsuario,rol_idRol){

	cadena="usuario_idUsuario=" + usuario_idUsuario + 
			"&rol_idRol=" + rol_idRol;
			
						

	$.ajax({
		type:"POST",
		url:"php/Permiso/agregarPermiso.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('php/Permiso/tablapermisos.php');
				alertify.success("Agregado con exito :)");
			}else{
				alertify.error(r);
			}
		}
	});

}

function agregaformpermisos(datospermisos){

	d=datospermisos.split('||');

	$('#idPer').val(d[0]);
	$('#usuario_idUsuariou').val(d[1]);
	$('#rol_idRolu').val(d[2]);
	
	
}

function actualizaPermiso(){


	idPermisos=$('#idPer').val();
	usuario_idUsuario=$('#usuario_idUsuariou').val();
	rol_idRol=$('#rol_idRolu').val();
	
	cadena= "idPermisos=" + idPermisos +
			"&usuario_idUsuario=" + usuario_idUsuario +
			"&rol_idRol=" + rol_idRol; 
			

	$.ajax({
		type:"POST",
		url:"php/Permiso/actualizaPermiso.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('php/Permiso/tablapermisos.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}

function preguntarSiNoPermisos(idPermisos){
	alertify.confirm('Eliminar Permiso', '¿Esta seguro de eliminar este permiso?', 
					function(){ eliminarPermiso(idPermisos) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarPermiso(idPermisos){

	cadena="idPermisos=" + idPermisos;

		$.ajax({
			type:"POST",
			url:"php/Permiso/eliminarPermiso.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('php/Permiso/tablapermisos.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}

