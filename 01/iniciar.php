<?php

	if(isset($_POST['Nombre']) && isset($_POST['Contra'])) {
		

		if(strlen(trim($_POST['Nombre'])) > 0) {
		$nombre = filter_var($_POST['Nombre'], FILTER_SANITIZE_STRING);


		}


		if(strlen(trim($_POST['Contra'])) > 0) {
		$contra = filter_var($_POST['Contra'], FILTER_SANITIZE_STRING);


		}

	}



?>


<?php
//lado de la base de datos
	require "funciones/conexion.php";
	$error = $conn->connect_error;
	echo $error;

	$query = "SELECT * FROM usuarios WHERE Nombre_Usuario = '{$nombre}' AND ";
	$query .= "Contra = '{$contra}';";

	$resultado = $conn->query($query);
	$resultado = $resultado->fetch_assoc();

	if($resultado['Nombre_Usuario'] == $nombre && $resultado['Contra'] == $contra) {
		$error2 = "false";

	}else {
		$error2 = "true";

	}

?>


<!DOCTYPE html>
<html>
<head>
	<title> mis pruebas </title>
	<link rel="stylesheet" type="text/css" href="css\style.css">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<style type="text/css">
		article.info {
			width: 80%;
			padding: 40px;
			position: fixed;
			top: 40%;
			left: 10%;

			display: block;
			background: #ff5800dd;
			box-shadow: gray 1px 1px 7px;
			border: #fff 5px double;

			animation: info .5s linear 10 alternate;
		}

		article.info p {
			text-align: center;
			font-size: 1.3em;

			color: #fff;
			text-shadow: #000 .7px .7px 1px;
		}


		@keyframes info {
			0% {
				background: 1;
				transform: scale(1);
			}100%{
				opacity: .7;
				transform: scale(1.05);
			}

			}
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
			<article class="info">
				<h2>validacion</h2>
				<?php
					if ($error2 == "true") {
						echo "<p>NO HA INGRESADO LOS DATOS CORRECTAMENTE!</p>";
					}else {
						echo "<p>DATOS INGRESADO CORRECTAMENTE</p>";
						echo "<p> USUARIO: <span style='color: #000; text-shadow: #fff .7px .7px 1px'>" . $resultado['Nombre_Usuario'] . "</span>.</p>";
					}
				?>
			</article>
		</section>
	</main>

	<!-- MAIN -->

	<footer>
	</footer>

	<!-- FOOTER -->

	<script type="text/javascript">
		<?php echo "var error = '" . $error2 . "';"?>
		console.log(error);

		setTimeout(function () {
		
		if(error == "true") {
			console.log("volver");
			location.href = "index.php";
		}else {
			console.log("inicio");
			location.href = "inicio.php?ID=<?php echo $resultado['ID']; ?>";
		}

		}, 7000);
	</script>
	<?php $conn->close; ?>
</body>
</html>