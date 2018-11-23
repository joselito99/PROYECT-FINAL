<?php 

	require_once ("../conexion.php");
	$conexion=conexion();
	$n=$_POST['Numero_mesa'];

// CONSULTAR SI EXISTE REGISTRADO USUARIO
			session_start();
			$userexiste=0;
		
		$sql1= "SELECT * FROM mesa WHERE Numero_mesa='$n'";
		if (!$result = $conexion->query($sql1))
		{
				die ('Error de conexion[' . $conexion->error . ']');
		}
			
			while ($row=$result->fetch_assoc())
			{
				$nnumeromesa=stripslashes($row["Numero_mesa"]);
				
				$userexiste=$userexiste+1;
			}



			if ($userexiste=="0") {
				$sql="INSERT into mesa (Numero_mesa)
								values ('$n')";
	echo $result=mysqli_query($conexion,$sql);
			}

			if ($userexiste!="0") {
				echo "MESA YA EXISTE";
			}
			
			// FIN DE CONSULTA 	


	

 ?>