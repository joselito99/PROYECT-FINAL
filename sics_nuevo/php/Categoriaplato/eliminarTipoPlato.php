
<?php 
	require_once ("../conexion.php");
	$conexion=conexion();
	$idTipo_Plato=$_POST['idTipo_Plato'];

	$sql="DELETE from tipo_plato where idTipo_Plato='$idTipo_Plato'";
	echo $result=mysqli_query($conexion,$sql);
 ?>