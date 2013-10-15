<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Light Weight monitoring system for Raspberry pi using Apache and PHP">
    <meta name="author" content="Kunal Gautam">
    <link rel="shortcut icon" href="favicon.png">

    <title>RaPi Lite || Light Weight Web Based Monitoring System for your Raspberry Pi</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/nav_footer.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Wrap all page content here -->
    <div id="wrap">

      <!-- Fixed navbar -->
      <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="favicon.png" height="30" style="margin-top: -15px;">RaPi Lite</a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li <?php if ($head == "index"){
              	?>
              	class="active"
              	<?php
              }
              ?>
              ><a href="index.php">Home</a></li>
              <li><a href="https://github.com/KunalGautam/RaPiLite/issues">Help/Support</a></li>
              <li class="dropdown <?php if ($head == "about"){
              	?>
              	active
              	<?php
              }
              ?>">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a>
                <ul class="dropdown-menu">
                	<li><a href="doc.php">Documentation</a></li>
                	<li><a href="changelog.php">Changelogs</a></li>
                    <li><a href="update.php">Check Update</a></li>
                 	<li><a data-toggle="modal" href="#version">Version</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
      
<!-- Version Modal -->
  <div class="modal fade" id="version" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">RaPi Lite Version</h4>
        </div>
        <div class="modal-body">
        	<div class="row" style="text-align: center"><h1>RaPi Lite</h1>
  <h2>v0.1</h2><h4><br />Credits:</h4><span><a href="http://getbootstrap.com">Bootstrap 3.0</a></span></div>

          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
          
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.version modal -->