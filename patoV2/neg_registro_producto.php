<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
	<title>REGISTRO PRODUCTOS</title>
</head>

	<link rel="stylesheet" href="vistas/css/estilos.css">
    	<link rel="stylesheet" href="vistas/css/contenedor_admin.css">
	<link rel="stylesheet" href="vistas/css/font-awesome.css">
	<link rel="stylesheet" href="formulario_estilos/form_estilo.css">
	<link rel="stylesheet" href="formulario_estilos/botonform.css">


	<!-- LINKS CONTENEDOR PLATO -->
	<link rel="stylesheet" href="estilos.css">
<script src="js/jquery-3.1.0.min.js"></script>
	<!-- LINKS CONTENEDOR PLATO -->



	<!-- CLASES FOOTER-->
		<link rel="stylesheet" type="text/css" href="css/util.css">
		<link rel="stylesheet" href="platos/estilos.css">






	
	<style >

	.avatar {
    vertical-align:middle;
    width: 40px;
    height: 40px;
    border-radius: 50%;
}

    </style>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>


	<script src="vistas/js/jquery-3.2.1.js"></script>
	<script src="vistas/js/main.js"></script>
	


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
		      
		      <li><a href="Bodeguero.php"><span class="fa fa-home icon-menu"></span>Inicio</a></li>
		      
		      <li class="item-submenu" menu="1">
		        <a href="#"><span class="fa fa-bookmark icon-menu"></span>Productos</a>
		        <ul class="submenu">
		          <li class="title-menu"><span class="fa fa-inbox icon-menu"></span>Productos</li>
		          <li class="go-back">Atras</li>
		          
		          <li><a href="registro_producto.php"><span class="fa fa-comments icon-menu"></sapn> Registrar Producto</a></li>
		          <li><a href="Lista_Productos_Bodeguero.php"><span class="fa fa-clipboard "></span> Modificar Productos</a></li>
		          <li><a href="registro_requerimiento_bodeguero.php"><span class="fa fa-comments icon-menu"></sapn> Requerir Productos</a></li>
	        </ul>
	  </div>
	  </aside>
	    </nav>
</header>
    
	  


	 <p>&nbsp;</p>
	 	 <p>&nbsp;</p>

        	 <p>&nbsp;</p>
	 	 <p>&nbsp;</p>	 <p>&nbsp;</p>
	 	 <p>&nbsp;</p>
	 	    <p>&nbsp;</p>
     <p>&nbsp;</p>
    <p>&nbsp;</p>
        



        <!-- REGISTRO PLATO-->

 <?php
	  
	  class Registro
	  {
		  public function registar($Nombre_producto,$Codigo_producto,$Descripcion_producto,$Proveedor_idProveedor) 
		 {
			include ('conexion.php');
			// CONSULTAR SI EXISTE REGISTRADO USUARIO
			
			$userexiste=0;
		
		$sql= "SELECT * FROM platos";
		if (!$result = $db->query($sql))
		{
				die ('Error de conexion[' . $db->error . ']');
		}
			
			/*while ($row=$result->fetch_assoc())
			{
				$ddocumento=stripslashes($row["Documento_usuario"]);
				
				$userexiste=$userexiste+1;
			}*/
			
			// FIN DE CONSULTA 			
				
			
			// REGISTRO DE USUARIO 
			
			if ($userexiste=="0")
			{
$sql2= "INSERT INTO producto (idProducto, Nombre_producto, Codigo_producto,Descripcion_producto,Proveedor_idProveedor) VALUES (NULL,'$Nombre_producto','$Codigo_producto','$Descripcion_producto','$Proveedor_idProveedor')";
			if (!$result2 = $db->query($sql2)){
			die ('Error de conexion[' . $db->error . ']');
			} 
   				echo "<center> <font class=texto> ¡¡PRODUCTO REGISTRADO!! </font> </center>";

   				
			}
			
			/*if ($userexiste!="0")
			{
				echo "<font class=error>   ¡¡ USUARIO YA SE ENCUENTRA REGISTRADO !! </font>";
		
			}*/
		}
		 
		}
		$nuevo=new Registro();
		$nuevo->registar($_POST["Nombre_producto"],$_POST["Codigo_producto"],$_POST["Descripcion_producto"],$_POST["Proveedor_idProveedor"])
	  
		  // FIN DE REGISTRO PLATO
	  
	  ?>


        <!-- REGISTRO PLATO-->





   <p>&nbsp;</p>
     <p>&nbsp;</p>
    <p>&nbsp;</p>
       <p>&nbsp;</p>
     <p>&nbsp;</p>
    <p>&nbsp;</p>
       <p>&nbsp;</p>
     <p>&nbsp;</p>
    <p>&nbsp;</p>
         
    
    
    



<footer class="bg1">
		
		<div class="end-footer bg2">
			<div class="container">
				
				<div class="flex-sb-m flex-w p-t-22 p-b-22">
					<div class="p-t-5 p-b-5">
						<a href="#" class="fs-15 c-white"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
						<a href="#" class="fs-15 c-white"><i class="fa fa-facebook m-l-18" aria-hidden="true"></i></a>
						<a href="#" class="fs-15 c-white"><i class="fa fa-twitter m-l-18" aria-hidden="true"></i></a>
						
					
						<ul>
						<li class="txt14 m-b-14">
							<i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i>
							8th floor, 379 Hudson St, New York, NY 10018
						</li>
						<li class="txt14 m-b-14"> <i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
							(+1) 96 716 6879
						</li></ul></div>

					<div class="txt17 p-r-20 p-t-5 p-b-5">
						<p align="right">Copyright &copy; 2018 All rights reserved  |  This template is made with <i class="fa fa-heart"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
					    </p>
						<p align="right"><span class="txt14 m-b-14"> <i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i> contact@site.com </span></p>
					</div>
				</div>
			</div>
		</div>
</footer>

   
</body>
</html>