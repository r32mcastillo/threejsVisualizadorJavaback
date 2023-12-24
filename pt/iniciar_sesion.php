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

                <form id="form_login" action="./controladores/iniciar_sesion.php" method="POST">
                    <div class="text-center mb-4">
                        <!--<img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">-->
                        <h1 class="h3 mb-3 font-weight-normal">Iniciar Sesión</h1>
                        <p>APLICACIÓN WEB PARA VISUALIZAR LA EJECUCIÓN DE PROGRAMAS EN JAVA.</p>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Correo electronico</label>
                        <input type="email" name="email" class="form-control" id="inputAddress" placeholder="Correo electronico" required>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Contraseña nueva</label>
                        <input type="password" name="pass" class="form-control" id="inputAddress2" placeholder="Contraseña nueva" required>
                    </div>
                    <div id="alert_registro"></div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar</button>
                <!--
                  <p class="mt-5 mb-3 text-muted text-center">
                      Al hacer clic en "Registrarse", acepta nuestros términos de servicio y declaración de privacidad. 
                      Ocasionalmente le enviaremos correos electrónicos relacionados con la cuenta.
                  </p>
              -->
                </form>
            </div>
        </div>
        <div class="card" style="width: 25rem; margin: auto; margin-top: 25px;">
            <div class="card-body" style="text-align: center;">
                ¿Eres nuevo aquí?
                <a href="./nuevo_usuario.php">
                    Crea una cuenta.
                </a>
            </div>
        </div>
        
    </div>
  </div>
</div>

<?php include './componentes/footer.php'?>



