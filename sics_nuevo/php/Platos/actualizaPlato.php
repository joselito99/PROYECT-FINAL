<?php 
	require_once ("../conexion.php");
	$conexion=conexion();
	$idPlatos=$_POST['idPlatos'];
	$t=$_POST['Tipo_Plato_idTipo_Plato'];
	$n=$_POST['Nombre_plato'];
	$d=$_POST['Descripcion_plato'];
	$p=$_POST['Precio_plato'];
	$e=$_POST['Estado_plato'];
	$f=$_POST['Fecha_plato'];
	$i=$_POST['Imagen_plato'];


	$sql="UPDATE platos set Tipo_Plato_idTipo_Plato='$t',
								Nombre_plato='$n',
								Descripcion_plato='$d',
								Precio_plato='$p',
								Estado_plato='$e',
								Imagen_plato='$i'
				where idPlatos='$idPlatos'";
	echo $result=mysqli_query($conexion,$sql);

 ?>