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
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="detalles/compra.php" style="color: aliceblue;">Lista</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="busca.php">Buscar orden</a></li>
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
            <p>La Pizzería Hilo Frito ofrece una gran variedad de pizzas para degustar el paladar
			</p>
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
            
          </div>
        </div>
        <div class="row">
        	<div class="col-md-6">
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/pizza-1.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Pizza con muzzarella</span></h3>
	        				<span class="price">$199.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Entre tantos gustos de pizza sin duda la Pizza con Muzzarella se lleva la medalla de oro</p>
	        			</div>
        			</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/pizza-2.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Pizza napolitana</span></h3>
	        				<span class="price">$185.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Y es que no hay mejor combinación que: masa, tomate, queso muzzarella, rodajas de tomate natural, ajo y perejil picado</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/pizza-3.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Pizza fugazzeta</span></h3>
	        				<span class="price">$195.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>se caracteriza principalmente por ser de masa esponjosa y crocante con abundante queso muzzarella con trozos finos de cebolla que le dan un toque único</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/pizza-4.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span> Pizza calabresa</span></h3>
	        				<span class="price">$200.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Pizza Calabresa en donde el protagonismo se encuentra en la longaniza calabresa o chorizo seco, es una pizza un poco picante pero deliciosa </p>
	        			</div>
	        		</div>
        		</div>
        	</div>

        	<div class="col-md-6">
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/pizza-5.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Pizza Cuatro estaciones</span></h3>
	        				<span class="price">$299.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>se dividen en secciones y por separado cada sabor. Esto se da comúnmente con las pizzas de gran tamaño, para así dividirlas en cuatro opciones</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/pizza-6.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Pizza de Pollo</span></h3>
	        				<span class="price">$200.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Esta pizza es tipo California, se ha hecho popular en variaciones como pollo barbecue.  

