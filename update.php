<?php

include 'database.php';

$stmt = $db->prepare('UPDATE contacts SET
  fname = :fname,
  lname = :lname,
  title = :title,
  phone = :phone,
  email = :email,
  street = :street,
  city = :city,
  state = :state,
  zip = :zip,
  notes = :notes
  WHERE id = :id');
//$stmt->bindParam
$stmt->execute(array(
  ':id' => $_POST['id'],
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

header('Location: http://localhost:8080/edit.php?updated=true&id=' . $_POST['id']);
