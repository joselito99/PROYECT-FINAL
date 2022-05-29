<?php

include("seguridad_admin.php");

?>


<?php
include("conexion.php");
$query = "SELECT * FROM producto";
$result = mysqli_query($db, $query);
$output = '';
while($row = mysqli_fetch_array($result))
{
 $output .= '<option value="'.$row["idProducto"].'">'.$row["Nombre_producto"].'</option>';
}
?>

<?php
include("conexion.php");
$query = "SELECT * FROM usuario";
$result = mysqli_query($db, $query);
$user = '';
while($row = mysqli_fetch_array($result))
{
 $user .= '<option value="'.$row["idUsuario"].'">'.$row["Nombre_usuario"].'</option>';
}
?>


<html>
	<head>
	<title>REGISTRO REQUERIMIENTO</title>
	

	<!-- LINKS REQUERIMIENTOS -->

	<!-- LINKS REQUERIMIENTOS -->


	<link rel="stylesheet" href="vistas/css/estilos.css">	
	<link rel="stylesheet" href="vistas/css/font-awesome.css">
  <link rel="stylesheet" href="formulario_estilos/form_estilo.css">

	<!-- CLASES FOOTER-->
		<link rel="stylesheet" type="text/css" href="css/util.css">
	<!-- CLASES FOOTER-->

	

	<style >

	.avatar {
    vertical-align:;
    width: 40px;
    height: 40px;
    border-radius: 50%;
	}
	body
   {
    margin:0;
    padding:0;
    background-color:#f1f1f1;
   }
   .box
   {
    width:1270px;
    padding:20px;
    background-color:#fff;
    border:1px solid #ccc;
    border-radius:5px;
    margin-top:25px;
   }
    </style>
</head>


	 
	<script src="vistas/js/jquery-3.2.1.js"></script>
	<script src="vistas/js/main.js"></script>
	

	  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.js"></script> 

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<body>

	 

  
<nav class="navbar navbar-expand-md">
    <header>

     <div class="collapse navbar-collapse">  
  <span id="button-menu" class="fa fa-bars"></span>     
 
    
         
     </div>
      
   
    <aside class="navegacion">
      <div align="center">
        <ul class="menu">
          <!-- TITULAR -->
          <li class="title-menu">SABOR COSTEÑO</li>
          <!-- TITULAR -->
          
          <li><a href="Administrador.php"><span class="fa fa-home icon-menu"></span>Inicio</a></li>
          
          <li class="item-submenu" menu="1">
            <a href="#"><span class="fa fa-bookmark icon-menu"></span>Productos</a>
            <ul class="submenu">
              <li class="title-menu"><span class="fa fa-inbox icon-menu"></span>Productos</li>
              <li class="go-back">Atras</li>
              <li><a href="Cantidad_Producto.php"><span class="fa fa-balance-scale icon-menu"></sapn> Lista Productos</a></li>
              <li><a href="registro_requerimiento.php"><span class="fa fa-comments icon-menu"></sapn> Requerir Productos</a></li>

              
              </ul>
            </li>
          
          <li class="item-submenu" menu="2">
            <a href="#"><span class="fa fa-bar-chart icon-menu"></span>Ventas</a>
            <ul class="submenu">
              <li class="title-menu"><span class="fa fa-inbox icon-menu"></span>Ventas</li>
              <li class="go-back">Atras</li>
              
              <li><a href="#"><span class="fa fa-list-alt icon-menu"></span> Lista Ventas</a></li>
              <li><a href="#"> <span class="fa fa-list-alt icon-menu"></span>Lista Pedidos</a></li>
              
              </ul>
            </li>
          
          <li><a href="registro_plato.php"><span class="fa fa-envelope icon-menu"></span>Platos</a></li>
          <li><a href="registro_usuario.php"><span class="fa fa-address-book icon-menu"></span>Registro de Usuarios</a></li>
          <li><a href="proveedor.php"><span class="fa fa-address-book icon-menu"></span>Registro de Proveedor</a></li>
          <li><a href="registro_mesas.php"><span class="fa fa-address-book icon-menu"></span>Registro de Mesas</a></li>

          
          </ul>
    </div>
    </aside>
      </nav>
