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
									<a class="nav-link" href="city.php">City</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="Buses.php">Bus</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="CONTACT.php">login in</a>
								</li>
								
							</ul>
						</div>
					</nav>

				<div style="  margin-top:55px" align="center">	
				<h1 align="center">Bus Info Table</h1>	
				<hr>
				<div style="float:right; margin-right:300px">
				<a href="new_bus.php"><button type="submit" class="btn btn-info" name="submit">Add New Bus</button></a>
				</div>
				<table class="table" >
						<thead>
							<tr>
							<th>S/N</th>
							<th>Bus Number<th>
							<th>Bus Status</th>
							<th>Destination</th>
							<th>Departure Time</th>
							<th>Seat Number</th>
							<th>Action</th>
								</tr>
						</thead>
						<?php 
						$sn=1;
						require_once 'connectionksta.php';
						$call = mysqli_query($conn,"select * from buses ");
						while ($row= mysqli_fetch_array($call) ) {
							$city=$row['city'];
							$find_city=mysqli_query($conn, "select * from city where id='$city'");
							$finded_city=mysqli_fetch_array($find_city);
							

					?>
						<tr>
						<td><?php  echo $sn; ?></td>
						<td><?php echo $row['Bus_No'];?><td>
						<td><?php echo $row['status'];?></td>
						<td><?php echo $finded_city['Home']." ".$finded_city['Distination'];?></td>
						<td><?php echo date ('h:i A', strtotime($row['depart_time'])) ?></td>
						<td><?php echo $row['number_seat'];?></td>
						<td><a href="edit_bus.php?id=<?php echo $row['id'];?>"
						class="btn btn-info">edit</a> 
						</td>
						<td><a href="buses.php?Delete=<?php echo $row['id'];?>"><button onclick="return confirm('Are you sure you want to Delete?')"
						class="btn btn-danger">Delete</button></a>
						</td>
						</tr>
						<?php
							$sn++; }
							?>
						
						</table>
						</div>

						<?php
						if(isset($_GET['Delete'])){
							$id = $_GET['Delete'];
							$mydata= "Delete  from buses where id=$id";
							$data = mysqli_query($conn,$mydata);
							header("location:buses.php");

						}
						?>

					
					
    <script src ="jquery-3.6.0.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="main.js"></script>
		</body>
</html>

