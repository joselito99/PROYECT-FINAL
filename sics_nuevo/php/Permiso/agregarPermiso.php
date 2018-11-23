<?php 

require_once ("../conexion.php");
	$conexion=conexion();
	$u=$_POST['usuario_idUsuario'];
	$r=$_POST['rol_idRol'];
	
	

// CONSULTAR SI EXISTE REGISTRADO USUARIO
			
			$userexiste=0;
		
		$sql1= "SELECT * FROM permisos WHERE usuario_idUsuario='$u'";
		if (!$result = $conexion->query($sql1))
		{
				die ('Error de conexion[' . $conexion->error . ']');
		}
			
			while ($row=$result->fetch_assoc())
			{
				$uusuario=stripslashes($row["usuario_idUsuario"]);
				
				$userexiste=$userexiste+1;
			}



			if ($userexiste=="0") {
				$sql="INSERT into permisos (usuario_idUsuario,rol_idRol)
								values ('$u','$r')";
	echo $result=mysqli_query($conexion,$sql);
			}

			if ($userexiste!="0") {
				echo "PERMISO YA EXISTE";
			}
			
			// FIN DE CONSULTA 	


	

 ?>