<!DOCTYPE html>
<html lang="en">
  <head>
  
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
  
  
  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Sign Up</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/signup.css" rel="stylesheet" media="all">
			<script type="text/javascript">
			function fun()
			{
				e=document.getElementById("emailid").value;
				pattern_e=/[A-z0-9_]+@[A-z0-9_]+\.[A-z]{2,}/i;
				if(!pattern_e.test(e))
				{
					alert("Invalid Email ID");
					e.focus();
				}
				mob=document.getElementById("mobileid").value;
				if(mob.length!=10)
				{
					alert("Invalid Mobile No.");
					mob.focus();
					return false;
				}
				if(signup.gender.selectedIndex==0)
				{
					alert("Please select your gender");
					signup.state.focus();
					return false;
				}
				if(signup.state.selectedIndex==0)
				{
					alert("Please select your state of residence");
					signup.state.focus();
					return false;
				}
				if(signup.bloodgroup.selectedIndex==0)
				{
					alert("Please select your blood group");
					signup.bloodgroup.focus();
					return false;
				}
				p=document.getElementById("passwordid").value;
				if(p.length<8)
				{
					alert("Minimum length of password should be 8");
					p.focus();
					return false;
				}
				/*p1=document.getElementById("password1id").value;
				if(p1!=p)
				{
					alert("Passwords did not match");
					p1.focus();
					return false;
				}*/
				return true;
			}
		</script>
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
		
		<!--database-->
		<?php
				mysql_connect("localhost","root","") or die("not connected");
				mysql_select_db("blood") or die("No database found");
				if(isset($_POST['submit']))
				{
					$user=$_POST['name'];
					$email=$_POST['email'];
					//if(isset($_POST['gender']))
					$gender=$_POST['gender'];
					$state=$_POST['state'];
					$mob=$_POST['mobile'];
					$bloodgroup=$_POST['bloodgroup'];
					$password=md5($_POST['password']);
					$password1=md5($_POST['password1']);
					if($password==$password1)
					{
						$birth_date=date('Y-m-d',strtotime($_POST['birthday']));
					echo $birth_date;
					$query="insert into donor(Username,Email_ID,Gender,Mobile_No,State,Blood_Group,Password,Date_Of_Birth) values('$user','$email','$gender','$mob','$state','$bloodgroup','$password','$birth_date')";
						if(mysql_query($query))
							{
								//print "<center><br/><br/><br/><br/>";
								//print "<p style='background: #fa4251;'>";
								echo '<script>alert("Your data submitted successfully!");location.href="login.php";</script>';
								//print"<a id='formsignup' href='login.php'>LogIn</a>";
								//print "</p></center>";
								echo $birth_date;
							}	
					}
					else
					{
						echo "<script>alert('Confirm password not matched')</script>";
					}
					//$password=md5($password);//prevention from sql injection
					/*$birth_date=date('Y-m-d',strtotime($_POST['birthday']));
					echo $birth_date;
					$query="insert into donor(Username,Email_ID,Gender,Mobile_No,State,Blood_Group,Password,Date_Of_Birth) values('$user','$email','$gender','$mob','$state','$bloodgroup','$password','$birth_date')";
					if(mysql_query($query))
						{
							//print "<center><br/><br/><br/><br/>";
							//print "<p style='background: #fa4251;'>";
							echo '<script>alert("Your data submitted successfully!");location.href="login.php";</script>';
							//print"<a id='formsignup' href='login.php'>LogIn</a>";
							//print "</p></center>";
							echo $birth_date;
						}	*/	
		}
		?>
		
		
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
						<form name="signup" action="signup.php" method="POST">
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Username" name="name" required>
                        </div>
						<div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Email" name="email" id="emailid" required>
                        </div>
						<div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Mobile Number" name="mobile" id="mobileid" required>
                        </div>
						
						<!--<p>Date: <input type="text" id="datepicker"></p>-->
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2 js-datepicker" type="text" placeholder="Birthdate" name="birthday" required>
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div></br>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender">
                                            <option disabled="disabled" selected="selected">Gender</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="state">
                                    <option disabled="disabled" selected="selected" hidden>Select your state</option>
                                    <option>Andhra Pradesh</option><option>Arunachal Pradesh</option><option>Assam</option>
							<option>Bihar</option><option>Chattisgarh</option><option>Goa</option>
							<option>Gujarat</option><option>Haryana</option><option>Himachal Pradesh</option>
							<option>Jammu and Kashmir</option><option>Jharkhand</option><option>Karnataka</option>
							<option>Kerala</option><option>Madhya Pradesh</option><option>Maharashtra</option>
							<option>Manipur</option><option>Meghalaya</option><option>Mizoram</option>
							<option>Nagaland</option><option>Orissa</option><option>Punjab</option>
							<option>Rajasthan</><option>Sikkim</option><option>Tamil Nadu</option>
							<option>Telangana</optionoption><option>Tripura</option><option>Uttaranchal</option>
							<option>Uttar Pradesh</option><option>West Bengal</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
						<div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                            <select name="bloodgroup">
                            <option disabled="disabled" selected="selected" hidden>Select your blood group</option>
                            <option>A+</option><option>A-</option><option>B+</option><option>B-</option>
						
							<option>AB+</option><option>AB-</option><option>A1+</option><option>A1-</option>
						
							<option>A2+</option><option>A2-</option><option>A1B+</option><option>A1B-</option>
						
							<option>A2B+</option><option>A2B-</option><option>O+</option><option>O-</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                         <div class="input-group">
                            <input class="input--style-2" type="password" placeholder="Password" name="password" id="passwordid" required>
                        </div>
						<div class="input-group">
                            <input class="input--style-2" type="password" placeholder="Confirm Password" name="password1" id="password1id" required>
                        </div>
                        <div class="p-t-30">
                            <input type="submit" class="btn btn-primary" value="Submit" id="submitsignup" name="submit" onclick="return fun();"/>
                        </div>
						<!--<div class="p-t-30">
                            <input type="reset" class="btn btn-primary" value="Reset" id="resetsignup"/>
                        </div>-->
                    </form>
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