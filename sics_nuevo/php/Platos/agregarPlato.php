<?php 

	require_once ("../conexion.php");
	$conexion=conexion();
	$t=$_POST['Tipo_Plato_idTipo_Plato'];
	$n=$_POST['Nombre_plato'];
	$d=$_POST['Descripcion_plato'];
	$p=$_POST['Precio_plato'];
	$e=$_POST['Estado_plato'];
	$f=$_POST['Fecha_plato'];
	$i=$_POST['Imagen_plato'];
	
	

// CONSULTAR SI EXISTE REGISTRADO USUARIO
			
			$userexiste=0;
		
		$sql1= "SELECT * FROM platos WHERE Nombre_plato='$n'";
		if (!$result = $conexion->query($sql1))
		{
				die ('Error de conexion[' . $conexion->error . ']');
		}
			
			while ($row=$result->fetch_assoc())
			{
				$nnombreplato=stripslashes($row["Nombre_plato"]);
				
				$userexiste=$userexiste+1;
			}



			if ($userexiste=="0") {
				$sql="INSERT into platos (Tipo_Plato_idTipo_Plato,Nombre_plato,Descripcion_plato,Precio_plato,Estado_plato,Fecha_plato,Imagen_plato)
								values ('$t','$n','$d','$p','$e','$f','$i')";
	echo $result=mysqli_query($conexion,$sql);
			}

			if ($userexiste!="0") {
				echo "PLATO YA EXISTE";
			}
			
			// FIN DE CONSULTA 	
 ?>