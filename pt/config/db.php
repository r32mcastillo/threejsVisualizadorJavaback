<?php 
function BD_open(){

		$servername = "localhost";
		$username = "visualizador";
		$password = "visualizador_de_codigo";
		$dbname = "visualizador_de_codigo";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 

		/* cambiar el conjunto de caracteres a utf8 */
		#printf("Conjunto de caracteres inicial: %s\n", $conn->character_set_name());
		if (!$conn->set_charset("utf8")) {
		    #printf("Error cargando el conjunto de caracteres utf8: %s\n", $conn->error);
		    exit();
		} else {
		    #printf("Conjunto de caracteres actual: %s\n", $conn->character_set_name());
		}
		return $conn;
}
function BD_close($conn){

	$conn->close();
}
 ?>