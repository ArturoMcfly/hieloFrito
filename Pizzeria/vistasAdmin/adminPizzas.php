<?php
include 'plantilla/header.php';
include ('../php/conexion.php');
$nombre=$_SESSION['usr'];
?>
<h1>
            Bienvenido 
            <?php
            echo($nombre);
            ?>
        </h1>
        <a href="">Crear nuevo</a>
        <?php
      $query="SELECT * FROM pizza";
      $resultado=$mysqli->query($query);
      if($resultado->num_rows > 0){
        
    ?>
        <table class="table">
            <tr>
                <th>
                    id pizza
                </th>
                <th>
                    nombre
                </th>
                <th>
                    precio
                </th>
                <th>
                    caracteristicas
                </th>
            </tr>
            <?php
            while($fila=$resultado->fetch_assoc()){
            ?>
            <tr>
                <th>
                    <?php
                        echo($fila['id_pizza']);
                    ?>
                </th>
                <th>
                <?php
                        echo($fila['nombre']);
                    ?>
                </th>
                <th>
                <?php
                        echo($fila['precio']);
                    ?>
                </th>
                <th>
                <?php
                        echo($fila['caracteristicas']);
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
<?php
include 'plantilla/footer.php'
?>
