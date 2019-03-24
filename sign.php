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
<form action="Sign.php" method="POST" style="border:1px solid #ccc">
 <?php include('errors.php'); ?>
  <div class="container">
	<h1>Sign Up!</h1>
	<p>Please fill in this form to create an account.</p>
	<hr>
	
	<div class="form-group">
		<label for="fullname" class="control-label" ><b>Full Name (FN, MI, LN) </b></label>
			<div class="form-inline margin-bottom-md">
				<input type="text" class="form-control col-md-4 margin-left-lg" placeholder="First Name" name="fname" required 
        		value="<?php echo $firstname; ?>">

				<input type="text" class="form-control col-md-1 margin-left-sm" placeholder="MI" name="mi" required value="<?php echo $middlename; ?>">
				<input type="text" class="form-control col-md-4 margin-left-sm" placeholder="Last Name" name="lname" required value="<?php echo $lastname; ?>">

			</div>

		<div class="form-inline margin-bottom-md">
			<label for="birthday" class="margin-right-sm control-label"><b>Birthday</b></label>
			<input type="date" class="form-control col-md-2" placeholder="MM/DD/YYY" name="birthday" required value="<?php echo $birthday; ?>">
		</div>
		<!--
		<script>
    		$(document).ready(function(){
      		var date_input=$('input[name="birthday"]');
      		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      		var options={
        		format: 'mm/dd/yyyy',
        		container: container,
        		todayHighlight: true,
        		autoclose: true,
      		};
      		date_input.datepicker(options);
    		})
		</script> -->

		<div class="form-inline margin-bottom-md">
			<label for="email" class="control-label margin-right-md"><b>Email</b></label>
			<input type="text" class="form-control col-md-4" placeholder="Enter Email" name="email" required value="<?php echo $email; ?>">
		</div>

		<div class="form-inline margin-bottom-md">
			<label for="username" class="control-label margin-right-md"><b>Set Username</b></label>
			<input type="text" class="form-control col-md-4" placeholder="Enter Username" name="username" required value="<?php echo $username; ?>">
		</div>

		<div class="form-inline margin-bottom-md">
			<label for="psw" class="control-label margin-right-md"><b>Set Password</b></label>
			<input type="password" class="form-control col-md-4" placeholder="Enter Password" name="password" id="psw" required>
			<span class="small">Should be 8 characters long and contain at least one uppercase and a number</span>
		</div>

		<div class="form-inline margin-bottom-md">
			<label for="psw-repeat" class="control-label margin-right-md"><b>Confirm Password</b></label>
			<input type="password" class="form-control col-md-4" placeholder="Confirm Password" name="psw-repeat" id="psw-repeat" required>
			<span class="margin-left-md" id="psw-repeat-message"></span>

		</div>

		<!-- Trigger the modal with anchor -->
		<div class="col-md-4 col-centered">
 			<a class="MainNavText" data-toggle="modal" data-target="#myModal" id="MainNavHelp" href="#myModal">End-User License Agreement</a> 
 		</div>

  		<!-- Modal -->
  		<div class="modal" id="myModal">
  			<div class="modal-dialog">
    		<div class="modal-content">

      		<!-- Modal Header -->
      		<div class="modal-header">
        		<h5 class="modal-title">End-User License Agreement</h5>
        		<button type="button" class="close" data-dismiss="modal">&times;</button>
      		</div>

      		<!-- Modal body -->
      		<div class="modal-body">
        		EULA
      		</div>

      		<!-- Modal footer -->
      		<div class="modal-footer">
        		<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      		</div>

    		</div>
  			</div>
		</div>
		
<!-- 		<div class="col-md-4 col-centered">
			<p><a href="eula.html">End-User License Agreement</a></p>
		</div> -->

		<div class="col-md-4 col-centered">
			<label> <input type="checkbox" name="accept" id="accept"> I accept and agree </label>
		</div>

		<div class="col-md-8 col-centered margin-bottom-sm border">
			<p>By clicking "I accept and agree" above, you are agreeing to the End-User License Agreement (EULA) upon the creation of your account.</p>
		</div>
		
		<div class="col-md-4 col-centered margin-bottom-lg">
	  		<button type="submit" id="signSubmit" name="reg_user" class="signupbtn not-allowed" disabled>Sign Up</button>
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