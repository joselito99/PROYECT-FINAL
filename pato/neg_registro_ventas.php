<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>REGISTRO VENTAS</title>
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
      <p class="tiutlo">REGISTRO VENTAS</p>
      <p>
      <?php
	  
	  class Registro
	  {
		  public function registar($Fecha_venta,$usuario_idUsuario,$Platos_idPlatos,$Cantidad,$Total_Pagar,$mesa_idMesa) 
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
$sql2= "INSERT INTO ventas (idVentas, Fecha_venta, usuario_idUsuario,Platos_idPlatos,Cantidad,Total_Pagar,mesa_idMesa) VALUES (NULL,'$Fecha_venta','$usuario_idUsuario','$Platos_idPlatos','$Cantidad','$Total_Pagar','$mesa_idMesa')";
			if (!$result2 = $db->query($sql2)){
			die ('Error de conexion[' . $db->error . ']');
			} 
   				echo " <font class=letrar> ¡¡VENTA REGISTRADA!! </font>";

   				
			}
			
			/*if ($userexiste!="0")
			{
				echo "<font class=error>   ¡¡ USUARIO YA SE ENCUENTRA REGISTRADO !! </font>";
		
			}*/
		}
		 
		}
		$nuevo=new Registro();
		$nuevo->registar($_POST["Fecha_venta"],$_POST["usuario_idUsuario"],$_POST["Platos_idPlatos"],$_POST["Cantidad"],$_POST["Total_Pagar"],$_POST["mesa_idMesa"])
	  
		  // FIN DE REGISTRO PLATO
	  
	  ?>
      
      
      
      
      
      </p>
      <p>&nbsp;</p>
      <p class="parrafo">      
      <form id="form1" name="form1" method="post" action="evaluar_sesion.php">
        <p><a href="salir.php" class="letra">Salir</a>          </p>
        <p><a href="registro_producto.php" class="letra">Regresar</a></p>
    </form></td>
  </tr>
  <tr>
    <td height="27">
    
    
    
    </td>
  </tr>
</table>
</body>
</html>