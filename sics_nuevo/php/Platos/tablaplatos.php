
<?php 

	require_once ("../conexion.php");
	$conexion=conexion();

 ?>
<div class="container">
	

		<table class="table table-hover">
		<caption>
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				Agregar nuevo 
				<span class="glyphicon glyphicon-plus"></span>
			</button> 
		</caption>
		<thead class="letratext">
			<tr>
				<td>Categoria</td>
				<td>Nombre</td>
				<td>Descripcion</td>
				<td>Valor</td>
				<td>Estado</td>
				<td>Fecha</td>
				<td>Imagen</td>
				
				
			</tr>
		</thead>

			<?php 

				$sql="SELECT * from platos";
				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datosplato=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2]."||".
						   $ver[3]."||".
						   $ver[4]."||".
						   $ver[5]."||".
						   $ver[6]."||".
						   $ver[7];
		
				
				//subconsulta 
				$sql2= "SELECT * FROM tipo_plato where idTipo_Plato='$ver[1]'";
				if (!$result2 = $conexion->query($sql2)){
				die ('Error de conexion[' . $conexion->error . ']');
				}
				while ($row2=$result2->fetch_assoc()){
				$nnombretipoplato=stripslashes($row2["Nombre_tipo_plato"]);
				}
				//subconsulta 	 


				//subconsulta 
				$sql2= "SELECT * FROM estados where idestados='$ver[5]'";
				if (!$result2 = $conexion->query($sql2)){
				die ('Error de conexion[' . $conexion->error . ']');
				}
				while ($row2=$result2->fetch_assoc()){
				$nnombreestado=stripslashes($row2["Nombre_estado"]);
				}
				//subconsulta 	 
						   
			 ?>

			<tr>
				<td><?php echo $nnombretipoplato ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>
				<td><?php echo $nnombreestado ?></td>
				<td><?php echo $ver[6] ?></td>
				<td><?php echo $ver[7] ?></td>
				
			
	
			
				<td>
					<button class="btn btn-success" data-toggle="modal" data-target="#modalEdicion" onclick="agregaformplato('<?php echo $datosplato ?>')"> EDITAR
						
					</button>
				</td>
				<td>
					<button class="btn btn-danger" onclick="preguntarSiNoPlato('<?php echo $ver[0] ?>')"> ELIMINAR</button>
				</td>
			</tr>
			<?php 
		}
			 ?>
		</table>
	
</div>