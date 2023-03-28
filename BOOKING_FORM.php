<?php
require_once('connection.php');

if(isset($_POST['send']))
{
	$firstname =$_POST['fname'];
	$surname =$_POST['sname'];
	$kin =$_POST['kin'];
	$ph =$_POST['phone'];
	$gender =$_POST['gender'];
	$email =$_POST['email'];
	$state =$_POST['state'];
	
	$sql="insert into passanger (first_name, last_name, state, gender, phone, next_of_kin, email) values('$firstname', '$surname', '$state', '$gender', '$phone', '$kin', '$email')";
	$insert=mysqli_query($conn, $sql);
	if($insert)
	{
		echo "Record Saved";
	}
	else
	{
		echo "Record Failed ".mysqli_error($conn);
	}
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ksta transport authority katsina</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="main.css">
		</head>
		
		<body>
				<nav class="navbar navbar-expand-md">
						<a class="navbar-brand" href="logo.html">KSTA KATSINA STATE</a>
						<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="main-navigation">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a class="nav-link" href="Transportationsystem.html">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="aboutus.html">About</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="C:\Users\User\Desktop\transport\CONTACT.HTML">Contact</a>
								</li>
								
							</ul>
						</div>
					</nav>
          
          <form class="form-horizontal" role="form" method="post" action="">
            <div class="form-group">
              <label class="control-label col-sm-3" for="First_Name">First Name:</label>
                  <div class="col-sm-3">
                <input type="First_Name" class="form-control" id="First_Name" name="fname" placeholder="First Name">
              </div>
            </div>
              <div class="form-group">
                <label class="control-label col-sm-3" for="Sure_Name">Sure Name:</label>
                <div class="col-sm-3">
                  <input type="Sure_Name" style= class="form-control" id="Sure Name" name="sname" placeholder="First_Name">
                </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="next_of_kin">Next of Kin:</label>
              <div class="col-sm-3">
                <input type="next_of_kin" class="form-control" id="next_of_kin" name="kin" placeholder="Next of Kin">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="phone">phone:</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" id="ph" name="phone" placeholder="11 digit">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="Gender">Gender</label>
              <div class="col-sm-10">
                <select id="Gender" name="gender">
                <option>choose</option>
                <option>Male</option>
                <option>Female</option>
              </select>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Email:</label>
              <div class="col-sm-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
              </div>
              <div class="form-group">
                 <label class="control-label col-sm-2" for="Gender">STATE</label>
                <div class="col-sm-13">
                  <select id="STATE" name="state">
                  <option>choose</option>
                  <option>KADUNA</option>
                  <option>KANO</option>
                  <option>KIBBI</option>
                  <option>ABUJA</option>
                </select>
                </div>
              </div><br><br>
            <div class="form-group">
              <div class="col-sm-offset-6 col-sm-10">
                <input type="button" class="btn btn-success" name="send" value="Book"/>

              </div>
            </div>
          </form>
            

                    <script src ="jquery-3.6.0.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="main.js"></script>
		
                    </body>
</html>
            