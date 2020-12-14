<?php
include 'plantilla/header.php';
include ('../php/conexion.php');
$nombre=$_SESSION['usr'];
?>

<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css.css" rel="stylesheet" />
        <style>
        h1{
            margin-top:70px;
        }
        .table{
            color:#000 !important;
            background:#fff !important;
        }
        </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="index.php">Hilo Frito</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="adminPromociones.php">Promociones</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="adminPizzas.php">Pizzas</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="adminBebidas.php">Bebidas</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="adminEntradas.php">Entradas</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="AdminPostres.php">Postres</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../php/cerrarsesion.php">Cerrar sesion</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <h1>
            Bienvenido 
            <?php
            echo($nombre);
            ?>
        </h1>
        <a href="">Crear nuevo</a>
        <?php
      $query="SELECT * FROM usuario";
      $resultado=$mysqli->query($query);
      if($resultado->num_rows > 0){
        
    ?>
        <table class="table">
            <tr>
                <th>
                    id usuario
                </th>
                <th>
                    nombre
                </th>
                <th>
                    contraseñas
                </th>
                <th>
                    numero
                </th>
            </tr>
            <?php
            while($fila=$resultado->fetch_assoc()){
            ?>
            <tr>
                <th>
                    <?php
                        echo($fila['id_usuario']);
                    ?>
                </th>
                <th>
                <?php
                        echo($fila['nombre_usuario']);
                    ?>
                </th>
                <th>
                <?php
                        echo($fila['contrasenia_usuario']);
                    ?>
                </th>
                <th>
                <?php
                        echo($fila['no_empleado']);
                    ?>
                </th>
                <th>
                    <a href="">editar</a>
                </th>
                <th>
                    <a href="">borrar</a>
                </th>
            </tr>
            <?php
            }
            ?>

        </table>
        <?php
            }
        ?>

</body>
</html>