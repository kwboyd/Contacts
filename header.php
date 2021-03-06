<?php
  include 'database.php';
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contacts manager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
     <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/styles.css">
  <body class="gray-purple">
    <nav class="navbar navbar-inverse navbar-toggleable-md">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
        <!-- <span id="toggler-icon" class="navbar-toggler-icon"></span> -->
        <div id="bar-container">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
      </button>
      <a class="navbar-brand" href="/index.php"><i class="fa fa-address-book" aria-hidden="true"></i>&nbsp;Contacts Manager</a>

    <div class="collapse navbar-collapse" id="navbarToggle">
      <ul class="navbar-nav mr-auto mt-2 mt-md-0">
    <li class="nav-item">
      <a class="nav-link" href="/index.php">All Contacts</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/new.php">New Contact&nbsp;<i class="fa fa-plus" aria-hidden="true"></i></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/styleguide.php">Styleguide</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/credits.php">Credits</a>
    </li>
  </ul>
</div>
</nav>
  <div class="container-fluid">

      <div class="row">
