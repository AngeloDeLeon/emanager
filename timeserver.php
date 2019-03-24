<?php
	$event = "";
	$date = "";
	$starttime = "";
	$endtime = "";
	
	$errors = array(); 

	$connection = mysqli_connect('localhost', 'root', '', 'emanager');

	if(isset($_POST['addevent']))
	{
		$event = mysqli_real_escape_string($connection, $_POST['event']);
		$date = mysqli_real_escape_string($connection, $_POST['date']);
		$starttime = mysqli_real_escape_string($connection, $_POST['start']);
		$endtime = mysqli_real_escape_string($connection, $_POST['end']);
		
		

		$starttime = date('H:i:s', strtotime($starttime));
		$endtime = date('H:i:s', strtotime($endtime));

		 
		
			$query = "INSERT INTO trytime (eventname, eventDate, startTime, endTime) VALUES ('$event', '$date', '$starttime', '$endtime') "; 
			mysqli_query($connection, $query);
			header('location: homepage.php'); 
		
	}
?>