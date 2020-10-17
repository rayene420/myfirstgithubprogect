<!DOCTYPE html>
<html>
	<head>
		<title>TopRent - Home</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
	</head>

	<body>
		<?php
			include("header.php");
		?>

		<div class="bd-example" id="slideshow">
			<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
				</ol>

				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="cars/Mercedes.jpg" class="d-block w-100" alt="Lotus">
						<div class="carousel-caption d-none d-md-block">
							<button id="goto-rent" onclick="window.location.href='rent.php'" type="button" class="btn btn-primary">Allouer une voiture</button>
							<h3>Location des voitures avec un bon prix.</h3>
						</div>
					</div>

					<div class="carousel-item">
						<img src="cars/suv.jpg" class="d-block w-100" alt="SUV">
						<div class="carousel-caption d-none d-md-block">
							<button id="goto-rent" onclick="window.location.href='rent.php'" type="button" class="btn btn-primary">Allouer une voiture</button>
							<h3>Les meilleurs marques .</h3>
						</div>
					</div>

					<div class="carousel-item">
						<img src="cars/ferrari.jpg" class="d-block w-100" alt="Porsche">
						<div class="carousel-caption d-none d-md-block">
							<button id="goto-rent" onclick="window.location.href='rent.php'" type="button" class="btn btn-primary">Allouer une voiture</button>
							<h3>meme les voitures de Sport.</h3>
						</div>
					</div>
				</div>

				<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Précédent</span>
				</a>

				<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Suivant</span>
				</a>
			</div>
		</div>

		<div class="jumbotron">
  			<h1 class="display-4" id="title-deals">Meilleurs Offer Chez-nous .</h1>
  			<p class="lead">Si vous-avez besoin d'une voiture nous sommes ici ! </p>
  			<hr class="my-4">
  			<p>Bienvenue.</p>
  			<a class="btn btn-primary btn-lg" href="rent.php" role="button">Allouer une voiture</a>
  			<a class="btn btn-primary btn-lg" href="contact.php" role="button" style="margin-left: 10px;">Contact</a>
		</div>

		<!-- Bootstrap -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>