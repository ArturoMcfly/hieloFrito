<?php
    include ('../../php/conexion.php');
    $nombre=$_POST['nombre'];
    $precio=$_POST['precio'];
    $caracteristicas=$_POST['caracteristicas'];
    echo($nombre." ".$precio." ".$caracteristicas);
    $consulta="INSERT INTO `salsas`(`nombre`, `precio`, `caracteristicas`) VALUES ('$nombre','$precio','$caracteristicas')";
    $resultado=$mysqli->query($consulta);
    if($resultado==TRUE){
        
        Header("Location: ListaSalsa.php?err=$mensaje");
    }else{
        $mensaje=" <script language='javascript'> alert('Error.') </script> <script>window.history.go(-1)</script>";
        Header("Location: ListaSalsa.php?err=$mensaje");
    }

?>