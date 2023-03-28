<?php
    $conn= mysqli_connect('localhost', 'root', '', 'practice24');
    if(!$conn)
    {
        echo "unable to conncet".mysqli_error_connect();
    }
?>