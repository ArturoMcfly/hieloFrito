<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Login / Registro</title>
	<link rel="stylesheet" href="css/estilo.css">


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
	<style>
		body {
			background: url(images/pizzafondo.jpg) !important;
		}

		.tarjeta {
			background: #0000009b !important;
		}
	</style>


</head>


<body>
	<body>
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

	<body class="login-body">
		<div class="row">
			<div class=" input-cart col s12 m10 push-m1 z-depth-2 grey lighten-5 ">
				<div class="col s12 m5 login ">
					<h4 class="center">Ingresar</h4>
					<br>
					<form action="check.php" method="post" autocomplete="off">
						<div class="row">
							<div class="input-field">
								<input type="text" id="user" name="username" class="validate" required="required">
								<label for="user">Nombre de Usuario</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field">
								<input type="password" id="pass" name="password" class="validate" required="required">
								<label for="pass">Contraseña</label>
							</div>
						</div>
						<div class="row">

							<div class="col s6">
								<button type="submit" name="login"
									class="btn waves-effect waves-light blue right">Ingresar</button>
							</div>
						</div>
					</form>
				</div>
				<!-- registrarse -->
				<div class="col s12 m7 signup">
					<div class="signupForm">
						<h4 class="center">Registrarse</h4>
						<br>
						<form action="regCheck.php" name="signup" method="post" autocomplete="off">
							<div class="row">
								<div class="input-field col s12 m6">
									<input type="text" id="name-picked" name="namepicked" class="validate"
										required="required">
									<label for="name-picked">Nombre de Usuario</label>
								</div>
								<div class="input-field col s12 m6">
									<input type="password" id="pass-picked" name="passpicked" class="validate"
										required="required">
									<label for="pass-picked">Contraseña</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field email">
									<div class="col s12">
										<input type="text" id="email" name="email" class="validate" required="required">
										<label for="email">Correo</label>
									</div>
								</div>
							</div>
						</form>
						<div class="row">
							<button type="submit" name="btn-signup"
								class="btn blue right waves-effect waves-light">Registrarse</button>
						</div>
					</div>
					<div class="signup-toggle center">
						<h4 class="center"> ¿ Aun no tienes cuenta ? <a href="#!">Registrar</a></h4>
					</div>
				</div>
				<div class="col s12">
					<br>
					<div class="legal center">
					</div>
					<div class="legal center">
						<div class="col s12 m7 right">
							<p class="grey-text policy center">By signing up, you agree on our <a href="#!">Privacy
									Policy</a> and <a href="#!">Terms of Use</a> including <a href="#!">Cookie Use</a>.
							</p>
						</div>
						<div class="col s12 m5">
							<p class="center grey-text" style="font-size: 14px;"> <a
									class="main-title red-text">Hilofrito</a></p>
						</div>
					</div>

				</div>
			</div>
		</div>

		<script src="https://code.jquery.com/jquery-1.12.4.min.js"
			integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
		<script src="asset/js/init.js"></script>
		<script src="js/index.js"></script>
	</body>

	</html>

	