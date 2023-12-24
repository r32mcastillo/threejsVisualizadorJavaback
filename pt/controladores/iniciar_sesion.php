<?php 
	include '../config/db.php';



	$arr     = array(
		'ok' => true,
		'msn' => '',
		'usuario'=> ''
	);
	if($_POST['email'] != ''  &&  $_POST['pass'] != ''){
		$conn    = BD_open();

	    $sql = 'SELECT * FROM usuarios WHERE email = "'.$_POST['email'].'" && pass = "'.$_POST['pass'].'"';
	    $result = $conn->query($sql);

	    if ($result->num_rows > 0) {
	    	$row = $result->fetch_assoc();
	    	session_start();
	    	$_SESSION['id_user'] = $row["id"];
		    $_SESSION['user_name'] = $row['usuario'];
	    	$arr['usuario']  = $_SESSION['user_name'];
	    }else{

	    	$arr['ok']  = false;
	    	$arr['msn'] .= 'El nombre de usuario y/o contraseña son incorrectos.';
	    }



	    BD_close($conn);
	}else{
    	$arr['ok']  = false;
    	$arr['msn'] .= 'El nombre de usuario y/o contraseña son incorrectos.';
	}

	$json          = json_encode($arr,448);
	print_r($json);
 ?>