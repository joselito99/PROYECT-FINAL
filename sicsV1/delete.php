<?php
//delete.php
include("conexion.php");
if(isset($_POST["idrequerimientos"]))
{
 $query = "DELETE FROM requerimientos WHERE idrequerimientos = '".$_POST["idrequerimientos"]."'";
 if(mysqli_query($db, $query))
 {
  echo 'Requerimiento eliminado';
 }
}
?>