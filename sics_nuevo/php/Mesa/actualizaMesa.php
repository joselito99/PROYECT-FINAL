<?php 
require_once ("../conexion.php");
	$conexion=conexion();
	$idMesa=$_POST['idMesa'];
	$n=$_POST['Numero_mesa'];

	$sql="UPDATE mesa set Numero_mesa='$n'
				where idMesa='$idMesa'";
	echo $result=mysqli_query($conexion,$sql);

 ?>