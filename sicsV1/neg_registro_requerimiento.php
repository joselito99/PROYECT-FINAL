<?php
//insert.php
include("conexion.php");
if(isset($_POST["operation"]))
{
 if($_POST["operation"] == "Add")
 {
  $Codigo_requerimiento = mysqli_real_escape_string($db, $_POST["Codigo_requerimiento"]);
  $Descripcion_requerimiento = mysqli_real_escape_string($db, $_POST["Descripcion_requerimiento"]);
  $Fecha_requerimiento = mysqli_real_escape_string($db, $_POST["Fecha_requerimiento"]);
  $producto_idProducto = mysqli_real_escape_string($db, $_POST["producto_idProducto"]);
  $usuario_idUsuario = mysqli_real_escape_string($db, $_POST["usuario_idUsuario"]);
  $query = "
   INSERT INTO requerimientos(idrequerimientos,Codigo_requerimiento, Descripcion_requerimiento, Fecha_requerimiento,producto_idProducto,usuario_idUsuario) 
   VALUES (NULL,'".$Codigo_requerimiento."', '".$Descripcion_requerimiento."', '".$Fecha_requerimiento."','".$producto_idProducto."','".$usuario_idUsuario."')
  ";
  if(mysqli_query($db, $query))
  {
   echo 'Requerimiento Creado';
  }
 }
 if($_POST["operation"] == "Edit")
 {
  $Codigo_requerimiento = mysqli_real_escape_string($db, $_POST["Codigo_requerimiento"]);
  $Descripcion_requerimiento = mysqli_real_escape_string($db, $_POST["Descripcion_requerimiento"]);
  $Fecha_requerimiento = mysqli_real_escape_string($db, $_POST["Fecha_requerimiento"]);
  $producto_idProducto = mysqli_real_escape_string($db, $_POST["producto_idProducto"]);
  $usuario_idUsuario = mysqli_real_escape_string($db, $_POST["usuario_idUsuario"]);

  $query = "UPDATE requerimientos SET Codigo_requerimiento = '".$Codigo_requerimiento."', Descripcion_requerimiento = '".$Descripcion_requerimiento."', Fecha_requerimiento = '".$Fecha_requerimiento."',requerimientos.producto_idProducto = '".$producto_idProducto."',
   requerimientos.usuario_idUsuario = '".$usuario_idUsuario."' WHERE idrequerimientos = '".$_POST["idrequerimientos"]."'";
  if(mysqli_query($db, $query))
  {
   echo 'Requerimiento Actualizado';
  }
 }
}
?>