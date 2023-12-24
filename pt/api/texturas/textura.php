<?php
/*
header('Content-Type: image/png');
echo file_get_contents("../../usuarios/1/floor.png");
//*/
include '../../config/db.php';
if(  isset($_GET['id_proyecto']) && isset($_GET['textura'])  ){    
    $url_imagen  = "";
    $id_proyecto = $_GET['id_proyecto'];
    $conn        = BD_open();
	$sql         = "SELECT * FROM proyectos WHERE id = $id_proyecto ";
	$result      = $conn->query($sql);
    
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
        switch (   $_GET['textura']   ) {
            case 'floor':
                $url_imagen = trim($row['textura_piso']);
                break;
            case 'variable':
                $url_imagen = trim($row['textura_variable']);
                break;
            case 'metodo':
                $url_imagen = trim($row['textura_metodo']);
                break;
            case 'libreria':
                $url_imagen = trim($row['textura_libreria']);
                break;
        }
	}
	BD_close($conn);
    
	if(  $url_imagen != ""  ){
		require 'vendor/autoload.php';
		$client = new GuzzleHttp\Client();
		try{
            $res = $client->request('GET', $url_imagen);
        } catch (ClientException $e) {
        } catch (RequestException $e) {
        }
        $header = $res->getHeader('content-type');
        
		header('Content-Type: '.$header[0]);
		echo $res->getBody();
	}else{
		trigger_error("Imagen no encontrada.", E_USER_ERROR);
	}
}else{
	trigger_error("Imagen no encontrada.", E_USER_ERROR);
}
//*/
?>