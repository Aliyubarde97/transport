<?php 
require_once 'connectionksta.php';
	if (isset($_POST['add'])){
	$Home = $_POST['Home'];
	$Distination = $_POST['Distination'];
	$Price = $_POST['Price'];
	$the_data = mysqli_query($conn,"insert into city (Home,Distination,Price ) values('$Home','$Distination', '$Price')");
	if ($the_data)
	{
        header("location:city.php");
	}
    else
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
                    <div style="  margin-top:55px" align="center">	
				<h1 align="center">Add New City</h1>	
				<hr>
				<div style="float:left; margin-left:400px">
				<a href="city.php"><button type="submit" class="btn btn-danger" name="submit">Back</button></a>
				</div>
                <br><br>
					<div class ="container" align="left" style="margin-left:500px">
					<div class="row justify_content_center">
					<form action="" method = 'POST' role= "form">
					<div class="form-group">
					<label for="Home">Home</label>
					<div class="col-sm-3">
					<input type="text" name="Home" class= "form-control" required placeholder="City Name">
					</div>
					</div>

					<div class="form-group">
					<label for="Distination">Distination</label>
					<div class="col-sm-3">
					<input type="text" name="Distination" class= "form-control" required placeholder="Destination Name">
					</div>
					</div>

					<div class="form-group">
					<label for="Distination">Price</label>
					<div class="col-sm-3">
					<input type="text" name="Price" class= "form-control" required placeholder="Amount">
					</div>
					</div>
                    <br>
					<div class = "form_group">
					<div class= "col-sm-3">
					<button type="submit" class="btn btn-success" class="form-control" name ="add">Save</button>
					</div>
					</div>
					</form>
					
					</div>
					</div>
                    </div>
					
					
                    <script src ="jquery-3.6.0.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="main.js"></script>
		</body>
</html>

