<?php 
	session_start();
	include '../config/db.php';
	
	$arr         = array('logueado'=>false);
	if(  isset($_GET['id_proyecto'])  &&  isset($_SESSION['id_user']) ){

		$id_proyecto = $_GET['id_proyecto'];
		$id_usuario  = $_SESSION['id_user'];

	    $arr['logueado']      = true;
    	$arr['user_name']     = $_SESSION['user_name'];
	    $arr['id_proyecto']   = $_GET['id_proyecto'];

		$conn    = BD_open();
	    $sql = "SELECT * FROM proyectos WHERE id = $id_proyecto && id_usuario = $id_usuario";
	    $result = $conn->query($sql);

	    if ($result->num_rows > 0) {
	    	$row = $result->fetch_assoc();
	    	$arr['permiso_edicion'] = true;
	    }
	    
	    BD_close($conn);
	}

	echo json_encode($arr);
 ?>