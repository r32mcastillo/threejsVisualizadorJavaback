<?php include './config/db.php'; ?>
<?php include './componentes/header.php'; ?>
<?php include './componentes/nav.php'; ?>
<?php 
    $id_usuario = $_SESSION['id_user'];
    if(  ! isset($id_usuario)  )header ("Location: ./iniciar_sesion.php");
    $id_proyecto = $_GET['n'];
	$conn = BD_open();
    $row  = null;
	$sql  = "SELECT * FROM proyectos WHERE id = $id_proyecto ";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
	}
	BD_close($conn);
?>


<!-- container seccion -->
<div class="container">
    <div style="height:80px; width: 100%;"></div>
    <!-- ROW -->
    <div class="row">
        
    </div><!-- ./ ROW -->
    <!-- ROW -->
    <div class="row">
        

        <div class="col">

            <form action="./controladores/cambiar_texturas.php" method="post">
                <input type="hidden"  name="id_proyecto" value="<?php echo $_GET['n']?>">  
                
                <label for="textura_piso">URL de la textura para la base</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="textura_piso" 
                           name="textura_piso" aria-describedby="emailHelp" 
                           value="<?php echo $row['textura_piso']; ?>">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" onclick="limpiar_campo_texturas('textura_piso')">Limpiar</button>
                    </div>
                </div>
                
                
                <label for="textura_variable">URL de la textura para las variables</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="textura_variable" 
                           name="textura_variable" aria-describedby="emailHelp" 
                           value="<?php echo $row['textura_variable']; ?>">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" onclick="limpiar_campo_texturas('textura_variable')">Limpiar</button>
                    </div>
                </div>
                
                
                
                <label for="textura_metodo">URL de la textura para los  metodos</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="textura_metodo" 
                           name="textura_metodo" aria-describedby="emailHelp" 
                           value="<?php echo $row['textura_metodo']; ?>">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" onclick="limpiar_campo_texturas('textura_metodo')">Limpiar</button>
                    </div>
                </div>
                
                
                
                <label for="textura_libreria">URL de la textura para las librerias</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="textura_libreria" 
                           name="textura_libreria" aria-describedby="emailHelp" 
                           value="<?php echo $row['textura_libreria']; ?>">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" onclick="limpiar_campo_texturas('textura_libreria')">Limpiar</button>
                    </div>
                </div>
                
                
                
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
        
        
        
    </div><!-- ./ ROW -->
</div><!-- ./ container seccion -->

<script>
	function limpiar_campo_texturas(id){
        document.getElementById(id).value = "";
    }
</script>
<?php include './componentes/footer.php'?>