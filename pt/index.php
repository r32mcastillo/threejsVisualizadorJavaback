<?php include './componentes/header.php'; ?>
<?php include './componentes/nav.php'; ?>


		<div class="jumbotron jumbotron-fluid" style="background: #fff">
			<div class="container">
                <div class="row">
                    <div class="col" >
                        <div>
            				<h1 class="display-5" style="text-align: center; position: absolute;top: 35%;">
            					APLICACIÓN PARA
    							VISUALIZAR LA EJECUCIÓN DE
    							PROGRAMAS EN JAVA
    						</h1>
                        </div>
                        
                    </div>
                    <div class="col " >
                        

                        <div class="card" style="width: 25rem; float: right; box-shadow: 5px 10px 8px #888888;">
                            <div class="card-body">
                              
                                <form id="form_registrarse" action="controladores/registrar.php" method="POST">
                                    <div class="text-center mb-4">
                                     <!--  
                                        <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
                                    -->
                                    
                                        <h1 class="h3 mb-3 font-weight-normal">Abre una cuenta</h1>
                                        <p>Es gratis y lo será siempre.</p>
                                    </div>
									<!--
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Nombre</label>
                                            <input type="text" class="form-control" id="inputEmail4" placeholder="Nombre" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Apellido</label>
                                            <input type="text" class="form-control" id="inputPassword4" placeholder="Apellido" required>
                                        </div>
                                    </div>
                                    -->

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

                                  <button class="btn btn-lg btn-primary btn-block" type="submit" id="registrarse_1">Registrate</button>
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
		</div>



        <div class="jumbotron jumbotron-fluid" style="background: #ccc">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 style="text-align: center; margin-bottom: 60px;">¿Qué es esto?</h1>
                        <p style="text-align: justify; font-size: 1.3em;">
                            Es un sistema de representación multimedia que ejemplifica el proceso de ejecución de un programa escrito en el lenguaje de programación Java.

                        </p>
                        <p style="text-align: justify; font-size: 1.3em;">

                            La herramienta web permite visualizar de forma gráfica los conceptos de variables, asignación de valores a variables, estructuras de control de flujo de programas, llamadas a funciones y las relaciones que existen entre estos elementos, aprovechando las nuevas tecnologías para la visualización de software.
                            
                        </p>
                        <br><br>
                        <img class="img-fluid" src="img/app.png" alt="">
                                 
                    </div>
                </div>
            </div>
        </div>



        <div class="jumbotron jumbotron-fluid" style="background: #fff">

            <h1 style="text-align: center; margin-bottom: 60px;">Versiones</h1>
            <div class="container">
                <div class="row">
                    
                  <div class="col-sm-6">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Versión 2</h5>
                        <hr>
                        <p class="card-text">
                        Esta versión del sistema permite visualizar variables, asignación de valores a variables, estructuras de control de flujo de programas (if, for) y llamadas a funciones.
                        </p>
                        <a href="v2/" class="btn btn-primary">Demo</a>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-sm-6">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Versión 3</h5>
                        <hr>
                          
<p class="badge badge-danger">Actualmente en desarrollo.</p>
                        
                        <p class="card-text">
Esta versión del sistema permite interactuar con el sitio web encargado de gestionar usuarios y almacenar proyectos.
También será capaz de identificar más elementos dentro del código fuente. 
  
                        </p>
                        <p>
                        
Por el momento no cuenta con la funcionalidad de “Animación”.  
                        </p>
                        <a href="<?php echo $routes['visualizador-v3'] ?>" class="btn btn-primary">Demo</a>
                      </div>
                    </div>
                  </div>
                  
                  
                </div><!--./ ROW-->
                <div class="row">
                    <div class="col-sm-6">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Versión 2-C</h5>
                        <hr>
                        <p class="card-text">
                        Esta version es para visualizar codigo en lenguaje C.
                        Esta versión del sistema permite visualizar variables, asignación de valores a variables, estructuras de control de flujo de programas (if, for) y llamadas a funciones.
                        </p>
                        <a href="v2-C/" class="btn btn-primary">Demo</a>
                      </div>
                    </div>
                  </div>
                </div><!--./ ROW-->
            </div>
        </div>

<?php include './componentes/footer.php'?>











