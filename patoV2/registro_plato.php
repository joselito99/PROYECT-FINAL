<?php

include("seguridad_admin.php");

?>
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
	<link rel="stylesheet" href="estilos.css">
<script src="js/jquery-3.1.0.min.js"></script>
	<!-- LINKS CONTENEDOR PLATO -->

		
		<link rel="stylesheet" href="formulario_estilos/form_estilo.css">
		<link rel="stylesheet" href="formulario_estilos/botonform.css">

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
<?php

include("menu_administrador.php");

?>

	 

           <p>&nbsp;</p>
 
        
        



        <!-- REGISTRO PLATO-->



		
<p class="texto">Platos</p>		
<div class="form-style-6">

<form name="caca" method="post" action="neg_registro_plato.php" autocomplete="OFF">
<input type="text" name="Nombre_plato" id="Nombre_plato" placeholder="Nombre" />
<input type="text" name="Valor_plato" id="Valor_plato" placeholder="$Valor" />


<select name="Tipo_Plato_idTipo_Plato" id="Tipo_Plato_idTipo_Plato">
	<option placeholder="Seleccione Tipo Plato">
		Seleccione Tipo Plato	</option>
	<!-- Consulta Tipo de Plato -->

	<?php
         
          include ('conexion.php');
          $sql1="SELECT * FROM tipo_plato";
          if (!$result1=$db->query($sql1))
          {
            die('NO conecta [' . $db->error .']');
          }
          
          while ($row=$result1->fetch_assoc())
          {
            $ddplato=stripslashes($row["Nombre_tipo_plato"]);
            $dbplato=stripslashes($row["idTipo_Plato"]);
             echo "<option value=$dbplato > $ddplato </option>>";
            
          }
         
         ?>


	<!-- Consulta Tipo de Plato -->	
</select>


<input type="text" name="Imagen_Plato" id="Imagen_Plato" placeholder="Imagen" />

<input type="submit" class="textobuton" value="Guardar" />
</form>
</div>


		




        <!-- REGISTRO PLATO-->





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