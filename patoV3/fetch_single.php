<?php
//fetch_single.php
include("conexion.php");
if(isset($_POST["idrequerimientos"]))
{
 //$output = array();
 $query = "SELECT * FROM requerimientos WHERE idrequerimientos = '".$_POST["idrequerimientos"]."'";
 $result = mysqli_query($db, $query);
 while($row = mysqli_fetch_array($result))
 {
  $output["Codigo_requerimiento"] = $row["Codigo_requerimiento"];
  $output["Descripcion_requerimiento"] = $row["Descripcion_requerimiento"];
  $output["Fecha_requerimiento"] = $row["Fecha_requerimiento"];
  $output["producto_idProducto"] = $row["producto_idProducto"];
  $output["usuario_idUsuario"] = $row["usuario_idUsuario"];
 }
 echo json_encode($output);
}

?>
