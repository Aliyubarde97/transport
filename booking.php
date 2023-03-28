<?php 
require_once 'connectionksta.php';
session_start();
if(!isset($_SESSION['passenger']))
{
    header("location:login.php");
}
$passenger=$_SESSION['passenger'];
$bus=$_GET['bus'];
	$find_bus = mysqli_query($conn,"select * from buses where id='$bus'");
	$bus_row= mysqli_fetch_array($find_bus);

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
									<a class="nav-link" href="logout.php">Logout</a>
								</li>
								
							</ul>
						</div>
					</nav>
				
		
                <div style="  margin-top:55px" align="center">	
				<h1 align="center">Confirm Your Booking</h1>	
				<hr>
					<div class ="container" align="left" style="margin-left:500px"> 
					<div class="row justify_content_center">
					<div class="form-group">
					<div class="book-btn">
					<div class="col-sm-offset-6 col-sm-10" >
						<a href="booking_search.php"><button type="submit" class="btn btn-primary" name="book">Back</button></a>
						</div>
					</div>
					</div>

					<form action="" method = 'POST' role= "form">

					<div class="form-group">
					<label for="Home">Bus Number</label>
					<div class="col-sm-3">
					<input type="text" name="home" value="<?php echo $bus_row['Bus_No'] ?>" class= "form-control" required placeholder="Type From where" disabled>
					</div>
					</div>
					
					</div>
			
					<div class="form-group">
					<label for="Distination">Depature Time</label>
					<div class="col-sm-3">
					<input type="text" name="" value="<?php  echo date ('h:i A', strtotime($bus_row['depart_time']))?>" class= "form-control" disabled>
					</div>
					</div>			
					<div class="form-group">
					<label for="Distination">Available Seat</label>
					<div class="col-sm-3">
					<input type="text" name="" value="<?php echo $bus_row['number_seat'] ?>" class= "form-control" disabled>
					</div>
					</div><br>

					<div class="form-group">
					<div class="book-btn">
					<div class="col-sm-offset-6 col-sm-10" >
						<button type="submit" class="btn btn-primary" name="book">Confirm Booking</button>
						</div>
					</div>
					</div>
					</div>
								</form>

					</div>
<?php
	if(isset($_POST['book']))
	{
		
		$insert_booking=mysqli_query($conn, "insert into booking (booking_bus, booking_passenger) values('$bus', '$passenger')");
		if($insert_booking)
		{   
			?>
			<script>  alert("Your Seat is Booked") </script>
			
			<?php
		}
		else
		{
			?>
			<script>  alert("Unable to Make Booking, Try again!") </script>
			
			<?php
		}
	}
?>
					
					
    <script src ="jquery-3.6.0.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="main.js"></script>
		</body>
</html>

