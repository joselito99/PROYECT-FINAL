<?php
                         

// include database configuration file
include '../conexion.php';

// initializ shopping cart class
include 'Cart.php';
$cart = new Cart;

// redirect to home if cart is empty
if($cart->total_items() <= 0){
    header("Location: ../Venta.php");
}

// set customer ID in session
//$_SESSION['idUsuario'] = 25;

// get customer details by session customer ID
$query = $db->query("SELECT * FROM usuario WHERE idUsuario = ".$_SESSION['idUsuario']);

$custRow = $query->fetch_assoc();   
?>
<!DOCTYPE html>
<html lang="es">
<head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Listado Platos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/css_menu/jquery.mCustomScrollbar.min.css" />
    <link rel="stylesheet" href="../css/css_menu/custom.css">
    <link rel="stylesheet" href="../css/css_menu/custom-themes.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
    <link href="../css/multiselect.css" rel="stylesheet"/>
    <link href="../css/botonform.css" rel="stylesheet"/>
    <script src="../js/multiselect.min.js"></script>

<!--- LINK REGISTRPO VENTAS -->
    <link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="../librerias/alertifyjs/css/themes/default.css">

    <script src="../librerias/jquery-3.2.1.min.js"></script>
    <script src="../php/Venta/funciones_venta.js"></script>
    <script src="../librerias/bootstrap/js/bootstrap.js"></script>
    <script src="../librerias/alertifyjs/alertify.js"></script>
<!--- LINK REGISTRPO VENTAS -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- LINKS MENUS -->
<link rel="stylesheet" href="css/estilosproductos.css">
<!-- LINKS MENUS -->
<script src="vistas/js/jquery-3.2.1.js"></script>
<link rel="stylesheet" href="../css/form_estilo.css">

 <style>
    .container{width: 100%;padding: 50px;}
    .table{width: 65%;float: left;}
    .shipAddr{width: 30%;float: left;margin-left: 30px;}
    .footBtn{width: 95%;float: left;}
    .orderBtn {float: right;}
    </style>

</head>
<body style="background-image: url(../fondo1.jpg);">


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
                <li><a href="../mesero.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>

                <li><a href="../salir.php"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> SALIR</a></li>
            </ul>

        </div>

             <?php

             include ("../Menu_mesero.php");

             ?>

        </div>

</nav>
             <br>
        <!-- sidebar-wrapper  -->
        <main class="page-content" >
            <div class="container-fluid" >


                   <!--- contenido de la pagina -->


<!-- REGISTRO VENTA-->

<p class="texto">Listado Platos</p>
<div class="container">

 <div class="well well-sm">
      <h4> <center> <strong><p> <?php echo $ddusuario; ?></p></strong></center></h4>
      <h4> <center> <strong>Mesa<p> <?php echo $_SESSION["nnumeromesa"];  ?></p></strong></center></h4>
    </div>

    <h1>Vista Orden</h1>
    <table class="table">
    <thead>
        <tr>
            <th>Plato</th>
            <th>Valor</th>
            <th>Cantidad</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contentsventa();
            foreach($cartItems as $item){
        ?>
        <tr>
            <td><?php echo $item["name"]; ?></td>
            <td><?php echo '$'.$item["price"].' '; ?></td>
            <td><?php echo $item["qty"]; ?></td> 
            <td><?php echo '$'.$item["subtotal"].' '; ?></td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="4"><p>No items in your cart......</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td class="text-center"><strong>Total <?php echo '$'.$cart->total().' '; ?></strong></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
    <div class="shipAddr">
        <h4>Vendedor Detalles</h4>
        <p><?php echo $custRow['Nombre_usuario']; ?></p>
        <p><?php echo $custRow['Correo_usuario']; ?></p>
        <p><?php echo $custRow['Telefono_usuario']; ?></p>
        <p><?php echo $custRow['Direccion_usuario']; ?></p>
    </div>
    <div class="footBtn">
        <a href="../Venta.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Comprando</a>
        <a href="cartAction.php?action=placeOrder" class="btn btn-success orderBtn">Realizar pedido <i class="glyphicon glyphicon-menu-right"></i></a>
    </div>
</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
    <!-- page-wrapper -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../js/js_menu/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../js/js_menu/custom.js"></script>
</body>
</html>