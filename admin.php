<!DOCTYPE html>
<?PhP
  require_once 'connectionksta.php';
  if(isset($_POST['save']))
  {
    $Name = $_POST['Name'];
    $Surname = $_POST['Surname'];
    $phone = $_POST['phone'];
    $Gender = $_POST['Gender'];
    $email = $_POST['email'];
    $Password = $_POST['Password'];
    $CPassword = $_POST['CPassword'];
    if ($Password == $CPassword)
    {
      $Password = md5($Password);
    $run =mysqli_query($conn, "insert into admin (Name,Surname,phone,Gender,email,Password) values ('$Name', '$Surname', '$phone',
    '$Gender', '$email', '$Password')");
    if ($run)
    {
    ?>
     <script> alert ("ACCOUNT CREATED SUCCESFULL");
      </script>
      <?php
    }else 
      {
        echo "ACCOUNT CREAATION FAILED".mysqli_error($conn);
      }
    
    } else {
      # code...?>
      <script>alert ("PASSWORD DON'NT ");</script>
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
          <div container>
          <form action="" method="post">
            <div class="form-group">
              <label class="control-label col-sm-3" for="Name">Name:</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="Name" required placeholder="Name">
              </div>
            </div>
              <div class="form-group">
                <label class="control-label col-sm-3" for="Surname">Surname:</label>
                <div class="col-sm-3">
                  <input type="Surname" class="form-control" name="Surname"  required placeholder="Surname">
                </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="phone">Phone_ NO:</label>
              <div class="col-sm-3">
                <input type="ph" class="form-control" name="phone" required placeholder="11 digits">
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
              <label class="control-label col-sm-2" for="email">Email:</label>
              <div class="col-sm-3">
                <input type="email" class="form-control" name="email"  required placeholder="Enter email">
              </div>
              </div>

              <div class="form-group">
              <label class="control-label col-sm-2" for="Password">Password:</label>
              <div class="col-sm-3">
                <input type="Password" class="form-control" name="Password"   required placeholder="Enter password">
              </div>
              <div>
              <div class="form-group">
              <label class="control-label col-sm-2" for="Password">Password:</label>
              <div class="col-sm-3">
                <input type="Password" class="form-control" name="CPassword" required placeholder="Re_Enter password"><br>
              </div>
              <div>
              
           
            <div class="form-group">
              <div class="col-sm-offset-6 col-sm-10">
                <button type="submit" class="btn btn-success" name="save" >save</button>

              </div>
            </div>
          </form>
            

   <script src ="jquery-3.6.0.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="main.js"></script>
		
                    </body>
</html>
            