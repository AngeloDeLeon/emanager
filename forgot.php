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


<title>Forgot Password</title>
</head>
<body>

<!-- change /servlet to your preferred controller -->
<form action="/servlet" method="POST" style="border:1px solid #ccc">
  <div class="container">
	
	<div class="col-md-4 col-centered" >
		<h2>FORGOT PASSWORD</h2>
			<p>Don't worry we'll get back to your account!</p>
		<hr>
	</div>

	<div class="form-group">
		<div class="control-label col-md-4 col-centered padding-bottom-md" >
			<label for="uname"><b>E-Mail Address</b></label>
			<input type="text" class="form-control" placeholder="E-Mail Address" name="email"  required>
		</div>

		<div class="control-label col-md-4 col-centered padding-bottom-md" >
			<label for="uname"><b>New Password</b></label>
			<input type="password" class="form-control" placeholder="New Password" name="psw" id="psw" required>
		</div>

		<div class="control-label col-md-4 col-centered padding-bottom-md">
			<label for="psw-repeat" class="control-label margin-right-md"><b>Confirm New Password</b></label>
			<input type="password" class="form-control margin-bottom-sm" placeholder="Confirm New Password" name="psw-repeat" id="psw-repeat" required>
			<span class="margin-left-sm" id="psw-repeat-message"></span>
		</div>

		<div class="col-md-3 col-centered margin-bottom-lg">
	  		<button type="submit" id="signSubmit" class="signupbtn">Save</button>
	  	</div>

		<div class="col-md-4 col-centered margin-bottom-sm border">
			<p>By clicking save, your new password will be saved as your current password when you log in.</p>
		</div>
		
		
  </div>
</form>

		


	<script src="static/js/forgot.js"></script>

	<footer id="footer_id" class="py-2 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; 2018 | University of Santo Tomas, Manila, Philippines</p>
      </div>
    </footer>

</body>
</html>