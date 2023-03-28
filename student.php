<?php
    require_once 'cpractice24.php';
    if(isset($_POST['Save']))
    {
        $student_name=$_POST['student_name'];
        $state=$_POST['state'];
        $LGA=$_POST['LGA'];
        $mydata=mysqli_query($conn, "insert into student (student_name,state,LGA)values ('$student_name', '$state', '$LGA')");
        if($mydata)
        {
            header("location:student_Data.php");
        }else {
            echo "unable to connect".mysqli_error($conn);
        }
    }
?>
<!Doctype html>
<html lang="en">
    <head>
        <title>ksta transport authority katsina</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="practice.css">
		</head>
		
		<body>
				<nav class="navbar navbar-expand-md">
						<a class="navbar-brand" href="logo.html">STUDENT HOME</a>
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
              <label class="control-label col-sm-3" for="student">student_name:</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="student_name" placeholder="First_Name">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="state">state:</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="state" placeholder="states">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="LGA">student_LGA:</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="LGA" placeholder="LGA"><br>
              </div>
            </div>

            <div class="form-group">
            <div class="book-btn">
              <div class="col-sm-offset-6 col-sm-10">
                <button type="submit" class="btn btn-primary" name="Save">save</button>
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


           
                    
                    



		
              