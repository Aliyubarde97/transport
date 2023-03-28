<?php

$conn=mysqli_connect('localhost', 'root', '', 'booking');
if(!$conn)
{
	echo "Unable to connect ".mysqli_connect_error();
}

?>