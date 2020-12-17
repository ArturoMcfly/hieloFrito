<?php
    include ('../../php/conexion.php');
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $contrasenia=$_POST['contrasenia'];
    $numero=$_POST['numero'];

    $consulta="UPDATE `usuario` SET `nombre_usuario` = '$nombre', `contrasenia_usuario`='$contrasenia', `no_empleado`='$numero' WHERE `id_usuario` = $id";
    $resultado=$mysqli->query($consulta);
    if($resultado==TRUE){
        $mensaje=" <script language='javascript'> alert('El registro se modifico con exito.') </script> <script>window.history.go(-1)</script>";
        echo("Hola");
        Header("Location: ../Bienvenida.php?err=$mensaje");
    }else{
        $mensaje=" <script language='javascript'> alert('Error.') </script> <script>window.history.go(-1)</script>";
        Header("Location: editar.php?err=$mensaje");
    }
    

?>
