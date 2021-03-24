<?php 
	
	require_once 'inti/init.php';
	$username = $_SESSION['user'];
	$query = "SELECT * FROM user WHERE username = '$username'";

	$getname = mysqli_query($kon,$query);

	$data= mysqli_fetch_assoc($getname);

	$name = $data['fullname'];
 ?>

<!DOCTYPE html>
<html>
<head>
<title>RoomAsix</title>
	<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
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
<body style="background-image: url('img/home.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">

<script type = "text/javascript" >
    function update() {
        $.post("asixroom.php", {
                channel: $("#channel :selected").val()
            },
            function(data) {
                $("#chatBox").html(data);
            }
        );

        setTimeout('update()', 500);
    }

$(document).ready(
    function() {
        update();

        $("#message").on('keypress', function(e) {
            if (e.which == 13) {

                $.post("asixroom.php", {
                        message: $("#message").val(),
                        channel: $("#channel :selected").val()
                    },
                    function(data) {
                        $("#chatBox").html(data);
                        $("#message").val("");
                    }
                );
            }
        });

        $("#send").click(
            function() {
                $.post("asixroom.php", {
                        message: $("#message").val(),
                        channel: $("#channel :selected").val()
                    },
                    function(data) {
                        $("#chatBox").html(data);
                        $("#message").val("");
                    }
                );
            }
        );
    }
);

</script>

	<nav class="navbar navbar-light bg-light ">
		<div class="container">
		  <a href="index.php" class="navbar-brand"  style="font-family: Courier Prime; "><i class="fab fa-contao"></i> ChatAsix </a>
		  <form class="form-inline">
		   	<a style="font-family: Courier Prime">by YOST<i class="fab fa-angellist"></i></a> 
		  </form>
		</div>
	</nav>


	<div class="container">
		<div class="row">
			
			<div class="col-md-8 mt-4">
				<div class="alert alert-light" style="height: 80vh">
					<div class="chatBox p-3" id="chatBox" style="max-width: 100%; max-height: 85%; height:85%;background-image: url('img/bgchat.jpg'); ;border-radius: 5px;overflow-y: auto;font-family: Architects Daughter;display: flex;flex-direction: column-reverse;">

					</div>
					
					<div class="input-group mt-3">
						<textarea class="form-control" placeholder="Type your message . . ." type="text" name="message" id="message" style="max-height: 10vh;min-height: 10vh"></textarea>
						 <div class="input-group-append">
						    <button class="btn btn-success" type="button" id="send">SEND</button>
						 </div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="alert alert-light mt-4" style="font-family: Architects Daughter">
					<h6>Control Panel</h6>
					<hr>
					Asix Member in as : <br> <strong><?php echo $name; ?></strong> <small>( <?php echo $username; ?> )</small><hr>
					<div class="input-group mr-4">
					  <div class="input-group-prepend">
					    <label class="input-group-text bg-info text-light" for="selectChannel"><i class="fas fa-clipboard-list"></i> Select Channel</label>
					  </div>
					  <select class="custom-select" id="channel" name="channel">
					    <option selected value="public">Public (default)</option>
					    <option value="A1">ASIXIN AJA</option><option value="A2">ASIXIN BANGET</option><option value="A3">ASIXIN SANTUY</option><option value="A4">ASIXIN NGOPI</option><option value="A5">ASIXIN NONGKRONG</option><option value="A6">ASIXIN MEETING</option><option value="A7">ASIXIN KENCAN</option><option value="A8">ASIXIN GATHERING</option><option value="A9">ASIXIN BERCAKAP</option><option value="A10">ASIXIN ADMIN</option>					  </select>
					</div><hr>
		  <a class="btn btn-secondary" href="signout.php"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
		  <hr> <div class="footer bg-black small text-center text-dark mb-1">
    	<div style="font-family: Bebas Neue;" class="container">
    		#AsixinAja <br>
    		Copyright © ChatAsix 20XX
    	</div>
    </div>

				</div>

			</div>
		</div>
	</div>
	
</body>
</html>