
<?php 

require_once ("../conexion.php");
	$conexion=conexion();

 ?>
<div class="container" id="jose">
	
<div class="row">
        <div class="col-lg-4 col-lg-offset-4">
            <input type="search" id="search" value="" class="form-control" placeholder="Buscar Usuarios">
        </div>
        <img src="images/buscar.png" width="28px" height="26px">
</div>
		<table class="table table-hover">
		<caption>
			<!--<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				Agregar nuevo 
				<span class="glyphicon glyphicon-plus"></span>
			</button> -->
		</caption>
		<thead class="letratext">
			<tr>
				<td>Nombre</td>
				<td>Apellido</td>
				<td>Tipo Documento</td>
				<td>Documento</td>
				<td>Telefono</td>
				<td>Direccion</td>
				<td>Contraseña</td>
				<td>Correo</td>
				<td >Fecha</td>
				<td >Estado</td>
				
			</tr>
		</thead>

			<?php 

				$sql="SELECT * from usuario";
				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datosusuarios=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2]."||".
						   $ver[3]."||".
						   $ver[4]."||".
						   $ver[5]."||".
						   $ver[6]."||".
						   $ver[7]."||".
						   $ver[8]."||".
						   $ver[9]."||".
						   $ver[10];					   
				//subconsulta 
				$sql2= "SELECT * FROM tipo_documento where idTipo_Documento='$ver[3]'";
				if (!$result2 = $conexion->query($sql2)){
				die ('Error de conexion[' . $conexion->error . ']');
				}
				while ($row2=$result2->fetch_assoc()){
				$ttipodocumento=stripslashes($row2["Descripcion_documento"]);
				}
				//subconsulta 	 		



				//subconsulta 
				$sql3= "SELECT * FROM estados where idestados='$ver[10]'";
				if (!$result3 = $conexion->query($sql3)){
				die ('Error de conexion[' . $conexion->error . ']');
				}
				while ($row2=$result3->fetch_assoc()){
				$nnombreestado=stripslashes($row2["Nombre_estado"]);
				}
				//subconsulta 			   
			 ?>

			<tr>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ttipodocumento ?></td>
				<td><?php echo $ver[4] ?></td>
				<td><?php echo $ver[5] ?></td>
				<td><?php echo $ver[6] ?></td>
				<td><?php echo $ver[7] ?></td>
				<td><?php echo $ver[8] ?></td>
				<td><?php echo $ver[9] ?></td>
				<td><?php echo $nnombreestado ?></td>
			
				<td>
					<button class="btn btn-warning" data-toggle="modal" data-target="#modalEdicion" onclick="agregaformuser('<?php echo $datosusuarios ?>')"> EDITAR</button>
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
    $( '#jose' ).searchable({
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
