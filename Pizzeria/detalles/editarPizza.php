<?php
include('../php/conexion.php');


?>
<!DOCTYPE html>
<html lang="es-mx">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ordenar aqui</title>
        <!-- Bootstrap core CSS -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../css.css" rel="stylesheet">
        <style>
            body{
                margin: 0;
                padding: 0;
                background-image: #900C3F;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                font-family: Tahoma, sans-serif;
                background-attachment: fixed;
            }
            .form-area{
                margin: 20px;
                background: rgba(0,0,0,0.5);
                color: #fff;
                padding: 40px;
                
                margin-top:100px !important;
            }
            .form-area h4 {
            
                color: #fff;
                
            }
            .form-area h5 {
            
                color: #fff;
            
            }
            h3{
                margin: 0;
                padding: 0;
                font-weight: bold;
                color: #fff;
            }
            .form-area p{
                margin: 0;
                padding: 0;
                font-weight: bold;
                color: #fff;
            }
            .form-area input,select{
                margin-bottom: 20px;
                width: 100%;
            }
            .form-area input[type=text],
            .form-area input[type=password]{
                border: none;
                border-bottom: 1px solid #ffffff;
                background-color: transparent;
                outline: none;
                height: 40px;
                color: #ffffff;
                display: 16px;

            }
            ::placeholder{
                color: #ffffff;
            }
            .form-area select{
                margin-top: 20px;
                padding: 10px 0;
            }
            .form-area input[type=submit]{
                border: none;
                height: 40px;
                outline: none;
                color: #ffffff;
                font-size: 15px;
                background-color: tomato;
                cursor: pointer;
                border-radius: 20px;
                transition: .3s linear;
            }
            .form-area input[type=submit]:hover{
                background-color: transparent;
                border: 2px solid #e66767;
                color: #fff;
                
            }
            .form-area a{
                color: #ffffff;
                text-decoration: none;
                font-size: 14px;
                font-weight: bold;

            }
            .carousel-item {
            height: 65vh;
            min-height: 350px;
            background: no-repeat center center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            }
            .imagen-pizza{
            width:100px;
            }
           
            .calcular{
                background:#08F43E!important;
                transition: .3s linear;
            }
            .calcular:hover{
                
                background:transparent !important;
                border: 2px solid #08F43E !important;
                color:#fff !important;
            }
           
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 " id="mainNav" style="background:#0000009b;">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="../index.php">Hilo Frito</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="pizzas.php">Pizzas</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="promosiones.php">Promociones</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Bebidas.php">Bebidas</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="pedidos.php">Pedidos</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="InicioSesion.php">Iniciar Sesión</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php
            if(isset($_GET['err'])){
                if($_GET['err']=='1'){
                    
                    $id_regreso=$_GET['id'];
                    $total=$_GET['total'];
                    $cantidad_pizza=$_GET['canti'];
        ?>
        <div class="form-area titulo">
            <table class="table">
                <?php
                    
                    $query="SELECT * FROM pizza WHERE id_pizza LIKE '$id_regreso'";
                    $resultado=$mysqli->query($query);
                    if($resultado->num_rows > 0){
                        $fila=$resultado->fetch_assoc();
                        $id_pizza=$fila['id_pizza'];
                        $precio=$fila['precio'];
                        
                ?>
                <form action="boton.php" method="POST">
                    <h1>
                        Datos de la pizza:
                        <?php
                            echo($fila['nombre']);
                        ?>
                    </h1>
                    <tr>
                        <th>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCf2vz1E0s1rJYyOMSMDIemGyDuGFQe7LhZA&usqp=CAU" alt="">
                        </th>
                        <th>
                            <h3>Datos de la pizza</h3>
                            <h3>
                            <?php
                                echo($fila['caracteristicas']."<br>");
                                echo("<input type='text' value='$id_pizza' name='id_pizza_agregar' hidden>");
                                echo("<input type='text' value='$cantidad_pizza' name='cantidad_agregar' hidden>");
                                echo("<input type='text' value='$total' name='total_agregar' hidden>");
                                echo("<input type='text' value='tradicional' name='tipo' hidden>");
                                echo("costo: $".$precio."<br>");
                                echo("cantidad ordenada: ".$cantidad_pizza."<br>");
                                echo("Total: $".$total);
                            ?>
                            </h3>
                            <input type="submit" name="boton" value="Añadir a la orden">
                        </th>
                    </tr>
                </form>
            </table>
        </div>
        <?php
            }
                }else{
                    $id_regreso=$_GET['id'];
                    $total=$_GET['total'];
                    $cantidad_pizza=$_GET['canti'];
                    $id_detalle=$_GET['detalle'];
                   
        ?>
        <div class="form-area titulo">
            <table class="table">
                <?php
                    
                    $query="SELECT * FROM pizza WHERE id_pizza LIKE '$id_regreso'";
                    $resultado=$mysqli->query($query);
                    if($resultado->num_rows > 0){
                        $fila=$resultado->fetch_assoc();
                        $id_pizza=$fila['id_pizza'];
                        $precio=$fila['precio'];
                        $consulta="SELECT * FROM agregados_pizza WHERE id_agregado_pizza LIKE $id_detalle";
                        $resultado_consulta=$mysqli->query($consulta);
                        if($resultado_consulta->num_rows > 0){

                            $fila_resultado=$resultado_consulta->fetch_assoc();
                            $nombre_detalle_pizza=$fila_resultado['nombre_agregado_pizza'];
                            $precio_detalle_pizza=$fila_resultado['precio_agregado_pizza'];
                            $nombre_detalle_pizza=$fila_resultado['caracterisitcas_agregado_pizza'];
                            
                ?>
                <form action="boton.php" method="POST">
                    <h1>
                        Datos de la pizza:
                        <?php
                            echo($fila['nombre']);
                        ?>
                    </h1>
                    <tr>
                        <th>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCf2vz1E0s1rJYyOMSMDIemGyDuGFQe7LhZA&usqp=CAU" alt="">
                        </th>
                        <th>
                            <h3>Datos de la pizza</h3>
                            <h3>
                            <?php
                                echo($fila['caracteristicas']."<br>");
                                echo("costo: $".$precio."<br>");
                                echo("<input type='text' value='$id_pizza' name='id_pizza_agregar' hidden>");
                                echo("<input type='text' value='$id_detalle' name='id_detalle_agregar' hidden>");
                                echo("<input type='text' value='$cantidad_pizza' name='cantidad_agregar' hidden>");
                                echo("<input type='text' value='$total' name='total_agregar' hidden>");
                                echo("<input type='text' value='com' name='tipo' hidden>");
                                echo("Complemento: ".$nombre_detalle_pizza."<br> ");
                                echo("precio complemento: $".$precio_detalle_pizza ."<br>");
                                echo("cantidad ordenada: ".$cantidad_pizza."<br>");
                                echo("Total: $".$total);
                            ?>
                            </h3>
                            <input type="submit" name="boton" value="Añadir a la orden">
                        </th>
                    </tr>
                </form>
            </table>
        </div>

        <?php
                        }
                    }
                }
            }else{
        ?>

        <div class="form-area">
            <table class="table">
                <?php
                    $nombre=$_POST['nombre'];
                    $precio=$_POST['precio'];
                    $caracteristicas=$_POST['caracteristicas'];
                    $query="SELECT * FROM pizza WHERE nombre LIKE '$nombre'";
                    $resultado=$mysqli->query($query);
                    if($resultado->num_rows > 0){  
                        $fila=$resultado->fetch_assoc();
                        $id_pizza=$fila['id_pizza'];
                        $precio=$fila['precio'];
                        $detalle="SELECT * FROM agregados_pizza WHERE id_entrada LIKE $id_pizza";
                        $resultado_detalle=$mysqli->query($detalle);
                ?>
                <form action="boton.php" method="POST">
                    <h1>
                        <?php
                            echo($fila['nombre']);
                        ?>
                    </h1>
                    <h3>
                        <?php
                            echo($fila['caracteristicas']."<br>");
                            echo("<input type='text' value='$id_pizza' name='id_pizza' hidden>");
                            echo("<input type='text' value='$precio' name='precio' hidden>");
                            echo("costo $".$precio);
                        ?>
                
                    </h3>
                    <tr>
                        <th>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCf2vz1E0s1rJYyOMSMDIemGyDuGFQe7LhZA&usqp=CAU" alt="">
                        </th>
                        <th>
                            <h3>Elige el complemento</h3>
                            <h4>Tradicional</h4>
                            <input type="radio"  value="tradicional" name="precio_detalle" checked="checked"/>
                            <?php
                                while($fila_detalle=$resultado_detalle->fetch_assoc()){
                                    $id_detalle=$fila_detalle['id_agregado_pizza'];
                                    $nombre_detalle=$fila_detalle['nombre_agregado_pizza'];
                                    $caracteristicas_detalle=$fila_detalle['caracterisitcas_agregado_pizza'];
                                    $precio_detalle=$fila_detalle['precio_agregado_pizza'];

                                    echo("<input type='text' value='$id_detalle' name='id_detalle' hidden>");
                            ?>
                            <p><?php echo($nombre_detalle)?></p>
                            <h4><?php echo($caracteristicas_detalle)?></h4>
                            <h5><?php echo("$".$precio_detalle."<br>")?></h5>
                            <?php
                                echo(" 
                                <input type='radio' id='$precio_detalle'value='$precio_detalle' name='precio_detalle'/>");
                            ?>
                            <!--<select name="" id="">
                                <option value="">
                                
                                </option>
                                <option value="">
                                Cual es el nombre de tu mama?
                                </option>
                                <option value="">
                                Cual es el nombre de tu escuela?
                                </option>
                                <option value="">
                                cual es el nombre de tu mascota?
                                </option>
                            </select>-->
                            <?php
                                }
                            ?>
                            <p>Cantidad</p>
                            <input type='number' value='1' name='cantidad'>
                            <input type="submit" name="boton" class="calcular" value="Calcular costo">
                            <!--
                            <input type="submit" name="boton" value="Añadir a la orden">-->
                        
                        </th>
                    </tr>
                </form>
            </table>
        </div>
        <?php
                    }
            }
        ?>
        
    </body>
</html>