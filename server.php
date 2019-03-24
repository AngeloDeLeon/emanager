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
	$connection = mysqli_connect('localhost', 'root', '', 'emanager');


	// REGISTER USER
	if (isset($_POST['reg_user'])) 
	{
		// receive all input values from the form
	 	$firstname = mysqli_real_escape_string($connection, $_POST['fname']);
        $middlename = mysqli_real_escape_string($connection, $_POST['mi']);
        $lastname = mysqli_real_escape_string($connection, $_POST['lname']);
        $birthday = mysqli_real_escape_string($connection, $_POST['birthday']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $username = mysqli_real_escape_string($connection, $_POST['username']);
        $password1 = mysqli_real_escape_string($connection, $_POST['password']);
        $password2 = mysqli_real_escape_string($connection, $_POST['psw-repeat']);

        
    	
    	if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) 
    	{
      		array_push($errors, "Please enter a valid first name");
    	}

    	if (!preg_match("/^[a-zA-Z ]*$/",$middlename)) 
    	{
      		array_push($errors, "Please enter a valid middle name");
    	}
      	
      	if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) 
    	{
      		array_push($errors, "Please enter a valid last name");
    	}

    	if (!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$#", $password1))
    	{
    		array_push($errors, "Your password is weak");
    	}


		//email validation if already taken
		if (isset($_POST['email']))
		{
			$email = mysqli_real_escape_string($connection, $_POST['email']);
			$checkEmail = "SELECT * FROM reg WHERE email = '$email'";
			$results = mysqli_query($connection, $checkEmail);
			if (mysqli_num_rows($results) > 0)
			{
			 	array_push($errors, "Email is already taken");	

			}

			if (!filter_var($email, FILTER_VALIDATE_EMAIL))
			{
				array_push($errors, "Please enter a valid email");
			}
		}


		//username validation
		if (isset($_POST['username']))
		{
			$username = mysqli_real_escape_string($connection, $_POST['username']);
			$checkUsername = "SELECT * FROM reg WHERE username = '$username'";
			$results = mysqli_query($connection, $checkUsername);
			if (mysqli_num_rows($results) > 0)
			{
			 	array_push($errors, "Username is already taken");	

			}
		}



		// register user if there are no errors in the form
		if (count($errors) == 0) 
		{
			$password = MD5($password1);
        	$query = "INSERT INTO reg (firstName, midName, lastName, bday, email, username, password) 
        			  VALUES ('$firstname', '$middlename', '$lastname', '$birthday', '$email', '$username', '$password')";
			mysqli_query($connection, $query);
			

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}


    }  

      
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
				//$_SESSION['success'] = "Wilkam $fname";
				header('location: user_dashboard.php');
			}
			else 
			{
				array_push($errors, "Wrong username/password combination");
			}
		}
	}
/*
	//CREATE EVENT
	if (isset($_POST['addevent'])) 
	{
		$event = mysqli_real_escape_string($connection, $_POST['event']);
		$date = mysqli_real_escape_string($connection, $_POST['date']);
		//$starttime = mysqli_real_escape_string($connection, $_POST['start']);
		//$endtime = mysqli_real_escape_string($connection, $_POST['end']);
		/*$venue = mysqli_real_escape_string($connection, $_POST['venue']);
		$organization = mysqli_real_escape_string($connection, $_POST['org']);
		$whatis = mysqli_real_escape_string($connection, $_POST['what']);
		$objective = mysqli_real_escape_string($connection, $_POST['obj']);
		$speaker1 = mysqli_real_escape_string($connection, $_POST['sp1']);
		$speaker2 = mysqli_real_escape_string($connection, $_POST['sp2']);
		$speaker3 = mysqli_real_escape_string($connection, $_POST['sp3']); 

		if (count($errors) == 0) 
		{

			
        	$query1 = "INSERT INTO event('eventName', 'eventDate', 'venue', 'organization', 'whatIs', 'objective', 'speaker1', 'speaker2', 'speaker3)
        			  VALUES ('$event', '$date', '$venue', '$organization', '$whatis' '$objective', '$speaker1', '$speaker2', '$speaker3')"; 

        	$query1 = "INSERT INTO 'time'('eventname', 'eventDate')
        				VALUES ('$event', '$date')";
			mysqli_query($connection, $query1);
			$_SESSION['success'] = "Event Added";
			header('location: homepage.php');
		}

		
	} */

?>