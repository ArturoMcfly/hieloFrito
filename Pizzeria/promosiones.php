<?php
	include('php/conexion.php');
?>
<!DOCTYPE html>
<html lang="es-en">
  <head>
    <title>Promociones</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index.php"  style="color: aliceblue;">Hilo Frio</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="pizzas.php" style="color: aliceblue;">Pizzas</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#promociones" style="color: aliceblue;">Promociones</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#dosxuno" style="color: aliceblue;">2x1</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#Extras" style="color: aliceblue;">Extras</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="pedidos.php" style="color: aliceblue;">Pedidos</a></li>
                </ul>
            </div>
        </div>
    </nav>
  
    <!-- END nav -->

    
		<section class="ftco-section" id="promociones">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Promociones del dia</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
    	</div>
	
    	<div class="container-wrap">
    		<div class="row no-gutters d-flex">
				<?php
					$query1_pizza="SELECT * FROM pizza WHERE nombre LIKE 'Pizza Italiana'";
					$resultado1_pizza=$mysqli->query($query1_pizza);
					if($resultado1_pizza->num_rows > 0){
					  $fila1_pizza=$resultado1_pizza->fetch_assoc();
					  $id_pizza1=$fila1_pizza['id_pizza'];
					  $nombre_pizza1=$fila1_pizza['nombre'];
					  $precio_pizza1=$fila1_pizza['precio'];
					  $caracteristicas_pizza1=$fila1_pizza['caracteristicas'];
				
				?>
    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img" style="background-image: url(images/pizza-1.jpg);"></a>
    					<div class="text p-4">
    						<h3>
								<?php
									echo($nombre_pizza1);
								?>
							</h3>
    						<p>
								<?php
									echo($caracteristicas_pizza1);
								?>
								
							</p>
    						<p class="price">
								<span>
									<?php
										echo("$".$precio_pizza1);
									?>
								</span> 
								<form action="detalles/editarPizza.php" method="post">
									<?php
										echo("<input type='text' value='$id_pizza1' name='id' hidden>");
										echo("<input type='text' value='pizza' name='tipo_producto' hidden>");
									
									?>
									<input type="submit" name="boton" class="ml-2 btn btn-white btn-outline-white" value="Ordena">
								</form>
								
							</p>
    					</div>
    				</div>
    			</div>
				<?php
					}else{
						echo ("<h1>Pizza no disponible</h1>");
					}
					$query2_pizza="SELECT * FROM pizza WHERE nombre LIKE 'Pizza Griega'";
					$resultado2_pizza=$mysqli->query($query2_pizza);
					if($resultado2_pizza->num_rows > 0){
					  $fila2_pizza=$resultado2_pizza->fetch_assoc();
					  $id_pizza2=$fila2_pizza['id_pizza'];
					  $nombre_pizza2=$fila2_pizza['nombre'];
					  $precio_pizza2=$fila2_pizza['precio'];
					  $caracteristicas_pizza2=$fila2_pizza['caracteristicas'];
				?>
    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img" style="background-image: url(images/pizza-2.jpg);"></a>
    					<div class="text p-4">
    						<h3>
								<?php
									echo($nombre_pizza2);
								?>
							</h3>
    						<p>
								<?php
									echo($caracteristicas_pizza2);
								?>
							</p>
    						<p class="price">
								<span>
									<?php
										echo("$".$precio_pizza2);
									?>
								</span> 
								<form action="detalles/editarPizza.php" method="post">
									<?php
										echo("<input type='text' value='$id_pizza2' name='id' hidden>");
										echo("<input type='text' value='pizza' name='tipo_producto' hidden>");
									
									?>
									<input type="submit" name="boton" class="ml-2 btn btn-white btn-outline-white" value="Ordena">
								</form>
							
							</p>
    					</div>
    				</div>
    			</div>
				<?php
					}else{
						echo ("<h1>Pizza no disponible</h1>");
					}
					$query3_pizza="SELECT * FROM pizza WHERE nombre LIKE 'Pizza Caucasica'";
					$resultado3_pizza=$mysqli->query($query3_pizza);
					if($resultado3_pizza->num_rows > 0){
					  $fila3_pizza=$resultado3_pizza->fetch_assoc();
					  $id_pizza3=$fila3_pizza['id_pizza'];
					  $nombre_pizza3=$fila3_pizza['nombre'];
					  $precio_pizza3=$fila3_pizza['precio'];
					  $caracteristicas_pizza3=$fila3_pizza['caracteristicas'];
				?>
    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img" style="background-image: url(images/pizza-3.jpg);"></a>
    					<div class="text p-4">
    						<h3>
								<?php
									echo($nombre_pizza3);
								?>
							</h3>
    						<p>
								<?php
									echo($caracteristicas_pizza3);
								?>
							</p>
    						<p class="price">
								<span>
									<?php
										echo("$".$precio_pizza3);
									?>
								</span>
								<form action="detalles/editarPizza.php" method="post">
									<?php
										echo("<input type='text' value='$id_pizza3' name='id' hidden>");
										echo("<input type='text' value='pizza' name='tipo_producto' hidden>");
									
									?>
									<input type="submit" name="boton" class="ml-2 btn btn-white btn-outline-white" value="Ordena">
								</form> 
							</p>
    					</div>
    				</div>
    			</div>
				<?php
					}else{
						echo ("<h1>Pizza no disponible</h1>");
					}
					$query4_pizza="SELECT * FROM pizza WHERE nombre LIKE 'Pizza estilo Italiana'";
					$resultado4_pizza=$mysqli->query($query4_pizza);
					if($resultado4_pizza->num_rows > 0){
					  $fila4_pizza=$resultado4_pizza->fetch_assoc();
					  $id_pizza4=$fila4_pizza['id_pizza'];
					  $nombre_pizza4=$fila4_pizza['nombre'];
					  $precio_pizza4=$fila4_pizza['precio'];
					  $caracteristicas_pizza4=$fila4_pizza['caracteristicas'];
				?>
    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img order-lg-last" style="background-image: url(images/pizza-4.jpg);"></a>
    					<div class="text p-4">
    						<h3>
								<?php
									echo($nombre_pizza4);
								?>
							</h3>
    						<p>
								<?php
									echo($caracteristicas_pizza4);
								?>
							</p>
    						<p class="price">
								<span>
									<?php
										echo("$".$precio_pizza4);
									?>
								</span> 
								<form action="detalles/editarPizza.php" method="post">
									<?php
										echo("<input type='text' value='$id_pizza4' name='id' hidden>");
										echo("<input type='text' value='pizza' name='tipo_producto' hidden>");
									
									?>
									<input type="submit" name="boton" class="ml-2 btn btn-white btn-outline-white" value="Ordena">
								</form> 
								
							</p>
    					</div>
    				</div>
    			</div>
				<?php
					}else{
						echo ("<h1>Pizza no disponible</h1>");
					}
					$query5_pizza="SELECT * FROM pizza WHERE nombre LIKE 'Pizza alta Mar'";
					$resultado5_pizza=$mysqli->query($query5_pizza);
					if($resultado5_pizza->num_rows > 0){
					  $fila5_pizza=$resultado5_pizza->fetch_assoc();
					  $id_pizza5=$fila5_pizza['id_pizza'];
					  $nombre_pizza5=$fila5_pizza['nombre'];
					  $precio_pizza5=$fila5_pizza['precio'];
					  $caracteristicas_pizza5=$fila5_pizza['caracteristicas'];
				?>
    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img order-lg-last" style="background-image: url(images/pizza-5.jpg);"></a>
    					<div class="text p-4">
    						<h3>
								<?php
									echo($nombre_pizza5);
								?>
							</h3>
    						<p>
								<?php
									echo($caracteristicas_pizza5);
								?>
							</p>
    						<p class="price">
								<span>
									<?php
										echo("$".$precio_pizza5);
									?>
								</span> 
								<form action="detalles/editarPizza.php" method="post">
									<?php
										echo("<input type='text' value='$id_pizza5' name='id' hidden>");
										echo("<input type='text' value='pizza' name='tipo_producto' hidden>");
									
									?>
									<input type="submit" name="boton" class="ml-2 btn btn-white btn-outline-white" value="Ordena">
								</form> 
							</p>
    					</div>
    				</div>
    			</div>
				<?php
					}else{
						echo ("<h1>Pizza no disponible</h1>");
					}
					$query6_pizza="SELECT * FROM pizza WHERE nombre LIKE 'Carnes frias'";
					$resultado6_pizza=$mysqli->query($query6_pizza);
					if($resultado6_pizza->num_rows > 0){
					  $fila6_pizza=$resultado6_pizza->fetch_assoc();
					  $id_pizza6=$fila6_pizza['id_pizza'];
					  $nombre_pizza6=$fila6_pizza['nombre'];
					  $precio_pizza6=$fila6_pizza['precio'];
					  $caracteristicas_pizza6=$fila6_pizza['caracteristicas'];
				?>
    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img order-lg-last" style="background-image: url(images/pizza-6.jpg);"></a>
    					<div class="text p-4">
    						<h3>
								<?php
									echo($nombre_pizza6);
								?>
							</h3>
    						<p>
								<?php
									echo($caracteristicas_pizza6);
								?>
							</p>
    						<p class="price">
								<span>
									<?php
										echo("$".$precio_pizza6);
									?>
								</span> 
								<form action="detalles/editarPizza.php" method="post">
									<?php
										echo("<input type='text' value='$id_pizza6' name='id' hidden>");
										echo("<input type='text' value='pizza' name='tipo_producto' hidden>");
									
									?>
									<input type="submit" name="boton" class="ml-2 btn btn-white btn-outline-white" value="Ordena">
								</form> 
							</p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
		<?php
			}else{
				echo ("<h1>Pizza no disponible</h1>");
			}
		?>
    	<div class="container" id="dosxuno">
    		<div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Promociones del 2x1</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-6">
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/pizza-1.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Italian Pizza</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
        			</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/pizza-2.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Hawaiian Pizza</span></h3>
	        				<span class="price">$29.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/pizza-3.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Greek Pizza</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/pizza-4.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Bacon Crispy Thins</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        	</div>

        	<div class="col-md-6">
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/pizza-5.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Hawaiian Special</span></h3>
	        				<span class="price">$49.91</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/pizza-6.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Ultimate Overload</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/pizza-7.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Bacon Pizza</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/pizza-8.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Ham &amp; Pineapple</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        	</div>
        </div>
    	</div>
    </section>

    <section class="ftco-menu" id="Extras"> 
        <h2 class="mb-4">Productos extra</h2>
    	<div class="container-fluid">
    		<div class="row d-md-flex">
               
	    		<div class="col-lg-4 ftco-animate img f-menu-img mb-5 mb-md-0" style="background-image: url(images/about.jpg);">
	    		</div>
	    		<div class="col-lg-8 ftco-animate p-md-5">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		              <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Pizza</a>

		              <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Bebidas</a>

		              <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Postres</a>

		              <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Salsas</a>
		            </div>
		          </div>
		          <div class="col-md-12 d-flex align-items-center">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">

		              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
		              	<div class="row">
							<?php
								$query7_pizza="SELECT * FROM pizza WHERE nombre LIKE 'Pizza estilo Italiana'";
								$resultado7_pizza=$mysqli->query($query7_pizza);
								if($resultado7_pizza->num_rows > 0){
								  $fila7_pizza=$resultado7_pizza->fetch_assoc();
								  $id_pizza7=$fila7_pizza['id_pizza'];
								  $nombre_pizza7=$fila7_pizza['nombre'];
								  $precio_pizza7=$fila7_pizza['precio'];
								  $caracteristicas_pizza7=$fila7_pizza['caracteristicas'];  
							?>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/pizza-1.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Pizza estilo Italaiana</a></h3>
		              					<p>Pizza hecha en piedra con especias carne queso y orilla de queso </p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
							<?php
								}else{
									echo ("<h1>Pizza no disponible</h1>");
								}
							
							?>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/pizza-2.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Pizza Mañanera</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/pizza-3.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Pizza alta Mar</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
		                <div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/drink-1.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Sprite 2lt.</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/drink-2.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Cocacola 2lt.</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/drink-3.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Mundet 2lt</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
		                <div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/postre-1.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Pastel de choccolate</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/postre-2.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Pay de Limon</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/postre-23jpg.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Gelatina</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
		                <div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/salsa-1.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Salsa habanera</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/salsa-2.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Salsa estilo BBQ</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/salsa-3.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Salsa Inglesa</a></h3>
		              					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
		              					<p class="price"><span>$2.90</span></p>
		              					<p><a href="#" class="btn btn-white btn-outline-white">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
    	</div>
    </section>

   <!-- Footer -->
   <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Hilo Frio 2020</p>
    </div>
    <!-- /.container -->
  </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>