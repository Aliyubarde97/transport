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
								<li class="nav-item">
									<a class="nav-link" href="CONTACT.php">login in</a>
								</li>	
							</ul>
						</div>
					</nav>

                    <div class="form-group" >
					<div class="book-btn">
					<div class="col-sm-offset-6 col-sm-10" >
						<a href="student.php"><button type="submit" class="btn btn-primary" name="save">add_item</button></a>
					</div>
					</div>
					</div>
                            <?php
							require_once 'cpractice24.php';
                                $find=mysqli_query($conn,"select * from student");
                                
                            ?>
                    <div class=  "container">
                     <div class = "row justify_content_center">
                     <table>
                        <thead>
                            <tr>
                               <th>NAME</th>
                               <TH>STATE</TH>
                               <th>LGA</th>
                               <TH>ACTION</TH>
                            </tr>
                        </thead>
						<?php
							while($row=mysqli_fetch_array($find))
							{

							
						?>
                        <tr>
                            <td><?php echo $row['student_name'];?></td>
                            <td><?php echo $row['state'];?></td>
                            <td><?php echo $row['LGA'];?></td>
                            <td><a href="edit?id=<?php echo $row['id'];?>"
						class="btn btn-info">edit</a> 
						</td>
						<td><a href="buses.php?Delete=<?php echo $row['id'];?>"><button onclick="return confirm('Are you sure you want to Delete?')"
						class="btn btn-danger">Delete</button></a>
						</td>

                        </tr>
						<?php
						}
						?>

                    
                    </table>
                    </form>
                    </div>
                    </div>


                    <script src ="jquery-3.6.0.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="main.js"></script>
		</body>
</html>

         