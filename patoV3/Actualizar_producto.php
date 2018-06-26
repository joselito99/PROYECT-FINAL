<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
	<title>ACTUALIZAR PRODUCTO</title>
</head>

	<link rel="stylesheet" href="vistas/css/estilos.css">
    	<link rel="stylesheet" href="vistas/css/contenedor_admin.css">
	<link rel="stylesheet" href="vistas/css/font-awesome.css">


	<!-- LINKS CONTENEDOR PLATO -->

	<!-- LINKS CONTENEDOR PLATO -->


	<!-- LINKS TABLAS PRODUCTOS -->
<link href="tablas/tablascss.css" type="text/css" rel="stylesheet"/>
<link href="tablas/estilos_tabla.css" type="text/css" rel="stylesheet"/>
	<!-- LINKS TABLAS PRODUCTOS -->

<link rel="stylesheet" href="formulario_estilos/form_estilo.css">

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
	<script src="vistas/js/main1.js"></script>


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
 
        
        



        <!-- ACTUALIZAR PRODUCTO-->
 <?PHP
 class ActualizarProducto
{
	public function lista($Nombre_producto,$Codigo_producto,$Descripcion_producto,$Proveedor_idProveedor)
	{
		$cont="0";
		// CONSULTAR DE LA BASE DE DATOS
		
		include ('conexion.php');
	
		
		$sql= "UPDATE producto SET Codigo_producto='$Codigo_producto', Descripcion_producto='$Descripcion_producto',Proveedor_idProveedor='$Proveedor_idProveedor' where Nombre_producto='$Nombre_producto'";

		if (!$result = $db->query($sql))
		{
				die ('Error de conexion[' . $db->error . ']');
		}

	}
	
}

$nuevo=new ActualizarProducto();
$nuevo->lista($_POST["Nombre_producto"],$_POST["Codigo_producto"],$_POST["Descripcion_producto"],$_POST["Proveedor_idProveedor"]);
?>
        <!-- ACTUALIZAR PRODUCTO-->



<p class="texto"> PRODUCTO ACTUALIZADO</p>

        <!-- FORMATO PARA QUE MUESTRE EL PRODUCTO ACTUALIZADO -->
       <?php
 class Usuario
{
	public function lista($Nombre_producto)
	{
		$cont="0";
		// CONSULTAR DE LA BASE DE DATOS
		
		include ('conexion.php');
		
		$sql= "SELECT * FROM producto WHERE Nombre_producto='$Nombre_producto'";
		if (!$result = $db->query($sql)){
				die ('Error de conexion[' . $db->error . ']');
			}

			echo "<div class=padre_tabla>";
				echo "<div class=hijo_tabla>";
			echo "<table class=table_form>";
			
			echo "<thead>";
				  echo"<th>NOMBRE PRODUCTO</th>";  
				  echo "<th >DESCRIPCION PRODUCTO</th>";
   				  echo "<th >CODIGO PRODUCTO</th>";
   				  echo "<th> PROVEEDOR </th>";
   				  echo "<th >EDITAR</th>";
   				  echo "<th >ELIMINAR</th>";
   				  
				echo "</thead>";
			
			while ($row=$result->fetch_assoc()){
				$nnombre_producto=stripslashes($row["Nombre_producto"]);			
				$ddescripcionproducto=stripslashes($row["Descripcion_producto"]);
				$ccodigoproducto=stripslashes($row["Codigo_producto"]);
				$iidproveedor=stripslashes($row["Proveedor_idProveedor"]);
				//subconsulta
				$sql2= "SELECT * FROM proveedor where idProveedor='$iidproveedor'";
				if (!$result2 = $db->query($sql2)){
				die ('Error de conexion[' . $db->error . ']');
				}
				while ($row2=$result2->fetch_assoc()){
				$nnombre_proveedor=stripslashes($row2["Nombre_Proveedor"]);
				}
				
				//subconsulta
				
				/*$iidcategoria=stripslashes($row["id_categoria"]);
				
				// subconsulta CATEGORIA
				
				
				$sql3= "SELECT * FROM categoria where id_categoria='$iidcategoria'";
				if (!$result3 = $db->query($sql3)){
				die ('Error de conexion[' . $db->error . ']');
				}
				while ($row3=$result3->fetch_assoc()){
				$NNombre_categoria=stripslashes($row3["Nombre_categoria"]);
				}*/
				
				
				
				// FIN SUBCONSULTA
				
			
	
				echo "<tr>";
				  echo"<td>$nnombre_producto</td>";
				  //echo "<td>$ddocumento</td>";
				  echo "<td>$ddescripcionproducto</td>";
				  echo "<td>$ccodigoproducto</td>";
				  //echo "<td>$ssegundo_nombre</td>";
				  //echo "<td>$pprimer_apellido</td>";
				  //echo "<td>$ssegundo_apellido</td>";
				  //echo "<td>$ccontrasena</td>";
  				  echo "<td>$nnombre_proveedor</td>";
  				  
				  
				  echo "<td>";
				 echo " <form id=form2 name=form2 method=post action='editar_datos_productos.php'>";
				 echo "<input type=hidden name=Nombre_producto id=Nombre_producto value=$nnombre_producto />";
				 echo "<input class=buttoncrud type=submit name=button id=button value=Editar />";
         		 echo "</form>";
  				  echo "</td>";
  
				   echo "<td>";
				 echo " <form id=form3 name=form3 method=post action='eliminar_producto.php'>";
				 echo "<input type=hidden name=Nombre_producto id=Nombre_producto value=$nnombre_producto />";
				 echo "<input class=buttoncrud type=submit name=button id=button value=Eliminar />";
         		 echo "</form>";
  				  echo "</td>";

				echo "</tr>";
				}
				
				echo "</table>";
				echo "</div>";
				echo "</div>";
		
	}
	
}

$nuevo=new Usuario();
$nuevo->lista($_POST["Nombre_producto"]);





 /*echo "<table width=200 border=1 class=table_form>";
        echo"<tr>";
          echo"<th scope=col>&nbsp;</th>";
          echo"<th scope=col>&nbsp;</th>";
          echo"<th scope=col>&nbsp;</th>";
          echo"<th scope=col>&nbsp;</th>";
        echo"<tr>";
echo"</table>";*/
?>

        <!-- FORMATO PARA QUE MUESTRE EL PRODUCTO ACTUALIZADO -->





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