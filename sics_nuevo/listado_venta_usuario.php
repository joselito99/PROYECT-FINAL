 <?php

include("seguridad_admin.php");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>REPORTE VENTAS USUARIO</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/css_menu/jquery.mCustomScrollbar.min.css" />
    <link rel="stylesheet" href="css/css_menu/custom.css">
    <link rel="stylesheet" href="css/css_menu/custom-themes.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />

    <link rel="stylesheet" href="css/form_estilo.css" >
</head>

<body style="background-image: url(fondo1.jpg);">




  
    <div class="page-wrapper chiller-theme ">
         <div id="content">
    <nav class="navbar navbar-inverse navbar-fixed-top " role="navigation">
        <div class="container-fluid">
        <div class="navbar-header">
               <button type="button" id="sidebarCollapse" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
            </div>
            
             <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="Administrador.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
				
                <li><a href="salir.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> SALIR</a></li>
            </ul>
            
        </div>
   
             <?php

             include ("Menu_administrador.php");

             ?>
            
        </div>   
    
</nav>
             <br>
        <!-- sidebar-wrapper  -->
        <main class="page-content">
            <div class="container-fluid">
                <div class="row">

                   <!--- contenido de la pagina -->
<p class="texto">VENTAS </p> 


<center>  <a href="reporte_ventas_usuario.php" class="btn btn-success" role="button">Seleccione Usuario</a></center><br><br>

    <div class="container">
      <?php 
      class ListarVentaUsuario
      {
        
        public function ListarUsuario($idUsuario)
        {

          include ('conexion.php');

    $sql="SELECT * FROM detalle_venta INNER JOIN ventas ON detalle_venta.`ventas_idVenta` = ventas.`idVenta` INNER JOIN usuario ON ventas.`Usuario_idUsuario`=usuario.`idUsuario` INNER JOIN mesa ON ventas.`mesa_idMesa` = mesa.`idMesa` WHERE idUsuario = '$idUsuario' ";
       if (!$result = $db->query($sql)){
        die ('Error de conexion[' . $db->error . ']');
      }

       echo "<table class='table  table-striped  table-hover'>";
        
        echo "<tr>";
          echo "  <thead>";
              echo"<td><b>ID VENTA</b></td>";  
              echo "<td ><b>PLATOS</td>";
              echo "<td ><b>MESA</td>";
              echo "<td ><b>CANTIDAD</td>";
              echo "<td ><b>TOTAL</td>";
              echo "<td ><b>FECHA</td>";
          echo "</thead>";
        echo "</tr>";
        while ($row=$result->fetch_assoc()){
          $vventa=stripslashes($row["ventas_idVenta"]);
          $pplato=stripslashes($row["platos_idPlatos"]);      
          $mmesa=stripslashes($row["mesa_idMesa"]);      
          $ccantidad=stripslashes($row["Cantidad"]);
          $ttotalpagar=stripslashes($row["Total_Pagar"]);            
          $ffecha=stripslashes($row["Fecha_venta"]); 

       //subconsulta 
          $sql2= "SELECT * FROM platos where idPlatos='$pplato'";
          if (!$result2 = $db->query($sql2)){
          die ('Error de conexion[' . $db->error . ']');
          }
          while ($row2=$result2->fetch_assoc()){
          $pplato=stripslashes($row2["Nombre_plato"]);
          }
          //subconsulta
               
      echo "<tr>";
            echo"<td>$vventa</td>";
            echo "<td>$pplato</td>";
            echo "<td>$mmesa</td>";
            echo "<td>$ccantidad</td>";
            echo "<td>$ttotalpagar</td>";
            echo "<td>$ffecha</td>";

          echo "</tr>";
          }
          
          echo "</table>";
      $row_cnt = mysqli_num_rows($result);
          echo "<p><b>TOTAL DE VENTAS\n".$row_cnt."</b></p>";
         
         
  } 
        
} 
$nuevo = new ListarVentaUsuario();
if (isset($_POST['idUsuario'])){
$nuevo->ListarUsuario($_POST['idUsuario']);
}   
?>
   
    </table>
       
    </div>


                   <!--- contenido de la pagina -->
                </div>
            </div>
        </main>
        <!-- page-content" -->
        </div></div>
    <!-- page-wrapper -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/js_menu/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/js_menu/custom.js"></script>
    
</body>

</html>