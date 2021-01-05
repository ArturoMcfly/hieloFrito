<?php
include('../php/conexion.php');
session_start();
if(isset($_SESSION['com'])){
    $id_orden=$_SESSION['com'];
    if(isset($_GET['tipo'])){
        $tipo=$_GET['tipo'];

        $tipo_producto=$_GET['tipo_producto'];
        $tipo_id=$_GET['tipo_id'];
        $tipo_producto_detalle=$_GET['tipo_producto_detalle'];
        if($tipo=='tradicional'){
            $id=$_GET['id_compra'];
            $cantidad=$_GET['cantidad_compra'];
            $total=$_GET['total_compra'];
            $consulta_pizza="SELECT * FROM $tipo_producto WHERE $tipo_id='".$id."'";
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
            $id=$_GET['id_compra'];
            $cantidad=$_GET['cantidad_compra'];
            $id_detalle=$_GET['id_detalle'];
            $total=$_GET['total_compra'];

            if($tipo_producto=="pizza"){
                $tipo_producto_detalle_id="id_agregado_pizza";
                $tipo_producto_detalle_nombre="nombre_agregado_pizza";
                $tipo_producto_detalle_precio="precio_agregado_pizza";

            }else if($tipo_producto=="postres"){
                $tipo_producto_detalle_id="id_agregado_postre";
                $tipo_producto_detalle_nombre="nombre_agregado_postre";
                $tipo_producto_detalle_precio="precio_agregado_postre";
            }else if($tipo_producto=="bebidas"){
                $tipo_producto_detalle_id="id_aregado_bebidas";
                $tipo_producto_detalle_nombre="nombre_agregado_bebida";
                $tipo_producto_detalle_precio="precio_agregado_bebida";
            }else if($tipo_producto=="salsas"){
                $tipo_producto_detalle_id="id_agregado_salsa";
                $tipo_producto_detalle_nombre="nombre_agregado_salsa";
                $tipo_producto_detalle_precio="precio_agregado_salsa";
            }else if($tipo_producto=="promociones"){
                $tipo_producto_detalle_id="id_aregado_promo";
                $tipo_producto_detalle_nombre="nombre_agregado_promo";
                $tipo_producto_detalle_precio="precio_agregado_promo";


            }



            $consulta_pizza="SELECT * FROM $tipo_producto WHERE $tipo_id='".$id."'";
            $resultado_busqueda_pizza=$mysqli->query($consulta_pizza);
            $fila_pizza=$resultado_busqueda_pizza->fetch_assoc();
                $nombre_pizza=$fila_pizza['nombre'];
                $precio_pizza=$fila_pizza['precio'];

            $consulta_detalle="SELECT * FROM $tipo_producto_detalle WHERE $tipo_producto_detalle_id='".$id_detalle."'";
            $resultado_busqueda_detalle=$mysqli->query($consulta_detalle);
            $fila_detalle=$resultado_busqueda_detalle->fetch_assoc();
                $nombre_agregado_pizza=$fila_detalle["$tipo_producto_detalle_nombre"];
                $precio_agregado_pizza=$fila_detalle["$tipo_producto_detalle_precio"];
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
      }
      header("Location: compra.php");
}else{
    header("Location: compra.php");
}


?>