<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
	<title>REQUERIMIENTO PRODUCTOS</title>
</head>

	<!-- links plantilla -->
	<link rel="stylesheet" href="vistas/css/estilos.css">
    <link rel="stylesheet" href="vistas/css/contenedor_admin.css">
	<link rel="stylesheet" href="vistas/css/font-awesome.css">
	<link rel="stylesheet" href="formulario_estilos/form_estilo.css">
	<link rel="stylesheet" href="formulario_estilos/botonform.css">
	<!-- links plantilla -->

	<!-- LINKS CONTENEDOR PLATO -->
	<link rel="stylesheet" href="estilos.css">
	<script src="js/jquery-3.1.0.min.js"></script>
	<!-- LINKS CONTENEDOR PLATO -->


<!-- LINKS SELECT -->
<link rel="stylesheet" href="select/css_select/estilo_select.css">
<script src="select/js_select/index_select.js"></script>
<!-- LINKS SELECT -->


	<!-- CLASES FOOTER-->
		<link rel="stylesheet" type="text/css" href="css/util.css">
		<link rel="stylesheet" href="platos/estilos.css">
	<!-- CLASES FOOTER-->





	
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
            
            <a href="#" class="btn btn-danger ">Cerrar Sesion</a></ul>
     </div>
		  
	 
		<aside class="navegacion">
		  <div align="center">
		    <ul class="menu">
		      <!-- TITULAR -->
		      <li class="title-menu">SABOR COSTEÑO</li>
		      <!-- TITULAR -->
		      
		      <li><a href="#"><span class="fa fa-home icon-menu"></span>Inicio</a></li>
		      
		      <li class="item-submenu" menu="1">
		        <a href="#"><span class="fa fa-bookmark icon-menu"></span>Productos</a>
		        <ul class="submenu">
		          <li class="title-menu"><span class="fa fa-inbox icon-menu"></span>Productos</li>
		          <li class="go-back">Atras</li>
		          <li><a href="registro_producto.php"><span class="fa fa-comments icon-menu"></sapn> Registrar Producto</a></li>
		          <li><a href="#"><span class="fa fa-balance-scale icon-menu"></sapn> Cantidad de Productos</a></li>
		          <li><a href="#"><span class="fa fa-comments icon-menu"></sapn> Requerir Productos</a></li>

		          
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
		      <li><a href="Permisos.php"><span class="fa fa-address-book icon-menu"></span>Permisos</a></li>
	        </ul>
	  </div>
	  </aside>
	    </nav>
</header>



<!-----------------------------------------------------------------------------REQUERIMIENTOS PRODUCTOS--------------------------------------------------------------------------------------------------------> 


	  
       
        <!-- SELECT CONSULTA USUARIO-->		
<p class="textoproducto">REQUERIMIENTO PRODUCTOS </p>	
<form method="post" action="neg_requerimiento_producto.php" autocomplete="OFF">	
<div class="cont_select_center">


<center><input type="date" name=""> <br><br></center>

  <!-- Custom select structure --> 
<div class="select_mate" data-mate-select="active" >
<select name="Usuario_idUsuario" onclick="return false;" id="Usuario_idUsuario">
<option value=""  >Selecione Usuario </option>
<option value="1">Select option 1</option>
<option value="2" >Select option 2</option>
<option value="3">Select option 3</option>
  </select>
<p class="selecionado_opcion"  onclick="open_select(this)" ></p><span onclick="open_select(this)" class="icon_select_mate" ><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
    <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
    
</svg></span>
<div class="cont_list_select_mate">
  <ul class="cont_select_int">  </ul> 
</div>
  </div>
  <!-- Custom select structure --> 
</div> <!-- End div center   -->
        <!-- SELECT CONSULTA USUARIO-->		



        <!-- SELECT CONSULTA PRODUCTO-->
        		<div class="cont_select_center2">

  <!-- Custom select structure --> 
<div class="select_mate" data-mate-select="active" >
<select name="Producto_idProducto" onclick="return false;" id="Producto_idProducto">
<option value=""  >Selecione Producto </option>
<option value="1">Select option 1</option>
<option value="2" >Select option 2</option>
<option value="3">Select option 3</option>
<option>Select option 3</option>
  </select>
<p class="selecionado_opcion"  onclick="open_select(this)" ></p><span onclick="open_select(this)" class="icon_select_mate" ><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
    <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
    
</svg></span>
<div class="cont_list_select_mate">
  <ul class="cont_select_int">  </ul> 
</div>
  </div>
  <!-- Custom select structure --> 
</div> <!-- End div center   -->
		<!-- SELECT CONSULTA PRODUCTO-->
<form>

<!-----------------------------------------------------------------------------REQUERIMIENTOS PRODUCTOS--------------------------------------------------------------------------------------------------------> 



   <p>&nbsp;</p>
     <p>&nbsp;</p>
    <p>&nbsp;</p>
          <p>&nbsp;</p>
     <p>&nbsp;</p>
    <p>&nbsp;</p>
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