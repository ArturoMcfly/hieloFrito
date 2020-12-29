<?php
include('../php/conexion.php');


session_start();
?>
<!DOCTYPE html>
<html lang="es-mx">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Hielo Frito Pedidos</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css.css" rel="stylesheet" />
    </head>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');
      :root {
        --input-padding-x: 1.5rem;
        --input-padding-y: 0.75rem;
      }

      .login,
      .image {
        min-height: 100vh;
      }

      .bg-image {
        background-image: url('https://cdn.forbes.com.mx/2019/09/Pizza-Napolitana.jpg');
        background-size: cover;
        background-position: center;
      }

      .login-heading {
        font-weight: 300;
      }

      .btn-login {
        font-size: 0.9rem;
        letter-spacing: 0.05rem;
        padding: 0.75rem 1rem;
        border-radius: 2rem;
      }

      .form-label-group {
        position: relative;
        margin-bottom: 1rem;
      }

      .form-label-group>input,
      .form-label-group>label {
        padding: var(--input-padding-y) var(--input-padding-x);
        height: auto;
        border-radius: 2rem;
      }

      .form-label-group>label {
        position: absolute;
        top: 0;
        left: 0;
        display: block;
        width: 100%;
        margin-bottom: 0;
        /* Override default `<label>` margin */
        line-height: 1.5;
        color: #495057;
        cursor: text;
        /* Match the input under the label */
        border: 1px solid transparent;
        border-radius: .25rem;
        transition: all .1s ease-in-out;
      }

      .form-label-group input::-webkit-input-placeholder {
        color: transparent;
      }

      .form-label-group input:-ms-input-placeholder {
        color: transparent;
      }

      .form-label-group input::-ms-input-placeholder {
        color: transparent;
      }

      .form-label-group input::-moz-placeholder {
        color: transparent;
      }

      .form-label-group input::placeholder {
        color: transparent;
      }

      .form-label-group input:not(:placeholder-shown) {
        padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
        padding-bottom: calc(var(--input-padding-y) / 3);
      }

      .form-label-group input:not(:placeholder-shown)~label {
        padding-top: calc(var(--input-padding-y) / 3);
        padding-bottom: calc(var(--input-padding-y) / 3);
        font-size: 12px;
        color: #777;
      }

      /* Fallback for Edge
      -------------------------------------------------- */

      @supports (-ms-ime-align: auto) {
        .form-label-group>label {
          display: none;
        }
        .form-label-group input::-ms-input-placeholder {
          color: #777;
        }
      }

      /* Fallback for IE
      -------------------------------------------------- */

      @media all and (-ms-high-contrast: none),
      (-ms-high-contrast: active) {
        .form-label-group>label {
          display: none;
        }
        .form-label-group input:-ms-input-placeholder {
          color: #777;
        }
      }
      .texto{
          color:#fff;
          font-family: 'Poppins',sans-serif;
      }
      .espacio{
          padding-top:30px;
      }
    </style>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="../index.php">Hilo Frito</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../pizzas.php">Pizzas</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../promosiones.php">Promociones</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../Bebidas.php">Bebidas</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../pedidos.php">Pedidos</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../login2.php">Iniciar Sesión</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php
        if(isset($_SESSION['com'])){
        
        $id_orden=$_SESSION['com'];
        echo("".$id_orden);
        if(isset($_GET['tipo'])){
          $tipo=$_GET['tipo'];
          if($tipo=='tradicional'){
              $id=$_GET['id_compra'];
              $cantidad=$_GET['cantidad_compra'];
              $total=$_GET['total_compra'];
              $consulta_pizza="SELECT * FROM `pizza` WHERE id_pizza='".$id."'";
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
                            '".$cantidad."',
                            '".$total."')";
                    $resultado_detalles_completos=$mysqli->query($insert_detalle);
                    if($resultado_detalles_completos){
                        echo("exitoso");
                    }else{
                        echo("fallido");
                    }
          }else{
              $id=$_GET['id_compra'];
              $cantidad=$_GET['cantidad_compra'];
              $id_detalle=$_GET['id_detalle'];
              $total=$_GET['total_compra'];
              $consulta_pizza="SELECT * FROM `pizza` WHERE id_pizza='".$id."'";
              $resultado_busqueda_pizza=$mysqli->query($consulta_pizza);
              $fila_pizza=$resultado_busqueda_pizza->fetch_assoc();
                  $nombre_pizza=$fila_pizza['nombre'];
                  $precio_pizza=$fila_pizza['precio'];

              $consulta_detalle="SELECT * FROM `agregados_pizza` WHERE id_agregado_pizza='".$id_detalle."'";
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
                      '".$cantidad."',
                      '".$total."')";
              $resultado_detalles_completos=$mysqli->query($insert_detalle);
              if($resultado_detalles_completos){
                  echo("exitoso");
              }else{
                  echo("fallido");
              }
          }
        }
        
        $consulta="SELECT * FROM `ordenes` WHERE id_orden='".$id_orden."'";
        $resultado_busqueda=$mysqli->query($consulta);
        if($resultado_busqueda->num_rows > 0){
          $fila=$resultado_busqueda->fetch_assoc();
          $nombre_cliente=$fila['nombre'];
          $telefono_cliente=$fila['telefono'];
          $direccion_cliente=$fila['direccion'];
        ?>
        <h3 style="padding-top:50px">Datos de la orden</h3>
        <?php
          echo("<h4> Nombre: ".$nombre_cliente."</h4>");
          echo("<h4> Telefono: ".$telefono_cliente."</h4>");
          echo("<h4> Direccion: ".$direccion_cliente."</h4>");
          $consulta_detalles="SELECT * FROM `detalle_orden` WHERE id_orden='".$id_orden."'";
          $resultado_busqueda_detalles=$mysqli->query($consulta_detalles);
          if($resultado_busqueda_detalles->num_rows > 0){

        ?>
         <table class="table" >
                <tr>
                    <th>nombre</th>
                    <th>Complementos</th>
                    <th>Cantidad</th>
                    <th colspan=3>
                        Sub-total
                    </th >
                </tr>
                <?php
                      while($fila=$resultado_busqueda_detalles->fetch_assoc()){
                        $nombre_complemento=$fila['nombre'];
                        $com_complemento=$fila['complementos'];
                        $cantidad_complemento=$fila['cantidad'];
                        $total_complemento=$fila['Total'];
                    ?>
                <tr>
                    
                    <th>
                        <?php
                          echo($nombre_complemento);
                        ?>
                    </th>
                    <th>
                        <?php
                          echo($com_complemento);
                        ?>
                    </th>
                    <th>
                        <?php
                          echo($cantidad_complemento);
                        ?>
                    </th>
                    <th>
                        <?php
                          echo($total_complemento);
                        ?>
                    </th>
                    <th>
                        <a href="">Editar</a>
                    </th>
                    <th>
                        <a href="">Borrar</a>
                    </th>
                    
                </tr>
                <?php
                      }
                    ?>
        
        </table>
        
        <?php
                      
          }else{
            echo("<h1>Desea agregar algo a la orden?</h1>");
          }
          }else{
            echo("<h1>No hay orden</h1>");
          }
          ?>
          <br>
          <a href="../pizzas.php">Pizzas</a>
          <br>
          <a href="../promosiones.php">Promociones</a>
          <br>
          <a href="../php/plantilla/cerrarsession.php">Terminar compra</a>
          <?php
        }else{
          
        ?>

        <!-- Masthead-->
        <div class="container-fluid ">
            <div class="row no-gutter">
              <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
              <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-9 col-lg-8 mx-auto espacio">
                        <h3 class="login-heading mb-4 texto">Bienvenido</h3>
                        <p class="texto">Crea la orden e ingresa los datos para poder comprar</p>
                        <form action="operacion.php" method="POST">
                            <div class="form-label-group">
                                <input type="text" id="inputNombre" name="nombre" class="form-control" placeholder="Nombre" required autofocus>
                                <label for="inputNombre">Nombre</label>
                              </div>
                              <div class="form-label-group">
                                <input type="number" id="inputTelefono" name="telefono" class="form-control" placeholder="Telefono" required autofocus>
                                <label for="inputTelefono">Telefono</label>
                              </div>
                          <div class="form-label-group">
                            <input type="text" id="inputDireccion" name="Direccion" class="form-control" placeholder="Direccion" required autofocus>
                            <label for="inputDireccion">Direccion</label>
                          </div>
                          <input type='text' value='0' name='total_inicio' hidden>
                          <input type='text' value='2020-12-23 10:00:00' name='fecha_inicio' hidden>
                          <input type='text' value='2020-12-23 12:00:00' name='fecha_final' hidden>
                          <input type='text' value='iniciada' name="estado" hidden>
                          <!--
                          <select  class="form-label-group form-control" name="ciudad">
                          
                        <option value="1">Hawahiana</option>
                        <option value="2">Camarones </option>
                        <option value="3">Carnes Frias</option>
                        <option value="4">Mexicana</option>
                        <option value="4">Habanera</option>
                    
                          </select>-->
                          <?php
                              if(isset($_GET['tipo'])){
                                $tipo=$_GET['tipo'];
                                if($tipo=='tradicional'){
                                    $id=$_GET['id_compra'];
                                    $cantidad=$_GET['cantidad_compra'];
                                    $total=$_GET['total_compra'];
                                    echo("<input type='text' value='$tipo' name='tipos' hidden>");
                                    echo("<input type='text' value='$id' name='id_pizza_agregar' hidden>");
                                    echo("<input type='text' value='$cantidad' name='cantidad_agregar' hidden>");
                                    echo("<input type='text' value='$total' name='total_agregar' hidden>");
                                }else{
                                    $id=$_GET['id_compra'];
                                    $cantidad=$_GET['cantidad_compra'];
                                    $id_detalle=$_GET['id_detalle'];
                                    $total=$_GET['total_compra'];
                                    echo("<input type='text' value='$tipo' name='tipos' hidden>");
                                    echo("<input type='text' value='$id' name='id_pizza_agregar' hidden>");
                                    echo("<input type='text' value='$cantidad' name='cantidad_agregar' hidden>");
                                    echo("<input type='text' value='$id_detalle' name='id_detalle_agregar' hidden>");
                                    echo("<input type='text' value='$total' name='total_agregar' hidden>");
                                }
                              }
                                
                            ?>
                          
                          <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Crear orden</button>
                          
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <?php
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