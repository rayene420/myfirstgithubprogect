<!DOCTYPE html>
<html>
	<head>
		<title>Car Batna - Contact</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
	</head>

	<body>
		<?php
			include("header.php");
		?>

		<form id="contact-form" method="POST">
			<div class="form-group">
				<label for="email">E-mail:</label>
				<input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" minlength="5" required>
				<small id="emailHelp" class="form-text text-muted">We'll never share your e-mail with anyone.</small>
			</div>

			<div class="form-group">
				<label for="msg">Message:</label>
				<textarea class="form-control" name="msg" id="msg" rows="5" minlength="15" required></textarea>
			</div>

			<input type="submit" id="submit-contact" name="submit-contact" class="btn btn-primary" value="Send">
		</form>

		<div id="worktimes">
			<p>Monday-Friday: 7:00-18:00</p>
			<p>Saturday: 8:00-17:00</p>
			<p>Sunday: 9:00-14:00</p>
			<p>contact@toprent.com</p>
		</div>

		<?php
			if (isset($_POST["submit-contact"]))
			{
				$email = $_POST["email"];
				$msg = wordwrap($_POST["msg"]);
				//mail("nikola-grujic@hotmail.com", "Message from $email", "$msg");
				echo "<div id='alert-sent' class='alert alert-success' role='alert'>
					      <p style='padding-left: 30px;'>Your message has been sent successfully!\n</p>
					  </div>";
			}
		?>

		<!-- Bootstrap -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>