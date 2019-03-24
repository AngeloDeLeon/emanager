<?php

include_once('dbConfig.php');

if(isset($_POST['addevent']))
{
	$stmt = mysqli_prepare($dbconn, "INSERT INTO program (EventName, Date, StartTime, EndTime, VenueName, VenueImg, SponsorName, SponsorImg, Information, Objective, 				SpeakerName, SpeakerImg, Program) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");

	$img_venue = file_get_contents($_FILES['img_venue']['tmp_name']);
	$img_sponsor = file_get_contents($_FILES['img_sponsor']['tmp_name']);
	$img_speaker = file_get_contents($_FILES['img_speaker']['tmp_name']);

	$stmt->bind_param("sssssssssssss", $_POST['event'], $_POST['date'], $_POST['start'], $_POST['end'], $_POST['venue'], $img_venue, $_POST['sponsor'], 
	 				$img_sponsor, $_POST['what'], $_POST['obj'], $_POST['speaker'], $img_speaker,  $_POST['program']);

	if(!$stmt->execute())
	{
		echo "Something went wrong.";
	}
	header('location: homepage.php');

}
mysqli_close($dbconn);


?>