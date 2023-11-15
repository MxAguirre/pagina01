<?php session_start()?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="estilos.css">
</head>

<body>

<div class="container">
	<header>
		<h1>¡Muchas gracias por visitar esta pagina!</h1>
	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section>
		<h2>Eventos</h2>
		<form method="POST" action="calculo_fecha.php">
			<input class="fecha" type="number" name="dia" required placeholder="Ingrese el dia (numero)" min="1" max="31"> <br>
			<input class="fecha" type="number" name="mes" required placeholder="Ingrese el mes (numero)" min="1" max="12"> <br>
			<input class="fecha" type="number" name="año" required placeholder="Ingrese el año (numero)" min="1970" max="2150"> <br>
			<input class="enviar" type="submit" id="enviar_fecha">
		</form>

		<?php
			if (isset($_SESSION['error']) and !isset($_SESSION['ok'])) {
				echo '<p>La fecha no es valida</p>';			
			}
			else if (!isset($_SESSION['error']) and isset($_SESSION['ok'])) {
				date_default_timezone_set('America/Argentina/Tucuman');
				if (isset($_GET['fecha']) == True) {
				$hoy = date('Y-m-d');
				$fecha = ($_GET['fecha']);
				$segundos = strtotime($fecha) - strtotime($hoy);
				$dias = intval($segundos/86400);
				echo "<p>Días restantes hasta la fecha ingresada: ".$dias."</p>";
				}
				else {
					echo 'Ingrese una fecha para calcular los dias faltantes hasta la fecha.';
				}
			}
		?>
	</section>
	<aside>
    
	</aside>
	<footer>
		<a href="https://www.linkedin.com/in/maximilianoraguirre" target="_blank"> Mi linkedin </a>
		<p>Esta pagina solo esta diseñada para demostrar recursos, cualquier comentario o sugerencia es bienvenido</p>
	</footer>
</div>
</body>
</html>