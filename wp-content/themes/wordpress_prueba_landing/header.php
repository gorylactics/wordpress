<!DOCTYPE html>
<html>
<head>. 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- aca se manda a llamar a bootstrap -->
	<?php wp_head(); ?>
	<!-- nombre de la pestaña -->
	<title><?php bloginfo(); ?></title> 
	<!-- /nombre de la pestaña -->



	<!-- con esto le decimos donde esta el header a wordpress -->
	<?php wp_head(); ?>
	<!-- /con esto le decimos donde esta el header a wordpress -->
</head>


<body>
	
<nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top" >
		<a class="navbar-brand" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/latam_logo.png" class="w-25"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"> <a class="navbar-brand text-white" href="#" class="opciones">Equipo</a> 
				</li>
				<li class="nav-item "><a class="navbar-brand text-white	" href="#" class="opciones" >Blog</a> 
				</li>
				<li class="nav-item"> <a class="navbar-brand text-white" href="#" class="opciones">Contacto</a>
				</li>
			</ul>
		</div>
	</nav>
