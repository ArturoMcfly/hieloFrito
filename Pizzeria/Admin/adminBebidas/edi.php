<?php
    include ('../../php/conexion.php');
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $precio=$_POST['precio'];
    $caracteristica=$_POST['caracteristicas'];
    echo($id." ".$nombre." ".$precio." ".$caracteristica);

    $consulta="UPDATE `bebidas` SET `nombre` = '$nombre', `precio`='$precio', `caracteristicas`='$caracteristica' WHERE `id_bebida` = $id";
    $resultado=$mysqli->query($consulta);
    if($resultado==TRUE){
        
        Header("Location: Bebidas.php");
    }else{
        $mensaje=" <script language='javascript'> alert('Error.') </script> <script>window.history.go(-1)</script>";
        Header("Location: bebidas.php?err=$mensaje");
    }
    

?>