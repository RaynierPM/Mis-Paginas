<?php
	require "funciones/conexion.php";
	$error = $conn->connect_error;
	echo $error;

?>

<!DOCTYPE html>
<html>
<head>
	<title> mis pruebas </title>
	<link rel="stylesheet" type="text/css" href="css\style.css">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<style type="text/css">
		input:required {
			background-image: linear-gradient(to right, orange, gray);

			color: #fff;
			font-weight: bold; required
		}



	</style>


</head>
<body>
	<header>
		<div class="hero">

			<div class="logo">
				<h1>Logo</h1>
			</div><!-- div.logo -->

			<div class="deco">
				<div class="deco"><p>NIDEA</p></div>
				<div class="deco"><p>NIDEA</p></div>
			</div><!-- div.deco -->

		</div><!-- div.hero -->
	</header>

	<!-- HEADER -->

	<main>
		<h2>Pruebas de PHP</h2>
		<section>
			<h2> Bienvenidos a NIDEA</h2>
		</section>
	</main>

	<!-- MAIN -->

	<footer>
		
	</footer>

	<!-- FOOTER -->
	<?php $conn->close;?>
	<script type="text/javascript" src="JS/script.js"></script>
	</body>
</html>