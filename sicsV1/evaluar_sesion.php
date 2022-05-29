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
		if (!$result = $db->query($sql)){
				die ('Error de conexion[' . $db->error . ']');
			}
			
			while ($row=$result->fetch_assoc())
			{
				$ccontrasena=stripslashes($row["Contrasena"]);
				$ddocumento=stripslashes($row["Documento_usuario"]);
				$ffk_id_rol=stripslashes($row["fk_id_rol"]);
				if (($ccontrasena==$Contrasena) && ($ddocumento==$Documento_usuario) )
				{
					$cont=$cont+1;
				}
				
			}
				
				
		// FIN DE CONSULTA 
		echo $cont;
		
		
		if ($cont!="0")
		{
			$_SESSION["estado"]="1";
			$_SESSION["Documento_usuario"]=$Documento_usuario;
			
			if ($ffk_id_rol=="6")
			{
				$_SESSION["idRol"]="admin";
				header ("location: Administrador.php");
			}

			
			if ($ffk_id_rol=="7")
			{
				$_SESSION["idRol"]="mesero";
				header ("location: Mesero.php");
			}
			

			if ($ffk_id_rol=="8")
			{
				$_SESSION["idRol"]="bodeguero";
				header ("location: Bodeguero.php");
			}

			
		
		}
		if ($cont=="0")
		{
			header ("location: login_error.html");
		}
		
	}
	
}

$nuevo=new Login();
$nuevo->evaluar($_POST["Contrasena"],$_POST["Documento_usuario"]);

?>