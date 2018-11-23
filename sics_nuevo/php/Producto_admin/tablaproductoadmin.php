
<?php 

		require_once ("../conexion.php");
	$conexion=conexion();

 ?>
<div class="container" id="buscarproducto" >
	
<div class="row">
        <div class="col-lg-4 col-lg-offset-4">
            <input type="search" id="search" value="" class="form-control" placeholder="Buscar Productos">
        </div>
        <img src="images/buscar.png" width="28px" height="26px">
</div>
		<table class="table table-hover" >
		<caption>
			
		</caption>
		<thead class="letratext">
			<tr>
				<td>Nombre</td>
				<td>Codigo</td>
				<td>Descripcion</td>
				<td>Cantidad</td>
				<td>Fecha</td>
				<td>Precio</td>
				<td>Estado</td>
				
				
			</tr>
		</thead>

			<?php 

				$sql="SELECT * from producto";
				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datosproductadmin=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2]."||".
						   $ver[3]."||".
						   $ver[4]."||".
						   $ver[5]."||".
						   $ver[6]."||".
						   $ver[7];

						   		   //subconsulta 
				$sql2= "SELECT * FROM estados where idestados='$ver[7]'";
				if (!$result2 = $conexion->query($sql2)){
				die ('Error de conexion[' . $conexion->error . ']');
				}
				while ($row2=$result2->fetch_assoc()){
				$nnombreestado=stripslashes($row2["Nombre_estado"]);
				}
				//subconsulta 
						   
			 ?>

			<tr>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>
				<td><?php echo $ver[5] ?></td>
				<td><?php echo $ver[6] ?></td>
				<td><?php echo $nnombreestado ?></td>
			
				<td>
					<button class="btn btn-success" data-toggle="modal" data-target="#modalEdicion" onclick="agregaformadmin('<?php echo $datosproductadmin ?>')"> EDITAR </button>
				</td>
				<td>
					<button class="btn btn-danger" onclick="preguntarSiNoadmin('<?php echo $ver[0] ?>')"> ELIMINAR</button>
				</td>
			</tr>
			<?php 
		}
			 ?>
		</table>
	
</div>


<!-- BUSCAR -->
<script type="text/javascript">
	
	$(function () {
    $( '#buscarproducto' ).searchable({
        striped: true,
        oddRow: { 'background-color': '#f5f5f5' },
        evenRow: { 'background-color': '#fff' },
        searchType: 'fuzzy'
    });
    
    $( '#searchable-container' ).searchable({
        searchField: '#container-search',
        selector: '.row',
        childSelector: '.col-xs-4',
        show: function( elem ) {
            elem.slideDown(100);
        },
        hide: function( elem ) {
            elem.slideUp( 100 );
        }
    })
});
</script>

<!-- BUSCAR -->

