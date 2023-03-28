<?php 
require_once 'connectionksta.php';
session_start();
if(!isset($_SESSION['passenger']))
{
    header("location:login.php");
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
									<a class="nav-link" href="city.php">city</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="aboutus.php">About</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="CONTACT.php">Contact</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="login.php">login</a>
								</li>
								
							</ul>
						</div>
					</nav>
					<header class="page-header header container-fluid">
					   <!-- slider -->
					   <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
						<div class="carousel-indicators">
						  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
						  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
						</div>
						<div class="carousel-inner">
						  <div class="carousel-item active" data-bs-interval="10000">
							<img src="ksta/bus.jpg" class="d-block w-100" alt="...">
							<div class="carousel-caption d-none d-md-block">
							  <h5>WE SERVE YOU 24/7</h5>
							  <p>WELCOME TO KATSINA STATE TRANSPORT AUTHORITY.</p>
							  
							  <div class="slider-btn">
								<a href="availablebus.php" class="btn btn-1" role="button">AVAILABLE BUS</button>
									<a href="passenger.php"class="btn btn-2" role="button">BOOKING</a>
									
							</div>
							  
							</div>
						  </div>
						  <div class="carousel-item" data-bs-interval="2000">
							<img src="ksta/smlbus.jpg" class="d-block w-100" alt="...">
							<div class="carousel-caption d-none d-md-block">
							  <h5>SAFE JOURNRY</h5>
							  <p>WELCOME TO KATSINA STATE TRANSPORT AUTHORITY.</p>

							  <div class="slider-btn">
								<a href="availablebus.php" class="btn btn-1" role="button">AVAILABLE BUS</button>
								<a href="passenger.php"class="btn btn-2" role="button">BOOKING</a>
									
						  </div>
							</div>
						  </div>
						  <div class="carousel-item">
							<img src="ksta/transportcabals.jpg" class="d-block w-100" alt="...">
							<div class="carousel-caption d-none d-md-block">
							  <h5>YOUR SATISFICATION IS OUR CONCERN</h5>
							  <p>WELCOME TO KATSINA STATE TRANSPORT AUTHORITY.</p>

							  <div class="slider-btn">
								<a href="availablebus.php" class="btn btn-1" role="button">AVAILABLE BUS</button>
									<a href="passenger.php"class="btn btn-2" role="button">BOOKING</a>
									
								
						  </div>
							</div>
						  </div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
						  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						  <span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
						  <span class="carousel-control-next-icon" aria-hidden="true"></span>
						  <span class="visually-hidden">Next</span>
						</button>
					  </div>
				</header>
				<div class="container features">
					<div class="row">
				
						<div class="col-lg-4 col-md-4 col-sm-12">
							<h3 class="feature-title">COMMISSIONER OF TRANSPORTATION</h3>
							<img src="ksta/commisionerkt.jpg" class="img-fluid">
							<p>HON.ALMUSTAPHA MUHAMMAD MASANAWA.</p>
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-12">
							<h3 class="feature-title">KATSINA STATE TRANSPORT STATION</h3>
							<img src="ksta/station.jpg" class="img-fluid">
							<p>KATSINA STATE MINISRTY OF TRANSPORTATION BUS STATION.</p>
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-12">
							<h3 class="feature-title">KEEP IN TOUCH</h3>
						
<div class="form-group">
    <input type="text" class="form-control" placeholder="Name" name="">
</div>
<div class="form-group">
    <input type="email" class="form-control" placeholder="Email Address" name="email">
</div>
<div class="form-group">
    <textarea class="form-control" rows="4"></textarea>
</div>
<input type="submit" class="btn btn-secondary btn-block" value="Send" name="">
						</div>
						
						
					</div>
				</div>
				
				<div class="background">
					<div class="container team">
						<div class="row">
							<div class="card col-lg-3 col-md-3 col-sm-4 text-center">
								<img class="card-img-top rounded-circle" src="ksta/MDproxytech.png" alt="Card image">
								<div class="card-body">
									<h4 class="card-title">MALAN.ABU ALI</h4>
									<p class="card-text">MD.PROXY SOFTWARE SYSTEM</p>
								</div>
							</div>
							<div class="card col-lg-3 col-md-3 col-sm-4 text-center">
								<img class="card-img-top rounded-circle" src="ksta/governorkt.jpg" alt="Card image">
								<div class="card-body">
									<h4 class="card-title">RT.hon.Aminu Bello masari</h4>
									<p class="card-text">GOV.katsina STATE</p>
								</div>
							</div>
							<div class="card col-lg-3 col-md-3 col-sm-4 text-center">
								<img class="card-img-top rounded-circle" src="ksta/deputygovernoe.jpg" alt="Card image">
								<div class="card-body">
									<h4 class="card-title">MANSUR YAKUBU</h4>
									<p class="card-text">DEPUTYGOV.katsina STATE</p>
								</div>
							</div>
							<div class="card col-lg-3 col-md-3 col-sm-4 text-center">
								<img class="card-img-top rounded-circle" src="ksta/commisionerkt.jpg" alt="Card image">
								<div class="card-body">
									<h5 class="card-title">MUSTAPHA MASANAWA/fm</h5>
									<p class="card-text">COMMISSIONER</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<footer class="page-footer">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 col-md-8 col-sm-12">
								<h6 class="text-uppercase font-weight-bold">Additional Information</h6>
								<p>The mandate of Ministry of Transportation is to To ensure fast, safe, efficient, affordable,
									 convenient, integrated and inter-modal transport
									 system that facilitates Nigeria’s socio-economic developmental needs and enhances the quality of life of the public.</p>
								<p>wish you safe JOURNRY to all ur distination.</p>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12">
							<h6 class="text-uppercase font-weight-bold">Contact</h6>
							<p>1640 batsare way oppite gobarau acadamu
							<br/><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="kta@gmail.com">[email protected]</a>
							<br/>080979797979
							<br/>0807373737</p>
						</div>
					<div>
					<div class="footer-copyright text-center">© 2020 Copyright: MyWebsite.com</div>
				</footer>
		
		
		
		
		<script src ="jquery-3.6.0.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="main.js"></script>
		</body>
</html>