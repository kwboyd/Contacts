<?php

  error_reporting(E_ALL);

  if (!ini_get('display_errors')) {
    ini_set('display_errors', '1');
  } //allows error reporting

  $db = new PDO('mysql:host=localhost;dbname=project2;charset=utf8mb4', 'root', 'root');
  // connects to the database
