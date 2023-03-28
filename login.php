<?php 
require_once 'connectionksta.php';
	if (isset($_POST['add'])){
	$Home = $_POST['Home'];
	$Distination = $_POST['Distination'];
	$Price = $_POST['Price'];
	$the_data = mysqli_query($conn,"insert into city (Home,Distination,Price ) values('$Home','$Distination', '$Price')");
	if ($the_data)
	{
		?>
		<script>alert("city added");</script>
		<?php
		}else
		{
			echo "adding city failed".mysqli_error($conn);
		}
	
}
	?>
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
								<li class="nav-item">
									<a class="nav-link" href="CONTACT.php">login in</a>
								</li>
								
							</ul>
						</div>
					</nav>
						<?php
						if(isset($_GET['edit'])){
							$id= $_GET['edit'];
							$find= "select * from buses where id=$id";
							$finded=mysqli_query($conn, $find);
							$row= mysqli_fetch_array($find);
							$Bus= $row['Bus_No'];
							$status= $row['status'];
							$Distination =$row['Distination'];

						}
						?>
						<?php
						if(isset($_GET['Delete'])){
							$id = $_GET['Delete'];
							$mydata= "Delete  from buses where id=$id";
							$data = mysqli_query($conn,$mydata);
						}
						?>
					
		
                <div style="  margin-top:55px" align="center">	
				<h1 align="center">Passenger login</h1>	
				<hr>
					<div class ="container" align="left" style="margin-left:500px"> 
					<div class="row justify_content_center">
					<form action="" method = 'POST' role= "form">

					<div class="form-group">
					<label for="Home">Email</label>
					<div class="col-sm-3">
					<input type="email" name="email" class= "form-control" required placeholder="Insert registered email address">
					</div>
					</div>
					
					</div>
			
					<div class="form-group">
					<label for="Distination">Password</label>
					<div class="col-sm-3">
					<input type="password" name="password" class= "form-control" required placeholder="type your password">
					</div>
					</div><br>

					<div class="form-group">
					<div class="book-btn">
					<div class="col-sm-offset-6 col-sm-10" >
						<button type="submit" class="btn btn-primary" name="login">Login</button>
						</div>
					</div>
					</div>
					</form>
<?php
if(isset($_POST['login']))
{
	$email=$_POST['email'];
	$password=md5($_POST['password']);
	$check=mysqli_query($conn, "select * from passenger where email='$email' and Password='$password'");
  $checked=mysqli_fetch_array($check);
	if($checked > 0 )
	{ session_start();
		$_SESSION['passenger'] = $checked['id'];
    header("location:booking_search.php");

	}
	else {
		echo "Wrong Username or Password";
	}

}


?>
					</div>
					</div>
                    </div>
					
					
    <script src ="jquery-3.6.0.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="main.js"></script>
		</body>
</html>

