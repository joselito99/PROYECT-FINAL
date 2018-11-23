 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php

class Login
{
	public function evaluar($Contrasena,$Documento_usuario)
	{
		session_start();
		$cont=0;
		// CONSULTAR DE LA BASE DE DATOS
		
		include ('conexion.php');

		$sql="SELECT idusuario, Documento_usuario, Contrasena, rol_idRol FROM usuario INNER JOIN permisos ON idusuario=usuario_idUsuario WHERE Documento_usuario = '$Documento_usuario'";


// COMIENZO DE PRUEBA // 


	/* 1 */	if (!$result = $db->query($sql)){
				/* 2 */ die ('Error de conexion[' . $db->error . ']');
			}
			
		/* 3 */	while ($row=$result->fetch_assoc())
			{
				$ccontrasena=stripslashes($row["Contrasena"]);
			/* 4 */	$ddocumento=stripslashes($row["Documento_usuario"]);
						$iid_rol=stripslashes($row["rol_idRol"]);

							/* 5 */								/* 6 */
				if (($ccontrasena==$Contrasena) && ($ddocumento==$Documento_usuario))
				{		/* 7 */
					$cont=$cont+1;
				}
				
			}
				
				
		// FIN DE CONSULTA 
		
		
			/* 8 */
		if ($cont!="0")
		{
			$_SESSION["estado"]="1";
			/* 9 */
			$_SESSION["Documento_usuario"]=$Documento_usuario;
			
			
				
					/* 10 */
			if ($iid_rol=="9")
			{
						/* 11 */
				$_SESSION["rol_idRol"]="9";
				header ("location: Administrador.php");
			}

				/* 12 */
			if ($iid_rol=="11")
			{
						/* 13 */
				$_SESSION["rol_idRol"]="11";
				header ("location: Mesero.php");
			}
			
					/* 14 */
			if ($iid_rol=="10")
			{	
						/* 15 */
				$_SESSION["rol_idRol"]="10";
				header ("location: Bodeguero.php");
			}		
		
		}
				/* 16 */
		if ($cont=="0")
		{	


			include ("login_error.html");


		}

		// FIN DE PRUEBA //
		
	}
	
}

$nuevo=new Login();
$nuevo->evaluar($_POST["Contrasena"],$_POST["Documento_usuario"]);

?>