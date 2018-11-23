
<?php 

require_once ("../conexion.php");
	$conexion=conexion();

 ?>
<div class="container" id="jose">
<!--	
<div class="row">
        <div class="col-lg-4 col-lg-offset-4">
            <input type="search" id="search" value="" class="form-control" placeholder="Buscar Usuarios">
        </div>
        <img src="images/buscar.png" width="28px" height="28px">
</div>-->
		<table class="table table-hover">
		<caption>
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				Agregar nuevo 
				<span class="glyphicon glyphicon-plus"></span>
			</button>
		</caption>
		<thead class="letratext">
			<tr>
				<td>Usuario</td>
				<td>Rol</td>
				<td>Accion</td>
				
				
			</tr>
		</thead>

			<?php 

				$sql="SELECT * from permisos";
				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datospermisos=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2];


						   //subconsulta 
				$sql1= "SELECT * FROM usuario where idUsuario='$ver[1]'";
				if (!$result1 = $conexion->query($sql1)){
				die ('Error de conexion[' . $conexion->error . ']');
				}
				while ($row2=$result1->fetch_assoc()){
				$dduser=stripslashes($row2["Nombre_usuario"]);
				}
				//subconsulta 	 		   

						
				//subconsulta 
				$sql2= "SELECT * FROM rol where idRol='$ver[2]'";
				if (!$result2 = $conexion->query($sql2)){
				die ('Error de conexion[' . $conexion->error . ']');
				}
				while ($row2=$result2->fetch_assoc()){
				$ddrol=stripslashes($row2["Descripcion_rol"]);
				}
				//subconsulta 


				
						   
			 ?>

			<tr>
				<td><?php echo $dduser ?></td>
				<td><?php echo $ddrol ?></td>
				
				
				
			
				<td>
					<button class="btn btn-warning" data-toggle="modal" data-target="#modalEdicion" onclick="agregaformpermisos('<?php echo $datospermisos ?>')"> EDITAR </button>
				</td>

				<td>
					<button class="btn btn-danger" onclick="preguntarSiNoPermisos('<?php echo $ver[0] ?>')"> ELIMINAR</button>
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
