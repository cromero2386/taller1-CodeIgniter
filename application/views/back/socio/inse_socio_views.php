
<div class="col-sm-10 col-md-10">
	<div class="well">
		<h1>Nuevo Socio</h1>					
	</div>	            
	<?php echo form_open("registro", ['class' => 'form-signin', 'role' => 'form']); ?>
	<div class="row">
	    <div class="col-md-6">
			<div class="form-group">
				<?php echo form_error('nombre'); ?>
				<?php echo form_label('Nombre:', 'nombre'); ?>
				<?php echo form_input(['name' => 'nombre', 'id' => 'nombre', 'class' => 'form-control','placeholder' => 'ingrese nombre', 'autofocus'=>'autofocus', 'value'=>set_value('nombre')]); ?>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<?php echo form_error('apellido'); ?>
				<?php echo form_label('Apellido:', 'apellido'); ?>
				<?php echo form_input(['name' => 'apellido', 'id' => 'apellido', 'class' => 'form-control','placeholder' => 'ingrese apellido','value'=>set_value('apellido')]); ?>
			</div>
		</div>
	</div>
	<div class="row">
	    <div class="col-md-6">
			<div class="form-group">
				<?php echo form_error('dias_prestamos'); ?>
				<?php echo form_label('Dias de prestamos:', 'dias_prestamos'); ?>
				<?php echo form_input(['name' => 'dias_prestamos', 'id' => 'dias_prestamos', 'class' => 'form-control','placeholder' => 'ingrese dias de prestamo', 'type'=>'text','value'=>set_value('dias_prestamos')]); ?>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<?php echo form_error('usuario'); ?>
				<?php echo form_label('Usuario:', 'usuario'); ?>
				<?php echo form_input(['name' => 'usuario','id' => 'usuario', 'class' => 'form-control','placeholder' => 'ingrese usuario','value'=>set_value('usuario')]); ?>
			</div>
		</div>
	</div>
	<div class="row">
	    <div class="col-md-6">
			<div class="form-group">
				<?php echo form_error('pass'); ?>
				<?php echo form_label('Contraseña:', 'pass'); ?>
				<?php echo form_input(['type' => 'text','name' => 'pass', 'id' => 'pass', 'class' => 'form-control','placeholder' => 'password','value'=>set_value('pass')]); ?>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<?php echo form_error('tipo_socio'); ?>
				<?php echo form_label('Perfil del socio:', 'perfil_socio'); ?>
				<?php echo form_dropdown('tipo_socio', $perfiles, '', 'class="form-control"') ?>
			</div>
		</div>
	</div>
	<?php echo form_submit('agregar', 'Registrar',"class='btn btn-lg btn-success btn-block'"); ?>
	<?php echo form_close(); ?>
	<div>
		
	</div>
</div>
</div>
</div>
