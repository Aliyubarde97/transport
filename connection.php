
<?php
   $conn = mysqli_connect('localhost', 'root', '', 'add');
   if(!$conn){
    echo "unable to connect".mysqli_connect_error();
   }
?>