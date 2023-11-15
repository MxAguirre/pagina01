<?php
    session_start();
    date_default_timezone_set('America/Argentina/Tucuman');
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $anno = $_POST['año'];
    
    if (!checkdate($mes,$dia,$anno)){
        $_SESSION['error'] = true;
        header('location: 02eventos.php?error');
    }
    else if (checkdate($mes,$dia,$anno)) {
        $_SESSION['ok'] = true;
        header("location: 02eventos.php?fecha=".$anno."-".$mes."-".$dia);
    }
?>