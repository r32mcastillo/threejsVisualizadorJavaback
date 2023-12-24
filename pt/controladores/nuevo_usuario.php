<?php 
	include '../config/db.php';
	$arr     = array(
		'ok' => true,
		'msn' => ''
	);
	if($_POST['user'] != ''  &&  $_POST['email'] != ''  &&  $_POST['pass'] != ''){
		$conn    = BD_open();

	    $sql = 'SELECT * FROM usuarios WHERE usuario = "'.$_POST['user'].'"';
	    $result = $conn->query($sql);

	    if ($result->num_rows > 0) {
	    	$arr['ok']  = false;
	    	$arr['msn'] .= 'El nombre de usuario ya se encuentra en uso.';
	    }


	    $sql = 'SELECT * FROM usuarios WHERE email = "'.$_POST['email'].'"';
	    $result = $conn->query($sql);

	    if ($result->num_rows > 0) {
	    	$arr['ok']  = false;
	    	$arr['msn'] .= 'El correo electrónico ya se encuentra en uso.';
	    }

	    if($arr['ok']){
	    	 $sql = 'INSERT INTO usuarios ( usuario, email, pass, activo) VALUES ( \''.$_POST['user'].'\', \''.$_POST['email'].'\', \''.$_POST['pass'].'\', 1)';
	        if ($conn->query($sql) === TRUE) {
		    	$arr['msn'] = 'Felicidades ya posees tu cuenta personal.';

    			$last_id = $conn->insert_id;
		    	session_start();
		    	$_SESSION['id_user'] = $last_id;
		    	$_SESSION['user_name'] = $_POST['user'];
	        } else {
	        }
	        
	    }

	    BD_close($conn);
	}else{
		$arr['ok']  = false;
	}

	$json          = json_encode($arr,448);
	print_r($json);
 ?>