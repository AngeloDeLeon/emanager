<?php
	session_start();

	$firstname = "";
	$lastname = "";
	$username = "";
	$errors = array(); 

	// connect to database
	$connection = mysqli_connect('localhost', 'root', '', 'emanager');

	  // LOGIN ADMIN
	if (isset($_POST['login'])) 
	{
		$username = mysqli_real_escape_string($connection, $_POST['username']);
		$password = mysqli_real_escape_string($connection, $_POST['password']);

		if (empty($username)) 
		{
			array_push($errors, "Username is required");
		}
		if (empty($password)) 
		{
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) 
		{
			$password = md5($password);
			$query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
			$results = mysqli_query($connection, $query);

			if (mysqli_num_rows($results) == 1) 
			{
				$_SESSION['username'] = $username;
				//$_SESSION['success'] = "Wilkam $fname";
				header('location: admindash.html');
			}
			else 
			{
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>