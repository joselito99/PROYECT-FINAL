<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
	<title>REGISTRO PLATOS</title>
</head>

	<link rel="stylesheet" href="vistas/css/estilos.css">
    	<link rel="stylesheet" href="vistas/css/contenedor_admin.css">
	<link rel="stylesheet" href="vistas/css/font-awesome.css">


	<!-- LINKS CONTENEDOR PLATO -->
	

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
		      
		      <li><a href="Administrador.php"><span class="fa fa-home icon-menu"></span>Inicio</a></li>
		      
		      <li class="item-submenu" menu="1">
		        <a href="#"><span class="fa fa-bookmark icon-menu"></span>Productos</a>
		        <ul class="submenu">
		          <li class="title-menu"><span class="fa fa-inbox icon-menu"></span>Productos</li>
		          <li class="go-back">Atras</li>
		          <li><a href="registro_producto.php"><span class="fa fa-comments icon-menu"></sapn> Registrar Producto</a></li>
		          <li><a href="Cantidad_Producto.php"><span class="fa fa-balance-scale icon-menu"></sapn> Lista Productos</a></li>
		          <li><a href="registro_requerimiento.php"><span class="fa fa-comments icon-menu"></sapn> Requerir Productos</a></li>

		          
	            </ul>
	          </li>
		      
		      <li class="item-submenu" menu="2">
		        <a href="#"><span class="fa fa-bar-chart icon-menu"></span>Ventas</a>
		        <ul class="submenu">
		          <li class="title-menu"><span class="fa fa-inbox icon-menu"></span>Ventas</li>
		          <li class="go-back">Atras</li>
		          
		          <li><a href="#"><span class="fa fa-list-alt icon-menu"></span> Registro Ventas</a></li>
		          <li><a href="#">Valor de Ventas</a></li>
		          <li><a href="#">Solicitud de Pedidos</a></li>
		          
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
        
           <p>&nbsp;</p>
 
        
        



        <!-- EDITAR PRODUCTO-->

<!-- CLASE PARA EDITAR PRODUCTO -->
 <?PHP
      
 class Producto
{
	public function EditarProducto($Nombre_producto)
	{
		$cont="0";
		// CONSULTAR DE LA BASE DE DATOS
		
		include ('conexion.php');
		
		$sql= "SELECT * FROM producto where Nombre_producto='$Nombre_producto'";
		if (!$result = $db->query($sql)){
				die ('Error de conexion[' . $db->error . ']');
			}
	
			
			while ($row=$result->fetch_assoc()){
				$nnombre_producto=stripslashes($row["Nombre_producto"]);
				$_SESSION["nnombre_producto"]=stripslashes($row["Nombre_producto"]);				
				$ddescripcionproducto=stripslashes($row["Descripcion_producto"]);

				$_SESSION["ddescripcionproducto"]=stripslashes($row["Descripcion_producto"]);
				$ccodigoproducto=stripslashes($row["Codigo_producto"]);

				$_SESSION["ccodigoproducto"]=stripslashes($row["Codigo_producto"]);
				$iidproveedor=stripslashes($row["Proveedor_idProveedor"]);

				$_SESSION["iidproveedor"]=stripslashes($row["Proveedor_idProveedor"]);

				//subconsulta
				$sql2= "SELECT * FROM proveedor where idProveedor='$iidproveedor'";
				if (!$result2 = $db->query($sql2)){
				die ('Error de conexion[' . $db->error . ']');
				}
				while ($row2=$result2->fetch_assoc()){
				$nnombre_proveedor=stripslashes($row2["Nombre_Proveedor"]);
				}
				
		
				}

	}
	
}

$nuevo=new Producto();
$nuevo->EditarProducto($_POST["Nombre_producto"]);

?>
<!-- CLASE PARA EDITAR PRODUCTO -->
	
<div class="form-style-6">
<h1> EDITAR PRODUCTOS</h1>
<form name="caca" method="post" action="Actualizar_producto.php" autocomplete="OFF">
	<center><h5><?php echo $_SESSION["nnombre_producto"];?></h5></center>
<input type="hidden" name="Nombre_producto" id="Nombre_producto" placeholder="Nombre producto" value="<?php echo $_SESSION["nnombre_producto"];?>" >
<input type="text" name="Descripcion_producto" id="Descripcion_producto" placeholder="Descripcion producto" value="<?php echo $_SESSION["ddescripcionproducto"];?>" >
<input type="text" name="Codigo_producto" id="Codigo_producto" placeholder="Codigo producto" value="<?php echo $_SESSION["ccodigoproducto"];?>" >




<!-- Consulta Proveedor -->
<select name="Proveedor_idProveedor" id="Proveedor_idProveedor">
	
		<?php
	
          include ('conexion.php');
          $iiiproveedor=$_SESSION["iidproveedor"];
          $sql2="SELECT * FROM Proveedor WHERE idProveedor='$iiiproveedor'";
          if (!$result2=$db->query($sql2))
          {
            die('NO conecta [' . $db->error .']');
          }
          
          while ($row=$result2->fetch_assoc())
          {
            $ddproveedor=stripslashes($row["Nombre_Proveedor"]);
            $dbproveedor=stripslashes($row["idProveedor"]);
             echo "<option value=$dbproveedor > $ddproveedor </option>>";
            
          }
          $sql2="SELECT * FROM Proveedor";
          if (!$result2=$db->query($sql2))
          {
            die('NO conecta [' . $db->error .']');
          }
          
          while ($row=$result2->fetch_assoc())
          {
            $ddproveedor=stripslashes($row["Nombre_Proveedor"]);
            $dbproveedor=stripslashes($row["idProveedor"]);
             echo "<option value=$dbproveedor > $ddproveedor </option>>";
            
          }

         
         ?>
			

	

</select>
<!-- Consulta Proveedor -->

<input type="submit" value="Guardar" />
</form>
</div>
        <!-- REGISTRO PLATO-->





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