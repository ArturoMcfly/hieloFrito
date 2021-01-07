<?php
    include('../php/conexion.php');
    $nombre=$_POST['nombre'];
    $total=$_POST['total'];
    if(($nombre!="")&&($total!="")){
        echo ("1");
        
        Header("Location: ../busca.php?err1=1&&nombre=$nombre&&total=$total");

    }else if($nombre!=""){
        echo ("2");
        Header("Location: ../busca.php?err1=2&&nombre=$nombre");

    }else if($total!=""){
        echo ("3");
        Header("Location: ../busca.php?err1=3&&total=$total");
    }
?>