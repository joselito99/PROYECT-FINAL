/******************************************************** USUARIO ********************************************************/
/******************************************************** USUARIO ********************************************************/
/******************************************************** USUARIO ********************************************************/
/******************************************************** USUARIO ********************************************************/
/******************************************************** USUARIO ********************************************************/ 



function agregaformuser(datosusuario){

	d=datosusuario.split('||');

	$('#idUser').val(d[0]);
	$('#Nombre_user').val(d[1]);
	$('#Apellido_user').val(d[2]);
	$('#Tipo_documento_user').val(d[3]);
	$('#Documento_user').val(d[4]);
	$('#Telefono_user').val(d[5]);
	$('#Direccion_user').val(d[6]);
	$('#Contrasena_user').val(d[7]);
	$('#Correo_user').val(d[8]);
	$('#Estado_user').val(d[9]);
	
}

function actualizaUsuario(){


	idUsuario=$('#idUser').val();
	Nombre_usuario=$('#Nombre_user').val();
	Apellido_usuario=$('#Apellido_user').val();
	Tipo_Documento=$('#Tipo_documento_user').val();
	Documento_usuario=$('#Documento_user').val();
	Telefono_usuario=$('#Telefono_user').val();
	Direccion_usuario=$('#Direccion_user').val();
	Contrasena=$('#Contrasena_user').val();
	Correo_usuario=$('#Correo_user').val();
	Estado_usuario=$('#Estado_user').val();
	cadena= "idUsuario=" + idUsuario +
			"&Nombre_usuario=" + Nombre_usuario + 
			"&Apellido_usuario=" + Apellido_usuario +
			"&Tipo_Documento=" + Tipo_Documento +
			"&Documento_usuario=" + Documento_usuario +
			"&Telefono_usuario=" + Telefono_usuario +
			"&Direccion_usuario=" + Direccion_usuario +
			"&Contrasena=" + Contrasena +
			"&Correo_usuario=" + Correo_usuario +
			"&Estado_usuario=" + Estado_usuario;

	$.ajax({
		type:"POST",
		url:"php/Usuario/actualizaUsuario.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('php/Usuario/tablausuarios.php');
				alertify.success("Actualizado con exito :)");
			}
			else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}