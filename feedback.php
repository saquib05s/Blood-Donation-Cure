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
    <title>Feedback</title>

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
	
			<script>
				function fun()
				{
					name=document.getElementById("name").value;
					message=document.getElementById("message").value;
					if(name=="")
					{
						alert("Please enter your name");
					}
					if(message=="")
					{
						alert("Please enter your message");
					}
					if(name!="" && message!="")	
					{
						alert("Thanks for your feedback");
					}
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
                    <h2 class="title">Feedback</h2>
						<form method="post" action="https://script.google.com/macros/s/AKfycbycQ3qdTjFMlB7wx6JzGqS1wtqK2-XF8-L6-OWx5A/exec" name="form1">
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Name" name="name" id="name" required>
                        </div>
						<!--<div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Email" name="email" id="emailid" required>
                        </div>-->
						<div class="input-group">
                            <textarea rows="7" cols="30" name="message" id="message" placeholder="Message" required></textarea>
                        </div>
						<div class="p-t-30">
                            <input type="submit" class="btn btn-primary" value="Submit" id="submit" onclick="return fun();"/>
                        </div>
						<!--action="https://script.google.com/macros/s/AKfycbycQ3qdTjFMlB7wx6JzGqS1wtqK2-XF8-L6-OWx5A/exec"-->
                    </form>
                </div>
            </div>
        </div>
    </div>
		<!--<form method="post" action="https://script.google.com/macros/s/AKfycbycQ3qdTjFMlB7wx6JzGqS1wtqK2-XF8-L6-OWx5A/exec" name="form1">
			<center>	
				Name<input type="text" name="name" id="name"/><br/>
			Message:<textarea rows="7" cols="30" name="message" id="message"></textarea>
			Email:<input type="email" name="email" id="email"/
			<input type="submit" value="Submit"/>
			</center>
		</form>
 <script data-cfasync="false" type="text/javascript"
            src="https://cdn.rawgit.com/dwyl/learn-to-send-email-via-google-script-html-no-server/master/form-submission-handler.js"></script>
-->

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





