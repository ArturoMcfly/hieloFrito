<?php
    include ('../../php/conexion.php');
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $precio=$_POST['precio'];
    $caracteristica=$_POST['caracteristicas'];
    echo($id." ".$nombre." ".$precio." ".$caracteristica);

    $consulta="UPDATE `salsas` SET `nombre` = '$nombre', `precio`='$precio', `caracteristicas`='$caracteristica' WHERE `id_salsas` = $id";
    $resultado=$mysqli->query($consulta);
    if($resultado==TRUE){
        
        Header("Location: ListaSalsa.php?err=$mensaje");
    }else{
        $mensaje=" <script language='javascript'> alert('Error.') </script> <script>window.history.go(-1)</script>";
        Header("Location: ListaSalsa.php?err=$mensaje");
    }
    

?>