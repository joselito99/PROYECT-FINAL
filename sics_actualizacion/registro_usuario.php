<!--<?php

/*include("seguridad_admin.php");*/

?>-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>REGISTRO SYSCHICKEN</title>
<style type="text/css">
body {
	background-color: #D2D6DE;
}
body,td,th {
	color: #333;
}
</style>
</head>


<link rel="stylesheet" href="css-2/formato_registro.css" type="text/css"/>


<body bgcolor="#fff">
      <div class="container_registro">
		<div class="form__top">
		  <h2>Formulario <span>Registro</span></h2>
		</div>		
		<form id="form2" name="form2" method="post" action="neg_registro_usuario.php" autocomplete="OFF">
        		<p align="center">
        		 	<input class="input" type="text" placeholder="&#128100;  Nombre" id="Nombre_usuario" name="Nombre_usuario" required>
        		  <label for="documento"></label>
              <input class="input" type="text" name="Apellido_usuario" id="Apellido_usuario" placeholder="&#128100;  Apellido" required>
              <label for="documento"></label>
              <input class="input" type="text" id="Documento_usuario" name="Documento_usuario" placeholder="&#8962;  Documento" required>
        		  <label for="documento"></label>
              <input class="input" type="text" id="Telefono_usuario" name="Telefono_usuario" placeholder="&#8962;  Telefono" required>
              <label for="documento"></label>
              <input class="input" type="text" id="Direccion_usuario" name="Direccion_usuario" placeholder="&#8962;  Direccion" required>
              <label for="documento"></label>
              <input class="input" type="text" id="Correo_usuario" name="Correo_usuario" placeholder="&#8962;  Correo" required>
       		    <input class="input" type="password"  name="Contrasena"  id="Contrasena" placeholder="🔐  Contraseña" required /> <br>
              Rol
              <select name="fk_id_rol" id="fk_id_rol">

                  <option value="Seleccione">Seleccione</option>
                  <?php
         
          include ('conexion.php');
          $sql="SELECT * FROM rol";
          if (!$result=$db->query($sql))
          {
            die('NO conecta [' . $db->error .']');
          }
          
          while ($row=$result->fetch_assoc())
          {
            $ddrol=stripslashes($row["Descripcion_rol"]);
            $dbrol=stripslashes($row["idRol"]);
            echo "<option value=$dbrol > $ddrol </option>>";
          }
         
         ?>
          </select>
       		  </p>
        		 
      		  </p>
       		<div class="btn__form">
            	<input class="btn__submit" type="submit" value="REGISTRAR">
            	<input class="btn__reset" type="reset"  value="LIMPIAR">	
          </div>
		</form>
</div>
      
      <form id="form1" name="form1" method="post" action="evaluar_sesion.php">
        <p align="center"><a href="salir.php" class="letra">Salir</a> </p>
</form>
</body>
</html>