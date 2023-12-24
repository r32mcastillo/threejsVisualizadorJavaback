<?php 
	include '../../config/db.php';

    $arr         = array('status'=>false);

    if(  isset($_GET['id'])  ){
    	$conn    = BD_open();

	    $sql = 'SELECT * FROM proyectos WHERE id = '.$_GET['id'];
	    //$sql = 'SELECT * FROM proyectos ';
	    
	    $result = $conn->query($sql);

	    if ($result->num_rows > 0) {
	        while($row = $result->fetch_assoc()) {
	        		$arr['status'] = true;
	        		$arr['codigo'] = $row['codigo'];

	        }
	    }

	    BD_close($conn);
    }
	echo json_encode($arr);
 ?>