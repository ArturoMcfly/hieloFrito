<?php

$boton=$_POST['boton'];

    if($boton=="Calcular costo"){
        $id_pizza=$_POST['id_pizza'];
        $id_detalle=$_POST['id_detalle'];
        $precio=$_POST['precio'];
        $precio_detalle=$_POST['precio_detalle'];
        $cantidad=$_POST['cantidad'];
        if($precio_detalle=="tradicional"){
        $total=$precio*$cantidad;
            header("Location: editarPizza.php?err=1&&id=$id_pizza&&total=$total&&canti=$cantidad");
        }else{
            $total=($precio+$precio_detalle)*$cantidad;
            echo("<br> total ".$total);
            header("Location: editarPizza.php?err=2&&id=$id_pizza&&detalle=$id_detalle&&total=$total&&canti=$cantidad");
        }
    }else{
        if($_POST['tipo']=="tradicional"){
            $id_pizza_compra=$_POST['id_pizza_agregar'];
            $cantidad_compra=$_POST['cantidad_agregar'];
            $total_agregar=$_POST['total_agregar'];
            echo("".$id_pizza_compra." ".$cantidad_compra." ". $total_agregar );
            header("Location: compra.php?id_compra=$id_pizza_compra&&cantidad_compra=$cantidad_compra&&total_compra=$total_agregar&&tipo=tradicional");
        }else{
            $id_pizza_compra=$_POST['id_pizza_agregar'];
            $id_detalle_compra=$_POST['id_detalle_agregar'];
            $cantidad_compra=$_POST['cantidad_agregar'];
            $total_agregar=$_POST['total_agregar'];
            echo("".$id_pizza_compra." ".$id_detalle_compra." ".$cantidad_compra." ". $total_agregar );
            header("Location: compra.php?id_compra=$id_pizza_compra&&id_detalle=$id_detalle_compra&&cantidad_compra=$cantidad_compra&&total_compra=$total_agregar&&tipo=personalizada");
        }
        
        //header("Location: compra.php");
    }
?>