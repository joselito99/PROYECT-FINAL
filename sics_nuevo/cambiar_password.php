<?php

include("seguridad_admin.php");


include ('conexion.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>CAMBIAR CONTRASEÑA</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/css_menu/jquery.mCustomScrollbar.min.css" />
    <link rel="stylesheet" href="css/css_menu/custom.css">
    <link rel="stylesheet" href="css/css_menu/custom-themes.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />

    <link rel="stylesheet" href="css/form_estilo.css">
    <link rel="stylesheet" href="css/style_table.css">
</head>

<body  style="background-image: url(fondo1.jpg);">
  
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


<div class="containerpassword">

        
<form id="signup" action="neg_cambiar.php" method="post">
        <div class="header">
        
            <center><h3>Cambiar Contraseña</h3></center>
            
            <p></p>
            
        </div>
        
        <div class="sep"></div>

            <div class="inputs">
                <label>Nueva</label>
            <input type="password" name="clave_actual" placeholder="Password" />
                <label>Confirmar Nueva</label>
            <input type="password" name="clave_nueva" placeholder="Password" />
                

            <input type="submit" id="submit"  name="enviar" value="GUARDAR CAMBIOS">   

    </form>
        </div>

</div>
​


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