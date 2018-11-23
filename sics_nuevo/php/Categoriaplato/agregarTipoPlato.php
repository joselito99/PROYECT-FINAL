<?php 

	require_once ("../conexion.php");
	$conexion=conexion();
	$n=$_POST['Nombre_tipo_plato'];

// CONSULTAR SI EXISTE REGISTRADO USUARIO
			
			$userexiste=0;
		
		$sql1= "SELECT * FROM tipo_plato WHERE Nombre_tipo_plato='$n'";
		if (!$result = $conexion->query($sql1))
		{
				die ('Error de conexion[' . $conexion->error . ']');
		}
			
			while ($row=$result->fetch_assoc())
			{
				$nntipoplato=stripslashes($row["Nombre_tipo_plato"]);
				
				$userexiste=$userexiste+1;
			}



			if ($userexiste=="0") {
				$sql="INSERT into tipo_plato (Nombre_tipo_plato)
								values ('$n')";
	echo $result=mysqli_query($conexion,$sql);
			}

			if ($userexiste!="0") {
				echo "CATEGORIA YA EXISTE";
			}
			
			// FIN DE CONSULTA 	


	

 ?>