<?php
if(!isset($_REQUEST['id'])){
    header("Location: ../Venta.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Listado Platos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/css_menu/jquery.mCustomScrollbar.min.css" />
    <link rel="stylesheet" href="../css/css_menu/custom.css">
    <link rel="stylesheet" href="../css/css_menu/custom-themes.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
    <link href="../css/multiselect.css" rel="stylesheet"/>
    <link href="../css/botonform.css" rel="stylesheet"/>
    <script src="../js/multiselect.min.js"></script>

<!--- LINK REGISTRPO VENTAS -->
    <link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="../librerias/alertifyjs/css/themes/default.css">

    <script src="../librerias/jquery-3.2.1.min.js"></script>
    <script src="../php/Venta/funciones_venta.js"></script>
    <script src="../librerias/bootstrap/js/bootstrap.js"></script>
    <script src="../librerias/alertifyjs/alertify.js"></script>
<!--- LINK REGISTRPO VENTAS -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- LINKS MENUS -->
<link rel="stylesheet" href="css/estilosproductos.css">
<!-- LINKS MENUS -->
<script src="vistas/js/jquery-3.2.1.js"></script>
<link rel="stylesheet" href="../css/form_estilo.css">

<style>
    .container{width: 100%;padding: 50px;}
    p{color: #34a853;font-size: 18px;}
    </style>

</head>
<body style="background-image: url(../fondo1.jpg);">


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
                <li><a href="../mesero.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>

                <li><a href="../salir.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> SALIR</a></li>
            </ul>

        </div>

             <?php

             include ("../Menu_mesero.php");

             ?>

        </div>

</nav>
             <br>
        <!-- sidebar-wrapper  -->
        <main class="page-content" >
            <div class="container-fluid" >


 <center>                  <!--- contenido de la pagina -->
<div class="container">
    <h1>COMPRA FINALIZADA</h1>
    <p>Su Compra fue realizada correctamente #<?php echo $_GET['id']; ?></p>
  <a href="../Venta.php"><img src="../images/exito.png" width="300px" > </a>
</div>
</center>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
    <!-- page-wrapper -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../js/js_menu/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../js/js_menu/custom.js"></script>
</body>
</html>
