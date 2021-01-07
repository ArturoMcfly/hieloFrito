<?php
    include ('../../../php/conexion.php');
    $id=$_POST['id'];
    $id_detalle=$_POST['id_detalle'];
    $boton=$_POST['boton'];
    if($boton=="Editar"){
        Header("Location: edit.php?id=$id&&id_detalle=$id_detalle");
    }else{
        $consulta="DELETE FROM `agregados_salsas` WHERE id_agregado_salsa=$id_detalle";
        $resultado=$mysqli->query($consulta);
        if($resultado==TRUE){
            $mensaje=" <script language='javascript'> alert('El registro se borro con exito.') </script> <script>window.history.go(-1)</script>";
            Header("Location: detalles.php?err=$mensaje&&id=$id");
        }else{
            $mensaje=" <script language='javascript'> alert('Error.') </script> <script>window.history.go(-1)</script>";
            Header("Location: detalles.php?err=$mensaje&&id=$id");
        }
        
    }
?>