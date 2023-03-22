<?php
// Database connection code
// ...
$dbHost = 'us-cdbr-east-06.cleardb.net';
$dbName = 'heroku_4fb226a9a630e89';
$dbUser = 'b1a02593c16c75';
$dbPass = '86caf40b ';

try {
  $con = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
$email= $_POST['email'];
// echo $email;
 // $email    = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  $stmt = $con->prepare("SELECT * FROM usersregister where email=:email");
$stmt->bindParam(':email', $email);
 
  $stmt->execute();

  
  // Fetch all the results as an array
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  echo count($result);
  if (count($result) > 0) {
    // Start building the HTML table
    $result=$result[0];
    echo json_encode(array('success' => true,'email'=>$result["email"]));
    // echo json_encode(array('success' => true,'name'=>$email,'age'=>$age,'email'=>$email,'dob'=>$dob,'num'=>$num));
  }
  else{
    return array('success' =>  false, 'error' => 'Unkown error');
  }
  


} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  exit;
}



// Close the prepared statement and the database connection
// $stmt->close();
 //$con->close();
?>
