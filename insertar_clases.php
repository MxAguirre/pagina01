<?php
// Recibo los parametros enviados por post
$clase = $_POST["clase"];
$fecha = $_POST["date"];

include("coneccion.php"); // Incluyo el archivo de coneccion

mysqli_query($coneccion, "INSERT INTO clases VALUES(DEFAULT, '$clase', '$fecha')"); // Inserto en la base de datos

header("location: 01agenda.php") // Devuelvo a la pagina de agenda
?>