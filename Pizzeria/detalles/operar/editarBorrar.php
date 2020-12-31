<?php
include ('../../php/conexion.php');

$id=$_POST['id_detalle'];
$boton=$_POST['boton'];
echo($id." ".$boton);
if($boton=="Editar"){
    Header("Location: editar.php?id=$id");
}else{
    $consulta="DELETE FROM `detalle_detalle` WHERE id_usuario=$id";
    $resultado=$mysqli->query($consulta);
    if($resultado==TRUE){
        $mensaje=" <script language='javascript'> alert('El registro se borro con exito.') </script> <script>window.history.go(-1)</script>";
        Header("Location: ../Bienvenida.php?err=$mensaje");
    }else{
        $mensaje=" <script language='javascript'> alert('Error.') </script> <script>window.history.go(-1)</script>";
        Header("Location: ../Bienvenida.php?err=$mensaje");
    }
    
}
?>