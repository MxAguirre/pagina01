<?php
include('coneccion.php');  // Incluyo los datos de coneccion

$query = mysqli_query($coneccion, "SELECT * FROM clases ORDER BY fecha DESC"); // Realizo el query para mostrar lo agendado

// Procedo a mostrar lo almacenado en la base de datos
while($materias = mysqli_fetch_assoc($query)){
?>
    <div>
        <ul>
            <li id='materias'>
                <p> Fecha: <?php echo $materias['fecha'] ?> / Materia: <?php echo $materias['unidad'] ?> </p>
            </li>
        </ul>
    </div>
<?php }
?>