<?php

    /*
    date_default_timezone_set("America/Mexico_City");
    echo ("Dia: ".date("d")."<br>");//Día del mes, 2 dígitos con ceros iniciales
    echo ("Dia: ".date("D")."<br>");//Una representación textual de un día, tres letras
    echo ("Dia: ".date("j")."<br>");//Día del mes sin ceros iniciales
    echo ("Dia: ".date("l")."<br>");//Una representación textual completa del día de la semana
    echo ("Dia: ".date("N")."<br>");//Representación numérica ISO-8601 del día de la semana (añadido en PHP 5.1.0)
    echo ("Dia: ".date("S")."<br>");//Sufijo ordinal inglés para el día del mes, 2 caracteres
    echo ("Dia: ".date("w")."<br>");//Representación numérica del día de la semana
    echo ("Dia: ".date("z")."<br>");//El día del año (comenzando por 0)
    //Semana
    echo ("Semana: ".date("W")."<br>");//Número de la semana del año ISO-8601, las semanas comienzan en lunes
    //Mes
    echo ("Mes: ".date("F")."<br>");//Una representación textual completa de un mes, como January o March
    echo ("Mes: ".date("m")."<br>");//Representación numérica de un mes, con ceros iniciales
    echo ("Mes: ".date("M")."<br>");//Una representación textual corta de un mes, tres letras
    echo ("Mes: ".date("n")."<br>");//Representación numérica de un mes, sin ceros iniciales
    echo ("Mes: ".date("t")."<br>");//Número de días del mes dado
    //Año
    echo ("Año: ".date("L")."<br>");//Si es un año bisiesto
    echo ("Año: ".date("o")."<br>");//Año según el número de la semana ISO-8601. Esto tiene el mismo valor que Y, excepto que si el número de la semana ISO (W) pertenece al año anterior o siguiente, se usa ese año en su lugar. (añadido en PHP 5.1.0)
    echo ("Año: ".date("Y")."<br>");//Una representación numérica completa de un año, 4 dígitos
    echo ("Año: ".date("y")."<br>");//Una representación de dos dígitos de un año
    //Hora
    echo ("Hora: ".date("a")."<br>");//Ante meridiem y Post meridiem en minúsculas
    echo ("Hora: ".date("A")."<br>");//Ante meridiem y Post meridiem en mayúsculas
    echo ("Hora: ".date("B")."<br>");//Hora Internet
    echo ("Hora: ".date("g")."<br>");//Formato de 12 horas de una hora sin ceros iniciales
    echo ("Hora: ".date("G")."<br>");//Formato de 24 horas de una hora sin ceros iniciales
    echo ("Hora: ".date("h")."<br>");//Formato de 12 horas de una hora con ceros iniciales
    echo ("Hora: ".date("H")."<br>");//Formato de 24 horas de una hora con ceros iniciales
    echo ("Minutos: ".date("i")."<br>");//Minutos con ceros iniciales
    echo ("Segundos: ".date("s")."<br>");//Segundos con ceros iniciales
    echo ("Microsegundos: ".date("u")."<br>");//Microsegundos (añadido en PHP 5.2.2). Observe que date() siempre generará 000000 ya que toma un parámetro de tipo integer, mientras que DateTime::format() admite microsegundos si DateTime fue creado con microsegundos.
    echo ("Milisegundos: ".date("V")."<br>");//Milisegundos (añadido en PHP 7.0.0). La misma observación se aplica para u.
    echo ("Dia: ".date("e")."<br>");//Representación numérica del día de la semana
    echo ("Dia: ".date("I")."<br>");//Representación numérica del día de la semana
    echo ("Dia: ".date("O")."<br>");//Representación numérica del día de la semana
    echo ("Dia: ".date("p")."<br>");//Representación numérica del día de la semana
    echo ("Dia: ".date("T")."<br>");//Representación numérica del día de la semana
    echo ("Dia: ".date("c")."<br>");//Representación numérica del día de la semana
    echo ("Dia: ".date("r")."<br>");//Representación numérica del día de la semana
    echo ("Dia: ".date("U")."<br>");//Representación numérica del día de la semana

    echo("ejemplo de Hora: ".date("d-m-Y h:i a"));
    */
    include('../php/conexion.php');
    session_start();
    if(isset($_SESSION['com'])){
        $fecha_inicio=date('Y-m-d h:i:s');
        echo($fecha_inicio."<br>");
        
        $total=$_POST['cantidad_total'];
        $id_orden=$_SESSION['com'];
        $estado="Confirmada";

        echo("Total: ".$total."<br> id: ".$id_orden."<br>");
        $consulta="SELECT * FROM `ordenes` WHERE id_orden='".$id_orden."'";
            $resultado_busqueda=$mysqli->query($consulta);
            if($resultado_busqueda->num_rows > 0){
                $fila=$resultado_busqueda->fetch_assoc();
                $nombre_cliente=$fila['nombre'];
                $telefono_cliente=$fila['telefono'];
                $direccion_cliente=$fila['direccion'];
                echo("Se encontro: ".$nombre_cliente);

                $actualizacion="UPDATE `ordenes` SET `nombre` = '$nombre_cliente', `telefono`='$telefono_cliente', `direccion`='$direccion_cliente', `total`='$total', `fecha_hora_solicitud`='$fecha_inicio', `fecha_hora_llegada`='$fecha_inicio', `estado`='$estado'WHERE `id_orden` = $id_orden";
                $resultado=$mysqli->query($actualizacion);
                if($resultado==TRUE){
                    $mensaje=" <script language='javascript'> alert('El pedido se ha realizado con exito.') </script> <script>window.history.go(-1)</script>";
                    echo("Hola");
                    echo("se logro");
                    Header("Location: compra.php?err5=1&&mensaje=$mensaje");
                }else{
                    $mensaje=" <script language='javascript'> alert('Error.') </script> <script>window.history.go(-1)</script>";
                    Header("Location: compra.php?err5=1&&mensaje=$mensaje");
                }
            }else{
                echo("no se encontro");
            }

    }else{
        echo("no valido la sesion");
    }
    

?>