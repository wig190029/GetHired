<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Application Page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<link rel="stylesheet" href="applypage.css">
</head>
<body>
<!--navbar-->
<header>
<section id="header">
	<nav class="navbar navbar-expand-md navbar-light shadow-sm bg-white">
		<div class="container">
			<!--top left Logo-->
			<a class="navbar-brand" href="index.html"><img src="img/joblogon.png"></a>
			<!--navigation button-->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<!--inside the navigation button-->
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto"> <!--ml-auto pushes navigation to righthand side-->
					<li class="nav-item" active>
						<a class="nav-link" href="index.html">Home</a>
					</li>
					<li class="nav-item">
						<a class=" nav-link" href="jobs.html">Jobs</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="companies.html">Company</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="login.html">Login</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="FAQs.html">FAQ</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</section>
</header>
	<!-- end navbar -->
<?php
if (!isset($_POST['submit']))
{
//form not submitted
?>
<section class="container-fluid bg">
  <section class="row justify-content-center">
    <section class="col-12 col-sm-12 col-md-6">
		<form class="form-container" action="<?php echo $_SERVER ['PHP_SELF']?>" method="post">
		<h1><b>Job Application</b></h1>
		<div class="form-group">
			<label for="name">Full Name</label>
			<input type="text" class="form-control" name="name" id="name" required>
		</div>
		<hr>
		<div class="for-group">
			<label for="gender">Gender</label>
			<input type="text" class="form-control" name="gender" required>
		</div>
		 <hr>
		<div class="for-group">
			<label for="dob">Date of Birth</label>
		  <input type="date" name="dob" id="dob" required/>
		</div>
		<hr>
		<div class="form-group">
			<label for="email">Email</label>
		  <input type="email" class="form-control" name="email" id="email" required>
		</div>
		<hr>
		<div class="form-group">
			<label for="number">Phone Number</label>
		  <input type="number" class="form-control" name="number" id="number">
		</div>
		<hr>
		<div class="form-group">
			<label for="CVFile">Select CV file to upload:</label>
		  <input type="file" name="CVFile" id="CVFile" required>
		</div>
		  <hr>
		    <button type="submit" name="submit" class="btn btn-block">Submit Application</button>
		</form>
	</section>
	</section>
	</section>
	<?php
	}
	else
	{
	//get form input
	$name = $_POST["name"];
	$gender = $_POST["gender"];
	$dateofbirth = $_POST["dob"];
	$email = $_POST["email"];
	$mobile = $_POST["number"];

	//open connection
	$connection = mysqli_connect('localhost','root','','application') or die
	('Unable to connect!');

	$query = "INSERT INTO apply(apply_name, apply_gender, apply_dob, apply_email, apply_mobile)
	          VALUES ('$name','$gender','$dateofbirth','$email','$mobile')";

	//execute query
	$result = mysqli_query($connection,$query) or die("Error in query: $query . " );
	//print ID of inserted record
		echo 'Job application successfully submitted!  Your ID is '. mysqli_insert_id($connection).'<br \>';
		header("Location: applypage.php");
		//close connection
		mysqli_close($connection);
	}
	?>

<!-- <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> -->
<!-- Footer-->
<footer class="footer">
	<div class="container-fluid padding">
    <div class="row">
      <div class="col-lg-6 h-100 text-lg-start my-auto">
	      <ul class="foot mb-2">
	        <li class="foot-item"><a href="#">Privacy Policy</a></li>
	        <li class="foot-item"><a href="#">Company Profile</a></li>
	        <li class="foot-item"><a href="#">Terms of Use</a></li>
	      </ul>
	  <p class="text-muted small mb-4 mb-lg-0">&copy; GetHired 2021. All Rights Reserved.</p>
    </div>
	    <div class="col-lg-6 h-100 text-center text-lg-end social padding">
	      <a href="#"><i class="fab fa-facebook"></i></a>
	      <a href="#"><i class="fab fa-twitter"></i></a>
	     	<a href="#"><i class="fab fa-google-plus-g"></i></a>
	      <a href="#"><i class="fab fa-instagram"></i></a>
	     	<a href="#"><i class="fab fa-youtube"></i></a>
	    </div>
    </div>
	</div>
</footer>

<!-- scroll up button js -->
<script src="scrollUpBtn.js"></script>

</body>
</html>
