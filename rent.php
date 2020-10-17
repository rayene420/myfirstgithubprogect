<!DOCTYPE html>
<html>
	<head>
		<title>Location de Voiture</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
	</head>

	<body>
		<?php
			include("header.php");
		?>

		<form id="rent-form" method="GET">
			<h2>Choisit votre préférable voiture.</h2>

			<div class="form-group" id="filter">
				<div>
					<label>Marque de voiture:</label>

					<select id="car-brand" name="car-brand">
						<option value="ALL" default>Tous les marques</option>
						<option value="Audi">Audi</option>
						<option value="BMW">BMW</option>
						<option value="Ferrari">Ferrari</option>
						<option value="Lamborghini">Lamborghini</option>
						<option value="Mercedes">Mercedes</option>
						<option value="Porsche">Porsche</option>
						<option value="Volkswagen">Volkswagen</option>
						<option value="Volvo">Volvo</option>
					</select>
				</div>

				<div class="filter-part">
					<div class="filter-label">
						<label>Année de production:</label>
					</div>

					<div class="filter-inputs">
						<input type="number" name="year-from" min="1700" placeholder="from">
						<input type="number" name="year-to" min="1700" placeholder="to">
					</div>
				</div>

				<div class="filter-part">
					<div class="filter-label">
						<label>Consommation de carburant/100 km:</label>
					</div>

					<div class="filter-inputs">
						<input type="number" name="fuel-from" min="0" step="0.1" placeholder="min">
						<input type="number" name="fuel-to" min="0" step="0.1" placeholder="max">
					</div>
				</div>

				<div class="filter-part">
					<div class="filter-label">
						<label>Prix par heure (DZ):</label>
					</div>

					<div class="filter-inputs">
						<input type="number" name="pph-from" min="0" placeholder="min">
						<input type="number" name="pph-to" min="0" placeholder="max">
					</div>
				</div>

				<div class="filter-part">
					<div class="filter-label">
						<label>Prix par jour (DZ):</label>
					</div>

					<div class="filter-inputs">
						<input type="number" name="ppd-from" min="0" placeholder="min">
						<input type="number" name="ppd-to" min="0" placeholder="max">
					</div>
				</div>

				<input type="submit" id="search" name="search" class="btn btn-primary" name="search" value="Rechercher">
			</div>
		</form>

		<?php
			if (isset($_GET["search"]))
			{
				$conn = mysqli_connect("127.0.0.1", "root", "", "toprent");

				if ($conn->connect_error)
					die("<h3>Connection failed!</h3>");

				$brand = $_GET["car-brand"];
				$yearFrom = $_GET["year-from"];
				$yearTo = $_GET["year-to"];
				$fuelFrom = $_GET["fuel-from"];
				$fuelTo = $_GET["fuel-to"];
				$pphFrom = $_GET["pph-from"];
				$pphTo = $_GET["pph-to"];
				$ppdFrom = $_GET["ppd-from"];
				$ppdTo = $_GET["ppd-to"];
				if (empty($yearFrom)) $yearFrom = 2000;
				if (empty($yearTo)) $yearTo = 2030;
				if (empty($fuelFrom)) $fuelFrom = 0.0;
				if (empty($fuelTo)) $fuelTo = 100.0;
				if (empty($pphFrom)) $pphFrom = 0.0;
				if (empty($pphTo)) $pphTo = 1000.0;
				if (empty($ppdFrom)) $ppdFrom = 0.0;
				if (empty($ppdTo)) $ppdTo = 10000.0;
				$res;

				if ($brand == "ALL")
				{
					$res = mysqli_query($conn, "SELECT *
												FROM cars
												WHERE
													year_produced BETWEEN '$yearFrom' AND '$yearTo'
													AND fuel_consumption BETWEEN '$fuelFrom' AND '$fuelTo'
													AND price_per_hour BETWEEN '$pphFrom' AND '$pphTo'
													AND price_per_day BETWEEN '$ppdFrom' AND '$ppdTo'
												ORDER BY popularity DESC;");
				}
				else
				{
					$res = mysqli_query($conn, "SELECT *
												FROM cars
												WHERE
													brand='$brand'
													AND year_produced BETWEEN '$yearFrom' AND '$yearTo'
													AND fuel_consumption BETWEEN '$fuelFrom' AND '$fuelTo'
													AND price_per_hour BETWEEN '$pphFrom' AND '$pphTo'
													AND price_per_day BETWEEN '$ppdFrom' AND '$ppdTo'
												ORDER BY popularity DESC;");
				}

				if ($res->num_rows < 1)
				{
					echo "<h3 class='h3-pad'>No results found, but check out some of our top choices!</h3>";
					$res = mysqli_query($conn, "SELECT * FROM cars ORDER BY popularity DESC;");
				}
				else
				{
					echo "<h3 class='h3-pad'>Currently available cars:</h3>";
				}

				echo "<div id='all-cards' class='container-fluid padding'><div class='row padding'>";

				while ($row=$res->fetch_assoc())
				{
					$model = $row['model'];

					echo   "<div class='col-md-4'>
								<form method='POST'>
									<div class='card' style='width: 18rem;'>
										<img src='cars/$model.jpg' class='card-img-top' alt='$row[brand] $model'>

										<div class='card-body'>
									    	<p class='card-text'>$row[brand] $model ($row[year_produced])<br>Consommation /100 km: $row[fuel_consumption]L<br>Prix par heure: $row[price_per_hour]DZ<br>Prix par jour: $row[price_per_day]DZ</p>

									    	<button type='submit' id='btn-rent' name='btn-rent' value='$model'>Allouer</button>
									  	</div>
									</div>
								</form>
							</div>";
				}

				echo "</div></div>";

				if (isset($_POST["btn-rent"]))
				{
					$rentedModel = $_POST["btn-rent"];
					mysqli_query($conn, "UPDATE cars SET popularity=popularity+1 WHERE model='$rentedModel';");
				}
			}
		?>

		<!-- Bootstrap -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>