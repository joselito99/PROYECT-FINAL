<?php

include("seguridad_admin.php");

?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Permisos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/css_menu/jquery.mCustomScrollbar.min.css" />
    <link rel="stylesheet" href="css/css_menu/custom.css">
    <link rel="stylesheet" href="css/css_menu/custom-themes.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />


<!--- LINK REGISTRPO PRODUCTO -->
<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">

    <script src="librerias/jquery-3.2.1.min.js"></script>
  <script src="php/Permiso/funciones_permiso.js"></script>
    <script src="librerias/bootstrap/js/bootstrap.js"></script>
    <script src="librerias/alertifyjs/alertify.js"></script>

<!--- LINK REGISTRPO PRODUCTO -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- LINKS MENUS -->
   

        <link rel="stylesheet" href="css/estilosproductos.css"> 
<!-- LINKS MENUS -->

    <script src="vistas/js/jquery-3.2.1.js"></script>

    <link rel="stylesheet" href="css/form_estilo.css">
</head>

<body style="background-image: url(fondo1.jpg);">
  
    <div class="page-wrapper chiller-theme ">
         <div id="content">
    <nav class="navbar navbar-inverse navbar-fixed-top " role="navigation">
        <div class="container-fluid">
        <div class="navbar-header">
               <button type="button" id="sidebarCollapse" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
            </div>
            
             <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
				
                <li><a href="salir.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> SALIR</a></li>
            </ul>
            
        </div>
   
             <?php

             include ("Menu_administrador.php");

             ?>
            
        </div>   
    
</nav>
             <br>
        <!-- sidebar-wrapper  -->
        <main class="page-content" >
            <div class="container-fluid" >
                <div class="row" >

                   <!--- contenido de la pagina -->


<!-- REGISTRO PRODUCTO-->
        
<p class="texto">LISTAR PERMISOS </p>     

    <div class="container">
        <div id="tabla"></div>
    </div>

    <!-- Modal para registros nuevos -->


<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agrega nuevo permiso</h4>
      </div>
      <div class="modal-body">
          

<label>Usuario</label>
            <select name="usuario_idUsuario" id="usuario_idUsuario" class="form-control input-sm">
  <option placeholder="Seleccione Usuario">
    Seleccione Usuario </option>
  <!-- Consulta Usuario -->

  <?php
         
         
          $sql1="SELECT * FROM usuario";
          if (!$result1=$db->query($sql1))
          {
            die('NO conecta [' . $db->error .']');
          }
          
          while ($row=$result1->fetch_assoc())
          {
            $ddusuario=stripslashes($row["Nombre_usuario"]);
            $dbusuario=stripslashes($row["idUsuario"]);
             echo "<option value=$dbusuario > $ddusuario </option>>";
            
          }
         
         ?>


  <!-- Consulta Usuario --> 
</select>


 <label>Rol</label>
            <select name="rol_idRol" id="rol_idRol" class="form-control input-sm">
  <option placeholder="Seleccione Rol">
    Seleccione Rol </option>
  <!-- Consulta rol -->

  <?php
         
         
          $sql1="SELECT * FROM rol";
          if (!$result1=$db->query($sql1))
          {
            die('NO conecta [' . $db->error .']');
          }
          
          while ($row=$result1->fetch_assoc())
          {
            $ddrol=stripslashes($row["Descripcion_rol"]);
            $dbrol=stripslashes($row["idRol"]);
             echo "<option value=$dbrol > $ddrol </option>>";
            
          }
         
         ?>


  <!-- Consulta rol --> 
</select>




            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
        Agregar
        </button>
       
      </div>
    </div>
  </div>
</div>

<!-- Modal para edicion de datos -->

<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar Permisos</h4>
      </div>
      <div class="modal-body">
            <input type="text" hidden="" id="idPer" name="">
            
 <label>Usuario</label>
            <select name="usuario_idUsuariou" id="usuario_idUsuariou" class="form-control input-sm">
  <option placeholder="Seleccione Usuario">
    Seleccione Usuario </option>
  <!-- Consulta Usuario -->

  <?php
         
          
          $sql1="SELECT * FROM usuario";
          if (!$result1=$db->query($sql1))
          {
            die('NO conecta [' . $db->error .']');
          }
          
          while ($row=$result1->fetch_assoc())
          {
            $ddusuario=stripslashes($row["Nombre_usuario"]);
            $dbusuario=stripslashes($row["idUsuario"]);
             echo "<option value=$dbusuario > $ddusuario </option>>";
            
          }
         
         ?>


  <!-- Consulta Usuario --> 
</select>



<label>Rol</label>
            <select name="rol_idRolu" id="rol_idRolu" class="form-control input-sm">
  <option placeholder="Seleccione Rol">
    Seleccione Rol </option>
  <!-- Consulta rol -->

  <?php
        
          $sql2="SELECT * FROM rol";
          if (!$result2=$db->query($sql2))
          {
            die('NO conecta [' . $db->error .']');
          }
          
          while ($row=$result2->fetch_assoc())
          {
            $ddrol=stripslashes($row["Descripcion_rol"]);
            $dbrol=stripslashes($row["idRol"]);
             echo "<option value=$dbrol > $ddrol </option>>";
            
          }
         
         ?>


  <!-- Consulta rol --> 
</select>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="actualizapermisos" data-dismiss="modal">Actualizar</button>
        
      </div>
    </div>
  </div>
</div>


                </div>
        <!-- REGISTRO PRODUCTO-->



                   <!--- contenido de la pagina -->
                </div>
            </div>
        </main>
        <!-- page-content" -->
        </div></div>
    <!-- page-wrapper -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/js_menu/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/js_menu/custom.js"></script>
    
</body>

</html>


<script type="text/javascript">
    $(document).ready(function(){
        $('#tabla').load('php/Permiso/tablapermisos.php');
    });
</script> 

<script type="text/javascript">
    $(document).ready(function(){
        $('#guardarnuevo').click(function(){
          usuario_idUsuario=$('#usuario_idUsuario').val();
          rol_idRol=$('#rol_idRol').val();
          
            agregarPermiso(usuario_idUsuario,rol_idRol);
        });



        $('#actualizapermisos').click(function(){
          actualizaPermiso();
        });

    });
</script>