<?php
    include ("conexion.php");

    $usuario=$_POST['user'];
    $password=$_POST['pass'];	
    $numero=$_POST['num'];
    $consulta="SELECT * FROM usuario WHERE nombre_usuario LIKE' $usuario'AND contrasenia_usuario LIKE'$password' AND no_empleado LIKE'$numero";
    //$consulta="SELECT * FROM usuario WHERE nombre_usuario LIKE'$usuario'";
    $resultado=$mysqli->query($consulta);
    echo("HOla 1");
    if($resultado->num_rows > 0){
			echo("HOla");
        session_start();
        $_SESSION['usr'] = $row[4];
    
        header("location:../vistasAdmin/menu.php");

     
    } else {
        
        $error=" <script language='javascript'> alert('la clave no es valida.') </script> <script>window.history.go(-1)</script>";
        Header("Location: ../inicioSesion.php?err=$error");
        
        
    }
?>
