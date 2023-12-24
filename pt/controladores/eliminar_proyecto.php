<?php 
	session_start();
	include '../config/db.php';

	$id = $_GET['n'];
	if( isset($_SESSION['id_user']) && $id){

		$conn    = BD_open();

		$sql = "DELETE FROM proyectos WHERE id=".$id;

		if ($conn->query($sql) === TRUE) {
		    echo "Record deleted successfully";
		} else {
		    echo "Error deleting record: " . $conn->error;
		}
		BD_close($conn);
	}


	
 ?>
<script type="text/javascript">
window.location="../proyectos.php?u=<?php echo $_SESSION['user_name']; ?>";
</script>