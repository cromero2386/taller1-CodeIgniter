
<div class="col-sm-10 col-md-10">
	<div class="well">
		<h1>Nuevo Libro</h1>	
		<h6> <b>Acepta imagenes gif, jpg, jpeg, png</b></h6>
		<h6> <b>Tamaño maximo de la imagen 2MB</b></h6>				
	</div>	            
	<?php echo form_open_multipart("registro_l", ['class' => 'form-signin', 'role' => 'form']); ?>
	<div class="row">
	    <div class="col-md-6">
			<div class="form-group">
				<?php echo form_error('titulo'); ?>
				<?php echo form_label('Título del libro:', 'titulo'); ?>
				<?php echo form_input(['name' => 'titulo', 'id' => 'titulo', 'class' => 'form-control','placeholder' => 'ingrese titulo del libro', 'autofocus'=>'autofocus','value'=>set_value('titulo')]); ?>
			</div>
	    </div>
	    <div class="col-md-6">
			<div class="form-group">
				<?php echo form_error('edicion'); ?>
				<?php echo form_label('Edición:', 'edicion'); ?>
				<?php echo form_input(['name' => 'edicion', 'id' => 'edicion', 'class' => 'form-control','placeholder' => 'ingrese edicion','value'=>set_value('edicion')]); ?>
			</div>
	    </div>
	</div>		
    <div class="row">
	    <div class="col-md-6">
			<div class="form-group">
				<?php echo form_error('editorial'); ?>
				<?php echo form_label('Editorial:', 'editorial'); ?>
				<?php echo form_input(['name' => 'editorial', 'id' => 'editorial', 'class' => 'form-control','placeholder' => 'ingrese editorial', 'type'=>'text','value'=>set_value('editorial')]); ?>
			</div>
	    </div>
		<div class="col-md-6">
			<div class="form-group">
				<?php echo form_error('anio'); ?>
				<?php echo form_label('Año de publicación:', 'anio'); ?>
				<?php echo form_input(['name' => 'anio','id' => 'anio', 'class' => 'form-control','placeholder' => 'ingrese año de publicación','value'=>set_value('anio')]); ?>
			</div>
	    </div>
	</div>    
	<div class="row">
	    <div class="col-md-6">
			<div class="form-group">
				<?php echo form_error('stock'); ?>
				<?php echo form_label('Stock:', 'estock'); ?>
				<?php echo form_input(['type' => 'text','name' => 'stock', 'id' => 'stock', 'class' => 'form-control','placeholder' => 'ingrese stock','value'=>set_value('stock')]); ?>
			</div>
	    </div>
		<div class="col-md-6">
			<div class="form-group">
				<?php echo form_error('stock_minimo'); ?>
				<?php echo form_label('Stock minimo:', 'stock_min'); ?>
				<?php echo form_input(['type' => 'text','name' => 'stock_minimo', 'id' => 'stock_min', 'class' => 'form-control','placeholder' => 'ingrese stock minimo','value'=>set_value('stock_minimo')]); ?>
			</div>
		</div>
	</div>
	<div class="row">
	    <div class="col-md-6">
			<div class="form-group">
				<?php echo form_error('filename'); ?>
				<?php echo form_label('Imagen:', 'imagen'); ?>
				<?php echo form_input(['type' => 'file','name' => 'filename', 'id' => 'filename', 'class' => 'form-control']); ?>
			</div>
	    </div>
		<div class="col-md-6">
			<?php echo form_submit('agregar', 'Registrar',"class='btn btn-lg btn-success btn-block'"); ?>
		</div>
	</div>	
	<?php echo form_close(); ?>
	<div>
		
	</div>
</div>
</div>
</div>
