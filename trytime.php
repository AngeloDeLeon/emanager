<?php include('timeserver.php'); ?>
<!doctype html>
    <html>
    <title>Programs</title>
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
            
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
            <link href="static/css/bootstrap.min.css" rel="stylesheet">
            <link href="static/css/signcss.css" rel="stylesheet">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

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
              <div class="col-md-12 col-centered">
                <h2><b>ADD EVENT</b></h2>
                <hr>
                  <div class="row">
                    <div class="col col-md-12 col-centered">
                
                      <div class="divider"></div>
                        <form action="trytime.php" method="POST">
                          <div class="form-group">
                            
                            <div class="form-inline margin-bottom-md">
                              <label for="addev" class="control-label margin-right-md"><b>Name of Event</b></label>
                              <input type="text" class="form-control col-md-7" placeholder="Enter Event Name" name="event" required value="<?php echo $event; ?>">
                            </div>

                            <div class="form-inline margin-bottom-md">
                              <label for="date" class="control-label margin-right-md"><b>Date</b></label>
                              <input type="date" class="form-control col-sm-2" name="date" required value="<?php echo $date; ?>">
                            </div>

                            <div class="form-inline margin-bottom-md">
                              <label for="starttime" class="margin-right-sm control-label"><b>Start Time</b></label>
                              <input type="time" class="form-control col-sm-2" name="start" required value="<?php echo $starttime; ?>">

                              <label for="starttime" class="margin-right-sm control-label"><b>End Time</b></label>
                              <input type="time" class="form-control col-sm-2" name="end" required value="<?php echo $endtime; ?>">
                            </div>  

      

                            <div class="col-md-4 col-centered margin-bottom-lg">
                              <button type="submit" name="addevent" >Add Event</button>
                            </div>

                          
                        </form>
      
                     </div>
                  </div>
              </div>
            </div>
          

          

   

        </center>

   

      </div>   

  </body>
    </html>
