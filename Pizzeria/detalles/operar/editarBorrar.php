<?php
include ('../../php/conexion.php');

$id=$_POST['id_detalle'];
$boton=$_POST['boton'];
echo($id." ".$boton);

    $consulta="DELETE FROM `detalle_orden` WHERE id_detalle='$id'";
    $resultado=$mysqli->query($consulta);
    if($resultado==TRUE){
        $mensaje=" <script language='javascript'> alert('El registro se borro con exito.') </script> <script>window.history.go(-1)</script>";
        echo($mensaje);
        Header("Location: ../Compra.php");
        echo("exitoso");
    }else{
        $mensaje=" <script language='javascript'> alert('Error.') </script> <script>window.history.go(-1)</script>";
        echo($mensaje);
        Header("Location: ../Compra.php");
        echo("fallido");
    }
    

?>