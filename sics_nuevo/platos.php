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
    <title>Platos</title>
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
  <script src="php/Platos/funciones_plato.js"></script>
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
        
<p class="texto">LISTAR PLATOS </p>     

    <div class="container">
        <div id="tabla"></div>
    </div>


    <!-- Modal para registros nuevos -->


<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agrega nuevo plato</h4>
      </div>
      <div class="modal-body">
        <label>Categoria</label>
        <select name="Tipo_Plato_idTipo_Plato" id="Tipo_Plato_idTipo_Plato" class="form-control input-sm">
  <option placeholder="Seleccione Categoria">
    Seleccione Categoria </option>
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
            <label>Nombre</label>
            <input type="text" name="" id="Nombre_plato" class="form-control input-sm">
            <label>Descripcion</label>
            <input type="text" name="" id="Descripcion_plato" class="form-control input-sm">
            <label>Valor</label>
            <input type="text" name="" id="Precio_plato" class="form-control input-sm">         
            <label>Estado</label>
             <select name="Estado_plato" id="Estado_plato" class="form-control input-sm">
  <option placeholder="Seleccione Estado">
    Seleccione Estado </option>
  <!-- Consulta Tipo de Plato -->

  <?php
         
          include ('conexion.php');
          $sql1="SELECT * FROM estados";
          if (!$result1=$db->query($sql1))
          {
            die('NO conecta [' . $db->error .']');
          }
          
          while ($row=$result1->fetch_assoc())
          {
            $ddestado=stripslashes($row["Nombre_estado"]);
            $dbestado=stripslashes($row["idestados"]);
             echo "<option value=$dbestado > $ddestado </option>>";
            
          }
         
         ?>


  <!-- Consulta Tipo de Plato --> 
</select>
            <label>Fecha</label>
            <input type="date" name="" id="Fecha_plato" class="form-control input-sm">
            <label>Imagen</label>
            <input type="text" name="" id="Imagen_plato" class="form-control input-sm">
            
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
        <h4 class="modal-title" id="myModalLabel">Actualizar Plato</h4>
      </div>
      <div class="modal-body">
            <input type="text" hidden="" id="idPla" name="idPla">
            <label>Categoria</label>
           <select name="Tipo_Plato_idTipo_Platou" id="Tipo_Plato_idTipo_Platou" class="form-control input-sm">
  <option placeholder="Seleccione Categoria">
    Seleccione Categoria </option>
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
             <label>Nombre</label>
            <input type="text" name="" id="Nombre_platou" class="form-control input-sm">
            <label>Descripcion</label>
            <input type="text" name="" id="Descripcion_platou" class="form-control input-sm">
            <label>Valor</label>
            <input type="text" name="" id="Precio_platou" class="form-control input-sm">
            <label>Estado</label>
           <select name="Estado_platou" id="Estado_platou" class="form-control input-sm">
  <option placeholder="Seleccione Estado">
    Seleccione Estado </option>
  <!-- Consulta Tipo de Plato -->

  <?php
         
          include ('conexion.php');
          $sql1="SELECT * FROM estados";
          if (!$result1=$db->query($sql1))
          {
            die('NO conecta [' . $db->error .']');
          }
          
          while ($row=$result1->fetch_assoc())
          {
            $ddestado=stripslashes($row["Nombre_estado"]);
            $dbestado=stripslashes($row["idestados"]);
             echo "<option value=$dbestado > $ddestado </option>>";
            
          }
         
         ?>


  <!-- Consulta Tipo de Plato --> 
</select>
            <label>Fecha</label>
            <input type="text" name="" id="Fecha_platou" class="form-control input-sm">
            <label>Imagen</label>
            <input type="text" name="" id="Imagen_platou" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="actualizaplato" data-dismiss="modal">Actualizar</button>
        
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
        $('#tabla').load('php/Platos/tablaplatos.php');
    });
</script> 

<script type="text/javascript">
    $(document).ready(function(){
        $('#guardarnuevo').click(function(){
          Tipo_Plato_idTipo_Plato=$('#Tipo_Plato_idTipo_Plato').val();
          Nombre_plato=$('#Nombre_plato').val();
          Descripcion_plato=$('#Descripcion_plato').val();
          Precio_plato=$('#Precio_plato').val();
          Estado_plato=$('#Estado_plato').val();
          Fecha_plato=$('#Fecha_plato').val();
          Imagen_plato=$('#Imagen_plato').val();
         
            agregarPlato(Tipo_Plato_idTipo_Plato,Nombre_plato,Descripcion_plato,Precio_plato,Estado_plato,Fecha_plato,Imagen_plato);
        });



        $('#actualizaplato').click(function(){
          actualizaPlato();
        });

    });
</script>