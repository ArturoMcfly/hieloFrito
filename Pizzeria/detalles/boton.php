<?php

$boton=$_POST['boton'];

    if($boton=="Calcular costo"){
        $id_pizza=$_POST['id_pizza'];
        $id_detalle=$_POST['id_detalle'];
        $precio=$_POST['precio'];
        $precio_detalle=$_POST['precio_detalle'];
        $cantidad=$_POST['cantidad'];

        $tipo_producto=$_POST['tipo_producto'];
        $tipo_id=$_POST['tipo_id'];
        $tipo_producto_detalle=$_POST['tipo_producto_detalle'];
        if($precio_detalle=="tradicional"){
        $total=$precio*$cantidad;
            header("Location: editarPizza.php?err=1&&id=$id_pizza&&total=$total&&canti=$cantidad&&tipo_producto=$tipo_producto&&tipo_id=$tipo_id&&tipo_producto_detalle=$tipo_producto_detalle");
        }else{
            $total=($precio+$precio_detalle)*$cantidad;
            echo("<br> total ".$total);
            header("Location: editarPizza.php?err=2&&id=$id_pizza&&detalle=$id_detalle&&total=$total&&canti=$cantidad&&tipo_producto=$tipo_producto&&tipo_id=$tipo_id&&tipo_producto_detalle=$tipo_producto_detalle");
        }
    }else{

        if($_POST['tipo']=="tradicional"){
            $id_pizza_compra=$_POST['id_pizza_agregar'];
            $cantidad_compra=$_POST['cantidad_agregar'];
            $total_agregar=$_POST['total_agregar'];

            $tipo_producto=$_POST['tipo_producto'];
            $tipo_id=$_POST['tipo_id'];
            $tipo_producto_detalle=$_POST['tipo_producto_detalle'];
            echo("".$id_pizza_compra." ".$cantidad_compra." ". $total_agregar );
            header("Location: calc.php?id_compra=$id_pizza_compra&&cantidad_compra=$cantidad_compra&&total_compra=$total_agregar&&tipo=tradicional&&tipo_producto=$tipo_producto&&tipo_id=$tipo_id&&tipo_producto_detalle=$tipo_producto_detalle");
        }else{
            $id_pizza_compra=$_POST['id_pizza_agregar'];
            $id_detalle_compra=$_POST['id_detalle_agregar'];
            $cantidad_compra=$_POST['cantidad_agregar'];
            $total_agregar=$_POST['total_agregar'];

            $tipo_producto=$_POST['tipo_producto'];
            $tipo_id=$_POST['tipo_id'];
            $tipo_producto_detalle=$_POST['tipo_producto_detalle'];
            echo("".$id_pizza_compra." ".$id_detalle_compra." ".$cantidad_compra." ". $total_agregar );
            header("Location: calc.php?id_compra=$id_pizza_compra&&id_detalle=$id_detalle_compra&&cantidad_compra=$cantidad_compra&&total_compra=$total_agregar&&tipo=personalizada&&tipo_producto=$tipo_producto&&tipo_id=$tipo_id&&tipo_producto_detalle=$tipo_producto_detalle");
        }
        
        //header("Location: compra.php");
    }
?>