<?php
    include ('../../php/conexion.php');
    $nombre=$_POST['nombre'];
    $telefono=$_POST['telefono'];
    $direccion=$_POST['direccion'];
    $total=$_POST['total'];
    $fecha_hora_solicitud=$_POST['fecha_hora_solicitud'];
    $fecha_hora_llegada=$_POST['fecha_hora_llegada'];
   
    echo($nombre." ".$telefono." ".$direccion."".$total." ".$fecha_hora_solicitud."".$fecha_hora_llegada);
    $consulta="INSERT INTO `ordenes`(`nombre`, `telefono`, `direccion`,`total`,`fecha_hora_solicitud`,`fecha_hora_llegada`) VALUES ('$nombre','$telefono','$direccion','$total','$fecha_hora_solicitud','$fecha_hora_llegada')";
    $resultado=$mysqli->query($consulta);
    if($resultado==TRUE){
        $mensaje=" <script language='javascript'> alert('El registro se creo con exito.') </script> <script>window.history.go(-1)</script>";
        echo("Hola");
        Header("Location: Ordenes.php?err=$mensaje");
    }else{
        $mensaje=" <script language='javascript'> alert('Error.') </script> <script>window.history.go(-1)</script>";
        Header("Location: Ordenes.php?err=$mensaje");
    }

?>