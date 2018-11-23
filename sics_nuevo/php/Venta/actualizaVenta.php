<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$idVenta=$_POST['idVenta'];
	$u=$_POST['Usuario_idUsuario'];
	$p=$_POST['Platos_idPlatos'];
	$a=$_POST['Adiccionales'];
	$m=$_POST['Mesa_idMesa'];
	$c=$_POST['Cantidad'];
	$pago=$_POST['Metodo_Pago'];
	
	$t=$_POST['Total_Pagar'];


	$sql="UPDATE producto set Usuario_idUsuario='$u',
								Platos_idPlatos='$p',
								Adiccionales='$a',
								Mesa_idMesa='$m',
								Cantidad='$c',
								Metodo_Pago='$pago',
								Total_Pagar='$t'
				where idVenta='$idVenta'";
	echo $result=mysqli_query($conexion,$sql);

 ?>