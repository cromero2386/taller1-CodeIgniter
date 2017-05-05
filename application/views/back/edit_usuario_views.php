<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('partes/head_views');?>
</head>
<body>
	<div class="container">
	    <div class="row">
	        <div class="col-sm-3 col-md-3">
	        	<?php $this->load->view('partes/menu_views');?>    
	        </div>
	        <div class="col-sm-9 col-md-9">
	            <div class="well">
	                <h1>Socio para modificar</h1>
	            </div>	            
	            <?php echo form_open('back/usuario_controller/editar_socio/'.$id, ['class' => 'form-signin', 'role' => 'form']); ?>
	            	<div class="form-group">
		                <?php echo form_input(['name' => 'nombre','value'=>"$nombre", 'id' => 'nombre', 'class' => 'form-control','placeholder' => 'ingrese nombre', 'required'=>'required', 'autofocus'=>'autofocus']); ?>
		            </div>
		            <div class="form-group">
		                <?php echo form_input(['name' => 'apellido','value'=>"$apellido", 'id' => 'apellido', 'class' => 'form-control','placeholder' => 'ingrese apellido', 'required'=>'required']); ?>
					</div>
					<div class="form-group">
		                <?php echo form_input(['name' => 'dias_prestamos', 'value'=>"$dias_prestamos",'id' => 'dias_prestamos', 'class' => 'form-control','placeholder' => 'ingrese dias de prestamo', 'type'=>'number','required'=>'required']); ?>
					</div>
					<div class="form-group">
		                <?php echo form_input(['name' => 'usuario', 'value'=>"$usuario",'id' => 'usuario', 'class' => 'form-control','placeholder' => 'ingrese usuario', 'required'=>'required']); ?>
					</div>
					<div class="form-group">
		                <?php echo form_input(['type' => 'text','value'=>"$pass",'name' => 'pass', 'id' => 'pass', 'class' => 'form-control','placeholder' => 'password', 'required'=>'required']); ?>
		            </div>
		                <?php echo form_submit('modificar', 'Modificar',"class='btn btn-lg btn-danger btn-block'"); ?>
					<?php echo form_close(); ?>
	            <div>
	            		
	            </div>
	        </div>
	    </div>
	</div>
	<?php $this->load->view('partes/footer_views');?>	
</body>
</html>	