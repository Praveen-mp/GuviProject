<?php
$dbHost = 'us-cdbr-east-06.cleardb.net';
$dbName = 'heroku_4fb226a9a630e89';
$dbUser = 'b1a02593c16c75';
$dbPass = '86caf40b ';

$email     = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$password    = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_STRING);
$dob = filter_input(INPUT_POST, 'dob', FILTER_SANITIZE_STRING);
$contact = filter_input(INPUT_POST, 'contact', FILTER_SANITIZE_STRING);
try {
  $db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
  $stmt = $db->prepare("INSERT INTO usersregister (email, pass, Age,Dob,contact) VALUES (:email, :password, :age,:dob,:contact)");
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':password', $password);
  $stmt->bindParam(':age', $age);
  $stmt->bindParam(':dob', $dob);
  $stmt->bindParam(':contact', $contact);
  $stmt->execute();

  echo json_encode(array('success' => true));
} catch(PDOException $e) {
  echo json_encode(array('success' => false, 'error' => $e->getMessage()));
}
?>
