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
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../pizzas.php">Pizzas</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../promosiones.php">Promociones</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="compra.php">Lista</a></li>  
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../login2.php">Iniciar Sesión</a></li>
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
                    
                    $tipo_producto=$_GET['tipo_producto'];
                    $tipo_id=$_GET['tipo_id'];
                    $tipo_producto_detalle=$_GET['tipo_producto_detalle'];
                    if($tipo_producto=="pizza"){
                        
                        $imagen="../images/Pizzas.jpeg";
                    }else if($tipo_producto=="postres"){
                        
                        $imagen="../images/Postres.jpeg";
                    }else if($tipo_producto=="bebidas"){
                        
                       
                        $imagen="../images/Bebidas.jpeg";
                    }else if($tipo_producto=="salsas"){
                        
                        
                        $imagen="../images/Salsas.jpeg";
                    }else if($tipo_producto=="promociones"){
                     
                        $imagen="../images/Bebidas.jpeg";
                    }else if($tipo_producto=="entradas"){
                        $imagen="../images/Entradas.jpeg";
                    }
        ?>
        <div class="form-area titulo">
            <table class="table">
                <?php
                    
                    $query="SELECT * FROM $tipo_producto WHERE $tipo_id LIKE '$id_regreso'";
                    $resultado=$mysqli->query($query);
                    if($resultado->num_rows > 0){
                        $fila=$resultado->fetch_assoc();
                        $id_pizza=$fila["$tipo_id"];
                        $precio=$fila['precio'];
                        
                ?>
                <form action="boton.php" method="POST">
                    <h1>
                        Datos de la producto:
                        <?php
                            echo($fila['nombre']);
                        ?>
                    </h1>
                    <tr>
                        <th>
                        <?php
                                echo("<img src='$imagen' alt=''>");
                            ?>
                        </th>
                        <th>
                            <h3>Datos del Producto</h3>
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
                                echo("<input type='text' value='$tipo_producto' name='tipo_producto' hidden>"); 
                                echo("<input type='text' value='$tipo_id' name='tipo_id' hidden>"); 
                                echo("<input type='text' value='$tipo_producto_detalle' name='tipo_producto_detalle' hidden>"); 
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

                    $tipo_producto=$_GET['tipo_producto'];
                    $tipo_id=$_GET['tipo_id'];
                    $tipo_producto_detalle=$_GET['tipo_producto_detalle'];
                    if($tipo_producto=="pizza"){
                        $detalle_id="id_agregado_pizza";
                        $detalle_nombre="nombre_agregado_pizza";
                        $detalle_caracteristicas="caracteristicas_agregado_pizza";
                        $detalle_precio="precio_agregado_pizza";
                        $imagen="../images/Pizzas.jpeg";
                    }else if($tipo_producto=="postres"){
                        $detalle_id="id_agregado_postre";
                        $detalle_nombre="nombre_agregado_postre";
                        $detalle_caracteristicas="caracteristica_agregado_postre";
                        $detalle_precio="precio_agregado_postre";
                        $imagen="../images/Postres.jpeg";
                    }else if($tipo_producto=="bebidas"){
                        
                        $detalle_id="id_agregado_bebidas";
                        $detalle_nombre="nombre_agregado_bebida";
                        $detalle_caracteristicas="caracteristica_agregado_bebida";
                        $detalle_precio="precio_agregado_bebida";
                        $imagen="../images/Bebidas.jpeg";
                    }else if($tipo_producto=="salsas"){
                        
                        $detalle_id="id_agregado_salsa";
                        $detalle_nombre="nombre_agregado_salsa";
                        $detalle_caracteristicas="caracteristica_agregado_salsa";
                        $detalle_precio="precio_agregado_salsa";
                        $imagen="../images/Salsas.jpeg";
                    }else if($tipo_producto=="promociones"){
                        
                        $detalle_id="id_agregado_promo";
                        $detalle_nombre="nombre_agregado_promo";
                        $detalle_caracteristicas="caracteristicas_agregado_promo";
                        $detalle_precio="precio_agregado_promo";
                        $imagen="../images/Bebidas.jpeg";
                    }else if($tipo_producto=="entradas"){
                        
                        $detalle_id="id_agregado_entradas";
                        $detalle_nombre="nombre_agregado_entrada";
                        $detalle_caracteristicas="caracteristica_agregado_entrada";
                        $detalle_precio="precio_agregado_entrada";
                        $imagen="../images/Entradas.jpeg";
                    }
                    
                   
        ?>
        <div class="form-area titulo">
            <table class="table">
                <?php
                    
                    $query="SELECT * FROM $tipo_producto WHERE $tipo_id LIKE '$id_regreso'";
                    $resultado=$mysqli->query($query);
                    if($resultado->num_rows > 0){
                        $fila=$resultado->fetch_assoc();
                        $id_pizza=$fila["$tipo_id"];
                        $precio=$fila['precio'];
                        $consulta="SELECT * FROM $tipo_producto_detalle WHERE $tipo_id LIKE $id_detalle";
                        $resultado_consulta=$mysqli->query($consulta);
                        if($resultado_consulta->num_rows > 0){

                            $fila_resultado=$resultado_consulta->fetch_assoc();
                            $nombre_detalle_pizza=$fila_resultado["$detalle_nombre"];
                            $precio_detalle_pizza=$fila_resultado["$detalle_precio"];
                            $nombre_detalle_pizza=$fila_resultado["$detalle_caracteristicas"];
                            
                ?>
                <form action="boton.php" method="POST">
                    <h1>
                        Datos de la Producto:
                        <?php
                            echo($fila['nombre']);
                        ?>
                    </h1>
                    <tr>
                        <th>
                        <?php
                                echo("<img src='$imagen' alt=''>");
                            ?>
                        </th>
                        <th>
                            <h3>Datos del producto</h3>
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
                                echo("<input type='text' value='$tipo_producto' name='tipo_producto' hidden>"); 
                                echo("<input type='text' value='$tipo_id' name='tipo_id' hidden>"); 
                                echo("<input type='text' value='$tipo_producto_detalle' name='tipo_producto_detalle' hidden>"); 
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
                    $id=$_POST['id'];
                    $tipo_producto=$_POST['tipo_producto'];
                    if($tipo_producto=="pizza"){
                        $tipo_producto_detalle="agregados_pizza";
                        $tipo_id="id_pizza";
                        echo("tabla: ".$tipo_producto."<br>");
                        echo("Sub-tabla: ".$tipo_producto_detalle."<br>");
                        echo("Id-tabla: ".$tipo_id."<br>");
                        $detalle_id="id_agregado_pizza";
                        $detalle_nombre="nombre_agregado_pizza";
                        $detalle_caracteristicas="caracteristicas_agregado_pizza";
                        $detalle_precio="precio_agregado_pizza";
                        $imagen="../images/Pizzas.jpeg";
                    }else if($tipo_producto=="postres"){
                        $tipo_producto_detalle="agregados_postres";
                        $tipo_id="id_postre";
                        echo("tabla: ".$tipo_producto."<br>");
                        echo("Sub-tabla: ".$tipo_producto_detalle."<br>");
                        echo("Id-tabla: ".$tipo_id."<br>");
                        $detalle_id="id_agregado_postre";
                        $detalle_nombre="nombre_agregado_postre";
                        $detalle_caracteristicas="caracteristica_agregado_postre";
                        $detalle_precio="precio_agregado_postre";
                        $imagen="../images/Postres.jpeg";
                    }else if($tipo_producto=="bebidas"){
                        $tipo_producto_detalle="agregados_bebidas";
                        $tipo_id="id_bebida";
                        echo("tabla: ".$tipo_producto."<br>");
                        echo("Sub-tabla: ".$tipo_producto_detalle."<br>");
                        echo("Id-tabla: ".$tipo_id."<br>");
                        $detalle_id="id_agregado_bebidas";
                        $detalle_nombre="nombre_agregado_bebida";
                        $detalle_caracteristicas="caracteristica_agregado_bebida";
                        $detalle_precio="precio_agregado_bebida";
                        $imagen="../images/Bebidas.jpeg";
                    }else if($tipo_producto=="salsas"){
                        $tipo_producto_detalle="agregados_salsas";
                        $tipo_id="id_salsas";
                        echo("tabla: ".$tipo_producto."<br>");
                        echo("Sub-tabla: ".$tipo_producto_detalle."<br>");
                        echo("Id-tabla: ".$tipo_id."<br>");
                        $detalle_id="id_agregado_salsa";
                        $detalle_nombre="nombre_agregado_salsa";
                        $detalle_caracteristicas="caracteristica_agregado_salsa";
                        $detalle_precio="precio_agregado_salsa";
                        $imagen="../images/Salsas.jpeg";
                    }else if($tipo_producto=="promociones"){
                        $tipo_producto_detalle="agregados_promociones";
                        $tipo_id="id_promociones";
                        echo("tabla: ".$tipo_producto."<br>");
                        echo("Sub-tabla: ".$tipo_producto_detalle."<br>");
                        echo("Id-tabla: ".$tipo_id."<br>");
                        $detalle_id="id_agregado_promo";
                        $detalle_nombre="nombre_agregado_promo";
                        $detalle_caracteristicas="caracteristicas_agregado_promo";
                        $detalle_precio="precio_agregado_promo";
                        $imagen="../images/Bebidas.jpeg";
                    }else if($tipo_producto=="entradas"){
                        $tipo_producto_detalle="agregados_entradas";
                        $tipo_id="id_entrada";
                        echo("tabla: ".$tipo_producto."<br>");
                        echo("Sub-tabla: ".$tipo_producto_detalle."<br>");
                        echo("Id-tabla: ".$tipo_id."<br>");
                        $detalle_id="id_agregado_entradas";
                        $detalle_nombre="nombre_agregado_entrada";
                        $detalle_caracteristicas="caracteristica_agregado_entrada";
                        $detalle_precio="precio_agregado_entrada";
                        $imagen="../images/Entradas.jpeg";
                    }
                    $query="SELECT * FROM $tipo_producto WHERE $tipo_id LIKE '$id'";
                    $resultado=$mysqli->query($query);
                    if($resultado->num_rows > 0){  
                        $fila=$resultado->fetch_assoc();
                        $id_pizza=$fila["$tipo_id"];
                        $precio=$fila['precio'];
                        $detalle="SELECT * FROM $tipo_producto_detalle WHERE $tipo_id LIKE $id_pizza";
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
                            echo("costo: $".$precio);
                        ?>
                
                    </h3>
                    <tr>
                        <th>
                            <?php
                                echo("<img src='$imagen' alt=''>");
                            ?>
                            
                        </th>
                        <th>
                            <h3>Elige el complemento</h3>
                            <h4>Tradicional</h4>
                            <input type="radio"  value="tradicional" name="precio_detalle" checked="checked"/>
                            <?php
                                while($fila_detalle=$resultado_detalle->fetch_assoc()){
                                    $id_detalle=$fila_detalle["$detalle_id"];
                                    $nombre_detalle=$fila_detalle["$detalle_nombre"];
                                    $caracteristicas_detalle=$fila_detalle["$detalle_caracteristicas"];
                                    $precio_detalle=$fila_detalle["$detalle_precio"];

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
                            <?php
                                echo("<input type='text' value='$tipo_producto' name='tipo_producto' hidden>"); 
                                echo("<input type='text' value='$tipo_id' name='tipo_id' hidden>"); 
                                echo("<input type='text' value='$tipo_producto_detalle' name='tipo_producto_detalle' hidden>"); 
                            ?>
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
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="../js/scripts.js"></script>
        
    </body>
</html>