<?php 
require_once ("../conexion.php");
	$conexion=conexion();
	$n=$_POST['Nombre_usuario'];
	$a=$_POST['Apellido_usuario'];
	$t=$_POST['Tipo_Documento'];
	$d=$_POST['Documento_usuario'];
	$tel=$_POST['Telefono_usuario'];
	$dir=$_POST['Direccion_usuario'];
	$con=$_POST['Contrasena'];
	$correo=$_POST['Correo_usuario'];
	$estado=$_POST['Estado_usuario'];


	$sql="UPDATE usuario set Nombre_usuario='$n',
								Apellido_usuario='$a',
								Tipo_Documento='$t',
								Documento_usuario='$d',
								Telefono_usuario='$tel',
								Direccion_usuario='$dir',
								Contrasena='$con',
								Correo_usuario='$correo',
								Estado_usuario='$estado'
				where Documento_usuario='$d'";
	echo $result=mysqli_query($conexion,$sql);

 ?>