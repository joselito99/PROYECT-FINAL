<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro |SICS|</title>
    <link rel="stylesheet" href="css/estilos_login.css">
    <link rel="stylesheet" href="css/tablascss.css">
</head>
<body>
    <div class="contenedor-form">
        <div class="toggle">
           <a href="login.html"> <span> Inicio Sesion</span> </a>
        </div>
        
        <div class="formulario">
            <h2>Crea tu Cuenta</h2>
            <form action="neg_registro_usuario.php" method="post" autocomplete="OFF">
                               
                <input type="text" id="Nombre_usuario" name="Nombre_usuario" placeholder="Nombre" required>
                
                <input type="text" name="Apellido_usuario" id="Apellido_usuario" placeholder="Apellido" required>

                <select name="Tipo_documento" id="Tipo_documento" class="styleselect">
                    <option placeholder="Seleccione Usuario">
                            Seleccione Tipo Documento
                    </option>
              <!-- Consulta Tipo Documento -->
                      <?php

                      include ('conexion.php');
                      $sql="SELECT * FROM tipo_documento";

                      if (!$result=$db->query($sql))
                    {
                        die('NO conecta [' . $db->error .']');
                    }
                    
                    while ($row=$result->fetch_assoc())
                    {
                        $ddtd=stripslashes($row["Descripcion_documento"]);
                        $dbtd=stripslashes($row["idTipo_Documento"]);
                        echo "<option value=$dbtd > $ddtd </option>>";
                    }

                      ?>      
            
                <!-- Consulta Tipo Documento -->

                </select>
                
                <input type="text" id="Documento_usuario" name="Documento_usuario" placeholder="Documento" required>

                <input type="text"  id="Telefono_usuario" name="Telefono_usuario" placeholder="Telefono" required>

                <input type="text" id="Direccion_usuario" name="Direccion_usuario" placeholder="Direccion" required>

                <input type="email" name="Correo_usuario"  id="Correo_usuario" placeholder="Correo" required>
                
                <input type="password" name="Contrasena"  id="Contrasena" placeholder="Contraseña" required>

                <input type="hidden" name="Estado_usuario"  id="Estado_usuario" value="1" required>               
                
                               
                <input type="submit" value="Registrarse">
           
            </form>
        </div>
       
    </div>
    <script src="js/jquery-3.1.1.min.js"></script>    
    <script src="js/main.js"></script>
</body>
</html>