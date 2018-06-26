<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>REGISTRO PLATO</title>
</head>

<link rel="stylesheet" href="estilos.css" type="text/css"/>
<link rel="stylesheet" href="estilosproductos.css" type="text/css" />
<link rel="stylesheet" href="formato_registro.css" type="text/css"/>
<link rel="stylesheet" href="estilo_tabla.css" type="text/css" />

<body>
<table width="1410" border="0" align="center">
  <tr>
    <td width="1417">
    
   
    </td>
  </tr>
  <tr>
    <td height="258" align="center" valign="top" bgcolor="#9AD1ED" class="parrafo"><p align="right">
      <?php
	  
	  
	  
	  ?>
      </p>
      <p>&nbsp;</p>
      <p class="tiutlo">REGISTRO DE FACTURA</p>
      <p>
      <?php 	
	  
	  class Registro
	  {
		  public function registar($fecha_factura,$numero_factura) 
		 {
			include ('conexion.php');
			// CONSULTAR SI EXISTE REGISTRADO USUARIO
			
			$userexiste=0;
		
		$sql= "SELECT * FROM factura";
		if (!$result = $db->query($sql))
		{
				die ('Error de conexion[' . $db->error . ']');
		}
			
			if ($userexiste=="0")
			{
$sql2= "INSERT INTO factura (idFactura,fecha_factura,numero_factura) VALUES (NULL,'$fecha_factura','$numero_factura')";
			if (!$result2 = $db->query($sql2)){
			die ('Error de conexion[' . $db->error . ']');
			} 
   				echo " <font class=letrar> ¡¡FACTURA REGISTRADA!! </font>";
	
			}
		}
		 
		}
		$nuevo=new Registro();
		$nuevo->registar($_POST["fecha_factura"],$_POST["numero_factura"])

	  ?>
      
      
      
      
      
      </p>
      <p>&nbsp;</p>
      <p class="parrafo">      
      <form id="form1" name="form1" method="post" action="evaluar_sesion.php">
        <p><a href="salir.php" class="letra">Salir</a>          </p>
        <p><a href="registro_factura.php" class="letra">Regresar</a></p>
    </form></td>
  </tr>
  <tr>
    <td height="27">
    
    
    
    </td>
  </tr>
</table>
</body>
</html>