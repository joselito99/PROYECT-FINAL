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
	
<?php

include("menu_administrador.php");

?>

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
           
?>
<?php echo " <h5 class='texto'><center>"; echo $ddusuario; echo "</center></h5>"; ?>
        <h5 class="texto">BIENVENIDO </h5> 



</body>
</html>