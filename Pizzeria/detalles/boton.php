<?php
$id_pizza=$_POST['id_pizza'];
$id_detalle=$_POST['id_detalle'];
$precio=$_POST['precio'];
$precio_detalle=$_POST['precio_detalle'];
$cantidad=$_POST['cantidad'];
$boton=$_POST['boton'];
echo(" ".$precio." ".$boton." ".$precio_detalle." ".$id_detalle);
    if($precio_detalle=="tradicional"){
     $total=$precio*$cantidad;
        header("Location: editarPizza.php?err=1&&id=$id_pizza&&total=$precio");
    }else{
        $total=($precio+$precio_detalle)*$cantidad;
        echo("<br> total ".$total);
        header("Location: editarPizza.php?err=2&&id=$id_pizza&&detalle=$id_detalle&&total=$total");
    }
?>