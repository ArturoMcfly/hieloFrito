<?php

?>
<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hielo Frito Compras</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css.css" rel="stylesheet">
</head>
<body id="page-top">
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav" style="background:#0000009b;">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index.php">Hilo Frito</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
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

    
    <div class="form-area">
        <h2>
            Datos de orden
        </h2>
        <br>
        <form action="php/login.php" method="post">
            <p>
             Nombre
            </p>
            
            <input type="text" name="user" placeholder="Ingresa el Usuario">
            <p>Telefono</p>
            <input type="number" name="user" placeholder="Ingresa el Usuario">
            
            <p>Dirección</p>
            <input type="text" name="pass" placeholder="Ingresa la contraseña">
            
            <p>Total </p>
            <input type="date" name="pass" placeholder="Ingresa la contraseña">
            <p>Fecha </p>
            <input type="date" name="pass" placeholder="Ingresa la contraseña">
            
            <p>Fecha salida </p>
            <input type="datetime" name="pass" placeholder="Ingresa la contraseña">
            <br>
            <input type="submit" value="Ingresa">



        </form>

   </div>
   <table class="table">
        <tr>
            <th>nombre</th>
            <th>Complementos</th>
            <th>Cantidad</th>
            <th>
                Sub-total
            </th>
        </tr>
        <tr>
            <th>

            </th>
            <th>

            </th>
            <th>

            </th>
            <th>

            </th>
            <th>
                <a href="">Editar</a>
            </th>
            <th>
                <a href="">Borrar</a>
            </th>
        </tr>
   
   </table>

</body>
</html>