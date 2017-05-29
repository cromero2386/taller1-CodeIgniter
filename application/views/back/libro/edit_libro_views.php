
<div class="col-sm-10 col-md-10">
	<div class="well">
		<h1>Modificar Datos</h1>	
		<h6> <b>Acepta imagenes gif, jpg, jpeg, png</b></h6>
		<h6> <b>Tamaño maximo de la imagen 2MB</b></h6>		

	</div>	            
	<?php echo form_open_multipart("libro_up/$id", ['class' => 'form-signin', 'role' => 'form']); ?>
		<div class="row">
	   		<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Título del libro:', 'titulo'); ?>
					<?php echo form_input(['name' => 'titulo', 'id' => 'titulo','value'=>"$titulo", 'class' => 'form-control','placeholder' => 'ingrese titulo del libro', 'autofocus'=>'autofocus']); ?>
					<?php echo form_error('titulo'); ?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Edición:', 'edicion'); ?>	
					<?php echo form_input(['name' => 'edicion', 'id' => 'edicion','value'=>"$edicion", 'class' => 'form-control','placeholder' => 'ingrese edicion']); ?>
					<?php echo form_error('edicion'); ?>
				</div>
			</div>
		</div>
		<div class="row">
	   		<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Editorial:', 'editorial'); ?>
					<?php echo form_input(['name' => 'editorial', 'id' => 'editorial','value'=>"$editorial", 'class' => 'form-control','placeholder' => 'ingrese editorial', 'type'=>'text']); ?>
					<?php echo form_error('editorial'); ?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Año de publicación:', 'anio'); ?>
					<?php echo form_input(['name' => 'anio','id' => 'anio', 'value'=>"$anio",'class' => 'form-control','placeholder' => 'ingrese año de publicación']); ?>
					<?php echo form_error('anio'); ?>
				</div>
			</div>
		</div>
		<div class="row">
	   		<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Stock:', 'stock'); ?>
					<?php echo form_input(['type' => 'text','name' => 'stock', 'id' => 'stock','value'=>"$stock", 'class' => 'form-control','placeholder' => 'ingrese stock']); ?>
					<?php echo form_error('stock'); ?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Stock minimo:', 'stock_min'); ?>
					<?php echo form_input(['type' => 'text','name' => 'stock_minimo', 'id' => 'stock_min','value'=>"$stock_minimo", 'class' => 'form-control','placeholder' => 'ingrese stock minimo']); ?>
					<?php echo form_error('stock_minimo'); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Imagen actual:', 'img_ac'); ?>
					<img  id="imagen_view" name="imagen_view" class="img-thumbnail" src="<?php  echo base_url($imagen); ?>" >
				</div>	
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Imagen:', 'iamgen'); ?>
					<?php echo form_input(['type' => 'file','name' => 'filename', 'id' => 'filename', 'class' => 'form-control']); ?>
					<?php echo form_error('filename'); ?>
					<br>
					<?php echo form_submit('modificarr', 'Modificar',"class='btn btn-lg btn-warning btn-block'"); ?>
				</div>		
			</div>
		</div>
	<?php echo form_close(); ?>
	<div>
		
	</div>
</div>
</div>
</div>

