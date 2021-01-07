<?php
    include ('../../php/conexion.php');
    $nombre=$_POST['nombre'];
    $precio=$_POST['precio'];
    $caracteristicas=$_POST['caracteristicas'];
    echo($nombre." ".$precio." ".$caracteristicas);
    $consulta="INSERT INTO `promociones`(`nombre`, `precio`, `caracteristicas`) VALUES ('$nombre','$precio','$caracteristicas')";
    $resultado=$mysqli->query($consulta);
    if($resultado==TRUE){
        
        Header("Location: Promos.php");
    }else{
        $mensaje=" <script language='javascript'> alert('Error.') </script> <script>window.history.go(-1)</script>";
        Header("Location: Promos.php?err=$mensaje");
    }

?>