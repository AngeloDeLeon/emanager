<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
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
<title>E-Manager: Program</title>

</head>
<body>

<!-- Add jsp scriptlets to distinguish user from dashboard, and add name -->

<div class="container"> 
	<div class="col-md-8 col-centered event-survey border border-primary">
		<!--JSP HERE: replace the h4 with dynamic html --><h4>EVENT IS CURRENTLY ONGOING</h4>
	</div>

	<div class="row">
    <div class="col col-sm-12 col-lg-6 col-centered">
      <font size="5" face="Helvetica"><b>Program</b></font>
    </div>
  </div>
  <hr width="50%">
      <!-- SCRIPTLET PART -->
      <!-- EXAMPLE ONLY -->
      <div class="col-md-6 col-centered margin-top-md border">
        <p> 08:00 - 09:45: INGRESS
	All the masters of the ceremony, the attendees and the organizers are set to be in their places. This shall last for One (1) hour and Forty-Five (45) minutes.
		<p> 09:45 - 10:45: OPENING CEREMONIES
	The event shall begin with the initiating ceremonies: Prayer, National Anthem, Opening Remarks. This shall last for One (1) hour.
		<p> 10:45 - 11:15: INTRODUCTION OF FIRST SPEAKER
	The moderator shall begin in introducing the audience who the first keynote speaker is. This shall last for Thirty (30) minutes.
		<p>11:15 - 12:15: KEYNOTE SPEAKER 1
	The first keynote speaker shall begin his/her talk. This shall last for One (1) hour.
      </div>
    <!-- END OF SCRIPTLET PART -->
  <div class="col-md-12 col-centered">
    <a href="#"><button type="submit" id="save_btn" class="universal-btn">BACK</button></a>
  </div>


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