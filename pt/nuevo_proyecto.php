<?php include './componentes/header.php'; ?>
<?php include './componentes/nav.php'; ?>
<style>
    html, body{
        width: 100%;
        height: 100%;
    }
    .container, .row{
        height: 100%;
    }
</style>


<div class="container">
  <div class="row" >
    <div class="col align-self-center" >

        <div class="card" style="width: 25rem; margin: auto;">
            <div class="card-body">
                <form id="form_nuevo_projecto" action="./controladores/nuevo_projecto.php" method="POST">
                    <div class="text-center mb-4">
                        <h1 class="h3 mb-3 font-weight-normal">Nuevo Proyecto</h1>
                        <p>APLICACIÓN WEB PARA VISUALIZAR LA EJECUCIÓN DE PROGRAMAS EN JAVA.</p>
                    </div>

                    <div class="form-group">
                        <label for="inputAddress">Titulo de proyecto</label>
                        <input type="text" name="nombre" class="form-control" id="inputAddress" placeholder="titulo" required>
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="lenguaje">Example select</label>
                        <select class="form-control" id="lenguaje" name="lenguaje">
                            <option value="java">JAVA</option>
                            <option value="c">C</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputAddress2">Descripción</label>
                        <textarea class="form-control" id="inputAddress2" rows="3" name="descripcion"></textarea>
                    </div>
                    <div id="alert_registro"></div>

                    <button class="btn btn-lg btn-primary btn-block" type="button" onclick="cancelarnuevoproyecto('<?php  echo $_SESSION['user_name'];  ?>')">Cancelar</button>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Crear</button>
                </form>
            </div>
        </div>

    </div>
  </div>
</div>


<?php include './componentes/footer.php'?>

