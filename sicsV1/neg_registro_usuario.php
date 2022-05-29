<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<link rel="stylesheet" href="estilos.css" type="text/css"/>
<link rel="stylesheet" href="estilosproductos.css" type="text/css" />
<link rel="stylesheet" href="formato_registro.css" type="text/css"/>
<link rel="stylesheet" href="estilo_tabla.css" type="text/css" />

<body>
<table width="1410" border="0" align="center">
  <tr>
    <td width="1417">
    
   
    </td>
  </tr>
  <tr>
    <td height="258" align="center" valign="top" bgcolor="#9AD1ED" class="parrafo"><p align="right">
      <?php
	  
	  
	  
	  ?>
      </p>
      <p>&nbsp;</p>
      <p class="tiutlo">REGISTRO</p>
      <p>
      <?php
	  
	  class Registro
	  {
		  public function registar($Nombre_usuario,$Apellido_usuario,$Documento_usuario,$Telefono_usuario,$Direccion_usuario,$Correo_usuario,$Contrasena,$fk_id_rol) 
		 {
			include ('conexion.php');
			// CONSULTAR SI EXISTE REGISTRADO USUARIO
			
			$userexiste=0;
		
		$sql= "SELECT * FROM usuario WHERE Documento_usuario='$Documento_usuario'";
		if (!$result = $db->query($sql))
		{
				die ('Error de conexion[' . $db->error . ']');
		}
			
			while ($row=$result->fetch_assoc())
			{
				$ddocumento=stripslashes($row["Documento_usuario"]);
				
				$userexiste=$userexiste+1;
			}
			
			// FIN DE CONSULTA 			
				
			
			// REGISTRO DE USUARIO 
			
			if ($userexiste=="0")
			{
				$sql2= "INSERT INTO usuario (idUsuario, Nombre_usuario, Apellido_usuario,Documento_usuario, Telefono_usuario, Direccion_usuario,Correo_usuario,Contrasena,fk_id_rol) VALUES (NULL,'$Nombre_usuario','$Apellido_usuario','$Documento_usuario','$Telefono_usuario','$Direccion_usuario','$Correo_usuario','$Contrasena','$fk_id_rol')";
						if (!$result2 = $db->query($sql2))
						{
							die ('Error de conexion[' . $db->error . ']');
						} 
   				echo " <font class=letrar> ¡¡USUARIO REGISTRADO!! </font>";
			}
			
			if ($userexiste!="0")
			{
				echo "<font class=error>   ¡¡ USUARIO YA SE ENCUENTRA REGISTRADO !! </font>";
			}
		}
		 
		}
		
		$nuevo = new Registro();
		$nuevo->registar($_POST["Nombre_usuario"],$_POST["Apellido_usuario"],$_POST["Documento_usuario"],$_POST["Telefono_usuario"],$_POST["Direccion_usuario"],$_POST["Correo_usuario"],$_POST["Contrasena"],$_POST["fk_id_rol"])
	  
		  // FIN DE REGISTRO
	  ?>
      	
      </p>
      <p>&nbsp;</p>
      <p class="parrafo">      
      <form id="form1" name="form1" method="post" action="evaluar_sesion.php">
        <p><a href="salir.php" class="letra">Salir</a></p>
        <p><a href="registro_usuario.php" class="letra">Regresar</a></p>
    </form></td>
  </tr>
  <tr>
    <td height="27">
    </td>
  </tr>
</table>
</body>
</html>