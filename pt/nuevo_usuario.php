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

  <div class="row">
    <div class="col align-self-center" >

        <div class="card" style="width: 25rem; margin: auto;">
            <div class="card-body">

                <form id="form_registrarse" action="./controladores/nuevo_usuario.php" method="POST">
                    <div class="text-center mb-4">
                        <h1 class="h3 mb-3 font-weight-normal">Abre una cuenta</h1>
                        <p>Es gratis y lo será siempre.</p>
                    </div>

                    <div class="form-group">
                        <label for="nombreusuario">Nombre de usuario</label>
                        <input type="text" class="form-control" id="nombreusuario" name="user" placeholder="Nombre de usuario" required>
                    </div>
                    <div class="form-group">
                        <label for="correo_electronico">Correo electronico</label>
                        <input type="email" class="form-control" id="correo_electronico" name="email" placeholder="Correo electronico" required>
                    </div>
                    <div class="form-group">
                        <label for="contraseña">Contraseña nueva</label>
                        <input type="password" class="form-control" id="contraseña" name="pass" placeholder="Contraseña nueva" required>
                    </div>
                    <div id="alert_registro"></div>

                    <button class="btn btn-lg btn-primary btn-block" type="submit">Registrate</button>
                    <p class="mt-5 mb-3 text-muted text-center">
                        Al hacer clic en "Registrarse", acepta nuestros términos de servicio y declaración de privacidad. 
                        Ocasionalmente le enviaremos correos electrónicos relacionados con la cuenta.
                    </p>
                </form>

            </div>
        </div>

    </div>
  </div>
</div>


<?php include './componentes/footer.php'?>

