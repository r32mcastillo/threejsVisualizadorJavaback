<?php include './config/db.php'; ?>
<?php include './componentes/header.php'; ?>
<?php include './componentes/nav.php'; ?>

<style>
    .card{
        margin-bottom: 20px;
    }
    nav{
        margin-bottom: 50px;
    }
</style>
<!-- container seccion -->
<div class="container">

    <!-- ROW -->
    <div class="row">
        <?php 
            $sql = "";

            if(isset($_GET['u'])){
                $sql = 'SELECT usuarios.usuario, proyectos.nombre, proyectos.descripcion, proyectos.id_usuario, proyectos.id as id_proyecto, proyectos.lenguaje
                FROM usuarios INNER JOIN proyectos ON usuarios.id = proyectos.id_usuario WHERE usuario = "'.$_GET['u'].'"';
            }else{
                $sql = 'SELECT usuarios.usuario, proyectos.nombre, proyectos.descripcion, proyectos.id_usuario, proyectos.id as id_proyecto, proyectos.lenguaje
                FROM usuarios INNER JOIN proyectos ON usuarios.id = proyectos.id_usuario ';
            }
            $conn    = BD_open();
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
        ?>
                        <div class="col-sm-12 col-md-6 col-lg-4">

                            <div class="card">
                                <h5 class="card-header"><?php echo $row['usuario']." / ".$row['nombre']; ?></h5>
                                <div class="card-body">
                                    <p class="card-text">Lenguaje: <?php echo $row['lenguaje']; ?></p>
                                    <p class="card-text"><?php echo $row['descripcion']; ?></p>
                                    <?php if($row['lenguaje'] == 'java'){?>
                                    <a href="<?php echo $routes['visualizador-v3'].'?n='.$row['id_proyecto'] ?>" class="btn btn-info">Abrir con V3</a>
                                    <a href="v2/index.html?n=<?php echo $row['id_proyecto'] ?>" class="btn btn-info">Abrir con V2</a>
                                    <?php }else if($row['lenguaje'] == 'c'){ ?>
                                    <a href="v2-C/index.html?n=<?php echo $row['id_proyecto'] ?>" class="btn btn-info">Abrir con V2-C</a>
                                    <?php } ?>
                                    <?php if( isset($_SESSION['id_user']) && $_SESSION['user_name'] == $row['usuario']){ ?>
                                    <div class="btn-group">
                                      <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-cogs"></i>
                                      </button>
                                      <div class="dropdown-menu dropdown-menu-right">
                                        <a href="./cambiar_texturas.php?n=<?php echo $row['id_proyecto'] ?>" class="dropdown-item">
                                            Cambiar Texturas
                                        </a>
                                        <hr>
                                        <a href="./controladores/eliminar_proyecto.php?n=<?php echo $row['id_proyecto'] ?>" class="dropdown-item">Eliminar</a>
                                      </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>

                        </div>
            <?php


                        //echo "<pre>";
                        //print_r($row);
                    }
                }


                BD_close($conn);


         ?>

    </div>
    <!-- ./ ROW -->



</div>
<!-- ./ container seccion -->

<?php include './componentes/footer.php'?>