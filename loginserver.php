  <?php
  session_start();

	// variable declaration
	$firstname = "";
	$middlename = "";
	$lastname = "";
	$birthday = "";
	$email = "";
	$username = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$connection = mysqli_connect('localhost', 'root', 'julienne', 'emanager');
  // LOGIN USER
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
			$query = "SELECT * FROM reg WHERE username='$username' AND password='$password'";
			
			$results = mysqli_query($connection, $query);

			if (mysqli_num_rows($results) == 1) 
			{
				
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: user_dashboard.php');
			}
			else 
			{
				array_push($errors, "Wrong username/password combination");
			}
		}
	}
?>