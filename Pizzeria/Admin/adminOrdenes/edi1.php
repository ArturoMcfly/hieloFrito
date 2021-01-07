<?php
    include ('../../php/conexion.php');
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $telefono=$_POST['telefono'];
    $direccion=$_POST['direccion'];
    $total=$_POST['total'];
    $fecha_solicitud=$_POST['fecha_hora_solicitud'];
    $fecha_llegada=$_POST['fecha_hora_llegada'];
    echo($id." ".$nombre." ".$telefono." ".$direccion." ".$total." ".$fecha_solicitud." ".$fecha_llegada);

    $consulta="UPDATE `ordenes` SET `nombre` = '$nombre', `telefono`='$telefono', `direccion`='$direccion',`total`='$total', `fecha_hora_solicitud`='$fecha_solicitud',`fecha_hora_llegada`='$fecha_llegada' WHERE `id_orden` = $id";
    $resultado=$mysqli->query($consulta);
    if($resultado==TRUE){
        $mensaje=" <script language='javascript'> alert('El registro se modifico con exito.') </script> <script>window.history.go(-1)</script>";
        echo("Hola");
        Header("Location: Ordenes.php?err=$mensaje");
    }else{
        $mensaje=" <script language='javascript'> alert('Error.') </script> <script>window.history.go(-1)</script>";
        Header("Location: Ordenes.php?err=$mensaje");
    }
    

?>