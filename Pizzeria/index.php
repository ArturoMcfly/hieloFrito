<?php
include('php/conexion.php');
?>
<!DOCTYPE html>
<html lang="es-en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>El Hilo Frito</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="index.php">Hilo Frito</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                      <li class="nav-item"><a class="nav-link js-scroll-trigger" href="pizzas.php">Pizzas</a></li>
                      <li class="nav-item"><a class="nav-link js-scroll-trigger" href="promosiones.php">Promociones</a></li>
                      <li class="nav-item"><a class="nav-link js-scroll-trigger" href="detalles/compra.php">Lista</a></li>  
                      <li class="nav-item"><a class="nav-link js-scroll-trigger" href="login2.php">Iniciar Sesión</a></li>
                      <li class="nav-item"><a class="nav-link js-scroll-trigger" href="busca.php">Buscar orden</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-uppercase text-white font-weight-bold">Las mejores pizzas de todo México</h1>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5">Los mejores sasones encontrados en las mas detallaas pizzas</p>             
                    </div>
                </div>
            </div>
        </header>
        <!-- Page Content -->
        <div class="container">
          <h1 style="text-align: center; color: white;" class="my-4">Elije tu pizza</h1>
          <!-- Marketing Icons Section -->
          <div class="row">
        <?php
          $query1="SELECT * FROM pizza WHERE nombre LIKE 'Hawaiana'";
          $resultado1=$mysqli->query($query1);
          if($resultado1->num_rows > 0){
            $fila1=$resultado1->fetch_assoc();
            $id_pizza1=$fila1['id_pizza'];
            $nombre_pizza1=$fila1['nombre'];
            $precio_pizza1=$fila1['precio'];
            $caracteristicas_pizza1=$fila1['caracteristicas'];
        ?>
      
        <div class="col-lg-4 mb-4">
          <div class="card h-100" >
            <h4 class="card-header" style="color: white;">
              <?php
              echo($fila1['nombre']);
              ?>
            </h4>
            <div class="card-body" style="margin-bottom:10px border-radius:20px;">
              <p class="card-text" style="text-align: center; color: rgb(255, 255, 255); background: rgba(128, 0, 0, 0.575);">
                <strong style="color: orangered;">Ingredientes:</strong> 
                <br>
                <?php
                  echo($nombre_pizza1);
                ?>
                <br>
                <strong style="color: rgb(59, 185, 0);">Precio</strong>  
                <br> 
                <?php
                  echo("$".$fila1['precio']);
                ?> 
                <br>
                <strong style="color: #DFF408;">Ingredientes</strong>  
                <br> 
                <?php
                  echo("".$caracteristicas_pizza1);
                ?> 
                <br>
                <img style="margin-bottom:20px; border-radius:6px" width="310" height="200" src="https://cdn1.cocina-familiar.com/recetas/pizza-hawaiana-con-masa-casera.JPG" alt="">  
              </p>
            </div>
            <div class="card-footer">
              <form action="detalles/editarPizza.php" method="post">
                <?php
                  echo("<input type='text' value='$id_pizza1' name='id' hidden>");
                  echo("<input type='text' value='pizza' name='tipo_producto' hidden>");
                ?>
                <input type="submit" name="boton" class="btn btn-primary" value="Prepara a tu gusto">
              </form>
            
              
      
            </div>
          </div>
        </div>
      
        <?php
          }else{
            echo ("<h1>Pizza no disponible</h1>");
          }
          $query2="SELECT * FROM pizza WHERE nombre LIKE 'Peperoni'";
          $resultado2=$mysqli->query($query2);
          if($resultado2->num_rows > 0){
            $fila2=$resultado2->fetch_assoc();
            $id_pizza2=$fila2['id_pizza'];
            $nombre_pizza2=$fila2['nombre'];
            $precio_pizza2=$fila2['precio'];
            $caracteristicas_pizza2=$fila2['caracteristicas'];

        ?>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header" style="color: white;">
            
              <?php
                echo($fila2['nombre']);
          
              ?>
            </h4>
            <div class="card-body">
              <p class="card-text" style="text-align: center; color: rgb(255, 255, 255); background: rgba(128, 0, 0, 0.575);"><strong style="color: orangered;">Detalles:</strong> 
                <br>
                <?php
                  echo($nombre_pizza2);
                ?> 
                <br> 
                <strong style="color:rgb(59, 185, 0);">Precio</strong>  
                <br> 
                <?php
                  echo("$".$precio_pizza2);
                ?>
                <br>
                
                <strong style="color: #DFF408;">Ingredientes</strong>  
                <br> 
                <?php
                  echo("".$caracteristicas_pizza2);
                ?> 
                <br> 
                <img style="margin-bottom:20px; border-radius:6px" width="310" height="200" src="https://italianissimo.mx/wp-content/uploads/2014/04/photodune-5347516-traditional-pizza-and-ingredients-xs1.jpg" alt="">  
              </p>
            </div>
            <div class="card-footer">
              <form action="detalles/editarPizza.php" method="post">
                <?php
                  echo("<input type='text' value='$id_pizza2' name='id' hidden>");
                  echo("<input type='text' value='pizza' name='tipo_producto' hidden>");
                ?>
                <input type="submit" name="boton" class="btn btn-primary" value="Prepara a tu gusto">
              </form>
            </div>
          </div>
        </div>
        <?php
          }else{
            echo ("<h1>Pizza no disponible</h1>");
          }
          $query3="SELECT * FROM pizza WHERE nombre LIKE 'Cuatro quesos'";
          $resultado3=$mysqli->query($query3);
          if($resultado3->num_rows > 0){
            $fila3=$resultado3->fetch_assoc();
            $id_pizza3=$fila3['id_pizza'];
            $nombre_pizza3=$fila3['nombre'];
            $precio_pizza3=$fila3['precio'];
            $caracteristicas_pizza3=$fila3['caracteristicas'];
        ?>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header" style="color: white;">
              <?php
                echo($nombre_pizza3);
          
              ?>
            </h4>
            <div class="card-body">
              <p class="card-text" style="background: rgba(128, 0, 0, 0.575); text-align: center; color: rgb(255, 255, 255);" >
                <strong style="color: orangered;">Detalles:</strong>  
                <br>
                <?php
                  echo($nombre_pizza3);
                ?>
                <br>
                <strong style="color:rgb(59, 185, 0);">Precio</strong> 
                <br>
                <?php
                  echo("$".$precio_pizza3);
                ?>
                <br>
                <strong style="color: #DFF408;">Ingredientes</strong>  
                <br> 
                <?php
                  echo("".$caracteristicas_pizza3);
                ?> 
                <br><img style="margin-bottom:20px; border-radius:6px" width="310" height="200" src="https://vod-hogarmania.atresmedia.com/cocinatis/images/images01/2019/04/11/5caf542f1f4daa0001932466/1239x697.jpg" alt="">    
              </p>
            </div>
            <div class="card-footer">
              <form action="detalles/editarPizza.php" method="post">
                <?php
                  echo("<input type='text' value='$id_pizza3' name='id' hidden>");
                  echo("<input type='text' value='pizza' name='tipo_producto' hidden>");
                ?>
                <input type="submit" name="boton" class="btn btn-primary" value="Prepara a tu gusto">
              </form>
            </div>
          </div>
        </div>
        <?php
          }else{
            echo ("<h1>Pizza no disponible</h1>");
          }
        ?>
      </div>
      <!-- /.row -->
        </div>  
        <!-- /.row -->
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="scripts.js"></script>
    </body>
</html>
