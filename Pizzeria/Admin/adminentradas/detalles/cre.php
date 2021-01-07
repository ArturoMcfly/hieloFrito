<?php
    include ('../../../php/conexion.php');
    $nombre=$_POST['nombre'];
    $precio=$_POST['precio'];
    $caracteristicas=$_POST['caracteristicas'];
    $id=$_POST['id_pizza'];
    echo($nombre." ".$precio." ".$caracteristicas);
    $consulta="INSERT INTO `agregados_entradas`(`nombre_agregado_entrada`, `precio_agregado_entrada`, `caracteristica_agregado_entrada`,`id_entrada`) VALUES ('$nombre','$precio','$caracteristicas','$id')";
    $resultado=$mysqli->query($consulta);
    if($resultado==TRUE){
        //echo("Exitoso");
        Header("Location: detalles.php?id=$id");
    }else{
        //echo("falido");
        $mensaje=" <script language='javascript'> alert('Error.') </script> <script>window.history.go(-1)</script>";
        Header("Location: detalles.php?err=$mensajeid&&id=$id");
    }

?>