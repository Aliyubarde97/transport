<?php
	$conn = mysqli_connect('localhost', 'root', '', 'dbksta');
	if(!$conn){
		echo "unable to conncet".mysqli_connect_error();
	}
	
?>