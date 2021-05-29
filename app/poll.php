<?php

//poll.php

include('database_connection.php');

if(isset($_POST["poll_option"]))
{
	$query = "
	INSERT INTO tbl_poll 
	(selected_poll) VALUES (:selected_poll)
	";
	$data = array(
		':selected_poll'		=>	$_POST["poll_option"]
	);
	$statement = $connect->prepare($query);
	$statement->execute($data);
}

?>