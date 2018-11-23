
<?php 

	require_once ("../conexion.php");
	$conexion=conexion();

 ?>
<div class="container">


<div class="row">

	

		<table class="table table-hover">
		<caption>
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				Agregar nuevo 
				<span class="glyphicon glyphicon-plus"></span>
			</button> 
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
				<td>Accion</td>
				
			</tr>
		</thead>

			<?php 

				$sql="SELECT * from producto";
				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datos=$ver[0]."||".
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
					<button class="btn btn-success" data-toggle="modal" data-target="#modalEdicion" onclick="agregaformproduct('<?php echo $datos ?>')"> EDITAR
						
					</button>
				</td>
				<td>
					<button class="btn btn-danger" onclick="preguntarSiNo('<?php echo $ver[0] ?>')"> ELIMINAR</button>
				</td>
			</tr>
			<?php 
		}
			 ?>
		</table>
	
</div>