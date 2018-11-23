<?php 
require_once ("../conexion.php");
	$conexion=conexion();
	$idPermisos=$_POST['idPermisos'];
	$u=$_POST['usuario_idUsuario'];
	$r=$_POST['rol_idRol'];


	$sql="UPDATE permisos set usuario_idUsuario='$u',
								rol_idRol='$r'
				where idPermisos='$idPermisos'";
	echo $result=mysqli_query($conexion,$sql);

 ?>