<?php
//fetch.php
include("conexion.php");
$query = '';
$data = array();
$records_per_page = 10;
$start_from = 0;
$current_page_number = 0;
if(isset($_POST["rowCount"]))
{
 $records_per_page = $_POST["rowCount"];
}
else
{
 $records_per_page = 10;
}
if(isset($_POST["current"]))
{
 $current_page_number = $_POST["current"];
}
else
{
 $current_page_number = 1;
}
$start_from = ($current_page_number - 1) * $records_per_page;
$query .= "SELECT idrequerimientos,Codigo_requerimiento, Descripcion_requerimiento,Fecha_requerimiento,Nombre_producto,Nombre_usuario FROM requerimientos 
  INNER JOIN producto 
    ON requerimientos.producto_idProducto = producto.idProducto 
  INNER JOIN usuario 
    ON requerimientos.usuario_idUsuario = usuario.idUsuario  ";
if(!empty($_POST["searchPhrase"]))
{
$query .= 'WHERE (idrequerimientos LIKE "%'.$_POST["searchPhrase"].'%" ';
 $query .= 'OR Codigo_requerimiento LIKE "%'.$_POST["searchPhrase"].'%" ';
 $query .= 'OR Descripcion_requerimiento LIKE "%'.$_POST["searchPhrase"].'%" ';
 $query .= 'OR Fecha_requerimiento LIKE "%'.$_POST["searchPhrase"].'%" ) ';
 $query .= 'OR Nombre_producto LIKE "%'.$_POST["searchPhrase"].'%" ) ';
 $query .= 'OR Nombre_usuario LIKE "%'.$_POST["searchPhrase"].'%" ) ';
}
$order_by = '';
if(isset($_POST["sort"]) && is_array($_POST["sort"]))
{
 foreach($_POST["sort"] as $key => $value)
 {
  $order_by .= " $key $value, ";
 }
}
else
{
 $query .= 'ORDER BY idrequerimientos DESC ';
}
if($order_by != '')
{
 $query .= ' ORDER BY ' . substr($order_by, 0, -2);
}

if($records_per_page != -1)
{
 $query .= " LIMIT " . $start_from . ", " . $records_per_page;
}
//echo $query;
$result = mysqli_query($db, $query);
while($row = mysqli_fetch_assoc($result))
{
 $data[] = $row;
}

$query1 = "SELECT * FROM requerimientos";
$result1 = mysqli_query($db, $query1);
$total_records = mysqli_num_rows($result1);

$output = array(
 'current'  => intval($_POST["current"]),
 'rowCount'  => 10,
 'total'   => intval($total_records),
 'rows'   => $data
);

echo json_encode($output);



?>