<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('partes/head_views');?>
</head>
<body>
	<div class="container">
	    <div class="row">
	        <div class="col-sm-2 col-md-2">
	        	<?php $this->load->view('partes/menu_views');?>    
	        </div>
	        <div class="col-sm-10 col-md-10">
	            <div class="well">
	                <h1>Todos los Socios</h1>
	            </div>	   
	            <a type="button" class="btn btn-success" href="<?php echo base_url('insert'); ?>">Agregar</a>    
	            <table class="table table-bordered">
	            	<thead>
	            		<tr>
	            			<th>N°</th>
	            			<th>Nombre</th>
	            			<th>Apellido</th>
	            			<th>Usuario</th>
	            			<th>Editar</th>
	            		</tr>
	            	</thead>
	            	<tbody>
	            	    <?php foreach($socios->result() as $row){ ?>
	            		<tr>
	            			<td><?php echo $row->id;  ?></td>
	            			<td><?php echo $row->nombre;  ?></td>
	            			<td><?php echo $row->apellido;  ?></td>
	            			<td><?php echo $row->usuario;  ?></td>
	            			<td><a href="<?php echo base_url("user_edit/$row->id");?>">Editar</a></td>
	            		</tr>
	            		<?php } ?>
	            	</tbody>
	            </table>	            
	            <div>
	            		
	            </div>
	        </div>
	    </div>
	</div>
	<?php $this->load->view('partes/footer_views');?>	
</body>
</html>	