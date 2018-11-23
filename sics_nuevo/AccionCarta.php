<?php

// Iniciamos la clase de la carta
include ("neg_carta.php");
$cart = new Cart;

// include database configuration file
include ("conexion.php");
if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){
    if($_REQUEST['action'] == 'addtocart' && !empty($_REQUEST['id'])){
        $platoid = $_REQUEST['id'];
        // get product details
        $query = $db->query("SELECT * FROM platos WHERE id = ".$platoid);
        $row = $query->fetch_assoc();
        $itemData = array(
            'id' => $row['id'],
            'Nombre_plato' => $row['Nombre_plato'],
            'Valor_plato' => $row['Valor_plato'],
            'Cantidad' => 1
        );

        $insertItem = $cart->insert($itemData);
        $redirectLoc = $insertItem?'Listado_compra.php':'Venta.php';
        header("Location: ".$redirectLoc);
    }elseif($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['id'])){
        $itemData = array(
            'rowid' => $_REQUEST['id'],
            'Cantidad' => $_REQUEST['Cantidad']
        );
        $updateItem = $cart->update($itemData);
        echo $updateItem?'ok':'err';die;
    }elseif($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['id'])){
        $deleteItem = $cart->remove($_REQUEST['id']);
        header("Location: Listado_compra.php");
    }elseif($_REQUEST['action'] == 'placeOrder' && $cart->total_vent() > 0 && !empty($_SESSION['Documento_usuario'])){
        // insert order details into database
        $insertOrder = $db->query("INSERT INTO ventas (Usuario_idUsuario, mesa_idMesa, Metodo_Pago, Total_Pagar) VALUES ('".$_SESSION['Documento_usuario']."', '".$_SESSION['nnumeromesa']."', '".$_SESSION['mmetodopago']."', '".$cart->total()."')");

        if($insertOrder){
            $orderID = $db->insert_id;
            $sql = '';
            // get cart items
            $cartItems = $cart->contenido();
            foreach($cartItems as $item){
                $sql .= "INSERT INTO orden_ventas (idOrder, idProduct, Cantidad) VALUES ('".$orderID."', '".$item['id']."', '".$item['Cantidad']."');";
            }
            // insert order items into database
            $insertOrderItems = $db->multi_query($sql);

            if($insertOrderItems){
                $cart->destroy();
                header("Location: VentaExito.php?id=$orderID");
            }else{
                header("Location: Pago_compra.php");
            }
        }else{
            header("Location: Pago_compra.php");
        }
    }else{
        header("Location: Venta.php");
    }
}else{
    header("Location: Venta.php");
}
