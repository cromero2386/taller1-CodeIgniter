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
	                <h1>Ejemplo práctico de una biblioteca</h1>
	            </div>
	            <div>
	            	<?php
		            	$this->table->set_heading('Name', 'Color', 'Size');
						$this->table->add_row('Fred', 'Blue', 'Small');
						$this->table->add_row('Mary', 'Red', 'Large');
						$this->table->add_row('John', 'Green', 'Medium');	
					?>	
	            </div>
	        </div>
	    </div>
	</div>
	<?php $this->load->view('partes/footer_views');?>	
</body>
</html>	