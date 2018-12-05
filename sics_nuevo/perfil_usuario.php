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
    <title>PERFIL USUARIO</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/css_menu/jquery.mCustomScrollbar.min.css" />
    <link rel="stylesheet" href="css/css_menu/custom.css">
    <link rel="stylesheet" href="css/css_menu/custom-themes.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />


    <link rel="stylesheet" href="css/form_estilo.css" >
    <link href="css/personalizado_user.css" rel="stylesheet">
    <link href="css/personalizado.css" rel="stylesheet">
</head>

9
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
        <main class="page-content">
            <div class="container-fluid">
                <div class="row">

                   <!--- contenido de la pagina -->
<!-- Contenido de la página -->
    <div class="container">

        <!-- Encabezado de página / Breadcrumb -->
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">Perfil
                    
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Index</a></li>
                    <li><a href="#">Perfil de usuario</a></li>
                    <li class="active">Editar</li>
                </ol>
            </div>
        </div>
        <!-- Fin Encabezado de página / Breadcrumb -->

        <!-- Contact Form -->
        <!-- Campos del formulario de contacto con validación de campos-->
        <div class="row">
            <!-- Columna de la izquierda -->
            <div class="col-md-3">
                <div class="col-md-12" align="center">
                    <img class="img-responsive img-user img-hover" src="img/profile.jpg">
                </div>
                <div class="col-md-12">
                    <p class="text-center"><strong>Nombre Apellido</strong></p>
                    
                </div>

                <div class="col-md-12 text-center">
                   <!-- Redes sociales-->
                   <ul class="list-unstyled list-inline list-social-icons">
                        <li>
                            <a href="#"><i class="editIcons icon-facebook-square editSizeIcons"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="editIcons icon-twitter-square editSizeIcons"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="editIcons icon-google-plus-square editSizeIcons"></i></a>
                        </li>
                    </ul>
                    <!-- Fin redes sociales -->
                </div>

                <div class="col-md-12">
                <!-- Barra vertical de opciones del perfil de usuairo -->
                    <br >
                    <ul class="list-group list-primary">
                        <a href="perfil_usuario.php" class="list-group-item">Mi Perfil</a>
                        <a href="cambiar_password.php" class="list-group-item">Cambiar Contraseña</a>
                        
                    </ul>
                </div>
                <!-- Fin Barra vertical de opciones del perfil de usuario -->
            </div>
            <!-- Fin de Columna de la izquierda -->

            <!-- Parte central -->
            <div class="col-md-9">
                <div class="col-md-12" style="border-width: 1px 1px 0px 1px; border-style: solid; border-color: lightgrey;">
                    <h3 style="text-align: center">Mi perfil <p><small>Añade información personal para compartir tu perfil</small></p></h3>
                </div>
                <!-- Se inicia el form (ojo todos los elementos de formulario deben ir dentro de esta etiqueta-->

                <!-- Inicio del div central parte de formulario información básica -->
                <div class="col-md-12" style="border-width: 1px 1px 0px 1px; border-style: solid; border-color: lightgrey; background: #f1f3f6;">
                    <div class="col-md-8 col-md-offset-2">
                        

<?php
/**
 * 
 */
  $doctemp=$_SESSION["Documento_usuario"];
  include ('conexion.php');
   $sqlx="SELECT * FROM usuario where Documento_usuario='$doctemp'";
          if (!$resultx=$db->query($sqlx))
          {
            die('NO conecta [' . $db->error .']');
          }
          
          while ($row=$resultx->fetch_assoc())
          {
            $iiusuario=stripslashes($row["idUsuario"]);
            $ddusuario=stripslashes($row["Nombre_usuario"]);
            $aapellidousuario   =stripslashes($row["Apellido_usuario"]);
            $ddocumento   =stripslashes($row["Documento_usuario"]);
            $ttelefono   =stripslashes($row["Telefono_usuario"]);
            $ddireccion   =stripslashes($row["Direccion_usuario"]);
            $ccontraseña   =stripslashes($row["Contrasena"]);
            $ccorreo   =stripslashes($row["Correo_usuario"]);
            
          }          

?>



                            <div class="control-group form-group">
                                <div class="controls">
                                    <form id="form" method="post" action="Actualiza_perfil.php">
                                    <input type="hidden" name="idUsuario" id="idUsuario" value="<?php echo $iiusuario; ?>">
                                    <br >
                                    <label><p>Nombre</p></label>
                                    <span id="alertName" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                                        <input type="text" class="form-control" id="Nombre_usuario" name="Nombre_usuario" value="<?php echo $ddusuario; ?>" required data-validation-required-message="Por favor introduzca su nomnbre.">
                                    </span>
                                    <br >
                                    <p><label>Apellidos</label></p>
                                    <span id="alertSurname" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                                        <input type="text" class="form-control" id="Apellido_usuario" name="Apellido_usuario" value="<?php echo $aapellidousuario; ?>" required data-validation-required-message="Por favor introduzca sus apellidos.">
                                    </span>
                                     <br >
                                     <p><label>Tipo Documento</label></p>
                                    <span id="" data-toggle="popover" data-trigger="hover" data-placement="auto" title="" data-content="">
                                        <select class="form-control" id="Tipo_documento" name="Tipo_documento">
                                              <option placeholder="Seleccione Tipo Documento" value="ttipodocumento">
                                                        Seleccione Tipo Documento
                                                </option>
                                          <!-- Consulta Tipo Documento -->
                                                  <?php

                                                  
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
                                    </span>
                                    <br >
                                    <p><label>Documento</label></p>
                                    <span id="alertQualification" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                                        <input type="text" class="form-control" id="Documento_usuario" name="Documento_usuario" value="<?php echo $ddocumento; ?>" data-validation-required-message="Por favor introduzca su título.">
                                    </span>
                                    <br >
                                    <p><label>Telefono</label></p>
                                    <span id="alertEmail" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                                        <input type="text" class="form-control" id="Telefono_usuario" name="Telefono_usuario" value="<?php echo $ttelefono ?>" required data-validation-required-message="Por favor introduzca su email.">
                                    </span>
                                     <br >
                                    <p><label>Direccion</label></p>
                                    <span id="alertQualification" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                                        <input type="text" class="form-control" id="Direccion_usuario" name="Direccion_usuario" value="<?php echo $ddireccion ?>" required data-validation-required-message="Por favor introduzca su título.">
                                    </span>
                                     <br >
                                    <p><label>Contraseña</label></p>
                                    <span id="alertQualification" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                                        <input type="password" class="form-control" id="txtQualification" value="<?php echo $ccontraseña ?>"required data-validation-required-message="Por favor introduzca su título." readonly>
                                    </span>
                                     <br >
                                    <p><label>Correo</label></p>
                                    <span id="alertQualification" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                                        <input type="email" class="form-control" id="Contrasena" name="Contrasena" value="<?php echo $ccorreo ?>" required data-validation-required-message="Por favor introduzca su título.">
                                    </span>
                                     <br >
                                    <p><label>Estado</label></p>
                                       <span id="" data-toggle="popover" data-trigger="hover" data-placement="auto" title="" data-content="">
                                        <select class="form-control" id="Estado_usuario" name="Estado_usuario">
                                              <option placeholder="Seleccione Estado">
                                                        Seleccione Estado
                                                </option>
                                          <!-- Consulta Tipo Documento -->
                                                  <?php

                                                  
                                                  $sql="SELECT * FROM estados";

                                                  if (!$result=$db->query($sql))
                                                {
                                                    die('NO conecta [' . $db->error .']');
                                                }
                                                
                                                while ($row=$result->fetch_assoc())
                                                {
                                                    $destado=stripslashes($row["Nombre_estado"]);
                                                    $dbestados=stripslashes($row["idestados"]);
                                                    echo "<option value=$dbestados > $destado </option>>";
                                                }

                                                  ?>      
                                        
                <!-- Consulta Tipo Documento -->
                                        </select>
                                    </span>

                                    <p class="help-block"></p>
                                   
                                </div>
                            </div>
                    </div>
                </div>
                <!-- Fin del div central parte de formulario información básica -->
                    
                    <!-- Botones formulario -->
                    <div class="col-md-12 container allFormButtons">
                        <br >
                        <div class="col-md-2 col-md-offset-2">
                            <div class="form-group">
                              <a href="ADMINISTRADOR.php"><button type="button" id="btnCancel" class="btn btn-danger">Cancelar</button></a>
                            </div>
                        </div>
                        <div class="col-md-5 col-md-offset-3">
                            <div class="form-group">

                                <button type="submit" class="btn btn-primary">Actualizar</button>
                            </div>
                        </div>
                        &nbsp;
                    </div>
                    <!-- Fin botones formulario -->
                     </form>
                </div>
                <!-- Fin Parte central - enlaces -->
            <!-- Fin del form -->
            </div>  
            <!-- Fin del div de parte central -->
        </div>
        <!-- Fin Campos del formulario de contacto con validación de campos -->
        &nbsp;
        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12 footer-align">
                  <center>  <p>Copyright &copy; <a href="http://www.fmunifer.com">WWW.FMUNIFER.COM</a> 2016. Todos los derechos reservados.</p></center>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->




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