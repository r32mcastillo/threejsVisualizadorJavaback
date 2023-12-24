<?php 
	session_start();
	include '../config/db.php';
	include '../config/routes.php';
    $id_usuario = $_SESSION['id_user'];
    $proyecto_nombre = $_POST['nombre'];
    $proyecto_descripcion = $_POST['descripcion'];
    $proyecto_lenguaje = $_POST['lenguaje'];

    $sql = "INSERT INTO proyectos ( id_usuario, nombre, descripcion, codigo, lenguaje) VALUES ( '$id_usuario', '$proyecto_nombre', '$proyecto_descripcion', '', '$proyecto_lenguaje')";
    
	$conn    = BD_open();
    if ($conn->query($sql) === TRUE) {
		$last_id = $conn->insert_id;
    }
    BD_close($conn);
 ?>
 <script type="text/javascript">
window.location="../<?php echo $routes['visualizador-v3'] ?>?n=<?php echo $last_id ?>";
</script>