
<?php 
require_once ("../conexion.php");
	$conexion=conexion();
	$Numero_mesa=$_POST['Numero_mesa'];

	$sql="DELETE from mesa where Numero_mesa='$Numero_mesa'";
	echo $result=mysqli_query($conexion,$sql);
 ?>