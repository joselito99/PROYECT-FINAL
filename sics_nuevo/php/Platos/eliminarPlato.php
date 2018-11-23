
<?php 
	require_once ("../conexion.php");
	$conexion=conexion();
	$idPlatos=$_POST['idPlatos'];

	$sql="DELETE from platos where idPlatos='$idPlatos'";
	echo $result=mysqli_query($conexion,$sql);
 ?>