<?php 
	require_once ("../conexion.php");
	$conexion=conexion();
	$idTipo_Plato=$_POST['idTipo_Plato'];
	$n=$_POST['Nombre_tipo_plato'];

	$sql="UPDATE tipo_plato set Nombre_tipo_plato='$n'
				where idTipo_Plato='$idTipo_Plato'";
	echo $result=mysqli_query($conexion,$sql);

 ?>