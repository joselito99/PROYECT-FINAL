<?php

include("seguridad_admin.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Administrador</title>
	<link rel="stylesheet" href="vistas/css/estilos.css">
    	<link rel="stylesheet" href="vistas/css/contenedor_admin.css">
	<link rel="stylesheet" href="vistas/css/font-awesome.css">
	<link rel="stylesheet" href="formulario_estilos/form_estilo.css">
	
	<style >

	.avatar {
    vertical-align:middle;
    width: 40px;
    height: 40px;
    border-radius: 50%;
}
}
    </style>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

	<script src="vistas/js/jquery-3.2.1.js"></script>
	<script src="vistas/js/main.js"></script>
	

</head>
<body>
	
<nav class="navbar navbar-expand-md">
		<header>

		 <div class="collapse navbar-collapse">  
	<span id="button-menu" class="fa fa-bars"></span>     
 
		
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a href="#">
                  <img src="http://iconshow.me/media/images/ui/ios7-icons/png/512/contact.png" class="avatar" ">
                </a><br>
              </li><br>
            
            <a href="salir.php" class="btn btn-danger ">Cerrar Sesion</a></ul>
     </div>
		  
	 
		<aside class="navegacion">
		  <div align="center">
		    <ul class="menu">
		      <!-- TITULAR -->
		      <li class="title-menu">SABOR COSTEÑO</li>
		      <!-- TITULAR -->
		      
		      <li><a href="Administrador.php"><span class="fa fa-home icon-menu"></span>Inicio</a></li>
		      
		      <li class="item-submenu" menu="1">
		        <a href="#"><span class="fa fa-bookmark icon-menu"></span>Productos</a>
		        <ul class="submenu">
		          <li class="title-menu"><span class="fa fa-inbox icon-menu"></span>Productos</li>
		          <li class="go-back">Atras</li>
		          <li><a href="Cantidad_Producto.php"><span class="fa fa-balance-scale icon-menu"></sapn> Lista Productos</a></li>
		          <li><a href="registro_requerimiento.php"><span class="fa fa-comments icon-menu"></sapn> Requerir Productos</a></li>

		          
	            </ul>
	          </li>
		      
		      <li class="item-submenu" menu="2">
		        <a href="#"><span class="fa fa-bar-chart icon-menu"></span>Ventas</a>
		        <ul class="submenu">
		          <li class="title-menu"><span class="fa fa-inbox icon-menu"></span>Ventas</li>
		          <li class="go-back">Atras</li>
		          
		          <li><a href="#"><span class="fa fa-list-alt icon-menu"></span> Lista Ventas</a></li>
		          <li><a href="#"> <span class="fa fa-list-alt icon-menu"></span>Lista Pedidos</a></li>
		          
	            </ul>
	          </li>
		      
		      <li><a href="registro_plato.php"><span class="fa fa-envelope icon-menu"></span>Platos</a></li>
		      <li><a href="registro_usuario.php"><span class="fa fa-address-book icon-menu"></span>Registro de Usuarios</a></li>
		      <li><a href="registro_mesas.php"><span class="fa fa-address-book icon-menu"></span>Registro de Mesas</a></li>

		      
	        </ul>
	  </div>
	  </aside>
	    </nav>
</header>

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <h5 class="texto"><b>BIENVENIDO ADMINISTRADOR</b></h5>


</body>
</html>