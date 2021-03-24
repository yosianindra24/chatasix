<?php 

	function register ($username,$email){
		global $kon;

		$email = mysqli_real_escape_string($kon,$email);
		$username = mysqli_real_escape_string($kon,$username);

		$query = "SELECT * FROM user WHERE username = '$username' OR email = '$email' ";

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

	function isExist($username){

	global $kon;

	$username = mysqli_real_escape_string($kon, $username);

	$query = "SELECT * FROM user WHERE username = '$username'";

	if ($result = mysqli_query($kon,$query) ) {
		if (mysqli_num_rows($result) > 0) {
			//user ada di database
			return true;
		}else {
			//user tidak ada di database
			return false;
		}
	}
}

function isValid($username, $password){

	global $kon;

	$username = mysqli_real_escape_string($kon, $username);
	$password = mysqli_real_escape_string($kon, $password);

	$query = "SELECT * FROM user WHERE username =  '$username'";

	$result = mysqli_query($kon, $query);
	$hash = mysqli_fetch_assoc($result);

	if (password_verify($password, $hash['password'])) {
		//kalau password cocok dengan hash yg di database
		return true;
	}else{
		//kalau password tidak cocok dengan hashed password yg di database
		return false;
	}
}

 ?>