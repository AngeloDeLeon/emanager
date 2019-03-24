<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: admin.php');
  }

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: admin.php");
  }

?>

<!doctype html>
    <html>
    <title>Admin Dashboard</title>
    <head>
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
         <style>
            a.disable {
                pointer-events: none;
                cursor: default;
                font-size:15px;
                color:#282828;
             }  
             a{
                 color:#282828;
                 text-decoration: none;
             }
             a:hover{
                 color:#C0C0C0;
                 text-decoration: none;
             }
          </style>
    <script>
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
              .next();
              .hide();

            $titleEls.on('click', function() {
              $(this).next().slideToggle(200);
            });


      </script>
      </head>
      <body>
    <div id="sidedrawer" class="mui--no-user-select">
    <div id="sidedrawer-brand" class="mui--appbar-line-height">
        <span class="mui--text-title" ><font size="5"><b>E-MANAGER</b></font></span>
    </div>

    <div class="mui-divider"></div>
    <ul> 
      <li>
        <a class="disable"><strong><i class="fa fa-user"></i> &nbsp;<?php echo $_SESSION['username'] ?></strong></a> 
      </li>
       <li>
          <a href="admindash.html" style="color:#282828"><strong><i class="fa fa-area-chart"></i> &nbsp;Dashboard</strong></a>
      </li>  
      <li>
          <a class="disable"><strong><i class="fa fa-plus"></i> &nbsp;Create</strong></a>
        <ul>
          <li><a href="add_eventt.php" style="color:#282828">Add Event</a></li>

        </ul>
      </li>
       <li>
           <a href="homepage.php" style="color:#282828"><strong><i class="fa fa-home"></i> &nbsp;Home</strong></a>
      </li>
       <li>
           <a href="admin.php" style="color:#282828"><strong><i class="fa fa-sign-out "></i> &nbsp;Logout</strong></a>
      </li>        
    </ul></div>
    <div id="content-wrapper">
        
    </div>   
    <br>  
    <br>
   <center>  

  </body>
    </html>