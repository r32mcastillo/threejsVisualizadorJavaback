<?php
	session_start();
	include '../config/db.php';

	// verificar  que elproyecto pertenesca al usuario que esta logueado 
	$id_usuario   = $_SESSION['id_user'];
	$id_proyecto  = $_POST['id_proyecto'];
    $url_piso     = $_POST['textura_piso'];
    $url_variable = $_POST['textura_variable'];
    $url_metodo   = $_POST['textura_metodo'];
    $url_libreria = $_POST['textura_libreria'];

	$conn = BD_open();
	$sql = "SELECT * FROM proyectos WHERE id = $id_proyecto and id_usuario = $id_usuario";

	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		//$row = $result->fetch_assoc();
		$sql = "UPDATE proyectos SET 
        textura_piso = '$url_piso', 
        textura_variable = '$url_variable', 
        textura_metodo = '$url_metodo', 
        textura_libreria = '$url_libreria'
        WHERE id = $id_proyecto";
		$conn->query($sql);
	}
	BD_close($conn);
?>
<script type="text/javascript">
window.location="../proyectos.php?u=<?php echo $_SESSION['user_name']; ?>";
</script>