</header>
	  


	 <p>&nbsp;</p>

	 <p>&nbsp;</p>

	 <p>&nbsp;</p>



        
        



        <!-- REGISTRO REQUERIMIENTO-->
		

		<!-- INICIO REQUERIMIENTO -->

<div class="container box">
   <h1 align="center" class="">REQUERIMIENTO</h1>
   <br>
   <div align="right">
    <button type="button" id="add_button" data-toggle="modal" data-target="#productModal" class="btn btn-info btn-lg">Agregar</button>
   </div>
   <div class="table-responsive">
    <table id="product_data" class="table table-bordered table-striped">
     <thead>
      <tr>
       
       <th data-column-id="Nombre_producto">Producto</th>
       <th data-column-id="Nombre_usuario">Usuario</th>
       <th data-column-id="Descripcion_requerimiento">Descripcion</th>
       <th data-column-id="Fecha_requerimiento">Fecha</th>
       <th data-column-id="Codigo_requerimiento">Codigo</th>
       <th data-column-id="commands" data-formatter="commands" data-sortable="false">Accion</th>
      </tr>
     </thead>
    </table>
   </div>
 </body>
</html>
<script type="text/javascript" language="javascript" >
$(document).ready(function(){
 $('#add_button').click(function(){
  $('#product_form')[0].reset();
  $('.modal-title').text("Add Product");
  $('#action').val("Add");
  $('#operation').val("Add");
 });
 
 var productTable = $('#product_data').bootgrid({
  ajax: true,
  rowSelect: true,
  post: function()
  {
   return{
    id: "b0df282a-0d67-40e5-8558-c9e93b7befed"
   };
  },
  url: "fetch.php",
  formatters: {
   "commands": function(column, row)
   {
    return "<button type='button' class='btn btn-warning btn-xs update' data-row-id='"+row.idrequerimientos+"'>Editar</button>" + 
    "&nbsp; <button type='button' class='btn btn-danger btn-xs delete' data-row-id='"+row.idrequerimientos+"'>Eliminar</button>";
   }
  }
 });
 
 $(document).on('submit', '#product_form', function(event){
  event.preventDefault();
  var Codigo_requerimiento = $('#Codigo_requerimiento').val();
  var Descripcion_requerimiento = $('#Descripcion_requerimiento').val();
  var Fecha_requerimiento = $('#Fecha_requerimiento').val();
  var producto_idProducto = $('#producto_idProducto').val();
  var usuario_idUsuario = $('#usuario_idUsuario').val();
  var form_data = $(this).serialize();
  if(Codigo_requerimiento != '' && Descripcion_requerimiento != '' && Fecha_requerimiento != '' && producto_idProducto!='' && usuario_idUsuario!='')
  {
   $.ajax({
    url:"neg_registro_requerimiento.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     alert(data);
     $('#product_form')[0].reset();
     $('#productModal').modal('hide');
     $('#product_data').bootgrid('reload');
    }
   });
  }
  else
  {
   alert("Campo Requerido");
  }
 });
 
 $(document).on("loaded.rs.jquery.bootgrid", function()
 {
  productTable.find(".update").on("click", function(event)
  {
   var idrequerimientos = $(this).data("row-id");
    $.ajax({
    url:"fetch_single.php",
    method:"POST",
    data:{idrequerimientos:idrequerimientos},
    dataType:"json",
    success:function(data)
    {
     $('#productModal').modal('show');
     $('#Codigo_requerimiento').val(data.Codigo_requerimiento);
     $('#Descripcion_requerimiento').val(data.Descripcion_requerimiento);
     $('#Fecha_requerimiento').val(data.Fecha_requerimiento);
     $('#producto_idProducto').val(data.producto_idProducto);
     $('#usuario_idUsuario').val(data.usuario_idUsuario);
     $('.modal-title').text("Edit Product");
     $('#idrequerimientos').val(idrequerimientos);
     $('#action').val("Edit");
     $('#operation').val("Edit");
    }
   });
  });
 });
 
 $(document).on("loaded.rs.jquery.bootgrid", function()
 {
  productTable.find(".delete").on("click", function(event)
  {
   if(confirm("Are you sure you want to delete this?"))
   {
    var idrequerimientos = $(this).data("row-id");
    $.ajax({
     url:"delete.php",
     method:"POST",
     data:{idrequerimientos:idrequerimientos},
     success:function(data)
     {
      alert(data);
      $('#product_data').bootgrid('reload');
     }
    })
   }
   else{
    return false;
   }
  });
 }); 
});
</script>
<div id="productModal" class="modal fade">
 <div class="modal-dialog">
  <form method="post" id="product_form" action="neg_registro_requerimiento.php" autocomplete="OFF" requerid >
   <div class="modal-content">
    <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal">&times;</button>
     <h4 class="modal-title">AGREGUE REQUERIMIENTO</h4>
    </div>
    <div class="modal-body">
     <label>Producto</label>
     <select name="producto_idProducto" id="producto_idProducto" class="form-control">
      <option value="">Seleccione Producto</option>
      <?php echo $output; ?>
      
      <!-- CONSULTA PRODUCTO -->


     </select>
     <br />

      

      <label>Usuario</label>
     <select name="usuario_idUsuario" id="usuario_idUsuario" class="form-control">
      <option value="">Seleccione Usuario</option>
      
      <!-- CONSULTA USUARIO -->

  <?php echo $user; ?>
      <!-- CONSULTA USUARIO -->

     </select>
     <br />


     <label>Codigo Requerimiento</label>
     <input type="text" name="Codigo_requerimiento" id="Codigo_requerimiento" class="form-control" />
     <br />
     <label>Descripcion Requerimiento</label>
     <input type="text" name="Descripcion_requerimiento" id="Descripcion_requerimiento" class="form-control" />
     <br>
     <label>Fecha Requerimiento</label>
     <input type="text" name="Fecha_requerimiento" id="Fecha_requerimiento" class="form-control" />

    </div>
    <div class="modal-footer">
     <input type="hidden" name="idrequerimientos" id="idrequerimientos" />  
     <input type="hidden" name="operation" id="operation" />
     <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
    </div>
   </div>
  </form>
 </div>
