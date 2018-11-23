
<?php 

require_once ("../conexion.php");
	$conexion=conexion();

 ?>
<div class="container">


<div class="row">

	

		<table class="table table-hover">
		<caption>
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				Agregar nueva venta 
				<span class="glyphicon glyphicon-plus"></span>
			</button> 
		</caption>
		<thead class="letratext">
			<tr>
				<td>Usuario</td>
				<td>Plato</td>
				<td>Adiccionales</td>
				<td>Mesa</td>
				<td>Cantidad</td>
				<td>Metodo Pago</td>
				<td>Total Cobro</td>
				<td>Accion</td>
				
				
			</tr>
		</thead>

			<?php 

				$sql="SELECT * from ventas";
				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datosventa=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2]."||".
						   $ver[3]."||".
						   $ver[4]."||".
						   $ver[5]."||".
						   $ver[6]."||".
						   $ver[7];
						
						   
						   
			 ?>

			<tr>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>
				<td><?php echo $ver[5] ?></td>
				<td><?php echo $ver[6] ?></td>
				<td><?php echo $ver[7] ?></td>
				
				
			
				<td>
					<button class="btn btn-success" data-toggle="modal" data-target="#modalEdicion" onclick="agregaformventa('<?php echo $datosventa ?>')"> EDITAR
						
					</button>
				</td>
				<td>
					<button class="btn btn-danger" onclick="preguntarSiNoVenta('<?php echo $ver[0] ?>')"> ELIMINAR</button>
				</td>
			</tr>
			<?php 
		}
			 ?>
		</table>
	
</div>