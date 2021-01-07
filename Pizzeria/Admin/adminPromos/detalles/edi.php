<?php
    include ('../../../php/conexion.php');
    $id=$_POST['id'];
    $id_detalle=$_POST['id_detalle'];
    $nombre=$_POST['nombre'];
    $precio=$_POST['precio'];
    $caracteristica=$_POST['caracteristicas'];
    echo($id." ".$id_detalle."".$nombre." ".$precio." ".$caracteristica);

    $consulta="UPDATE `agregados_promociones` SET `nombre_agregado_promo` = '$nombre', `precio_agregado_promo`='$precio', `caracteristicas_agregado_promo`='$caracteristica' WHERE `id_agregado_promo` = $id_detalle";
    $resultado=$mysqli->query($consulta);
    if($resultado==TRUE){
        echo("Exitoso");
        Header("Location: detalles.php?id=$id");
    }else{
        echo("falido");
        $mensaje=" <script language='javascript'> alert('Error.') </script> <script>window.history.go(-1)</script>";
        //Header("Location: detalles?err=$mensaje");
    }
    

?>