<?php 
	$task_id = strip_tags( $_POST['task_id'] );

	require("connect.php");

	mysqli_query("DELETE FROM todo WHERE id='$task_id'");
?>