<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
</head>
<body>
	<div class="container">
	    <div class="row">
	        <div class="col-sm-6 col-md-4 col-md-offset-4">
	            <h1 class="text-center login-title">Inicie sesión para continuar</h1>
	            <?php echo validation_errors(); ?>
	            <div class="account-wall">
	            	<?php echo form_open('verifico', ['class' => 'form-signin', 'role' => 'form']); ?>
		                <?php echo form_input(['name' => 'usuario', 'id' => 'usuario', 'class' => 'form-control','placeholder' => 'usuario', 'required'=>'required', 'autofocus'=>'autofocus']); ?>
		                <?php echo form_input(['type' => 'password','name' => 'pass', 'id' => 'pass', 'class' => 'form-control','placeholder' => 'password', 'required'=>'required']); ?>
		                <?php echo form_submit('iniciar_sesion', 'Iniciar sesión',"class='btn btn-lg btn-primary btn-block'"); ?>
					<?php echo form_close(); ?>
	            </div>
	        </div>
	    </div>
    </div>
    <footer>
    	<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.2.1.min.js"); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
    </footer>
</body>
</html>