<?php 

	function register ($username,$email){
		global $kon;

		$email = mysqli_real_escape_string($kon,$email);
		$username = mysqli_real_escape_string($kon,$username);

		$query = "SELECT * FROM user WHERE username = '$username' or email = '$email' ";

		$exec = mysqli_query($kon, $query);

		if (mysqli_num_rows($exec) == 0 ){
			return true;
		} else
		{
			return false;
		}
	}


	function registering ($fullname,$city,$username,$email,$password){
		global $kon;
		$fullname = mysqli_real_escape_string($kon,$fullname);
		$city = mysqli_real_escape_string($kon,$city);
		$username = mysqli_real_escape_string($kon,$username);
		$email = mysqli_real_escape_string($kon,$email);
		$password = mysqli_real_escape_string($kon,$password);

		$passwordhash = password_hash($password, PASSWORD_DEFAULT);

		$query = " INSERT INTO user (fullname,city,username,email,password) VALUES ('$fullname','$city','$username','$email','$passwordhash')";

		// mysqli_query ($kon,$query);

		if (mysqli_query ($kon,$query)) {

			return true;
		} else {
			return false;
		}
	} 
 ?>