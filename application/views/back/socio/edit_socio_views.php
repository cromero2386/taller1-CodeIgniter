
<div class="col-sm-10 col-md-10">
	<div class="well">
		<h1>Socio para modificar</h1>
	</div>	            
	<?php echo form_open("user_up/$id", ['class' => 'form-signin', 'role' => 'form']); ?>
	<div class="row">
	    <div class="col-md-6">
			<div class="form-group">
				<?php echo form_error('nombre'); ?>
				<?php echo form_label('Nombre:', 'nombre'); ?>
				<?php echo form_input(['name' => 'nombre','value'=>"$nombre", 'id' => 'nombre', 'class' => 'form-control','placeholder' => 'ingrese nombre', 'autofocus'=>'autofocus']); ?>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<?php echo form_error('apellido'); ?>
				<?php echo form_label('Apellido:', 'apellido'); ?>
				<?php echo form_input(['name' => 'apellido','value'=>"$apellido", 'id' => 'apellido', 'class' => 'form-control','placeholder' => 'ingrese apellido']); ?>
			</div>
		</div>
	</div>
	<div class="row">
	    <div class="col-md-6">
			<div class="form-group">
				<?php echo form_error('dias_prestamos'); ?>
				<?php echo form_label('Dias de prestamos:', 'dias_prestamos'); ?>
				<?php echo form_input(['name' => 'dias_prestamos', 'value'=>"$dias_prestamos",'id' => 'dias_prestamos', 'class' => 'form-control','placeholder' => 'ingrese dias de prestamo', 'type'=>'text']); ?>
			</div>
	    </div>
	    <div class="col-md-6">
			<div class="form-group">
				<?php echo form_error('usuario'); ?>
				<?php echo form_label('Usuario:', 'usuario'); ?>
				<?php echo form_input(['name' => 'usuario', 'value'=>"$usuario",'id' => 'usuario', 'class' => 'form-control','placeholder' => 'ingrese usuario']); ?>
			</div>
	    </div>
	</div>
	<div class="row">
	    <div class="col-md-6">
			<div class="form-group">
				<?php echo form_error('pass'); ?>
				<?php echo form_label('Contraseña:', 'pass'); ?>				
				<?php echo form_input(['type' => 'text','value'=>"$pass",'name' => 'pass', 'id' => 'pass', 'class' => 'form-control','placeholder' => 'password']); ?>
			</div>
	    </div>
	    <div class="col-md-6">
			<div class="form-group">
				<?php echo form_error('tipo_socio'); ?>
				<?php echo form_label('Perfil del socio:', 'perfil_socio'); ?>						
				<?php echo form_dropdown('tipo_socio', $perfiles,'', 'class="form-control"') ?>
			</div>
	    </div>
	</div>	
		<?php echo form_submit('modificar', 'Modificar',"class='btn btn-lg btn-warning btn-block'"); ?>
		<?php echo form_close(); ?>
		<div>
				
		</div>
</div>
</div>
</div>
