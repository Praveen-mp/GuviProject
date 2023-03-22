<?php
$dbHost = 'us-cdbr-east-06.cleardb.net';
$dbName = 'heroku_4fb226a9a630e89';
$dbUser = 'b1a02593c16c75';
$dbPass = '86caf40b ';

$email    = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

try {
  $db = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $db->prepare("SELECT email,pass FROM usersregister WHERE email=:email AND pass=:password");
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':password', $password);
  $stmt->execute();
  $user = $stmt->fetch(PDO::FETCH_ASSOC);

  if($user) {
    echo json_encode(array('success' => true));
  } else {
    echo json_encode(array('success' => false, 'error' => 'Invalid email or password'));
  }
} catch(PDOException $e) {
  echo json_encode(array('success' => false, 'error' => $e->getMessage()));
}
?>