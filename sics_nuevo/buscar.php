<?php
 include ('conexion.php');


$columns = array('ventas_idVenta','mesa_idMesa', 'platos_idPlatos', 'Cantidad', 'Total_Pagar', 'Fecha_venta');

$query = "SELECT * FROM ventas INNER JOIN detalle_venta ON ventas.`idVenta`=detalle_venta.`iddetalle_venta` WHERE ";

if($_POST["is_date_search"] == "yes")
{
 $query .= 'Fecha_venta BETWEEN "'.$_POST["start_date"].'" AND "'.$_POST["end_date"].'" AND ';
}

if(isset($_POST["search"]["value"]))
{
 $query .= '
  (ventas_idVenta LIKE "%'.$_POST["search"]["value"].'%" 
  OR platos_idPlatos LIKE "%'.$_POST["search"]["value"].'%" 
  OR Cantidad LIKE "%'.$_POST["search"]["value"].'%" 
  OR mesa_idMesa LIKE "%'.$_POST["search"]["value"].'%"
  OR Total_Pagar LIKE "%'.$_POST["search"]["value"].'%")
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
}
else
{
 $query .= 'ORDER BY ventas_idVenta DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($db, $query));

$result = mysqli_query($db, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $Fecha_venta=date("d/m/Y", strtotime($row["Fecha_venta"]));			
 $sub_array = array();
 $sub_array[] = $row["ventas_idVenta"];
  $sub_array[] = $row["mesa_idMesa"];
 $sub_array[] = $row["platos_idPlatos"];
 $sub_array[] = $row["Cantidad"];
 $sub_array[] = $row["Total_Pagar"];
 $sub_array[] = $Fecha_venta;
 
 $data[] = $sub_array;
}

function get_all_data($db)
{
 $query = "SELECT * FROM ventas INNER JOIN detalle_venta ON ventas.`idVenta`=detalle_venta.`iddetalle_venta`";
 $result = mysqli_query($db, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($db),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>