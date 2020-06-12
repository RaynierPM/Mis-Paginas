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
		div.iniciarSesion > article, div.registrar > article {

			display: block!important;
		}

		.oculto {
			opacity: 0!important;

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
			<h2> Bienvenidos </h2>
			<div class="formularios">
						
				<div class="iniciarSesion">
					<article class="oculto">
						<h3>Iniciar sesion</h3>
						<form action="iniciar.php" method="post">
							<div class="campo">
								<label for="Nombre">Nombre de usuario: </label>
								<input type="text" name="Nombre" id="Nombre" required maxlength="15" autocomplete="off">
							</div>

							<div class="campo">
								<label for="Contra">Contraseña: </label>
								<input type="password" name="Contra" id="Contra" required maxlength="17">
							</div>

							<div class="campo">
								<input type="submit" name="Iniciar sesion!" id="enviarI" >
							</div>
						</form>
					</article>

					<button>INICIAR SESION!</button>
				</div>

				<div class="registrar">
					
					<article class="oculto">
						<h3>Registrarse</h3>
						<form action="Registrar.php" method="post">
							<div class="campo">
								<label for="NombreRegistro">Nombre de usuario: </label>
								<input type="text" name="NombreRegistro" id="NombreRegistro" required maxlength="15" autocomplete="off">
							</div>

							<div class="campo">
								<label for="ContraRegistro">Contra: </label>
								<input type="password" name="ContraRegistro" id="ContraRegistro" required maxlength="17">
							</div>

							<div class="campo">
								<input type="submit" name="Registrar!" id="enviarR">
							</div>
						</form>
					</article>

					<button>REGISTRARSE!</button>
				</div>
			</div>
		</section>
	</main>

	<!-- MAIN -->

	<footer>
		
	</footer>

	<!-- FOOTER -->
	<?php $conn->close;?>
	<script type="text/javascript">
		(function() {
			document.addEventListener("DOMContentLoaded", function(){
				
				var formIni = document.querySelector("div.iniciarSesion > article");

				var formReg = document.querySelector("div.registrar > article");


				var iniciarSesion = document.querySelector("div.iniciarSesion button");
				var registrar = document.querySelector("div.registrar button");

				iniciarSesion.addEventListener('click', function() {
					
					if (formIni.className == "oculto") {
						
						formIni.classList.toggle("oculto");

						setTimeout(function() {formIni.style.transform = "scaleY(1)";}, 200)
					}else {
					
						formIni.style.transform = "scaleY(0)";
					
						setTimeout(function() {formIni.classList.toggle("oculto")}, 1000);

					}

					if (iniciarSesion.innerText == "INICIAR SESION!") {
						
						iniciarSesion.innerText = "CERRAR FORMULARIO!";
					}else {
						
						iniciarSesion.innerText = "INICIAR SESION!";
					}
				});

				registrar.addEventListener('click', function() {
					
					if (formReg.className == "oculto") {
						formReg.classList.toggle("oculto");

						setTimeout(function() {formReg.style.transform = "scaleY(1)";}, 200)
					}else {
						formReg.style.transform = "scaleY(0)";
						
						setTimeout(function() {formReg.classList.toggle("oculto")}, 1000);

					}

					if (registrar.innerText == "REGISTRARSE!") {
						registrar.innerText = "CERRAR FORMULARIO!";
					}else {
						registrar.innerText = "REGISTRARSE!";
					}
				});				
			});
		})();
	</script>
	<script type="text/javascript" src="JS/script.js"></script>
	</body>
</html>