 <!DOCTYPE html>
<html>
<head >
	<title>ChatAsix - Sign In</title>
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
		<div class="col-md-4  align-self-center" style=" margin-top: 100px">
			<h2 class="mx-auto" style="filter: drop-shadow(2px 2px 3px grey);" >
				Sign In To Asix <i class="fas fa-american-sign-language-interpreting"></i>
			</h2>
			<hr style="border-top: 1px solid white; filter:drop-shadow(1px 1px 1px grey);">
			<!-- alert belongs here -->
			<?php 
			// echo $wrongPassAlert;
			// echo $notExist;
			 ?>

			<form action="" method="POST">
			  <div class="form-group">
			    <label for="inputUsername">Username</label>
			    <input required="" name="username" type="text" class="form-control" id="inputUsername" placeholder="Username">
			  </div>
			  <div class="form-group">
			    <label for="inputPassword">Password</label>
			    <input required="" name="password" type="password" class="form-control" id="inputPassword" placeholder="Password">
			  </div>
			  <button type="submit" name="signin" class="btn btn-success" 
			  		  style="background-color: #db4132;border: none;">Sign In</button>
			   &emsp; &emsp; <small class="text-light" style="filter: drop-shadow(2px 2px 3px #333);">Join New Asix? <a href="signup.php" style="color: #3292db">Sign Up</a> now.</small>
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