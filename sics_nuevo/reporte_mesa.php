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
    <title>REPORTE VENTAS MESA</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/css_menu/jquery.mCustomScrollbar.min.css" />
    <link rel="stylesheet" href="css/css_menu/custom.css">
    <link rel="stylesheet" href="css/css_menu/custom-themes.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />

    <link rel="stylesheet" href="css/form_estilo.css" >
    <link rel="stylesheet" href="css/figure_mesa.css" >
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
                <li><a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
				
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
<p class="texto">SELECCIONE LA MESA </p> 

    <div class="container">
       <div class="well well-sm">
      <h4> <center> <strong><p> <?php echo $ddusuario; ?></p></strong></center></h4>
        
    </div>
    

<!-- MESA -->


 <?php
        //get rows query

        $query = $db->query("SELECT * FROM mesa ORDER BY idMesa DESC LIMIT 10");
        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){
        ?>
        
  <div id="products">
        <div class="item  col-xs-4 col-lg-4"> 
        <form method="post" id="form1" action="listado_venta_mesa.php">
        <figure id="photo" title="<?php echo $row["Numero_mesa"];?>">                   
                <button type="submit" name="idMesa" class="btn btn-link" id="idMesa" value="<?php echo $row["idMesa"]; ?>"><img src="images/mesa.png" width="250px"> </button>
                  </form>
        </figure>
            </div>
  </div>
   <?php } }else{ ?>
        <p>Producto(s) no existe.....</p>


        <?php } ?>


        
 

 
<!-- MESA -->
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