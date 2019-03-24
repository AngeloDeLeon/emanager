<?php 
  
  session_start(); 
  
  if (!isset($_SESSION['username'])) 
  {
    $_SESSION['msg'] = "You must log in first";
    header('location: admin.php');
  }
 if (isset($_GET['logout'])) 
  {
    session_destroy();
    unset($_SESSION['username']);
    header("location: admin.php");
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

<!-- Add jsp scriptlets to distinguish user from dashboard, and add name -->
<div class="col-md-6 margin-left-md">
  <?php  if (isset($_SESSION['username'])) : ?>
	<h2>Welcome, <?php echo $_SESSION['username']; ?></h2>
  <?php endif ?>
</div>
<div class="container"> 

	<div class="col-md-8 col-centered event border border-primary">
		<!--JSP HERE: replace the h4 with dynamic html --><h2>EVENT IS CURRENTLY ONGOING</h2>
	</div>

	<div class="col-md-12 col-centered margin-bottom-xl">
		<font size="5"><p>I AM A SAMPLE TITLE: EDIT ME WITH JSP SCRIPTLETS</p></font>
	</div>
	
	<div class="row margin-bottom-lg">
        <div class="col-md-4 col-centered">
          	<a href="avenue.jsp" class=" same-size-btn-lg button">VENUE MAP</a>
        </div>
        <div class="col-md-4 col-centered">
           <a href="aprogram.jsp" class=" same-size-btn-lg button">PROGRAM</a>
        </div>
    </div>

    <div class="row margin-bottom-lg">
		<div class="col-md-4 col-centered">
          	<a href="ainfo.jsp" class=" same-size-btn-lg button">GENERAL INFORMATION</a>
        </div>
        <div class="col-md-4 col-centered">
           <a href="asponsor.jsp" class=" same-size-btn-lg button">SPONSORS</a>
        </div>
   	</div>
    

    <div class="row">
		
        <div class="col-md-4 col-centered">
          	<a href="admin_speakers" class=" same-size-btn-lg button">SPEAKER</a>
        </div> 
         <div class="col-md-4 col-centered">
           <a href="add_survey.php" class=" same-size-btn-lg button">ADD SURVEY</a>
        </div> 
        </div>

    

</div>

	<footer id="footer_id" class="py-2 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; 2018 | University of Santo Tomas, Manila, Philippines</p>
      </div>
    
    </footer>

</body>
</html>