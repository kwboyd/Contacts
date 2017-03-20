<?php
  include 'database.php';
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contacts manager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
     <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/styles.css">
  <body>
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
      <a class="navbar-brand" href="/index.php">Contacts Manager</a>

    <div class="collapse navbar-collapse" id="navbarToggle">
      <ul class="navbar-nav mr-auto mt-2 mt-md-0">
    <li class="nav-item">
      <a class="nav-link" href="/index.php">All Contacts</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/new.php">New Contact</a>
    </li>
  </ul>
</div>
</nav>
  <div class="container-fluid">

      <div class="row">
