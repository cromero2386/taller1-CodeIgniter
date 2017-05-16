
<div class="col-sm-10 col-md-10">
	<div class="well">
		<h1>Socio para modificar</h1>
	</div>	            
	<?php echo form_open("user_up/$id", ['class' => 'form-signin', 'role' => 'form']); ?>
	<div class="form-group">
		<?php echo form_error('nombre'); ?>
		<?php echo form_input(['name' => 'nombre','value'=>"$nombre", 'id' => 'nombre', 'class' => 'form-control','placeholder' => 'ingrese nombre', 'autofocus'=>'autofocus']); ?>
	</div>
	<div class="form-group">
		<?php echo form_error('apellido'); ?>
		<?php echo form_input(['name' => 'apellido','value'=>"$apellido", 'id' => 'apellido', 'class' => 'form-control','placeholder' => 'ingrese apellido']); ?>
	</div>
	<div class="form-group">
		<?php echo form_error('dias_prestamos'); ?>
		<?php echo form_input(['name' => 'dias_prestamos', 'value'=>"$dias_prestamos",'id' => 'dias_prestamos', 'class' => 'form-control','placeholder' => 'ingrese dias de prestamo', 'type'=>'text']); ?>
	</div>
	<div class="form-group">
		<?php echo form_error('usuario'); ?>
		<?php echo form_input(['name' => 'usuario', 'value'=>"$usuario",'id' => 'usuario', 'class' => 'form-control','placeholder' => 'ingrese usuario']); ?>
	</div>
	<div class="form-group">
		<?php echo form_error('pass'); ?>
		<?php echo form_input(['type' => 'text','value'=>"$pass",'name' => 'pass', 'id' => 'pass', 'class' => 'form-control','placeholder' => 'password']); ?>
	</div>
	<?php echo form_submit('modificar', 'Modificar',"class='btn btn-lg btn-warning btn-block'"); ?>
	<?php echo form_close(); ?>
	<div>
		
	</div>
</div>
</div>
</div>
