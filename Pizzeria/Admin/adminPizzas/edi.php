<?php
    include ('../../php/conexion.php');
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $precio=$_POST['precio'];
    $caracteristica=$_POST['caracteristicas'];
    echo($id." ".$nombre." ".$precio." ".$caracteristica);

    $consulta="UPDATE `pizza` SET `nombre` = '$nombre', `precio`='$precio', `caracteristicas`='$caracteristica' WHERE `id_pizza` = $id";
    $resultado=$mysqli->query($consulta);
    if($resultado==TRUE){
        
        echo("Exitoso");
        Header("Location: BienvenidaPizzas.php");
    }else{
        $mensaje=" <script language='javascript'> alert('Error.') </script> <script>window.history.go(-1)</script>";
        Header("Location: BienvenidaPizzas.php?err=$mensaje");
    }
    

?>