<!DOCTYPE html>
<html lang="en">
  <head>
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
    <title>Search</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/search.css" rel="stylesheet" media="all">

	<script type="text/javascript">
		function fun()
		{
			/*if(search.state.selectedIndex==0)
				{
					alert("Please select your state of residence");
					signup.state.focus();
					return false;
				}
				if(search.bloodgroup.selectedIndex==0)
				{
					alert("Please select your blood group");
					signup.bloodgroup.focus();
					return false;
				}
			return true;*/
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
		
		<div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    
						<form name="search" action="search.php" method="POST">
                        
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
                        <div class="p-t-30">
                            <input type="submit" class="btn btn-primary" value="Search" id="submitsignup" name="search" onclick="return fun();"/>
                        </div>
						<!--<div class="p-t-30">
                            <input type="reset" class="btn btn-primary" value="Reset" id="resetsignup"/>
                        </div>-->
                    </form>
					
			<?php
	
				mysql_connect("localhost","root","") or die("Did Not Connect");
				mysql_select_db("blood") or die("Did not find database");
				//collect
				if(isset($_POST['search']))
				{
					if(!isset($_POST['state']))
					{
						echo "<script>alert('Please select your state of residence')</script>";
					}
					else if(!isset($_POST['bloodgroup']))
					{
						echo "<script>alert('Please select your blood group')</script>";
					}
					else
					{
						$state=$_POST['state'];
						$bloodgroup=$_POST['bloodgroup'];
						$query =mysql_query("select * from donor where State='$state' and Blood_Group='$bloodgroup'") or die("Could not search");
						$count=mysql_num_rows($query);
						echo "<br/><br/><br/><br/><center>";
						if($count ==0)
						{
							$output='There was no search results!';
							echo $output;
						}
						else
						{
							echo "<table width='600' border='1' cellpadding='1' cellspacing='1'>";
								echo "<tr align='center'>
									<th>Name</th>
									<th>Blood Group</th>
									<th>Phone No</th>
									<th>Email Id</th>
								</tr>";
							while($row=mysql_fetch_array($query))
							{
								$username=$row['Username'];
								$bloodgroup=$row['Blood_Group'];
								$mobileno=$row['Mobile_No'];
								$emailid=$row['Email_ID'];
								echo "<tr align='center'>";
										echo "<td>".$username."</td>";
										echo "<td>".$bloodgroup."</td>";
										echo "<td>".$mobileno."</td>";
										echo "<td>".$emailid."</td>";
							}
							echo "</tr></table></center>";
						}
					}
				}
			?>
			
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