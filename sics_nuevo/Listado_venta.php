  <?php

  include("seguridad_mesero.php");

  ?>



  <!DOCTYPE html>
  <html lang="es">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
      <title>Listado Ventas</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/css_menu/jquery.mCustomScrollbar.min.css" />
      <link rel="stylesheet" href="css/css_menu/custom.css">
      <link rel="stylesheet" href="css/css_menu/custom-themes.css">
      <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
        <link href="css/multiselect.css" rel="stylesheet"/>
        <link href="css/botonform.css" rel="stylesheet"/>
        <script src="js/multiselect.min.js"></script>

        <!-- BUSCAR -->
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!--- LINK REGISTRPO VENTAS -->
      <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
      <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
      <script src="librerias/jquery-3.2.1.min.js"></script>
      <script src="php/Venta/funciones_venta.js"></script>
      <script src="librerias/bootstrap/js/bootstrap.js"></script>
      <script src="librerias/alertifyjs/alertify.js"></script>
  <!--- LINK REGISTRPO VENTAS -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- LINKS MENUS -->
  <link rel="stylesheet" href="css/estilosproductos.css">
  <!-- LINKS MENUS -->
  <script src="vistas/js/jquery-3.2.1.js"></script>
  <link rel="stylesheet" href="css/form_estilo.css">
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
                  <li><a href="Mesero.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>

                  <li><a href="salir.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> SALIR</a></li>
              </ul>

          </div>

               <?php

               include ("Menu_mesero.php");

               ?>

          </div>

  </nav>
               <br>
          <!-- sidebar-wrapper  -->
          <main class="page-content" >
              <div class="container-fluid" >


                     <!--- contenido de la pagina -->

  <!-- REGISTRO VENTA-->

  <p class="texto">REPORTE DE VENTAS</p>

  <div class="container" id='buscarventa'>
         <div class="well well-sm">
            <h4> <center> <strong><p> <?php echo $ddusuario; ?></p></strong></center></h4>
            

         </div>
   <div class="table-responsive"  style="overflow-x: hidden;">

         <div class="input-daterange">
      <div class="col-md-4">

<center>       <input type="date" id="search" value="" class="form-control"></center>
      </div>
      
      <div class="col-md-4">
       <input type="search" id="search" value="" class="form-control" placeholder="Buscar">
      </div> 
    
      
     </div><br><br><br>
     
          <div class="panel-body">
            <?php
class ListadoVenta
{
    public function lista()
    {
      $cont="0";
      // CONSULTAR DE LA BASE DE DATOS
      
      include ('conexion.php');
      
      $sql= "SELECT * FROM detalle_venta INNER JOIN ventas ON detalle_venta.`ventas_idVenta`=ventas.`idVenta`";
      if (!$result = $db->query($sql)){
          die ('Error de conexion[' . $db->error . ']');
        }
        echo "<table class='table  table-striped  table-hover'>";
        
        echo "<tr>";
          echo "  <thead>";
              echo"<td><b>ID VENTA</b></td>";  
              echo "<td ><b>MESA</td>";
              echo "<td ><b>PLATOS</td>";
              echo "<td ><b>CANTIDAD</td>";
              echo "<td ><b>TOTAL</td>";
              echo "<td ><b>FECHA</td>";
          echo "</thead>";
      
        echo "</tr>";
        
        while ($row=$result->fetch_assoc()){
          $vventa=stripslashes($row["ventas_idVenta"]);
          $mmesa=stripslashes($row["mesa_idMesa"]);
          $pplato=stripslashes($row["platos_idPlatos"]);      
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

          //subconsulta 
          $sql3= "SELECT * FROM mesa where idMesa='$mmesa'";
          if (!$result3 = $db->query($sql3)){
          die ('Error de conexion[' . $db->error . ']');
          }
          while ($row2=$result3->fetch_assoc()){
          $mmesa=stripslashes($row2["Numero_mesa"]);
          }
          //subconsulta          

    
          echo "<tr>";
            echo"<td>$vventa</td>";
            echo "<td>$mmesa</td>";
            echo "<td>$pplato</td>";
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

  $nuevo=new ListadoVenta();
  $nuevo->lista();



  ?>
</div>

          </div>

      </div>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
      <!-- page-wrapper -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="js/js_menu/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/js_menu/custom.js"></script>
      <script src="js/dataTables.bootstrap.js" type="text/javascript"></script>

      <script src="//rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script>

    </body>
  </html>






<script type="text/javascript">

  $(function () {
    $( '#buscarventa' ).searchable({
        striped: true,
        oddRow: { 'background-color': '#f5f5f5' },
        evenRow: { 'background-color': '#fff' },
        searchType: 'fuzzy'
    });
    
    $( '#searchable-container' ).searchable({
        searchField: '#container-search',
        selector: '.row',
        childSelector: '.col-xs-4',
        show: function( elem ) {
            elem.slideDown(100);
        },
        hide: function( elem ) {
            elem.slideUp( 100 );
        }
    })
});

</script>
