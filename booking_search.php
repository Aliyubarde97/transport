<?php 
require_once 'connectionksta.php';
session_start();
if(!isset($_SESSION['passenger']))
{
    header("location:login.php");
}
$passenger=$_SESSION['passenger'];
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
									<a class="nav-link" href="logout.php">Logout</a>
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
				<h1 align="center">Search Your Bus</h1>	
				<hr>
					<div class ="container" align="left" style="margin-left:500px"> 
					<div class="row justify_content_center">
					<form action="" method = 'POST' role= "form">

					<div class="form-group">
					<label for="Home">From</label>
					<div class="col-sm-3">
					<input type="text" name="home" class= "form-control" required placeholder="Type From where">
					</div>
					</div>
					
					</div>
			
					<div class="form-group">
					<label for="Distination">To</label>
					<div class="col-sm-3">
					<input type="text" name="destination" class= "form-control" required placeholder="type your destination">
					</div>
					</div><br>

					<div class="form-group">
					<div class="book-btn">
					<div class="col-sm-offset-6 col-sm-10" >
						<button type="submit" class="btn btn-primary" name="go">Go</button>
						</div>
					</div>
					</div>
					</div>
								</form>
				<div style="  margin-top:55px">	
                    <table class="table" >
						<thead>
							<tr>
							<th>S/N</th>
							<th>Bus Number<th>
							<th>Deaprture Time</th>
							<th>Total Seat</th>
							<th>Avaibale Seat</th>
							<th>Action</th>
								</tr>
						</thead>
<?php
require_once 'connectionksta.php';
if(isset($_POST['go']))
{
	$home=$_POST['home'];
	$destination=$_POST['destination'];
	$check=mysqli_query($conn, "select * from city where Home='$home' and Distination='$destination'");
						$sn=1;
  while($checked=mysqli_fetch_array($check))
	{
						$city=$checked['id'];
						$call = mysqli_query($conn,"select * from buses where city='$city'");
						while ($row= mysqli_fetch_array($call) ) {
							$city=$row['city'];
							$find_city=mysqli_query($conn, "select * from city where id='$city'");
							$finded_city=mysqli_fetch_array($find_city);

                            $bus_id=$row['qty'];
                            $find_booking=mysqli_query($conn, "select * from booking where booking_bus='$bus_id'");
                            $finded_booking=mysqli_num_rows($find_booking);
                            
                            $seat_avail = $row['number_seat'] -  $finded_booking;
							

					?>
						<tr>
						<td><?php  echo $sn; ?></td>
						<td><?php echo $row['Bus_No'];?><td>
						<td><?php echo date ('h:i A', strtotime($row['depart_time'])) ?></td>
						<td><?php echo $row['number_seat'];?></td>
                        <td><?php echo $seat_avail?></td>
						<td><?php if($seat_avail == 0 ){ ?>
							<input type="button" class="btn btn-danger" value="Full" / disabled>
						<?php }else{ ?>
							<a href="booking.php?bus=<?php echo $row['id']; ?>" class="btn btn-info">Book Now</a>
						<?php }?>
											
						</td>
						</tr>
						<?php
							$sn++; }
	}

							?>
						
						</table>                  
                        </div>
<?php
	


}


?>
					</div>

					
					
    <script src ="jquery-3.6.0.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="main.js"></script>
		</body>
</html>

