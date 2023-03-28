<?php 
  require_once 'connectionksta.php';
  if (isset($_POST['BOOK']))
  {
    $Passenger_name = $_POST['Passenger_name'];
    $Nxt_kin_phone = $_POST['Nxt_kin_phone'];
    $Gender = $_POST['Gender'];
    $City = $_POST['City'];
    $Date = $_POST['Date'];
    $email = $_POST['email'];
    $Password = $_POST['Password'];
    $CPassword = $_POST['CPassword'];
    // $Luggage = $_POST['Luggage'];
    if($Password = $CPassword)
    {
      $Password = md5($Password);
      $put_data =mysqli_query($conn, "insert into Passenger (Passenger_name,Nxt_kin_phone,Gender,City,Date,email,Password)
      values('$Passenger_name','$Nxt_kin_phone','$Gender','$City','$Date','$email','$Password')");
      if ($put_data){
        ?>
        <script>alert("BOOKING SUCCESFUL");</script>
        <?PHP
           } else {
              echo "BOOKING FAILED".mysqli_error($conn);
            }
              }
              else { ?>
                <script>alert("Password did'nt Match");</script>
                <?php
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
									<a class="nav-link" href="Transportationsystem.php">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="aboutus.php">About</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="CONTACT.php">Contact</a>
								</li>
								
							</ul>
						</div>
					</nav>
          
          <div class= "container">
          <div class = "row justify_content_center">
          <form action="" method="post" role="form" style="align:center;">
            <div class="form-group">
              <label class="control-label col-sm-3" for="Passenger_name">Passenger_name:</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="Passenger_name" placeholder="First_Name">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="phone">Nxt_kin_phone</label>
              <div class="col-sm-3">
                <input type="ph" class="form-control" name="Nxt_kin_phone" required placeholder="11 digits">
              </div>
            </div>
            
            <div class="form-group">
              <label class="control-label col-sm-2" for="Gender">Gender</label>
              <div class="col-sm-10">
                <select name="Gender">
                <option value="">choose</option>
                <option value ="Male">Male</option>
                <option value = "female">Female</option>
              </select>
              </div>
            </div>
           
            <div class="form-group">
            <label class="control-label col-sm-2" for="city">City</label>
                <div class="col-sm-4">
                  <select name="City">
                  <option value = "">Choose</option>
                </select>
                </div>
              </div>
              
            <div class="form-group">
              <label class="control-label col-sm-2" for="Date">Date</label>
              <div class="col-sm-3">
                <input type="Date" class="form-control" name="Date" required >   
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Email:</label>
              <div class="col-sm-3">
                <input type="email" class="form-control" name="email" placeholder="Enter email">
              </div>
              </div>  
            <div class="form-group">
              <label class="control-label col-sm-2" for="Password">Password:</label>
              <div class="col-sm-3">
                <input type="Password" class="form-control" name="Password"  required placeholder="Enter password">
              </div>
              </div>
              <div class="form-group">
              <label class="control-label col-sm-2" for="Password">Confirm_Password:</label>
              <div class="col-sm-3">
                <input type="Password" class="form-control" name="CPassword"  required placeholder="Re_Enter password">
              </div>
              </div>
                
     <div class="form-group">
            <div class="book-btn">
              <div class="col-sm-offset-6 col-sm-10">
                <button type="submit" class="btn btn-warning" name="BOOK">BOOK</button>
                </div>
              </div>
            </div>
          </form>
          </div>
          </div>
            

   <script src ="jquery-3.6.0.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="main.js"></script>
		
                    </body>
</html>
            
