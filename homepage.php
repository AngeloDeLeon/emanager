<?php
  date_default_timezone_set('Asia/Manila');
  $connection = mysqli_connect('localhost', 'root', '', 'emanager');
  $query = "SELECT * FROM program WHERE Date >= CURRENT_DATE";
  $program = mysqli_query($connection, $query);
  $today = date("Y-m-d");
  $time = date("H:i:s");
  while($row = mysqli_fetch_assoc($program))
  {
    $info = $row['Information'];
    $obj = $row['Objective'];
    $eventname = $row['EventName'];
    $date = $row['Date'];
    $start = $row['StartTime'];
    $end = $row['EndTime'];
    $starttime = $row['StartTime'];
    $endtime = $row['EndTime'];
    $starttimea = date('H:i:s', strtotime($starttime));
    $endtimea = date('H:i:s', strtotime($endtime));
    $starttime1 = date('h:i a', strtotime($starttime));
    $endtime1 = date('h:i a', strtotime($endtime));
    if ($date > $today)
      {
        $message = "EVENT IS ON $date";
        
      } 
      
      elseif ($date == $today && $time < $starttime)
      {
        
        $message = "EVENT IS TODAY at $starttime";
        
      }

      elseif ($date == $today && $time >= $starttimea)
      {
        $message = "EVENT IS CURRENTLY ONGOING";
      }
      
      else
      {
        $message = "THERE IS NO EVENT AS OF THIS MOMENT";
        $eventname = "";
      }

  }

  

?>



<!doctype html>
    <html>
    <title>Homepage</title>
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <link rel="shortcut icon" href="logow.png" type="image/png">
            <link href="//cdn.muicss.com/mui-0.9.38/css/mui.min.css" rel="stylesheet" type="text/css" />
            <script src="//cdn.muicss.com/mui-0.9.38/js/mui.min.js"></script>
            <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
            <link href="css/bootstrap.css" rel="stylesheet" />
            <link href="css/bootstrap-theme.css" rel="stylesheet" />
            <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css" type="text/css"/>
            <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
            <link rel="stylesheet" href="css/bootstrap-theme.min.css" type="text/css">
            <link rel="shortcut icon" href="logow.png" type="image/png">
            <link rel="stylesheet" href="css/scrolling-nav.css" type="text/css">
            <link rel="stylesheet" href="bootstrap-datepicker.css" type="text/css"/>
            <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
             <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
            <script src="https://code.highcharts.com/highcharts.js"></script>
            <script src="https://code.highcharts.com/modules/exporting.js"></script>
            <script src="https://code.highcharts.com/modules/export-data.js"></script>
            <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
            <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
            <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
            <link rel="stylesheet" href="main_css.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.bootstrap.min.css">
            

            <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.1/js/responsive.bootstrap.min.js"></script>
    <head>
    <style>
   </style>
            
    <script>


          $(document).ready(function(){
             
             $('#sidebar').load("sideMenu.php");

          });
            $(document).ready(function() {
                 $('#myTable').DataTable();
            } );
            $('#myTable').dataTable( {
                responsive: true
            } );
            
            jQuery(function($) {
              var $bodyEl = $('body'),
                  $sidedrawerEl = $('#sidedrawer');


              function showSidedrawer() {
                var options = {
                  onclose: function() {
                    $sidedrawerEl
                      .removeClass('active')
                      .appendTo(document.body);
                  }
                };

                var $overlayEl = $(mui.overlay('on', options));

                $sidedrawerEl.appendTo($overlayEl);
                setTimeout(function() {
                  $sidedrawerEl.addClass('active');
                }, 20);
              }


              function hideSidedrawer() {
                $bodyEl.toggleClass('hide-sidedrawer');
              }


              $('.js-show-sidedrawer').on('click', showSidedrawer);
              $('.js-hide-sidedrawer').on('click', hideSidedrawer);
            });
            var $titleEls = $('strong', $sidedrawerEl);

            $titleEls
              .next()
              .hide();

            $titleEls.on('click', function() {
              $(this).next().slideToggle(200);
            });


      </script>
      </head>
      <body>
  <div id="sidebar">
   </div>
    <header id="header">
      <div class="mui-appbar mui--appbar-line-height">
        <div class="mui-container-fluid">
            <a class="sidedrawer-toggle mui--visible-xs-inline-block mui--visible-xs-inline-block js-show-sidedrawer"><span class="glyphicon glyphicon-menu-hamburger" style="font-size:20px;padding-top: 10px;"></span></a>
          <a class="sidedrawer-toggle mui--hidden-xs mui--hidden-sm js-hide-sidedrawer"><span class="glyphicon glyphicon-menu-hamburger" style="font-size:20px;padding-top: 10px;"></span></a>
          <span class="mui--text-title mui--visible-xs-inline-block"></span>
        </div>
      </div>
    </header>
    <div id="content-wrapper">
        

   <center>  

      <div class="row" style="padding:6%">


  <div class="col-md-12">

  <h2><b><?php echo $message; ?></b></h2>
  <hr>
  <h2><b><?php echo $eventname; ?></b></h2>
  <hr>

  
  
  
  <div class="row">
        <div class="col-md-6 col-centered">
          <div class="panel panel-default">
            <div class="panel-body">
            <a href="admin_venue.php" class=" same-size-btn-lg button">VENUE</a>
          </div>
          </div>
        </div>
        <div class="col-md-6 col-centered">
          <div class="panel panel-default">
            <div class="panel-body">
            <a href="admin_programs.php" class=" same-size-btn-lg button">PROGRAMS</a>
          </div>
          </div>
        </div>
    </div>

    <div class="row margin-bottom-lg">
    <div class="col-md-6 col-centered">
          <div class="panel panel-default">
            <div class="panel-body">

            <a href="admin_gen.php" class=" same-size-btn-lg button">GENERAL INFORMATION</a>
          </div>
          </div>
        </div>
    <div class="col-md-6 col-centered">
          <div class="panel panel-default">
            <div class="panel-body">
            <a href="admin_spons.php" class=" same-size-btn-lg button">SPONSORS</a>
          </div>
          </div>
        </div>
    </div>
    

    <div class="row">
    <div class="col-md-6 col-centered">
          <div class="panel panel-default">
            <div class="panel-body">
            <a href="admin_speakers.php" class=" same-size-btn-lg button">SPEAKERS</a>
          </div>
          </div>
        </div> 
    <div class="col-md-6 col-centered">
          <div class="panel panel-default">
            <div class="panel-body">
            <a href="avenue.jsp" class=" same-size-btn-lg button">SURVEYS</a>
          </div>
          </div>
        </div>
        </div>
<hr>
</div>
      </div>   

  </body>
    </html>
