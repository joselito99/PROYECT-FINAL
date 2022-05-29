<?php 

include("seguridad_mesero.php");

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
	<title>REGISTRO VENTAS</title>
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

<?php

include("menu_mesero.php");

?>




        <!-- REGISTRO VENTA-->



		
<p class="texto">REGISTRO DE VENTAS</p>		
<div class="form-style-6">

<form name="caca" method="post" action="neg_registro_ventas.php" autocomplete="OFF">

<!-- CONSULTA MESERO -->

<center>Mesero </center><br>
<?php  
  
  $doctemp=$_SESSION["Documento_usuario"];
  include ('conexion.php');
   $sqlx="SELECT * FROM usuario where Documento_usuario='$doctemp'";
          if (!$resultx=$db->query($sqlx))
          {
            die('NO conecta [' . $db->error .']');
          }
          
          while ($row=$resultx->fetch_assoc())
          {
            $ddusuario=stripslashes($row["Nombre_usuario"]);
          }

 // echo "<center>"; echo $_SESSION["Documento_usuario"]; echo "</center> <br>";
           echo "<center>"; echo $ddusuario; echo "</center> <br>";
?>

<input type="hidden" name="usuario_idUsuario" value=" <?php echo $ddusuario; ?> ">


<!-- CONSULTA MESERO -->

<center>Fecha Venta </center><br>
<input type="date" name="Numero_mesa" id="Numero_mesa" placeholder="Fecha Venta" />	

<!-- CONSULTA VENTA -->

<center>Plato </center><br>

<select name="Platos_idPlatos" id="Platos_idPlatos">

                  <option value="Seleccione ">Seleccione Plato</option>
                  <?php
         
          include ('conexion.php');
          $sql1="SELECT * FROM platos";
          if (!$result1=$db->query($sql1))
          {
            die('NO conecta [' . $db->error .']');
          }
          
          while ($row=$result1->fetch_assoc())
          {
            $ddplato=stripslashes($row["Nombre_plato"]);
            $dbplato=stripslashes($row["idPlatos"]);
            echo "<option value=$dbplato > $ddplato </option>>";
          }
         
         ?>
          </select>

<!-- CONSULTA PLATO -->


<center>Cantidad </center><br>
<input type="number" name="Numero_mesa" id="Numero_mesa" placeholder="Cantidad" />	

<!-- CONSULTA MESA -->

<center>Mesa </center><br>

<select name="mesa_idMesa" id="mesa_idMesa">

                  <option value="Seleccione">Seleccione Mesa</option>
                  <?php
         
          include ('conexion.php');
          $sql1="SELECT * FROM mesa";
          if (!$result1=$db->query($sql1))
          {
            die('NO conecta [' . $db->error .']');
          }
          
          while ($row=$result1->fetch_assoc())
          {
            $ddmesa=stripslashes($row["Numero_mesa"]);
            $dbmesa=stripslashes($row["idMesa"]);
            echo "<option value=$dbmesa > $ddmesa </option>>";
          }
         
         ?>
          </select>


<!-- CONSULTA MESA -->

<center>Total A Pagar </center><br>
<input type="text" name="Numero_mesa" id="Numero_mesa" placeholder="$Valor" />	

<input class="textobuton" type="submit" value="Guardar" />

</form>

</div>
        <!-- REGISTRO PLATO-->






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