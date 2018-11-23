
<?php 
	require_once ("../conexion.php");
	$conexion=conexion();
	$idProducto=$_POST['idProducto'];

	$sql="DELETE from producto where idProducto='$idProducto'";
	echo $result=mysqli_query($conexion,$sql);
 ?>