<?php
include('php/conexion.php');
date_default_timezone_set("America/Mexico_City");

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
        <link href="css.css" rel="stylesheet" />
        <link href="icomoon/fonts/style.css" rel="stylesheet">
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
      .table{
        
        background:#fff;
        padding:100px, !important;
        
      }
      .boton-final{
        background:#fff;
        border-radius:6px;
        border: 1px solid #cccccc;
        padding:10px;
        color:#FF0000;
        text-decoration:none !important;

        transition: 0.3s;
        
        
      }
      .boton-final:hover{
        background:#FF0000;
        color:#fff;
        border: 1px solid #fff;
      }
      .boton-final-compra{
        background:#fff;
        border-radius:6px;
        border: 1px solid #cccccc;
        padding:10px;
        color:#22BD3C;
        text-decoration:none !important;

        transition: 0.3s;
        
        
      }
      .boton-final-compra:hover{
        background:#22BD3C;
        color:#fff;
        border: 1px solid #fff;
      }
      .table{
        padding-top:100px !important;
      }
    </style>
    <body id="page-top" style="background: url(https://img.chilango.com/2019/05/latozza-pizza.jpg);">
        <!-- Navigation-->
        <nav style="background: rgba(0, 0, 0, 0.651);" class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="index.php">Hilo Frito</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="pizzas.php">Pizzas</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="promosiones.php">Promociones</a></li>
                        
                        
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="login2.php">Iniciar Sesión</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php
            if(isset($_GET['err1'])){
              $resultado1=$_GET['err1'];
              
              if($resultado1=="1"){
                $nombre=$_GET['nombre'];
                $total=$_GET['total'];
                $consulta="SELECT * FROM `ordenes` WHERE nombre='".$nombre."' AND total='".$total."'";
              }else if($resultado1=="2"){
                $nombre=$_GET['nombre'];
                $consulta="SELECT * FROM `ordenes` WHERE nombre='".$nombre."'";
              }else if($resultado1=="3"){
                $total=$_GET['total'];
                $consulta="SELECT * FROM `ordenes` WHERE total='".$total."'";
              }
              $resultado_busqueda=$mysqli->query($consulta);
              if($resultado_busqueda->num_rows > 0){
        ?>
        <br>
        <br>
        <br>
        <br>
        <br>

        <table class="table">
          <thead>
            <th colspan=5>
              <h3>Resultados de busqueda</h3>
            </th>
          </thead>
          <tr>
            <th>Numero de ticket</th>
            <th>nombre</th>
            <th>total</th>
            <th>Fecha y hora</th>
          </tr> 
        <?php
                
                while($fila=$resultado_busqueda->fetch_assoc()){
                  
                  $id_orden=$fila['id_orden'];
                  $nombre_cliente=$fila['nombre'];
                  $total_cliente=$fila['total'];
                  $fecha_cliente=$fila['fecha_hora_llegada'];
                
        ?>
          <tr>
            
            <th>
              <?php
                echo("".$id_orden);
              ?>
              
            </th>
            <th>
              <?php
                echo("".$nombre_cliente);
              ?>
            </th>
            <th>
              <?php
                echo("$".$total_cliente);
              ?>
            </th>
            <th>
              <?php
                echo("".$fecha_cliente);
              ?>
            </th>
            <th>
              <form action="Admin/fpdf/tikect.php" method="GET">
                <?php
                echo("<input type='text' value='$id_orden' name='id' hidden>");
                
                ?>
                <input type="submit" name="boton" class="boton-final" value="Imprimir ticket">&nbsp;<span class="icon-file-text icono"></span>  
              </form>
            </th>

            
          </tr>       

        <?php
                }
        ?>
        </table>
        <?php

                
              }else{
                  echo("no exitoso");
              }
              
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
                        <p class="texto">Rastrea aqui tu ordens Por nombre o total de efectivo</p>
                        <form action="busqueda/operacion.php" method="POST">
                            <div class="form-label-group">
                                <input type="text" id="inputNombre" name="nombre" class="form-control" placeholder="Nombre" >
                                <label for="inputNombre">Nombre</label>
                              </div>
                              <div class="form-label-group">
                                <input type="number" id="inputTotal" name="total" class="form-control" placeholder="Total" >
                                <label for="inputTotal">Total</label>
                              </div>
                          <div class="form-label-group">
                            
                          </div>
                          
                          
                          
                          <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Buscar <span class="icon-search"></span></button>
                          
                        </form>

                        <?php
                            if(isset($_GET['err'])){
                                $resultado=$_GET['err'];
                                if($resultado=="1"){
                                    echo("<h3 class='login-heading mb-4 texto'>la venta no existe</h3>");
                                }
                            }
                        ?>
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
        <script src="js/scripts.js"></script>

    </body>
</html>