Esta opción puede servir al pollo en tiras o deshebrado, además, hay lugares donde se le agregan champiñones o aceitunas negras.</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/pizza-7.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Pizza Vegetariana</span></h3>
	        				<span class="price">$200.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Las variedades en ingredientes de esta pizza pueden ser el calabacín, las espinacas, la berenjena, entre otras opciones.</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/pizza-8.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Pizza Mexicana </span></h3>
	        				<span class="price">$250.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Los ingredientes característicos de este manjar de doble nacionalidad son: frijoles, chorizo y jalapeños; aunque en algunas partes también agregan trozos de jitomate y cebolla.</p>
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
		              				<i class="menu-img img mb-4" style="background-image: url(images/pizza-1.jpg);"></i>
									
		              				<div class="text">
		              					<h3>
											<a href="#">
												<?php
													echo($nombre_pizza7);
												?>
											</a>
										</h3>
		              					<p>
										 	<?php
												echo($caracteristicas_pizza7);
											?>
										</p>
		              					<p class="price">
											<span>
												<?php
													echo("$".$precio_pizza7);
												?>
											</span>
										</p>
		              					<p>
											<form action="detalles/editarPizza.php" method="post">
												<?php
													echo("<input type='text' value='$id_pizza7' name='id' hidden>");
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
								$query8_pizza="SELECT * FROM pizza WHERE nombre LIKE 'Pizza Caucasica'";
								$resultado8_pizza=$mysqli->query($query8_pizza);
								if($resultado8_pizza->num_rows > 0){
								  $fila8_pizza=$resultado8_pizza->fetch_assoc();
								  $id_pizza8=$fila8_pizza['id_pizza'];
								  $nombre_pizza8=$fila8_pizza['nombre'];
								  $precio_pizza8=$fila8_pizza['precio'];
								  $caracteristicas_pizza8=$fila8_pizza['caracteristicas'];  
							?>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<i class="menu-img img mb-4" style="background-image: url(images/pizza-2.jpg);"></i>
		              				<div class="text">
		              					<h3>
											<a href="#">
												<?php
													echo($nombre_pizza8);
												?>
											</a>
										</h3>
		              					<p>
											<?php
												echo($caracteristicas_pizza8);
											?>
										</p>
		              					<p class="price">
											<span>
												<?php
													echo("$".$precio_pizza8);
												?>
											</span>
										</p>
		              					<p>
										  	<form action="detalles/editarPizza.php" method="post">
												<?php
													echo("<input type='text' value='$id_pizza8' name='id' hidden>");
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
								$query9_pizza="SELECT * FROM pizza WHERE nombre LIKE 'Pizza alta Mar'";
								$resultado9_pizza=$mysqli->query($query9_pizza);
								if($resultado9_pizza->num_rows > 0){
								  $fila9_pizza=$resultado9_pizza->fetch_assoc();
								  $id_pizza9=$fila9_pizza['id_pizza'];
								  $nombre_pizza9=$fila9_pizza['nombre'];
								  $precio_pizza9=$fila9_pizza['precio'];
								  $caracteristicas_pizza9=$fila9_pizza['caracteristicas'];  
							?>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/pizza-3.jpg);"></a>
		              				<div class="text">
		              					<h3>
										  	<a href="#">
											  	<?php
													echo($nombre_pizza9);
												?>
											</a>
										</h3>
		              					<p>
										  	<?php
												echo($caracteristicas_pizza9);
											?>
										</p>
		              					<p class="price">
											<span>
												<?php
													echo("$".$precio_pizza9);
												?>
											</span>
										</p>
		              					<p>
										  	<form action="detalles/editarPizza.php" method="post">
												<?php
													echo("<input type='text' value='$id_pizza9' name='id' hidden>");
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
								
							?>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
		                <div class="row">
							<?php
								$query1_bebida="SELECT * FROM bebidas WHERE nombre LIKE 'Sprite 2lt.'";
								$resultado1_bebida=$mysqli->query($query1_bebida);
								if($resultado1_bebida->num_rows > 0){
								  $fila1_bebida=$resultado1_bebida->fetch_assoc();
								  $id_bebida1=$fila1_bebida['id_bebida'];
								  $nombre_bebida1=$fila1_bebida['nombre'];
								  $precio_bebida1=$fila1_bebida['precio'];
								  $caracteristicas_bebida1=$fila1_bebida['caracteristicas']; 
							?>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<i href="#" class="menu-img img mb-4" style="background-image: url(images/drink-1.jpg);"></i>
		              				<div class="text">
		              					<h3>
											<a href="#">
												<?php
													echo($nombre_bebida1);
												?>
											</a>
										</h3>
		              					<p>
										  	<?php
												echo($caracteristicas_bebida1);
											?>
										</p>
		              					<p class="price">
										  	<span>
											  	<?php
													echo("$".$precio_bebida1);
												?>
											</span>
										</p>
		              					<p>
										  	<form action="detalles/editarPizza.php" method="post">
												<?php
													echo("<input type='text' value='$id_bebida1' name='id' hidden>");
													echo("<input type='text' value='bebidas' name='tipo_producto' hidden>");
												
												?>
												<input type="submit" name="boton" class="ml-2 btn btn-white btn-outline-white" value="Ordena">
											</form>
										</p>
		              				</div>
		              			</div>
		              		</div>
							<?php
								}else{
									echo ("<h1>Bebida no disponible</h1>");
								}
								$query2_bebida="SELECT * FROM bebidas WHERE nombre LIKE 'Cocacola 2lt.'";
								$resultado2_bebida=$mysqli->query($query2_bebida);
								if($resultado2_bebida->num_rows > 0){
								  $fila2_bebida=$resultado2_bebida->fetch_assoc();
								  $id_bebida2=$fila2_bebida['id_bebida'];
								  $nombre_bebida2=$fila2_bebida['nombre'];
								  $precio_bebida2=$fila2_bebida['precio'];
								  $caracteristicas_bebida2=$fila2_bebida['caracteristicas']; 
							?>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/drink-2.jpg);"></a>
		              				<div class="text">
		              					<h3>
										  	<a href="#">
											  	<?php
													echo($nombre_bebida2);
												?>
											</a>
										</h3>
		              					<p>
										  	<?php
												echo($caracteristicas_bebida2);
											?>
										</p>
		              					<p class="price">
										  	<span>
											  	<?php
													echo("$".$precio_bebida2);
												?>
											</span>
										</p>
		              					<p>
										  	<form action="detalles/editarPizza.php" method="post">
												<?php
													echo("<input type='text' value='$id_bebida2' name='id' hidden>");
													echo("<input type='text' value='bebidas' name='tipo_producto' hidden>");
												
												?>
												<input type="submit" name="boton" class="ml-2 btn btn-white btn-outline-white" value="Ordena">
											</form>
										</p>
		              				</div>
		              			</div>
		              		</div>
							<?php
								}else{
									echo ("<h1>Bebida no disponible</h1>");
								}
								$query3_bebida="SELECT * FROM bebidas WHERE nombre LIKE 'Mundet 2lt'";
								$resultado3_bebida=$mysqli->query($query3_bebida);
								if($resultado3_bebida->num_rows > 0){
								  $fila3_bebida=$resultado3_bebida->fetch_assoc();
								  $id_bebida3=$fila3_bebida['id_bebida'];
								  $nombre_bebida3=$fila3_bebida['nombre'];
								  $precio_bebida3=$fila3_bebida['precio'];
								  $caracteristicas_bebida3=$fila3_bebida['caracteristicas']; 
							?>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/drink-3.jpg);"></a>
		              				<div class="text">
		              					<h3>
										  	<a href="#">
											  	<?php
													echo($nombre_bebida3);
												?>
											</a>
										</h3>
		              					<p>
										  	<?php
												echo($caracteristicas_bebida3);
											?>
										</p>
		              					<p class="price">
										  	<span>
											  	<?php
													echo("$".$precio_bebida3);
												?>
											</span>
										</p>
		              					<p>
										  	<form action="detalles/editarPizza.php" method="post">
												<?php
													echo("<input type='text' value='$id_bebida3' name='id' hidden>");
													echo("<input type='text' value='bebidas' name='tipo_producto' hidden>");
												
												?>
												<input type="submit" name="boton" class="ml-2 btn btn-white btn-outline-white" value="Ordena">
											</form>
										</p>
		              				</div>
		              			</div>
		              		</div>
							<?php
								}else{
									echo ("<h1>Bebida no disponible</h1>");
								}
							?>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
		                <div class="row">
							<?php
								$query1_postre="SELECT * FROM postres WHERE nombre LIKE 'Pastel de chocolate'";
								$resultado1_postre=$mysqli->query($query1_postre);
								if($resultado1_postre->num_rows > 0){
								  $fila1_postre=$resultado1_postre->fetch_assoc();
								  $id_postre1=$fila1_postre['id_postre'];
								  $nombre_postre1=$fila1_postre['nombre'];
								  $precio_postre1=$fila1_postre['precio'];
								  $caracteristicas_postre1=$fila1_postre['caracteristicas']; 
							?>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/postre-1.jpg);"></a>
		              				<div class="text">
		              					<h3>
										  	<?php
													echo($nombre_postre1);
											?>
										</h3>
		              					<p>
										  	<?php
												echo($caracteristicas_postre1);
											?>
										</p>
		              					<p class="price">
										  	<span>
											  	<?php
													echo("$".$precio_postre1);
												?>
											</span>
										</p>
		              					<p>
										  	<form action="detalles/editarPizza.php" method="post">
												<?php
													echo("<input type='text' value='$id_postre1' name='id' hidden>");
													echo("<input type='text' value='postres' name='tipo_producto' hidden>");
												
												?>
												<input type="submit" name="boton" class="ml-2 btn btn-white btn-outline-white" value="Ordena">
											</form>
										</p>
		              				</div>
		              			</div>
		              		</div>
							<?php
								}else{
									echo ("<h1>Postre no disponible</h1>");
								}
								$query2_postre="SELECT * FROM postres WHERE nombre LIKE 'Pay de Limon'";
								$resultado2_postre=$mysqli->query($query2_postre);
								if($resultado2_postre->num_rows > 0){
								  $fila2_postre=$resultado2_postre->fetch_assoc();
								  $id_postre2=$fila2_postre['id_postre'];
								  $nombre_postre2=$fila2_postre['nombre'];
								  $precio_postre2=$fila2_postre['precio'];
								  $caracteristicas_postre2=$fila2_postre['caracteristicas']; 
							?>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/postre-2.jpg);"></a>
		              				<div class="text">
		              					<h3>
										  	<?php
													echo($nombre_postre2);
											?>
										</h3>
		              					<p>
										  	<?php
												echo($caracteristicas_postre2);
											?>
										</p>
		              					<p class="price">
										  	<span>
											  	<?php
													echo("$".$precio_postre2);
												?>
											</span>
										</p>
		              					<p>
										  	<form action="detalles/editarPizza.php" method="post">
												<?php
													echo("<input type='text' value='$id_postre2' name='id' hidden>");
													echo("<input type='text' value='postres' name='tipo_producto' hidden>");
												
												?>
												<input type="submit" name="boton" class="ml-2 btn btn-white btn-outline-white" value="Ordena">
											</form>
										</p>
		              				</div>
		              			</div>
		              		</div>
							<?php
								}else{
									echo ("<h1>Postre no disponible</h1>");
								}
								$query3_postre="SELECT * FROM postres WHERE nombre LIKE 'Gelatina'";
								$resultado3_postre=$mysqli->query($query3_postre);
								if($resultado3_postre->num_rows > 0){
								  $fila3_postre=$resultado3_postre->fetch_assoc();
								  $id_postre3=$fila3_postre['id_postre'];
								  $nombre_postre3=$fila3_postre['nombre'];
								  $precio_postre3=$fila3_postre['precio'];
								  $caracteristicas_postre3=$fila3_postre['caracteristicas']; 
							?>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/postre-23jpg.jpg);"></a>
		              				<div class="text">
		              					<h3>
										  	<?php
												echo($nombre_postre3);
											?>
										</h3>
		              					<p>
										  	<?php
												echo($caracteristicas_postre3);
											?>
										</p>
		              					<p class="price">
										  	<span>
											  	<?php
													echo("$".$precio_postre3);
												?>
											</span>
										</p>
		              					<p>
										  	<form action="detalles/editarPizza.php" method="post">
												<?php
													echo("<input type='text' value='$id_postre3' name='id' hidden>");
													echo("<input type='text' value='postres' name='tipo_producto' hidden>");
												
												?>
												<input type="submit" name="boton" class="ml-2 btn btn-white btn-outline-white" value="Ordena">
											</form>
										</p>
		              				</div>
		              			</div>
		              		</div>
							<?php
								}else{
									echo ("<h1>Postre no disponible</h1>");
								}
							?>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
		                <div class="row">
							<?php
								$query1_salsa="SELECT * FROM salsas WHERE nombre LIKE 'Salsa habanera'";
								$resultado1_salsa=$mysqli->query($query1_salsa);
								if($resultado1_salsa->num_rows > 0){
								  $fila1_salsa=$resultado1_salsa->fetch_assoc();
								  $id_salsa1=$fila1_salsa['id_salsas'];
								  $nombre_salsa1=$fila1_salsa['nombre'];
								  $precio_salsa1=$fila1_salsa['precio'];
								  $caracteristicas_salsa1=$fila1_salsa['caracteristicas']; 
							?>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/salsa-1.jpg);"></a>
		              				<div class="text">
		              					<h3>
										  	<?php
												echo($nombre_salsa1);
											?>
										</h3>
		              					<p>
										  	<?php
												echo($caracteristicas_salsa1);
											?>
										</p>
		              					<p class="price">
										  	<span>
											  	<?php
													echo("$".$precio_salsa1);
												?>
											</span>
										</p>
		              					<p>
										  	<form action="detalles/editarPizza.php" method="post">
												<?php
													echo("<input type='text' value='$id_salsa1' name='id' hidden>");
													echo("<input type='text' value='salsas' name='tipo_producto' hidden>");
												
												?>
												<input type="submit" name="boton" class="ml-2 btn btn-white btn-outline-white" value="Ordena">
											</form>
										</p>
		              				</div>
		              			</div>
		              		</div>
							<?php
								}else{
									echo ("<h1>Salsa no disponible</h1>");
								}
								$query2_salsa="SELECT * FROM salsas WHERE nombre LIKE 'Salsa estilo BBQ'";
								$resultado2_salsa=$mysqli->query($query2_salsa);
								if($resultado2_salsa->num_rows > 0){
								  $fila2_salsa=$resultado2_salsa->fetch_assoc();
								  $id_salsa2=$fila2_salsa['id_salsas'];
								  $nombre_salsa2=$fila2_salsa['nombre'];
								  $precio_salsa2=$fila2_salsa['precio'];
								  $caracteristicas_salsa2=$fila2_salsa['caracteristicas'];
							
							?>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/salsa-2.jpg);"></a>
		              				<div class="text">
		              					<h3>
										  	<?php
												echo($nombre_salsa2);
											?>
										</h3>
		              					<p>
										  	<?php
												echo($caracteristicas_salsa2);
											?>
										</p>
		              					<p class="price">
										  	<span>
											  	<?php
													echo("$".$precio_salsa2);
												?>
											</span>
										</p>
		              					<p>
										  <form action="detalles/editarPizza.php" method="post">
												<?php
													echo("<input type='text' value='$id_salsa2' name='id' hidden>");
													echo("<input type='text' value='salsas' name='tipo_producto' hidden>");
												
												?>
												<input type="submit" name="boton" class="ml-2 btn btn-white btn-outline-white" value="Ordena">
											</form>
										</p>
		              				</div>
		              			</div>
		              		</div>
							<?php
								}else{
									echo ("<h1>Salsa no disponible</h1>");
								}
								$query3_salsa="SELECT * FROM salsas WHERE nombre LIKE 'Salsa Inglesa'";
								$resultado3_salsa=$mysqli->query($query3_salsa);
								if($resultado3_salsa->num_rows > 0){
								  $fila3_salsa=$resultado3_salsa->fetch_assoc();
								  $id_salsa3=$fila3_salsa['id_salsas'];
								  $nombre_salsa3=$fila3_salsa['nombre'];
								  $precio_salsa3=$fila3_salsa['precio'];
								  $caracteristicas_salsa3=$fila3_salsa['caracteristicas'];
							?>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(images/salsa-3.jpg);"></a>
		              				<div class="text">
		              					<h3>
										  <?php
												echo($nombre_salsa3);
											?>
										</h3>
		              					<p>
										  	<?php
												echo($caracteristicas_salsa3);
											?>
										</p>
		              					<p class="price">
										  	<span>
											  	<?php
													echo("$".$precio_salsa3);
												?>
											</span>
										</p>
		              					<p>
										  	<form action="detalles/editarPizza.php" method="post">
												<?php
													echo("<input type='text' value='$id_salsa3' name='id' hidden>");
													echo("<input type='text' value='salsas' name='tipo_producto' hidden>");
												
												?>
												<input type="submit" name="boton" class="ml-2 btn btn-white btn-outline-white" value="Ordena">
											</form>
										</p>
		              				</div>
		              			</div>
		              		</div>
							<?php
								}else{
									echo ("<h1>Salsa no disponible</h1>");
								}
							?>
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