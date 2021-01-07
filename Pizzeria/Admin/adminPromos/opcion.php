<?php
    include ('../../php/conexion.php');
    $id=$_POST['id'];
    $boton=$_POST['boton'];
    if($boton=="Editar"){
        Header("Location: edit.php?id=$id");
    }else if($boton=="Borrar"){
        $consulta_detalles="DELETE  FROM `agregados_promociones` WHERE id_promociones=$id";
        $resultado_detalles=$mysqli->query($consulta_detalles);
        if($resultado_detalles==TRUE){
            echo("Si se pudo");

            $consulta="DELETE FROM `promociones` WHERE id_promociones=$id";
            $resultado=$mysqli->query($consulta);
            if($resultado==TRUE){
                $mensaje=" <script language='javascript'> alert('El registro se borro con exito.') </script> <script>window.history.go(-1)</script>";
                Header("Location: Promos.php?err=$mensaje");
            }else{
                $mensaje=" <script language='javascript'> alert('Error.') </script> <script>window.history.go(-1)</script>";
                Header("Location: Promos.php?err=$mensaje");
            }
        }else{
            echo("fallido");
        }
    }else{
        Header("Location: detalles/detalles.php?id=$id");
    }
?>