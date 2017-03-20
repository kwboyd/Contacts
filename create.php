<?php

  include 'database.php';

  $stmt = $db->prepare("INSERT INTO contacts
    (fname, lname, phone, email, street, city, state, zip, notes)
    VALUES
    (:fname, :lname, :phone, :email, :street, :city, :state, :zip, :notes)
  ");
  //inserts into databse

  $stmt->execute(array(
    ':fname' => $_POST['fname'],
    ':lname' => $_POST['lname'],
    ':phone' => $_POST['phone'],
    ':email' => $_POST['email'],
    ':street' => $_POST['street'],
    ':city' => $_POST['city'],
    ':state' => $_POST['state'],
    ':zip' => $_POST['zip'],
    ':notes' => $_POST['notes']
  ));

  $id = $db->lastInsertId();
  //defines id based on last inserted id

   header('Location: http://localhost:8080/index.php?id=' . $id . '&created=true');
   //redirects to index with created = true
?>
