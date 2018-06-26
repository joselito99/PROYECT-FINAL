<?php

class Login
{
	public function evaluar($Contrasena,$Documento_usuario)
	{
		session_start();
		$cont="0";
		// CONSULTAR DE LA BASE DE DATOS
		
		include ('conexion.php');
		
		$sql= "SELECT * FROM Usuario WHERE Documento_usuario='$Documento_usuario'";


// COMIENZO DE PRUEBA // 


	/* 1 */	if (!$result = $db->query($sql)){
				/* 2 */ die ('Error de conexion[' . $db->error . ']');
			}
			
		/* 3 */	while ($row=$result->fetch_assoc())
			{
				$ccontrasena=stripslashes($row["Contrasena"]);
			/* 4 */	$ddocumento=stripslashes($row["Documento_usuario"]);
				$ffk_id_rol=stripslashes($row["fk_id_rol"]);

							/* 5 */								/* 6 */
				if (($ccontrasena==$Contrasena) && ($ddocumento==$Documento_usuario) )
				{		/* 7 */
					$cont=$cont+1;
				}
				
			}
				
				
		// FIN DE CONSULTA 
		echo $cont;
		
			/* 8 */
		if ($cont!="0")
		{
			$_SESSION["estado"]="1";
			/* 9 */
			$_SESSION["Documento_usuario"]=$Documento_usuario;
				
					/* 10 */
			if ($ffk_id_rol=="3")
			{
						/* 11 */
				$_SESSION["idRol"]="admin";
				header ("location: Administrador.php");
			}

					/* 12 */
			if ($ffk_id_rol=="4")
			{
						/* 13 */
				$_SESSION["idRol"]="mesero";
				header ("location: Mesero.php");
			}
			
					/* 14 */
			if ($ffk_id_rol=="5")
			{	
						/* 15 */
				$_SESSION["idRol"]="bodeguero";
				header ("location: Bodeguero.php");
			}

			
		
		}
				/* 16 */
		if ($cont=="0")
		{	
						/* 17 */
			header ("location: login_error.html");
		}

		// FIN DE PRUEBA //
		
	}
	
}

$nuevo=new Login();
$nuevo->evaluar($_POST["Contrasena"],$_POST["Documento_usuario"]);

?>