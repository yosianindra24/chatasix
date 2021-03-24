<?php 

	require_once 'inti/init.php';
	if (isset($_POST['signup'])) {
		$fullname = $_POST ['fullname'];
		$city = $_POST ['city'];
		$username = $_POST ['username'];
		$email = $_POST ['email']; 
		$password = $_POST ['password'];
		$confirmPassword = $_POST ['confirmPassword'];


		if (!empty(trim($fullname)) && !empty(trim($city)) && !empty(trim($username)) && !empty(trim($email)) && !empty(trim($password))) {
			if (register($username,$email)) {
				if (registering($fullname,$city,$username,$email,$password)) {
					echo "Berhasil";
				}
				else {
					echo "Gagal";
				}
			} 
		} else {
			echo "sudah daftar";
		}
	}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>ChatAsix - Sign Up</title>
	<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Courier+Prime:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Architects+Daughter&family=Bebas+Neue&display=swap" rel="stylesheet">
	<link rel="icon" type="img/favicon.svg" href="img/favicon.svg">
	<style type="text/css">
		font-family: 'Berkshire Swash', cursive;
		font-family: 'Courier Prime', monospace;
		font-family: 'Bebas Neue' , cursive;
		font-family: 'Amatic SC', cursive;
		font-family: 'Architects Daughter', cursive;
	</style>
</head>
<body  style="background-image: url('img/home.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">

	<!-- Navigation Bar as Title Bar -->
	<nav class="navbar navbar-light bg-light ">
		<div class="container">
		  <a href="index.php" class="navbar-brand"  style="font-family: Courier Prime; "><i class="fab fa-contao"></i> ChatAsix </a>
		  <form class="form-inline">
		   	<a style="font-family: Courier Prime">by YOST<i class="fab fa-angellist"></i></a> 
		  </form>
		</div>
	</nav>


	<!-- Main Content -->
	<div class="container text-white d-flex" style="font-family: Architects Daughter;">
		<div class="col-md-5  align-self-center " style="margin-top: 100px">
			<h2 class="mx-auto" style="filter: drop-shadow(2px 2px 3px grey);" >
				Sign Up Before Asix <i class="fas fa-american-sign-language-interpreting"></i>
			</h2>
			<hr style="border-top: 1px solid white; filter:drop-shadow(1px 1px 1px grey);">
			<!-- alert belongs here -->
			<div id="alrtss">
			<?php 
				// echo $successAlert;
				// echo $failAlert;
				// echo $alreadyExist;
			 ?>

			</div>
			<form action="" method="POST">
			  <div class="form-group">
			    <label for="regName">Full Name</label>
			    <input required="" name="fullname" type="text" class="form-control" id="regName" placeholder="Full Name">
			  </div> 
			  <div class="form-group">
			    <label for="regCity">City</label>
			    <input required="" name="city" type="text" class="form-control" id="regCity" placeholder="City">
			  </div>
			  <div class="form-group">
				  <div class="form-group">
				    <label for="regUsername">Username</label>
				    <input required="" name="username" type="text" class="form-control" id="regUsername" placeholder="Username">
				  </div>
			  </div>
				  <div class="form-group ">
				    <label for="regEmail">Email Address</label>
				    <input required="" name="email" type="email" class="form-control" id="regEmail" placeholder="Email Address">
				  </div>
			  <div class="row">
				  <div class="form-group col-md-6 pr-1">
				    <label for="regPassword">Password</label>
				    <input required="" name="password" onkeyup="isMatch()" onchange="isMatch()" type="password" class="form-control" id="regPassword" placeholder="Password">
				  </div>
				  <div class="form-group col-md-6 pl-1">
				    <label for="regPassword">Confirm Password</label>
				    <input required="" name="confirmPassword" onkeyup="isMatch()" onchange="isMatch()"  type="password" class="form-control" id="repPassword" placeholder="Confirm Password">
				  </div>
			  </div>
			  <button type="submit" id="signupButton" name="signup" class="btn btn-success" 
			  		  style="background-color: #3292db;border: none;" disabled="">Sign Up</button>
			   &emsp; &emsp; <small class="text-light" style="filter: drop-shadow(2px 2px 3px #333);">Old Asix? <a href="signin.php" style="color:#db4132">Sign In</a> now.</small>
			</form>
			<br>
		</div>
	</div>


		<footer class="footer bg-black small text-center text-dark mb-4 fixed-bottom sticky-bottom">
    	<div style="font-family: Bebas Neue;" class="container">
    		#AsixinAja <br>
    		Copyright © ChatAsix 20XX
    	</div>
    </footer>




</body>
</html>




<script type="text/javascript">
	function isMatch(){
		if (document.getElementById('repPassword').value == document.getElementById('regPassword').value) {
			document.getElementById('signupButton').disabled = false;
			document.getElementById('alrtss').innerHTML = '';

		}else{
			document.getElementById('signupButton').disabled = true;
			document.getElementById('alrtss').innerHTML = '<div class="alert alert-warning text-center">Password Mismatch</div><hr style="border-top: 1px solid white; filter:drop-shadow(1px 1px 1px grey);">';
		}
		

	}
</script>