<?php 
	require_once ("../conexion.php");
	$conexion=conexion();
	$idProducto=$_POST['idProducto'];
	$n=$_POST['Nombre_producto'];
	$a=$_POST['Codigo_producto'];
	$e=$_POST['Descripcion_producto'];
	$c=$_POST['Cantidad_producto'];
	$f=$_POST['Fecha_producto'];
	$p=$_POST['Precio_producto'];
	$es=$_POST['Estado_producto'];


	$sql="UPDATE producto set Nombre_producto='$n',
								Codigo_producto='$a',
								Descripcion_producto='$e',
								Cantidad_producto='$c',
								Fecha_producto='$f',
								Precio_producto='$p',
								Estado_producto='$es'
				where idProducto='$idProducto'";
	echo $result=mysqli_query($conexion,$sql);

 ?>