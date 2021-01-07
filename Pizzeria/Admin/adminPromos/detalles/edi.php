<?php
    include ('../../../php/conexion.php');
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $precio=$_POST['precio'];
    $caracteristica=$_POST['caracteristicas'];
    echo($id." ".$nombre." ".$precio." ".$caracteristica);

    $consulta="UPDATE `agregados_promociones` SET `nombre_agregado_promo` = '$nombre', `precio_agregado_promo`='$precio', `caracteristicas_agregado_promo`='$caracteristica' WHERE `id_agregado_promo` = $id";
    $resultado=$mysqli->query($consulta);
    if($resultado==TRUE){
        //echo("Exitoso");
        Header("Location: BienvenidaPizzas.php?err=$mensaje");
    }else{
        //echo("falido");
        $mensaje=" <script language='javascript'> alert('Error.') </script> <script>window.history.go(-1)</script>";
        Header("Location: BienvenidaPizzas.php?err=$mensaje");
    }
    

?>