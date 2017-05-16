
<div class="col-sm-10 col-md-10">
	<div class="well">
		<h1>Modificar Datos</h1>	
		<h6> <b>Acepta imagenes gif, jpg, jpeg, png</b></h6>
		<h6> <b>Tamaño maximo de la imagen 2MB</b></h6>				
	</div>	            
	<?php echo form_open_multipart("libro_up/$id", ['class' => 'form-signin', 'role' => 'form']); ?>
	<div class="form-group">
		<?php echo form_error('titulo'); ?>
		<?php echo form_input(['name' => 'titulo', 'id' => 'titulo','value'=>"$titulo", 'class' => 'form-control','placeholder' => 'ingrese titulo del libro', 'autofocus'=>'autofocus']); ?>
	</div>
	<div class="form-group">
		<?php echo form_error('edicion'); ?>
		<?php echo form_input(['name' => 'edicion', 'id' => 'edicion','value'=>"$edicion", 'class' => 'form-control','placeholder' => 'ingrese edicion']); ?>
	</div>
	<div class="form-group">
		<?php echo form_error('editorial'); ?>
		<?php echo form_input(['name' => 'editorial', 'id' => 'editorial','value'=>"$editorial", 'class' => 'form-control','placeholder' => 'ingrese editorial', 'type'=>'text']); ?>
	</div>
	<div class="form-group">
		<?php echo form_error('anio'); ?>
		<?php echo form_input(['name' => 'anio','id' => 'anio', 'value'=>"$anio",'class' => 'form-control','placeholder' => 'ingrese año de publicación']); ?>
	</div>
	<div class="form-group">
		<?php echo form_error('stock'); ?>
		<?php echo form_input(['type' => 'text','name' => 'stock', 'id' => 'stock','value'=>"$stock", 'class' => 'form-control','placeholder' => 'ingrese stock']); ?>
	</div>
	<div class="form-group">
		<?php echo form_error('stock_minimo'); ?>
		<?php echo form_input(['type' => 'text','name' => 'stock_minimo', 'id' => 'stock_min','value'=>"$stock_minimo", 'class' => 'form-control','placeholder' => 'ingrese stock minimo']); ?>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<?php echo form_error('filename'); ?>
				<?php echo form_input(['type' => 'file','name' => 'filename', 'id' => 'filename', 'class' => 'form-control']); ?>
			</div>		
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<img  class="img-thumbnail" src="<?php  echo base_url($imagen); ?>" >
			</div>	
		</div>
	</div>
	<?php echo form_submit('modificarr', 'Modificar',"class='btn btn-lg btn-warning btn-block'"); ?>
	<?php echo form_close(); ?>
	<div>
		
	</div>
</div>
</div>
</div>

