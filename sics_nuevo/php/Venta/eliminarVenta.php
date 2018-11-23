
<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$idVenta=$_POST['idVenta'];

	$sql="DELETE from venta where idVenta='$idVenta'";
	echo $result=mysqli_query($conexion,$sql);
 ?>