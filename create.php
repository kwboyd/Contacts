<?php

  include 'database.php';

  $stmt = $db->prepare("INSERT INTO contacts
    (fname, lname, title, phone, email, street, city, state, zip, notes)
    VALUES
    (:fname, :lname, :title, :phone, :email, :street, :city, :state, :zip, :notes)
  ");
  //inserts into database

  $stmt->execute(array(
    ':fname' => $_POST['fname'],
    ':lname' => $_POST['lname'],
    ':title' => $_POST['title'],
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

   header('Location: http://localhost:8080/edit.php?id=' . $id . '&created=true');
   //redirects to index with created = true
?>
