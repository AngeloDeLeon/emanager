<?php include('aserver.php') ?>
<!DOCTYPE html>
<html>
<head>
<style>

</style>

<!-- <meta charset="ISO-8859-1"> -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <link href="static/css/bootstrap.min.css" rel="stylesheet">
  <link href="static/css/pageFormat.css" rel="stylesheet">
<title>E-Manager Administrator Access</title>
</head>
<body>
	
	<div class="container">
		<div class="col-md-5 col-centered padding-md margin-bottom-md">
			<h3>Benavides Cancer Institute <br>
				University of Santo Tomas Hospital
				E-Manager Administrator Access</h3> 
		</div>
		<div class="form-group-row">

			<form method="post" action="admin.php">
				<?php include('errors.php'); ?>
				<div class="col-md-4 col-centered padding-bottom-md" >
					<label for="uname"><b>Administrator username</b></label>
					<input type="text" class="form-control" placeholder="Enter Username" name="username" style="margin-left:10px" required>
				</div>
				<div class="col-md-4 col-centered padding-bottom-md" >
					<label for="psw"><b>Password</b></label>
					<input type="password" class="form-control" placeholder="Enter Password"  name="password" style="margin-left:10px" required>
				</div> 
				<div class="col-md-4 col-centered padding-bottom-sm" >
					<label> <input type="checkbox" checked="checked" name="remember"> Remember me </label>
				</div>
				<div class="col-md-4 col-centered padding-bottom-sm" >
					<button type="submit" class="btn btn-success same-size-btn" name="login">LOGIN</button>
				</div>
			</form>
				
			</div>
			  <!-- /.container -->
		</div>
	
 	 <footer id="footer_id" class="py-2 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; 2018 | University of Santo Tomas, Manila, Philippines</p>
      </div>
    
    </footer>
  
</body>
</html>