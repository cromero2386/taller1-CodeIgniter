
<!-- Page Content -->
<div class="container">
<hr>
<!-- Title -->
<div class="row">
	<div class="col-lg-12">
		<h3>Libros</h3>
	</div>
</div>
<!-- /.row -->

<!-- Page Features -->
<div class="row text-center">
<?php foreach($libros->result() as $row){ ?>
	<div class="col-md-3 col-sm-6 hero-feature">
		<div class="thumbnail">
			<img src="<?php echo base_url($row->imagen); ?>" alt="">
			<div class="caption">
				<h4><?php echo trim($row->titulo); ?></h4>
				<p>Cantidad disponible: <?php echo $row->stock; ?></p>
				<p>
					<?php 
						if ($row->stock < $row->stock_minimo && $row->stock > 0) {
							echo 'por debajo del valor minimo: '.$row->stock_minimo;
						} elseif ($row->stock == 0) {
							echo 'No hay libros disponibles';
						}else {
							echo 'Disponible:'.$row->stock.' unidades';
						}
					?>
				</p>
				<p>
				<?php 
					if ($row->stock > 0) {
						echo "<a href='#' class='btn btn-primary'>Solicitar prestamo</a>";
						echo "<a href='#' class='btn btn-default'>Más Datos</a>";
					}else{
						echo "<a href='#' class='btn btn-default'>Mas Datos</a>";
					}
					?>	
				</p>
			</div>
		</div>
	</div>
<?php } ?>
	
</div>
<!-- /.row -->

<hr>

