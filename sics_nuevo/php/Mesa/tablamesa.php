
<?php 

	require_once ("../conexion.php");
	$conexion=conexion();

 ?>
<div class="container">
	

		<table class="table table-hover">
		<caption>
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				Agregar nueva mesa 
				<span class="glyphicon glyphicon-plus"></span>
			</button> 
		</caption>
		<thead class="letratext">
			<tr>
				<td>Numero</td>
				<td>Accion</td>
				
			</tr>
		</thead>

			<?php 

				$sql="SELECT * from mesa";
				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datosmesa=$ver[0]."||".
						   $ver[1];
						   
			 ?>

			<tr>
				<td><?php echo $ver[1] ?></td>
				
			
				<td>
					<button class="btn btn-success" data-toggle="modal" data-target="#modalEdicion" onclick="agregaformmesa('<?php echo $datosmesa ?>')"> EDITAR
						
					</button>
				</td>
				<td>
					<button class="btn btn-danger" onclick="preguntarSiNoMesa('<?php echo $ver[1] ?>')"> ELIMINAR</button>
				</td>
			</tr>
			<?php 
		}
			 ?>
		</table>
	
</div>