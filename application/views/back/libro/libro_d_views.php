
<div class="col-sm-10 col-md-10">
	<div class="well">
		<h1>Libros eliminados</h1>
	</div>	
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>N°</th>
				<th>Título</th>
				<th>Edición</th>
				<th>Editorial</th>
				<th>Stock</th>
				<th>Eliminado</th>
				<th>Activar</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($libros->result() as $row){ ?>
			<tr>
				<td><?php echo $row->id;  ?></td>
				<td><?php echo $row->titulo;  ?></td>
				<td><?php echo $row->edicion;  ?></td>
				<td><?php echo $row->editorial;  ?></td>
				<td><?php echo $row->stock;  ?></td>
				<td><?php echo $row->eliminado;  ?></td>
				<td><a href="<?php echo base_url("activar_libro/$row->id");?>">Activar</a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>	            
	<div>
		
	</div>
</div>
</div>
</div>
