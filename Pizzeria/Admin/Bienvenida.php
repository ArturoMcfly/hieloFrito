<?php
include 'plantilla/header.php';
include ('../php/conexion.php');
$nombre=$_SESSION['usr'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>index admin</title>
        <link href="styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <link href="../icomoon/fonts/style.css" rel="stylesheet">
        <style>
        
            .table{
                color:#000000 !important;
                background:#ffffff !important;
                
                border-radius:15px;
                
            }
            
            .crear{
                background:#fff;
                padding:10px;
                color: 10157F;
                text-decoration: none !important;
                transition: .3s linear;
                border-radius:6px;

            }
            .crear:hover{
                background:#007BFF;
                color:#fff;

            }
            .boton{
                background:#fff;
                text-decoration: none !important;
                transition: .3s linear;
                border: 2px solid #fff;
                color:#007BFF;
            }
            .boton:hover{
                background:#007BFF;
                color:#fff;
                border:6px;
            }
            .icono{
                color:#007BFF;
            }
        </style>
    </head>
    <body style="background-image:url(https://www.gstatic.com/bfe/apps/website/img/h/87450465-pizza-1440.jpg);padding-top: 10rem;
        padding-bottom: calc(10rem - 4.5rem);
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: scroll;
        background-size: cover;" class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="Bienvenida.php">Hielo Frito</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                        <a class="btn btn-primary" href="../php/cerrarsesion.php" > Cerrar Sesion <span class="icon-exit">    </span> </a>        
            </div>
            <!-- Navbar-->
        </nav>

        <!-- Barra de Opciones -->
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                        
                            
                            <a class="nav-link" href="adminOrdenes/Ordenes.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Administracion de Ordenes
                            </a>
                            <a class="nav-link" href="adminPizzas/BienvenidaPizzas.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Administración de Pizzas
                            </a>
                            <a class="nav-link" href="adminPromos/Promos.php">
                              <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                              Administración de Promociones
                          </a>
                          <a class="nav-link" href="adminBebidas/Bebidas.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Administracion de Bebidas
                        </a>
                        <a class="nav-link" href="adminentradas/ListaEntradas.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Administracion de Entradas
                        </a>
                        <a class="nav-link" href="adminpostres/addpostres.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Administracion de Postres
                        </a>
                        <a class="nav-link" href="adminsalsas/ListaSalsa.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Administracion de Salsas
                        </a>
                           
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Admistrador</div>
                        Hielo Frito
                    </div>
                </nav>
            </div>

            <!-- Parte del centro -->
            <div id="layoutSidenav_content">
                <main >
                    <div class="container-fluid">
                        <h1 style="color: white; background: rgba(0, 0, 0, 0.692);" class="mt-4">Bienvenido <?php echo($nombre); ?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">¿Qué haremos el día de hoy?</li>
                        </ol>
                        <a href="adminUsuarios/CrearUsuario.php" class=" crear">Crear nuevo &nbsp;<span class="icon-plus"></span></a>

                        <a class=" btn btn-primary" href="fpdf/usupdf.php">Descargar archivo PDF &nbsp;<i class="fa fa-download"></i></a>
                        <p></p>
                        <?php
      $query="SELECT * FROM usuario";
      $resultado=$mysqli->query($query);
      if($resultado->num_rows > 0){
        
    ?>
        <table class="table">
            <tr>
                <th colspan=6>
                    <h1>Tabla usuarios</h1>
                </th>
                
            </tr>
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
                <th colspan=3>
                    numero
                </th>
            </tr>
            <?php
            while($fila=$resultado->fetch_assoc()){
                $id=$fila['id_usuario'];
                
            ?>
            <tr>
                <form action="adminUsuarios/editarBorrar.php" method="POST">

                
                    <th>
                        <?php
                            echo "$id<input type='text' value='$id' name='id' hidden>"; 
                            
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
                    <th >
                        <input type="submit" value="Editar" class="boton " name="boton">&nbsp;<span class="icon-pencil icono">
                        
                    </th>
                    <th>
                        <input type="submit" value="Borrar" class="boton "name="boton">&nbsp;<span class="icon-bin icono">
                        
                    </th>
                    <!--<th>
                        <input type="submit" value="Detalles" class="boton ">&nbsp;<span class="icon-stack icono">
                        
                    </th>-->
                </form>
            </tr>
            <?php
            }
            ?>

        </table>
        <?php
            }
            if(isset($_GET['err'])){
                echo " ".$_GET['err'];
                
            }
        ?>
                       
                       
                        </div>
                </main>
                    <footer class="py-4 bg-black  mt-auto">
                      <div class="container-fluid">
                          <div class="d-flex align-items-center justify-content-between small">
                              <div class="text-muted">Copyright &copy; Your Website 2020</div>
                              <div>
                                  <a href="#">Privacy Policy</a>
                                  &middot;
                                  <a href="#">Terms &amp; Conditions</a>
                              </div>
                          </div>
                      </div>
                  </footer>
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
            <script src="scripts.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
            <script src="chart-area-demo.js"></script>
            <script src="chart-bar-demo.js"></script>
            <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
            <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
            <script src="datatables-demo.js"></script>
        </body>
    </html>
    