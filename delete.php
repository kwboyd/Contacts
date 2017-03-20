<?php

  include 'database.php';

  $stmt = $db->prepare('DELETE from contacts WHERE id = :id');
  // deletes contact with an id that matches the current id
  $stmt->execute(array(
    ':id' => $_GET['id']
  ));
  //gets the id (avoiding sql hacking)

  header('Location: http://localhost:8080/index.php?deleted=true');
  //redirects to index deleted = true
 ?>
