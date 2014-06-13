<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <?php
      $titlestring = basename($_SERVER['PHP_SELF']);
      if($titlestring == "index.php") {
        $titlestring = "home.php";
      }

      $printstring = ucfirst(substr($titlestring, 0, strlen($titlestring) - 4));

      $comparestring = strtolower($printstring);

      $indexClass = ($comparestring == 'home') ? 'active' : '';
      $aboutClass = ($comparestring == 'about') ? 'active' : '';
      $resourcesClass = ($comparestring == 'resources') ? 'active' : '';
      $calendarClass = ($comparestring == 'calendar') ? 'active' : '';
    ?>;
    <title>FHSCS - <? echo $printstring ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/flat-ui.css" rel="stylesheet">
	<link href="assets/css/docs.css" rel="stylesheet">	
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" >
	<link href="assets/css/flatten.css" rel="stylesheet" >
	
	<!--[if IE 7]>
	  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css">
	<![endif]-->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <?php

    ?>
  </head>

  <body data-spy="scroll" data-target=".bs-docs-sidebar">
    <!-- Navbar
    ================================================== -->
    <div class="flat navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="flat brand" href="./index.php">FHS CS</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="<? echo $indexClass ?>">
                <a href="./index.php">Home</a>
              </li>
              <li class="<? echo $aboutClass ?>">
                <a href="./about.php">About</a>
              </li>
              <li class="<? echo $resourcesClass ?>">
                <a href="./resources.php">Resources</a>
              </li>
              <li class="<? echo $calendarClass ?>">
                <a href="./calendar.php">Calendar</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
