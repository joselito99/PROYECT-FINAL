
<?php 

	require_once ("../conexion.php");
	$conexion=conexion();

 ?>
<div class="container">
	

		<table class="table table-hover">
		<caption>
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				Agregar nueva categoria 
				<span class="glyphicon glyphicon-plus"></span>
			</button> 
		</caption>
		<thead class="letratext">
			<tr>
				<td>Nombre Categoria</td>
				<td>Accion</td>
				
			</tr>
		</thead>

			<?php 

				$sql="SELECT * from tipo_plato";
				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datostipoplato=$ver[0]."||".
						   $ver[1];
						   
			 ?>

			<tr>
				<td><?php echo $ver[1] ?></td>
				
			
				<td>
					<button class="btn btn-success" data-toggle="modal" data-target="#modalEdicion" onclick="agregaformtipoplato('<?php echo $datostipoplato ?>')"> EDITAR
						
					</button>
				</td>
				<td>
					<button class="btn btn-danger" onclick="preguntarSiNoTipoPlato('<?php echo $ver[0] ?>')"> ELIMINAR</button>
				</td>
			</tr>
			<?php 
		}
			 ?>
		</table>
	
</div>