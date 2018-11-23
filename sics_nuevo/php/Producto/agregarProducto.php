<?php 

	require_once ("../conexion.php");
	$conexion=conexion();
	$n=$_POST['Nombre_producto'];
	$a=$_POST['Codigo_producto'];
	$e=$_POST['Descripcion_producto'];
	$c=$_POST['Cantidad_producto'];
	$f=$_POST['Fecha_producto'];
	$p=$_POST['Precio_producto'];
	$es=$_POST['Estado_producto'];
	

// CONSULTAR SI EXISTE REGISTRADO USUARIO
			
			$userexiste=0;
		
		$sql1= "SELECT * FROM producto WHERE Codigo_producto='$a'";
		if (!$result = $conexion->query($sql1))
		{
				die ('Error de conexion[' . $conexion->error . ']');
		}
			
			while ($row=$result->fetch_assoc())
			{
				$ccodigoproducto=stripslashes($row["Codigo_producto"]);
				
				$userexiste=$userexiste+1;
			}



			if ($userexiste=="0") {
				$sql="INSERT into producto (Nombre_producto,Codigo_producto,Descripcion_producto,Cantidad_producto,Fecha_producto,Precio_producto,Estado_producto)
								values ('$n','$a','$e','$c','$f','$p','$es')";
	echo $result=mysqli_query($conexion,$sql);
			}

			if ($userexiste!="0") {
				echo "PRODUCTO YA EXISTE";
			}
			
			// FIN DE CONSULTA 	


	

 ?>