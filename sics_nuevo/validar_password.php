<?php 


include ('conexion.php');
 if(isset($_SESSION['Documento_usuario'])) { // comprobamos que la sesión esté iniciada
            if(isset($_POST['enviar'])) {
                if($_POST['clave_antigua'] != $_POST['clave_nueva']) {
                    echo "Las contraseñas ingresadas no coinciden. <a href='javascript:history.back();'>Reintentar</a>";
                }else {
                    $Documento_usuario = $_SESSION['Documento_usuario'];
                    $usuario_clave = mysql_real_escape_string($_POST["clave_antigua"]);
                    $usuario_clave = md5($usuario_clave); // encriptamos la nueva contraseña con md5
                    $sql = mysql_query("UPDATE usuario SET Contrasena='".$usuario_clave."' WHERE Documento_usuario='".$Documento_usuario."'");
                    if($sql) {
                        echo "Contraseña cambiada correctamente.";
                    }else {
                        echo "Error: No se pudo cambiar la contraseña. <a href='javascript:history.back();'>Reintentar</a>";
                    }
                }
            }else {
            	echo "error";
			}
	}else {
            echo "Acceso denegado.";
        }


?>