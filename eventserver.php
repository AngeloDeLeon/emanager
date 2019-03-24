<?php
	$event = "";
	$date = "";
	$starttime = "";
	$endtime = "";
	$venue = "";
	$sponsor = "";
	$whatis = "";
	$objective = "";
	$speaker1 = "";
	$program = "";
	$speaker2 = "";
	$speaker3 = "";
	$img_venue = "";
	$img_sponsor = "";
	$img_speaker = "";


	$connection = mysqli_connect('localhost', 'root', '', 'emanager');

	if(isset($_POST['addevent']))
	{
		$event = mysqli_real_escape_string($connection, $_POST['event']);
		$date = mysqli_real_escape_string($connection, $_POST['date']);
		$starttime = mysqli_real_escape_string($connection, $_POST['start']);
		$endtime = mysqli_real_escape_string($connection, $_POST['end']);
		$venue = mysqli_real_escape_string($connection, $_POST['venue']);
		$sponsor = mysqli_real_escape_string($connection, $_POST['spon']);
		$whatis = mysqli_real_escape_string($connection, $_POST['what']);
		$objective = mysqli_real_escape_string($connection, $_POST['obj']);
		$speaker1 = mysqli_real_escape_string($connection, $_POST['sp']);
		$program = mysqli_real_escape_string($connection, $_POST['program']);
		

		//convert 12 hour time to 24
		$starttime = date('H:i:s', strtotime($starttime));
		$endtime = date('H:i:s', strtotime($endtime));

		//check for uploaded file
		$venue_name =  $_FILES['img_venue']['name'];
		$venue_type = $_FILES['img_venue']['type'];
		$venue_tmp_name = $_FILES['img_venue']['tmp_name'];
		$venue_size = $_FILES['img_venue']['size'];

		$sponsor_name =  $_FILES['img_sponsor']['name'];
		$sponsor_type = $_FILES['img_sponsor']['type'];
		$sponsor_tmp_name = $_FILES['img_sponsor']['tmp_name'];
		$sponsor_size = $_FILES['img_sponsor']['size'];

		$speaker_name =  $_FILES['img_speaker']['name'];
		$speaker_type = $_FILES['img_speaker']['type'];
		$speaker_tmp_name = $_FILES['img_speaker']['tmp_name'];
		$speakerr_size = $_FILES['img_speaker']['size'];

		$target_dir = "images/";
		

		move_uploaded_file($venue_tmp_name,$target_dir.$venue_name);
		move_uploaded_file($sponsor_tmp_name,$target_dir.$sponsor_name);
		move_uploaded_file($speaker_tmp_name,$target_dir.$speaker_name); 

		

		


        $query = "INSERT INTO program (EventName, 'Date', StartTime, EndTime, VenueName, VenueImg, SponsorName, SponsorImg, Information, Objective, SpeakerName, SpeakerImg, Program) VALUES ('$event', '$date', '$starttime', '$endtime', '$venue', '$img_venue', '$sponsor', '$img_sponsor', '$whatis', '$objective', '$speaker1', '$img_speaker', $program) ";
		mysqli_query($connection, $query);
		
		if(mysqli_affected_rows($connection) >0 )
		{
			header('location: homepage.php');
		}

		else
		{
			echo "Kaya mo pa yan";
		}



	
		
	}
?>