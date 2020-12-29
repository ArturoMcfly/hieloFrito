<?php
include('../php/conexion.php');
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$direccion=$_POST['Direccion'];
$total_inicio=$_POST['total_inicio'];
$fecha_inicio=$_POST['fecha_inicio'];
$fecha_final=$_POST['fecha_final'];
$estado=$_POST['estado'];
echo($nombre." ".$telefono." ".$direccion." ".$total_inicio." ".$fecha_inicio." ".$fecha_final." ".$estado);

$insert="INSERT INTO `ordenes`( 
    `nombre`, 
    `telefono`, 
    `direccion`, 
    `total`, 
    `fecha_hora_solicitud`, 
    `fecha_hora_llegada`, 
    `estado`) 
    VALUES (
        '".$nombre."',
        '".$telefono."',
        '".$direccion."',
        '".$total_inicio."',
        '".$fecha_inicio."',
        '".$fecha_final."',
        '".$estado."')";
$resultado=$mysqli->query($insert);
if($resultado){
    
    $consulta="SELECT * FROM `ordenes` WHERE 
    nombre='".$nombre."'AND
    telefono='".$telefono."'AND
    direccion='".$direccion."'AND
    total='".$total_inicio."'AND
    fecha_hora_solicitud='".$fecha_inicio."'AND 
    fecha_hora_llegada='".$fecha_final."'AND 
    estado='".$estado."'";
    $resultado_busqueda=$mysqli->query($consulta);
    $row = $resultado_busqueda -> fetch_array(MYSQLI_BOTH);
    if($row!=null){
        echo("funciono".$row[0]);
        session_start();
        $_SESSION['com'] = $row[0];
        $id_orden=$row[0];



        if(isset($_POST['tipos'])){
            echo("existe");
            $tipo=$_POST['tipos'];
            if($tipo=="tradicional"){
                $id_agregado=$_POST['id_pizza_agregar'];
                $cantidad_agregado=$_POST['cantidad_agregar'];
                $total_agregar=$_POST['total_agregar'];
                echo('<br>');
                echo("".$id_agregado." ".$cantidad_agregado." ".$total_agregar);
                $consulta_pizza="SELECT * FROM `pizza` WHERE id_pizza='".$id_agregado."'";
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
                        '".$cantidad_agregado."',
                        '".$total_agregar."')";
                $resultado_detalles_completos=$mysqli->query($insert_detalle);
                if($resultado_detalles_completos){
                    echo("exitoso");
                }else{
                    echo("fallido");
                }

            }else{
                $id_agregado=$_POST['id_pizza_agregar'];
                $cantidad_agregado=$_POST['cantidad_agregar'];
                $id_detalle_agregado=$_POST['id_detalle_agregar'];
                $total_agregar=$_POST['total_agregar'];
                echo('<br>');
                echo("".$id_agregado." ".$cantidad_agregado." ".$id_detalle_agregado." ".$total_agregar);
                $consulta_pizza="SELECT * FROM `pizza` WHERE id_pizza='".$id_agregado."'";
                $resultado_busqueda_pizza=$mysqli->query($consulta_pizza);
                $fila_pizza=$resultado_busqueda_pizza->fetch_assoc();
                    $nombre_pizza=$fila_pizza['nombre'];
                    $precio_pizza=$fila_pizza['precio'];

                $consulta_detalle="SELECT * FROM `agregados_pizza` WHERE id_agregado_pizza='".$id_detalle_agregado."'";
                $resultado_busqueda_detalle=$mysqli->query($consulta_detalle);
                $fila_detalle=$resultado_busqueda_detalle->fetch_assoc();
                    $nombre_agregado_pizza=$fila_detalle['nombre_agregado_pizza'];
                    $precio_agregado_pizza=$fila_detalle['precio_agregado_pizza'];
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
                        '".$cantidad_agregado."',
                        '".$total_agregar."')";
                $resultado_detalles_completos=$mysqli->query($insert_detalle);
                if($resultado_detalles_completos){
                    echo("exitoso");
                }else{
                    echo("fallido");
                }
            }
        }else{
            echo("no existe");
        }
        
        header("location:compra.php");
    }

    
}else{
    $error=" <script language='javascript'> alert('Error.') </script> <script>window.history.go(-1)</script>";
        Header("Location: ../inicioSesion.php?err=$error");
}
?>