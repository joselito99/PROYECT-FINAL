<?php

class Eliminacion
{
	public function Eliminar($Nombre_producto)
	{
		$cont="0";
		// CONSULTAR DE LA BASE DE DATOS
		
		include ('conexion.php');
		
		$sql= "DELETE FROM producto WHERE Nombre_producto='$Nombre_producto'";
		if (!$result = $db->query($sql)){
				die ('Error de conexion[' . $db->error . ']');
			}
		
	}
	
}

$nuevo=new Eliminacion();
$nuevo->Eliminar($_POST["Nombre_producto"]);

?>      

<?php
header ('location: Cantidad_Producto.php');

?>