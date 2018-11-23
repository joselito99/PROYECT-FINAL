<?php

include("seguridad_mesero.php");

?>


<?php
// initializ shopping cart class
include("neg_carta.php");
$cart = new Cart;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Listado Productos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/css_menu/jquery.mCustomScrollbar.min.css" />
    <link rel="stylesheet" href="css/css_menu/custom.css">
    <link rel="stylesheet" href="css/css_menu/custom-themes.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />


      <link href="css/multiselect.css" rel="stylesheet"/>
      <link href="css/botonform.css" rel="stylesheet"/>
  <script src="js/multiselect.min.js"></script>
<!--- LINK REGISTRPO VENTAS -->
<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">

    <script src="librerias/jquery-3.2.1.min.js"></script>
  <script src="php/Venta/funciones_venta.js"></script>
    <script src="librerias/bootstrap/js/bootstrap.js"></script>
    <script src="librerias/alertifyjs/alertify.js"></script>

<!--- LINK REGISTRPO VENTAS -->

    <script>
    function updateCartItem(obj,id){
        $.get("cartAction.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
            if(data == 'ok'){
                location.reload();
            }else{
                alert('Cart update failed, please try again.');
            }
        });
    }
    </script>

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

             include ("Menu_mesero.php");

             ?>

        </div>

</nav>
             <br>
        <!-- sidebar-wrapper  -->
        <main class="page-content" >
            <div class="container-fluid" >
                <div class="row" >

                   <!--- contenido de la pagina -->



<!-- CLASE PARA CONSULTAR LA MESA SELECCIONADA -->

<!-- REGISTRO VENTA-->

<p class="texto">VENTAS</p>

<div class="container">
       <div class="well well-sm">
      <h4> <center> <strong><p> <?php echo $ddusuario; ?></p></strong></center></h4>
      <h4> <center> <strong>Mesa<p> <?php echo $_SESSION["nnumeromesa"];  ?></p></strong></center></h4>


    </div>


<!-- VENTAS -->

    <table class="table">
    <thead>
        <tr>

            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Sub total</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($cart->total_vent() > 0){
            //get cart items from session
            $cartItems = $cart->contenido();
            foreach($cartItems as $item){
        ?>
        <tr>
            <td><?php echo $item["Nombre_plato"]; ?></td>
            <td><?php echo '$'.$item["Valor_plato"].''; ?></td>
            <td><input type="number" class="form-control text-center" value="<?php echo $item["Cantidad"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
          <td><?php echo '$'.$item["subtotal"]. ''; ?></td>
            <td>
                <a href="addtocart.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" class="btn btn-danger" onclick="return confirm('Confirma eliminar?')"><i class="glyphicon glyphicon-trash"></i></a>
            </td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="5"><p>Tu carta esta vacia.....</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td><a href="Venta.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Comprando</a></td>
            <td colspan="2"></td>
            <?php if($cart->total_vent() > 0){ ?>
            <td class="text-center"><strong>Total <?php echo '$'.$cart->total().' '; ?></strong></td>
            <td><a href="Pagos.php" class="btn btn-success btn-block">Pagos <i class="glyphicon glyphicon-menu-right"></i></a></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>


<!-- VENTAS -->
 </div>


  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
    <!-- page-wrapper -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/js_menu/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/js_menu/custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>



</body>

</html>
