<!DOCTYPE html>

<html>

<?php

  session_start();

  if (isset($_GET['lang'])){
    $_SESSION['lang'] = $_GET['lang'];
  } 
  if (isset($_SESSION['lang'])){
    switch ($_SESSION['lang']){
      case 'fr' :
        $lang = include 'lang/fr.php';
        break;
      case 'en' :
        $lang = include 'lang/en.php';
        break;
      default:
        $_SESSION['lang'] = "fr";
        $lang = include 'lang/fr.php';
    }

  }else{
    $_SESSION['lang'] = "fr";
    $lang = include 'lang/fr.php';
  }

?>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<META NAME='DESCRIPTION' CONTENT=''>
	<META NAME='KEYWORDS' CONTENT=''>
	
	<title>Maylanie Mesnier</title>
	<link href="/css/style.css" rel="stylesheet" type="text/css" />
</head>


<body>

  <nav class="navbar navbar-fixed-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="http://mayl.me">Mayl' Mesnier</a>
      </div>

