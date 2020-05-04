<?php require_once("includes/connection.php");?>
<?php require_once("includes/functions.php");?>
<?php
  if(isset($_GET['id'])) {
	$exam_id = check_input($_GET['id']);
	
	$query = "SELECT * FROM tblquestions WHERE exam_nameID = $exam_id";
	$result = $connection->query($query);
	confirm_query($result,$connection);
	$data = array();
	while($row = mysqli_fetch_assoc($result)) {
		$data[] = $row;
	}
	
	
	echo json_encode($data);#parse array into json format      
  }