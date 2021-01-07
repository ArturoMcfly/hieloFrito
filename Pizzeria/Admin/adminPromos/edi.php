<?php
    include ('../../php/conexion.php');
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $contrasenia=$_POST['precio'];
    $numero=$_POST['caracteristicas'];

    $consulta="UPDATE `promociones` SET `nombre` = '$nombre', `precio`='$contrasenia', `caracteristicas`='$numero' WHERE `id_promociones` = $id";
    $resultado=$mysqli->query($consulta);
    if($resultado==TRUE){
        $mensaje=" <script language='javascript'> alert('El registro se modifico con exito.') </script> <script>window.history.go(-1)</script>";
        echo("Hola");
        Header("Location: Promos.php?err=$mensaje");
    }else{
        
        $mensaje=" <script language='javascript'> alert('Error.') </script> <script>window.history.go(-1)</script>";
        Header("Location: Promos.php?err=$mensaje");
    }
    

?>
