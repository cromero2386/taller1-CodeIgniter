
<div class="col-sm-10 col-md-10">
	<div class="well">
		<h1>Todos los Libros</h1>
	</div>	
	<a type="button" class="btn btn-success" href="<?php echo base_url('insert_l'); ?>">Agregar</a>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>N°</th>
				<th>Título</th>
				<th>Edición</th>
				<th>Editorial</th>
				<th>Stock</th>
				<th>Ver más</th>
				<th>Editar</th>
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
				<td></td>
				<td><a href="<?php echo base_url("libro_edit/$row->id");?>">Editar</a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>	            
	<div>
		
	</div>
</div>
</div>
</div>
