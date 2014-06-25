<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>David Mok's Movie Website</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/navbar-fixed-top.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- IE RGBA Color configuration -->
    <!--[if IE]>
   
      <style type="text/css">
            .color-block { 
               background:transparent;
               filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#7F000000,endColorstr=#7F000000); 
               zoom: 1;
            } 
      </style>

    <![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="grey">

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">

        <div class="navbar-header">
          <a class="navbar-brand" href="#">
            <img src="images/event-logo-shrunk.png" alt="">
          </a>
        </div>

        <div class="navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#details">Details</a> </li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#sessions">Sessions</a></li>
          </ul>
        </div>

      </div>
    </div>

    <!-- Main Content -->
    <div class="container">
      
      <?php include 'includes/details.inc.php'; ?>
      
      <?php include 'includes/gallery.inc.php'; ?>

      <?php include 'includes/sessions.inc.php'; ?>

    </div> 
    <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
