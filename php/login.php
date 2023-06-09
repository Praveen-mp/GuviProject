<?php
$dbHost = 'localhost';
$dbName = 'guvi';
$dbUser = 'root';
$dbPass = '';

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
<<<<<<< HEAD
    echo json_encode(array('success' => true,'email'=>$email));
=======
    echo json_encode(array('success' => true));
>>>>>>> f56b5a192ddbd92baadb9e4c3e6e113130abbcb8
    // $_SESSION['email'] = $email;
    // header("Location: profile.php");
  } else {
    echo json_encode(array('success' => false, 'error' => 'Invalid email or password'));
  }
} catch(PDOException $e) {
  echo json_encode(array('success' => false, 'error' => $e->getMessage()));
}
?>