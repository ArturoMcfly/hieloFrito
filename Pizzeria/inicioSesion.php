<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
    <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');
        body{
    margin: 0;
    padding: 0;
    background-image: url(images/pizzafondo.jpg) !important;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    font-family: 'Poppins',sans-serif
    ;
    background-attachment: fixed;
}
.form-area{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 400px;
    height: 500px;
    box-sizing: border-box;
    background: rgba(0,0,0,0.5);
    padding: 40px;
}
h3{
    margin: 0;
    padding: 0;
    font-weight: bold;
    color: #ffffff;
}
.form-area p{
    margin: 0;
    padding: 0;
    font-weight: bold;
    color: #ffffff;
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
    background-color: #e66767;
    cursor: pointer;
    border-radius: 20px;
    transition: .3s linear;
}
.form-area input[type=submit]:hover{
    background-color: transparent;
    color: #ffffff;
    border: 2px solid #e66767;

}
.form-area a{
    color: #ffffff;
    text-decoration: none;
    font-size: 14px;
    font-weight: bold;
    transition: .3s linear;
    
    

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
    </style>
      <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav" style="background:#0000009b;">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index.php">Hilo Frito</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="pizzas.php">Pizzas</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger " href="promosiones.php">Promociones</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Bebidas.php">Bebidas</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="pedidos.php">Pedidos</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <div class="form-area">
        <h3>Inicio de session</h3>
        <form action="php/login.php" method="post">
            <p>Correo</p>
            <input type="text" name="user" id="" placeholder="Ingresa tu correo" required="required">
            <p>Contraseña</p>
            <input type="password" name="pass" id="" placeholder="Ingresa la contraseña" required="required">
            <p>No de empleado</p>
            <input type="number" name="num" id="" placeholder="Ingresa tu correo" required="required">
           
            

            <input type="submit" value="Ingresa">
            <a href="a">olvidaste contraseña?</a>
        </form>
    </div>
    <?php
        if(isset($_GET['err'])){
            echo " ".$_GET['err'];
            
        }
    ?>
</body>
</html>