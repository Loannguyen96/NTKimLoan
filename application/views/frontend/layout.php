<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php $this->load->view('frontend/head'); ?>
</head>
<body id="home">
	<div class="wrapper">
		<div class="header">
			<?php $this->load->view('frontend/header'); ?>
		</div>
		<div class="clearfix"></div>
		<div class="hom-slider">
			<?php $this->load->view('frontend/slider'); ?>
		</div>
		<div class=" body-content">
			<div class="clearfix"></div>
			<div class="container_fullwidth">
				<div class="container">
					<?php $this->load->view($temp,$this->data); ?>
					
				</div>
				 
			</div>

		</div>

		<hr />

		<div class="clearfix"></div>
		<div class="footer">
			<?php $this->load->view('frontend/footer'); ?>
		</div>
	</div>
</body>
</html>