</div>
</div>
        <!-- REGISTRO REQUERIMIENTO-->





   <p>&nbsp;</p>
     <p>&nbsp;</p>
    <p>&nbsp;</p>
         
    

   <p>&nbsp;</p>
     <p>&nbsp;</p>
    <p>&nbsp;</p>
         
    

   <p>&nbsp;</p>
     <p>&nbsp;</p>
    
         
    

    
         
    
    
    



<footer class="bg1">
		
		<div class="end-footer bg2">
			<div class="container">
				
				<div class="flex-sb-m flex-w p-t-22 p-b-22">
					<div class="p-t-5 p-b-5">
						<a href="#" class="fs-15 c-white"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
						<a href="#" class="fs-15 c-white"><i class="fa fa-facebook m-l-18" aria-hidden="true"></i></a>
						<a href="#" class="fs-15 c-white"><i class="fa fa-twitter m-l-18" aria-hidden="true"></i></a>
						
					
						<ul>
						<li class="txt14 m-b-14">
							<i class="fa fa-map-marker fs-16 dis-inline-block size19" aria-hidden="true"></i>
							8th floor, 379 Hudson St, New York, NY 10018
						</li>
						<li class="txt14 m-b-14"> <i class="fa fa-phone fs-16 dis-inline-block size19" aria-hidden="true"></i>
							(+1) 96 716 6879
						</li></ul></div>

					<div class="txt17 p-r-20 p-t-5 p-b-5">
						<p align="right">Copyright &copy; 2018 All rights reserved  |  This template is made with <i class="fa fa-heart"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
					    </p>
						<p align="right"><span class="txt14 m-b-14"> <i class="fa fa-envelope fs-13 dis-inline-block size19" aria-hidden="true"></i> contact@site.com </span></p>
					</div>
				</div>
			</div>
		</div>
</footer>

   
</body>
</html>