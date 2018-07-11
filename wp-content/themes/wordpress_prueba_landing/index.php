<!DOCTYPE html>
<html>
<head>. 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

	<title><?php bloginfo(); ?></title>

	<?php wp_head(); ?>
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


	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/bg1.jpg" alt="First slide">
				<div class="carousel-caption d-none d-md-block mb-5 pb-5">
					<h1>COMIENZA UNA NUEVA VIDA Y UNETE AL MUNDO TECNOLOGICO</h1>
					<button type="button" class="btn btn-success">Comienza Aca</button>
					<button type="button" class="btn btn-primary">Mas Info</button>
					<p >Hay una escasez gigante de desarrolladores en el mundo y mas aún en Latinoamerica, se necesitan mas desarrolladores y Tú puedes ser uno! </p>
				</div>
			</div>

			<div class="carousel-item">
				<img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/bg1.jpg" alt="Second slide">
				<div class="carousel-caption d-none d-md-block mb-5 pb-5">
					<h1>COMIENZA UNA NUEVA VIDA Y UNETE AL MUNDO TECNOLOGICO</h1>
					<button type="button" class="btn btn-success">Comienza Aca</button>
					<button type="button" class="btn btn-primary">Mas Info</button>
					<p>Hay una escasez gigante de desarrolladores en el mundo y mas aún en Latinoamerica, se necesitan mas desarrolladores y Tú puedes ser uno! </p>
				</div>
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/bg1.jpg" alt="Third slide">
				<div class="carousel-caption d-none d-md-block mb-5 pb-5">
					<h1 >COMIENZA UNA NUEVA VIDA Y UNETE AL MUNDO TECNOLOGICO</h1>
					<button type="button" class="btn btn-success">Comienza Aca</button>
					<button type="button" class="btn btn-primary">Mas Info</button>
					<p>Hay una escasez gigante de desarrolladores en el mundo y mas aún en Latinoamerica, se necesitan mas desarrolladores y Tú puedes ser uno! </p>
				</div>
			</div>
		</div>

		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>

		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div> 
</div>
</div>

<div class="container"><div class="row"> <div class="col-md-6 mx-auto"><h4 class="text-center mt-5 font-weight-bold">EL BOOTCAMP MAS GRANDE DE LATINOAMERICA</h4><p class="text-center ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua.</p></div></div></div>

<div class="container">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gente.png" class="img-fluid w-25 rounded mx-auto d-block" alt="Responsive image">
</div>

<div class="jumbotron border-top border-bottom">

	<div class="row"> 
		<div class="col-md-6 ml-auto mr-auto p-auto">
			<h4 class="text-center font-weight-bold">SOLICITA INFORMACION E INSCRIBETE
		</h4>
		<p class="text-center ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
		</p>
	</div>
</div>
<button type="button" class="btn btn-primary rounded mx-auto d-block">Inscribete!</button>
<p class="text-center">Vive la experiencia Desafio Latam</p>
</div>

<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-3 text-left ml-2">Contacto
		<p class=""><b>Desafio Latam</b><br>Ezequias Allende 2361 <br> P:+56 9 5117 7975 <br> <a href="#">inscripciones@desafiolatam.cl</a></p></div>
	<div class="col-md-3 text-left">Suscribete <br>Lorem ipsum dolor sit amet <br> <input class="form-control form-control-lg h-25" type="text" placeholder="ingresa tu email"></div>
	<button type="button" class="btn btn-outline-secondary h-25 mt-5 text-center">Enviar</button>
</div>

<div class="row">
	<div class="col-md-12 bg-dark text-center text-white"> <p class="mt-3">Desafio Latam 2018 - Curso Frontend G8</p></div>
</div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<?php wp_footer(); ?>
</body>
</html>