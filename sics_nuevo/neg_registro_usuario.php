<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login |SICS|</title>
    <link rel="stylesheet" href="css/estilos_login.css">
    <link rel="stylesheet" href="css/form_estilo.css">
   
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  

  		<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
      

<center><p class="texto">SYSCHICKEN</p> </center>   
    

    <!-- REGISTRO DE USUARIOS -->

    <?php
	  
	  class Registro
	  {
		  public function registar($Nombre_usuario,$Apellido_usuario,$Documento_usuario,$Telefono_usuario,$Direccion_usuario,$Contrasena,$Tipo_documento,$Correo_usuario,$Estado_usuario) 
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
				$sql2= "INSERT INTO usuario (idUsuario, Nombre_usuario, Apellido_usuario,Documento_usuario, Telefono_usuario, Direccion_usuario,Contrasena,Tipo_documento,Correo_usuario,Estado_usuario) VALUES (NULL,'$Nombre_usuario','$Apellido_usuario','$Documento_usuario','$Telefono_usuario','$Direccion_usuario','$Contrasena','$Tipo_documento','$Correo_usuario','$Estado_usuario')";
						if (!$result2 = $db->query($sql2))
						{
							die ('Error de conexion[' . $db->error . ']');
						} 
   				echo " <p class=texto> <a href='index.html'> ¡¡GRACIAS POR SU REGISTRO!! </a> </p>";


		   		echo "<center><a href='login.html' class='btn1 flex-c-m size1 txt3 trans-0-4'>
								INICIO SESION
							</a></center>";		
   				
			}
			
			if ($userexiste!="0")
			{
				echo "<p class=texto>   ¡¡ USUARIO YA SE ENCUENTRA REGISTRADO !! </p>";

				echo "<center><a href='login.html' class='btn1 flex-c-m size1 txt3 trans-0-4'>
								INICIO SESION
							</a></center>";		
			}
		}
		 
		}
		
		$nuevo = new Registro();
		$nuevo->registar($_POST["Nombre_usuario"],$_POST["Apellido_usuario"],$_POST["Documento_usuario"],$_POST["Telefono_usuario"],$_POST["Direccion_usuario"],$_POST["Contrasena"],$_POST["Tipo_documento"],$_POST["Correo_usuario"],$_POST["Estado_usuario"])
	  
		  // FIN DE REGISTRO
	  ?>

	  
        
    
    <script src="js/jquery-3.1.1.min.js"></script>    
    <script src="js/main.js"></script>
</body>
</html>