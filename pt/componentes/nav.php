<?php 
    include './config/routes.php';
    session_start();
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="./index.php">MG</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">

			<li class="nav-item active">
				<a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="./proyectos.php">Explorar</a>
			</li>
	
		</ul>
		<!--
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
		</form>
		-->

        
        
        <?php 
            if(isset($_SESSION['id_user']) && $_SESSION['id_user'] > 0){
        ?>
                <ul class="navbar-nav my-2 my-sm-0 mr-sm-2">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php 
                                echo $_SESSION['user_name'];
                            ?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="./proyectos.php?u=<?php echo $_SESSION['user_name']; ?>">Mis Proyectos</a>
                            <a class="dropdown-item" href="./nuevo_proyecto.php">Nuevo Proyecto</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="./cerrar_sesion.php">Cerrar Sesión</a>
                        </div>
                    </li>
                </ul>
        
        <?php
            }else{
        ?>        
                <a href="./nuevo_usuario.php">
                    <button class="btn btn-outline-success my-2 my-sm-0 mr-sm-2" type="button">Registrarte</button>
                </a>
                <a href="./iniciar_sesion.php">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="button">Iniciar Sesión</button>
                </a>
        <?php
            }
        ?>

        
	</div>
</nav>