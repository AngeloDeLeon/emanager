<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href="static/css/bootstrap.min.css" rel="stylesheet">
 <link href="static/css/pageFormat.css" rel="stylesheet">
<title>E-Manager Survey</title>

</head>
<body>

<!-- Add jsp scriptlets to distinguish user from dashboard, and add name -->

<div class="container"> 
	<div class="col-md-8 col-centered event-survey border border-primary">
		<!--JSP HERE: replace the h4 with dynamic html --><h4>EVENT IS CURRENTLY ONGOING</h4>
	</div>

	<div class="row">
    <div class="col col-sm-12 col-lg-6 col-centered margin-top-sm">
      <font size="5" face="Helvetica"><b>Survey</b></font>
    </div>
  </div>
  <hr width="50%">

  <div class="col-md-6 col-centered">
    <p>You will only answer the survey once the event ends. <br> 4 - Excellent, 3 - Good, 2 - Needs Improvement, 1 - Bad</p>
  </div>

	<form action="/survey" method="POST" >
    <div class="form-group">
    <div class="col-md-6 col-centered form-inline margin-bottom-sm">
      <label for="venue_label" class="control-label margin-right-md"><b>1. Venue</b></label>
      <input type="text" class="form-control col-md-4" name="venue" required>
    </div>

    <div class="col-md-8">
      <label for="keynote_main" class="control-label margin-right-md"><b>2. Keynote Speaker</b></label>
    </div>
      
      <!-- SCRIPTLET PART -->
      <!-- ADD JSP SCRIPTLETS HERE FOR AUTOGENERATION OF SPEAKERS, USE ITERATIONAL STATEMENTS (FOR LOOPS) TO GENERATE DYNAMIC HTMLs -->
      <!-- EXAMPLE ONLY -->
    <div class="col-md-6 col-centered form-inline margin-bottom-sm">
      <label for="keynotelbl_1" class="control-label margin-left-xl margin-right-md"><b>2.1 Catriona Gray</b></label>
      <input type="text" class="form-control col-md-4" name="keynote_1" required>
    </div>

    <div class="col-md-6 col-centered form-inline margin-bottom-sm">
      <label for="keynotelbl_2" class="control-label margin-left-xl margin-right-md"><b>2.2 John Davis Rosadino</b></label>
      <input type="text" class="form-control col-md-4"  name="keynote_2" required>
    </div>

    <!-- END OF SCRIPTLET PART -->
    <div class="col-md-6 col-centered form-inline margin-bottom-lg">
      <label for="timemgmt_label" class="control-label margin-right-md"><b>3. Time Management</b></label>
      <input type="text" class="form-control col-md-4" name="timemgmt" required>
    </div>
  </div>

  <div class="col-md-12 col-centered">
    <button type="submit" id="submit_btn" class="universal-btn">SUBMIT</button>
</div>

</form>

	<div class="col-md-6 col-centered margin-top-md border">
		<p>Kindly refresh this page regularly for while the event is ongoing, changes might take place in regards to the speakers or in the program proper.</p>
	</div>
</div>

	<footer id="footer_id" class="py-2 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; 2018 | University of Santo Tomas, Manila, Philippines</p>
      </div>
    
    </footer>

</body>
</html>