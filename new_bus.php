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
				<h1 align="center">Add New Bus</h1>	
				<hr>
				<div style="float:left; margin-left:400px">
				<a href="buses.php"><button type="submit" class="btn btn-info" name="submit">Back</button></a>
				</div>
                <br><br>
					<div class ="container" align="left" style="margin-left:500px"> 
					<div class="row justify_content_center">
					<form action="" method = 'POST' role= "form">

					<div class="form-group">
					<label for="Home">Bus Number</label>
					<div class="col-sm-3">
					<input type="text" name="bnumber" class= "form-control" required placeholder="Bus number">
					</div>
					</div>
					
					</div>
					<div class="form-group">
					<label for="Distination">Distination</label>
					<div class="col-sm-3">
					<select  name="city" class= "form-control" required >
							<option value="">--Select Destination City--</option>
							<?php  
								$find=mysqli_query($conn, "select * from city");
								while($finded=mysqli_fetch_array($find)){
							?>
							<option value="<?php echo $finded['id'] ?>"><?php echo $finded['Home']." ".$finded['Distination'] ?></option>
							<?php }?>
					</select>
					</div>
					</div>

					<div class="form-group">
					<label for="Distination">Number of Seat</label>
					<div class="col-sm-3">
					<input type="text" name="seat" class= "form-control" required placeholder="number of Seat">
					</div>
					</div>
					
					<div class="form-group">
					<label for="Distination">Departure Time</label>
					<div class="col-sm-3">
					<input type="time" name="dtime" class= "form-control" required placeholder="Departure Time">
					</div>
					</div>

					<div class="form-group">
					<label for="Distination">Status</label>
 					<div class="col-sm-3">
					<select name="status" class= "form-control" required placeholder="">
							<option value="" selected>--Select Status--</option>
							<option value="Available">Available</option>
							<option value="Not Available">Not Available</option>
					</select>
					</div>
					</div><br>
					<div class="form-group">
					<div class="book-btn">
					<div class="col-sm-offset-6 col-sm-10">
						<button type="submit" class="btn btn-warning" name="submit">Save</button>
						</div>
					</div>
					</div>
								</form>
<?php
if(isset($_POST['submit']))
{
	$bnumber=$_POST['bnumber'];
	$city=$_POST['city'];
	$seat=$_POST['seat'];
	$status=$_POST['status'];
	$dtime=$_POST['dtime'];
	$insert=mysqli_query($conn, "insert into buses (Bus_no, city, number_seat, status, depart_time) values('$bnumber', '$city', '$seat', '$status', '$dtime')");
	if($insert)
	{
		header("location:buses.php");

	}
	else {
		echo "Unable to add Bus ".mysqli_error($conn);
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

