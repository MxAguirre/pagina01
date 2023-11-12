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
			<?php include("botonera.php"); ?>  <!–– Agrega la botonera al archivo ––> 
		</nav>
	</header>
	<section>
		<h2>Agenda de clases</h2>
		<?php include('ver_clases.php') ?> <!–– Agrego el archivo para visualizar la agenda ––> 
	</section>
	<aside>

    <h2>Agregar clases</h2>
		<form method="POST" action="insertar_clases.php"> <!–– Envio de formulario al archivo insertar_clases.php por POST ––> 
			<input type="text" name="clase" required placeholder="Clase">
			<input type="date" name="date" required id='calendario'>
			<input class="enviar" type="submit">
		</form>
    </aside>
	<footer>
		<a href="https://www.linkedin.com/in/maximilianoraguirre" target="_blank"> Mi linkedin </a>
		<p>Esta pagina solo esta diseñada para demostrar recursos, cualquier comentario o sugerencia es bienvenido</p>
	</footer>
</div>
</body>
</html>