<?php
    include ("conexion.php");

    $usuario=$_POST['user'];
    $password=$_POST['pass'];	
    $numero=$_POST['num'];
    $query="INSERT INTO usuario (
        `nombre_usuario`,
        `contrasenia_usuario`, 
        `no_empleado`)
        VALUES (
            '".$usuario."',
            '".$password."',
            '".$numero."')";
    $resultado=$mysqli->query($query);
    if ($resultado) {
        echo "<script language='javascript'>"; 
                echo "alert('Registro guardado.')"; 
                
                echo "</script>"; 
                echo '<script>window.history.go(-1)</script>';
            }else {
                echo "<script language='javascript'>"; 
                echo "alert('Error!! Registro no guardado .')"; 
                echo "</script>";  
                echo '<script>window.history.go(-1)</script>';
            }
?>