<?php

$dbserver = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "emanager";
$dbconn = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

if($dbconn->connect_error)
{
	die('Connection Error.'.$dbconn->connect_error);	
}


?>