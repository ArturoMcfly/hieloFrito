<?php
include('../php/conexion.php');
    if($_GET['tipo']=='tradicional'){
        $id=$_GET['id'];
        $cantidad=$_GET['cantidad'];
        $total=$_GET['total'];
        $id_orden=$_GET['id_orden'];
        $consulta_pizza="SELECT * FROM `pizza` WHERE id_pizza='".$id."'";
        $resultado_busqueda_pizza=$mysqli->query($consulta_pizza);
        $fila_pizza=$resultado_busqueda_pizza->fetch_assoc();
                    $nombre_pizza=$fila_pizza['nombre'];
                    $precio_pizza=$fila_pizza['precio'];
                    $insert_detalle="INSERT INTO `detalle_orden`( 
                        `id_orden`, 
                        `nombre`, 
                        `complementos`, 
                        `cantidad`, 
                        `Total`) 
                        VALUES (
                            '".$id_orden."',
                            '".$nombre_pizza." <br> $".$precio_pizza."',
                            'No hay detalle',
                            '".$cantidad."',
                            '".$total."')";
                    $resultado_detalles_completos=$mysqli->query($insert_detalle);
                    if($resultado_detalles_completos){
                        echo("exitoso");
                    }else{
                        echo("fallido");
                    }
    }else{
        $id=$_GET['id'];
        $id_detalle['id_detalle']
        $cantidad=$_GET['cantidad'];
        $total=$_GET['total'];
        $id_orden=$_GET['id_orden'];
        $consulta_pizza="SELECT * FROM `pizza` WHERE id_pizza='".$id."'";
        $resultado_busqueda_pizza=$mysqli->query($consulta_pizza);
        $fila_pizza=$resultado_busqueda_pizza->fetch_assoc();
            $nombre_pizza=$fila_pizza['nombre'];
            $precio_pizza=$fila_pizza['precio'];

        $consulta_detalle="SELECT * FROM `agregados_pizza` WHERE id_agregado_pizza='".$id_detalle."'";
        $resultado_busqueda_detalle=$mysqli->query($consulta_detalle);
        $fila_detalle=$resultado_busqueda_detalle->fetch_assoc();
            $nombre_agregado_pizza=$fila_detalle['nombre_agregado_pizza'];
            $precio_agregado_pizza=$fila_detalle['precio_agregado_pizza'];
        $insert_detalle="INSERT INTO `detalle_orden`( 
            `id_orden`, 
            `nombre`, 
            `complementos`, 
            `cantidad`, 
            `Total`) 
            VALUES (
                '".$id_orden."',
                '".$nombre_pizza." <br> $".$precio_pizza."',
                '".$nombre_agregado_pizza." <br> $".$precio_agregado_pizza."',
                '".$cantidad."',
                '".$total."')";
        $resultado_detalles_completos=$mysqli->query($insert_detalle);
        if($resultado_detalles_completos){
            echo("exitoso");
        }else{
            echo("fallido");
        }
    }

?>