<?php
    include ('../../php/conexion.php');
    $nombre=$_POST['nombre'];
    $contrasenia=$_POST['contrasenia'];
    $numero=$_POST['numero'];
    echo("".$nombre." ".$contrasenia." ".$numero);
?>