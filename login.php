<?php
	$connection=mysqli_connect("localhost","root","") or die("not connected");
				mysqli_select_db($connection,"blood") or die("No database found");
				
				if(isset($_POST['submit']))
				{
					$username=$_POST['name'];
					$password=md5($_POST['password']);
					//echo "<br/><br/><br/><br/><br/><br/><br/>";
					$sql="Select * from donor where Username='$username' AND Password='$password'";
					$result=mysqli_query($connection,$sql);
					$count=mysqli_num_rows($result);
					if($count==1)
					{
						echo '<script>location.href="signup.php";</script>';
					}
					else
					{
						echo "<script>alert('Invalid username and password')</script>";
					}
				}
?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css\login.css"/>
	<title>LogIn</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color:#006266;">
		  <a class="navbar-brand" style="color:White;" href="#"><i class="fas fa-syringe"></i> Donate Blood</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
			  <li class="nav-item active">
				<a class="nav-link" style="color:White;" href="home.php">Home<span class="sr-only">(current)</span></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" style="color:White;" href="search.php">Search</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" style="color:White;" href="login.php">LogIn</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" style="color:White;" href="about_us.php">About Us</a>
			  </li>
			</ul>
		  </div>
		</nav>
		
		
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Login</h2>
						<form name="login" action="login.php" method="POST">
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Username" name="name" required>
                        </div>
                         <div class="input-group">
                            <input class="input--style-2" type="password" placeholder="Password" name="password" id="passwordid" required>
                        </div>
                        <div class="p-t-30">
                            <input type="submit" class="btn btn-primary" value="Login" id="submitsignup" name="submit" onclick="return fun();"/>
                        </div>
                    </form>
					<br/><br/><br/><center><h3>New User? &nbsp <a href="signup.php">Signup</a></h3></center>
                </div>
            </div>
        </div>
    </div>
		
	<!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<!-- end document-->