<?php
    include ('../../php/conexion.php');
    $nombre=$_POST['nombre'];
    $contrasenia=$_POST['contrasenia'];
    $numero=$_POST['numero'];
    echo("".$nombre." ".$contrasenia." ".$numero);
    $consulta="INSERT INTO `usuario`(`nombre_usuario`, `contrasenia_usuario`, `no_empleado`) VALUES ('$nombre','$contrasenia','$numero')";
    $resultado=$mysqli->query($consulta);
    if($resultado==TRUE){
        $mensaje=" <script language='javascript'> alert('El registro se creo con exito.') </script> <script>window.history.go(-1)</script>";
        echo("Hola");
        Header("Location: ../Bienvenida.php?err=$mensaje");
    }else{
        $mensaje=" <script language='javascript'> alert('Error.') </script> <script>window.history.go(-1)</script>";
        Header("Location: editar.php?err=$mensaje");
    }
?>