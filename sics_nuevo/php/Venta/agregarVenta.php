<?php 

	require_once ("../conexion.php");
	$conexion=conexion();
	$idVen=$_POST['idVenta'];
	$u=$_POST['Usuario_idUsuario'];
	$p=$_POST['Platos_idPlatos'];
	$a=$_POST['Adiccionales'];
	$m=$_POST['mesa_idMesa'];
	$c=$_POST['Cantidad'];
	$pago=$_POST['Metodo_Pago'];
	$t=$_POST['Total_Pagar'];


// CONSULTAR SI EXISTE REGISTRADO USUARIO
			
			$userexiste=0;
		
		$sql1= "SELECT * FROM ventas WHERE idVenta='$idVen'";
		if (!$result = $conexion->query($sql1))
		{
				die ('Error de conexion[' . $conexion->error . ']');
		}
			
			while ($row=$result->fetch_assoc())
			{
				$vventa=stripslashes($row["idVenta"]);
				
				$userexiste=$userexiste+1;
			}



			if ($userexiste=="0") {
				$sql="INSERT into ventas (Usuario_idUsuario,Platos_idPlatos,Adiccionales,mesa_idMesa,Cantidad,Metodo_Pago,Total_Pagar)
								values ('$u','$p','$a','$m','$c','$pago','$t')";
	echo $result=mysqli_query($conexion,$sql);
			}

			if ($userexiste!="0") {
				echo "VENTA YA SE ENCUENTRA REGISTRADA";
			}
			
			// FIN DE CONSULTA 	


	

 ?>