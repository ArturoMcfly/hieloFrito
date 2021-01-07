<?php
    include ('../../php/conexion.php');
    $nombre=$_POST['nombre'];
    $telefono=$_POST['telefono'];
    $direccion=$_POST['direccion'];
    $total=$_POST['total'];
 
    echo($id_orden." ".$nombre." ".$complemento."".$total);
    $consulta="INSERT INTO `detalle_orden`(`id_orden`, `nombre`, `complementos`,`Total`) VALUES ('$id_orden','$nombre','$complemento','$total')";
    $resultado=$mysqli->query($consulta);
    if($resultado==TRUE){
        $mensaje=" <script language='javascript'> alert('El registro se creo con exito.') </script> <script>window.history.go(-1)</script>";
        echo("Hola");
        Header("Location: detalles.php?err=$mensaje");
    }else{
        $mensaje=" <script language='javascript'> alert('Error.') </script> <script>window.history.go(-1)</script>";
        Header("Location: detalles.php?err=$mensaje");
    }

?>