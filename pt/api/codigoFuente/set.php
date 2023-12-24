<?php 
	session_start();
	include '../../config/db.php';

	// verificar  que elproyecto pertenesca al usuario que esta logueado 
	$id_usuario   = $_SESSION['id_user'];
	$id_proyecto  = $_POST['id_proyecto'];
	$codigofuente = $_POST['codigo']; // Codigo fuente

	$conn = BD_open();
	$sql = "SELECT * FROM proyectos WHERE id = $id_proyecto and id_usuario = $id_usuario";

	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		//$row = $result->fetch_assoc();
		$sql = "UPDATE proyectos SET codigo = '$codigofuente' WHERE id = $id_proyecto";
		$conn->query($sql);
	}
	BD_close($conn);
 ?>