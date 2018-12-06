<?php
/**
  */
 class ActualizaUsuario
 {
 	
 	public function UpdateUsuario($Nombre_usuario,$Apellido_usuario,$Tipo_Documento,$Documento_usuario,$Telefono_usuario,$Direccion_usuario,$Contrasena,$Correo_usuario,$Estado_usuario)
 	{
		
		$sql= "UPDATE usuario SET Nombre_usuario = '$Nombre_usuario',Apellido_usuario = '$Apellido_usuario',Tipo_Documento = '$Tipo_Documento',Documento_usuario = '$Documento_usuario',Telefono_usuario = '$Telefono_usuario',Direccion_usuario = '$Direccion_usuario',Contrasena = '$Contrasena',Correo_usuario = '$Correo_usuario',Estado_usuario = '$Estado_usuario' WHERE Documento_usuario='$Documento_usuario'";
include ('conexion.php');
		if (!$result = $db->query($sql))
		{
				die ('Error de conexion[' . $db->error . ']');
		}
		if($sql) {
			echo'<script type="text/javascript">
        	alert("DATOS ACTUALIZADOS CORRECTAMENTE");
              </script>';
        }else {
                echo '<script language="javascript">alert("No se puedo actualizar los datos");</script>';                           
 			}
 }
}
 $nuevo= new ActualizaUsuario ();
 $nuevo->UpdateUsuario($_POST["Nombre_usuario"],$_POST["Apellido_usuario"],$_POST["Tipo_Documento"],$_POST["Documento_usuario"],$_POST["Telefono_usuario"],$_POST["Direccion_usuario"],$_POST["Contrasena"],$_POST["Correo_usuario"],$_POST["Estado_usuario"]);	 
?>