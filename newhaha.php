<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
<style>

</style>

  <!-- <meta charset="ISO-8859-1"> -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--  jQuery -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <!-- Bootstrap Date-Picker Plugin -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
   <link href="static/css/bootstrap.min.css" rel="stylesheet">
   <link href="static/css/signcss.css" rel="stylesheet">



<title>Sign Up</title>
</head>
<body>

<!-- change index.html to servlet -->
<form action="newhaha.php" method="POST" style="border:1px solid #ccc">
 <?php include('errors.php'); ?>
  <div class="container">
	<h1>ADD EVENT</h1>
	<p>Please fill in this form to add an event.</p>
	<hr>
	
	<div class="form-group">
		<div class="form-inline margin-bottom-md">
			<label for="email" class="control-label margin-right-md"><b>Name of Event</b></label>
			<input type="text" class="form-control col-md-4" placeholder="Enter Event" name="event" required value="<?php echo $event; ?>">
		</div>

		
		<div class="form-inline margin-bottom-md">
			<label for="birthday" class="margin-right-sm control-label"><b>Date</b></label>
			<input type="date" class="form-control col-md-2" placeholder="MM/DD/YYY" name="date" required value="<?php echo $date; ?>">
			<!--
			<label for="starttime" class="margin-right-sm control-label"><b>Start Time</b></label>
			<input type="time" class="form-control col-md-2" name="start" required value = "<?php $starttime = time("h:i:sa"); echo $starttime; ?>">

			<label for="starttime" class="margin-right-sm control-label"><b>Start Time</b></label>
			<input type="time" class="form-control col-md-2" name="start" required value = "<?php $endtime = time("h:i:sa"); echo $endtime; ?>"> -->

		</div>
		

		<div class="form-inline margin-bottom-md">
			<label for="email" class="control-label margin-right-md"><b>Venue</b></label>
			<input type="text" class="form-control col-md-4" placeholder="Enter Venue" name="venue" required value="<?php echo $venue; ?>">
		</div>

		<div class="form-inline margin-bottom-md">
			<label for="username" class="control-label margin-right-md"><b>Name of Organizer</b></label>
			<input type="text" class="form-control col-md-4" placeholder="Enter Organization Name" name="org" required value="<?php echo $organization; ?>">
		</div>

		<div class="form-inline margin-bottom-md">
			<label for="comment"><b> What it is:</b></label>
  			<textarea class="form-control" rows="5" columns="10" id="comment" name="what" value = "<?php echo $whatis; ?>"></textarea>

  			<label for="comment"><b> Objectives:</b></label>
  			<textarea class="form-control" rows="5" columns="10" id="comment" name="obj" value = "<?php echo $objective; ?>"></textarea>

		</div>

		<label for="fullname" class="control-label" ><b>Speakers </b></label>
			<div class="form-inline margin-bottom-md">
				<input type="text" class="form-control col-md-4 margin-left-lg" placeholder="Speaker 1" name="sp1" required 
        		value="<?php echo $speaker1; ?>">
			</div>

			<div class="form-inline margin-bottom-md">
				<input type="text" class="form-control col-md-4 margin-left-lg" placeholder="Speaker 2" name="sp2" required 
        		value="<?php echo $speaker2; ?>">
			</div>

			<div class="form-inline margin-bottom-md">
				<input type="text" class="form-control col-md-4 margin-left-lg" placeholder="Speaker 3" name="sp3" 
        		value="<?php echo $speaker3; ?>">
			</div>

		
		<div class="col-md-4 col-centered margin-bottom-lg">
	  		<button type="submit" id="signSubmit" name="create_event" >Create Event</button>
	  	</div>
  </div>
</form>

		

	</div>

	<script src="static/js/signup.js"></script>

	<footer id="footer_id" class="py-2 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; 2018 | University of Santo Tomas, Manila, Philippines</p>
      </div>
    </footer>

   

</body>
</html>