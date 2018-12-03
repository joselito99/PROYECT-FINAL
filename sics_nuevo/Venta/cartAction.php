<?php
// initialize shopping cart class
include 'Cart.php';
$cart = new Cart;

// include database configuration file
include ('../Conexion.php');
if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){
    if($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['id'])){
        $productID = $_REQUEST['id'];
        // get product details
        $query = $db->query("SELECT * FROM platos WHERE idPlatos = ".$productID);
        $row = $query->fetch_assoc();
        $itemData = array(
            'id' => $row['idPlatos'],
            'name' => $row['Nombre_plato'],
            'price' => $row['Precio_plato'],
            'qty' => 1
        );
        
        $insertItem = $cart->insert($itemData);
        $redirectLoc = $insertItem?'viewCart.php':'../Venta.php';
        header("Location: ".$redirectLoc);
    }elseif($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['id'])){
        $itemData = array(
            'rowid' => $_REQUEST['id'],
            'qty' => $_REQUEST['qty']
        );
        $updateItem = $cart->update($itemData);
        echo $updateItem?'ok':'err';die;
    }elseif($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['id'])){
        $deleteItem = $cart->remove($_REQUEST['id']);
        header("Location: viewCart.php");


        /* insert order*/

    }elseif($_REQUEST['action'] == 'placeOrder' && $cart->total_items() > 0 && !empty($_SESSION['idUsuario'])){


            $insertOrder = $db->query('INSERT INTO ventas (Usuario_idUsuario, Total_Pagar, mesa_idMesa) VALUES ("'.$_SESSION['idUsuario'].'","'.$cart->total().'","'.$_SESSION['iidmesa'].'")');


            if($insertOrder){
            $orderID = $db->insert_id;
            $sql = '';
            // get cart items
            $cartItems = $cart->contentsventa();
            foreach($cartItems as $item){
                $sql .= "INSERT INTO detalle_venta (ventas_idVenta, platos_idPlatos, Cantidad) VALUES ('".$orderID."', '".$item['id']."', '".$item['qty']."');";
            }
            // insert order items into database
            $insertOrderItems = $db->multi_query($sql);
            
            if($insertOrderItems){
                $cart->destroy();
                header("Location: orderSuccess.php?id=$orderID");
            }else{
                header("Location: checkout.php");
            }
        }else{
            header("Location: checkout.php");
        }
    }else{
        header("Location: ../Venta.php");
    }
}else{
    header("Location: ../Venta.php");
}

?>