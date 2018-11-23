
<?php 
require_once ("../conexion.php");
	$conexion=conexion();
	$idPermisos=$_POST['idPermisos'];

	$sql="DELETE from permisos where idPermisos='$idPermisos'";
	echo $result=mysqli_query($conexion,$sql);
 ?>