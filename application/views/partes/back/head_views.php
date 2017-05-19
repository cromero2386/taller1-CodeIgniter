<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Taller_I V1 CI 2.2.6</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-2 col-md-2">
				<div class="panel-group" id="accordion">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
								</span> Prestamos</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in">
							<div class="panel-body">
								<table class="table">
									<tr>
										<td>
											<a href="#">Libros</a>
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-folder-open">
								</span> Libros</a>
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse">
							<div class="panel-body">
								<table class="table">
									<tr>
										<td>
											<a href="<?php echo base_url('libros');?>">Todos</a>
										</td>
									</tr>
									<tr>
										<td>
											<a href="#">Prestados</a>
										</td>
									</tr>
									<tr>
										<td>
											<a href="#">Disponibles</a>
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-align-justify">
								</span> Reportes</a>
							</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse">
							<div class="panel-body">
								<table class="table">
									<tr>
										<td>
											<a href="#">Mis Prestamos</a>
										</td>
									</tr>
									<tr>
										<td>
											<a href="#">Mis Devoluciones</a>
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-list">
								</span> Socios </a>
							</h4>
						</div>
						<div id="collapseFour" class="panel-collapse collapse">
							<div class="panel-body">
								<table class="table">
									<tr>
										<td>
											<a href="<?php echo base_url('datos');?>">Socios</a>
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapseFive"><span class="glyphicon glyphicon-user">
								</span> Perfil de <b><?php echo $usuario; ?></b></a>
							</h4>
						</div>
						<div id="collapseFive" class="panel-collapse collapse">
							<div class="panel-body">
								<table class="table">
									<tr>
										<td>
											<a href="#">Mis Datos</a>
										</td>
									</tr>
									<tr>
										<td>
											<a href="<?php echo base_url('logout');?>">Cerrar Sesión</a>
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					
				</div>    
			</div>






