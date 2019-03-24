<?php 
  
  session_start(); 
  
  if (!isset($_SESSION['username'])) 
  {
    $_SESSION['msg'] = "You must log in first";
    header('location: index.php');
  }
 if (isset($_GET['logout'])) 
  {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");
  } 


?>

<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
 <link href="static/css/bootstrap.min.css" rel="stylesheet">
 <link href="static/css/pageFormat.css" rel="stylesheet">
<title>Dashboard: E-Manager</title>

</head>
<body>


<div class="col-md-6 margin-left-md">
  
  <?php  if (isset($_SESSION['username'])) : ?>
	<h2>Welcome, <?php echo $_SESSION['username']; ?> </h2>
  <?php endif ?>
</div>
<div class="container"> 

	<div class="col-md-8 col-centered event border border-primary">
		<!--JSP HERE: replace the h4 with dynamic html --><h2>EVENT IS CURRENTLY ONGOING</h2>
	</div>

	<div class="col-md-12 col-centered margin-bottom-xl">
		<font size="5"><p>I AM A SAMPLE TITLE</p></font>
	</div>
	
	<div class="row margin-bottom-lg">
        <div class="col-md-4 col-centered">
          	<a href="user_maps.php" class="btn btn-info same-size-btn-lg button">VENUE MAP</a>
        </div>
        <div class="col-md-4 col-centered">
           <a href="user_program.php" class="btn btn-info same-size-btn-lg button">PROGRAM</a>
        </div>
    </div>

    <div class="row margin-bottom-lg">
		<div class="col-md-4 col-centered">
          	<a href="/"" class="btn btn-info same-size-btn-lg button">GENERAL INFORMATION</a>
        </div>
        <div class="col-md-4 col-centered">
           <a href="/" class="btn btn-info same-size-btn-lg button">SPONSORS</a>
        </div>
   	</div>
    

    <div class="row">
		<div class="col-md-4 col-centered">
          	<a href="user_speakers.php" class="btn btn-info same-size-btn-lg button">SPEAKER</a>
        </div>
    
        <div class="col-md-4 col-centered">
           <a href="user_survey.php" class="btn btn-info same-size-btn-lg button">SURVEY</a>
        </div>
      
        </div>

	<div class="col-md-6 col-centered margin-top-xl border">
		<p>Kindly refresh this page regularly for while the event is ongoing, changes might take place in regards to the speakers or in the program proper.</p>
	</div> 
  <p><strong> <a href="index.php?logout='1'" style="color: red;">Logout</a> </strong> </p>
</div>

	<footer id="footer_id" class="py-2 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; 2018 | University of Santo Tomas, Manila, Philippines</p>
      </div>
    
    </footer>

</body>
</html>