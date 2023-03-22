<?php
<<<<<<< HEAD
// Database connection code
// ...
$dbHost = 'localhost';
$dbName = 'guvi';
$dbUser = 'root';
$dbPass = '';

try {
  $con = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
$email= $_POST['email'];
 // $email    = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  $stmt = $con->prepare("SELECT * FROM usersregister where email=:email");
$stmt->bindParam(':email', $email);
 
  $stmt->execute();

  
  // Fetch all the results as an array
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
  if (count($result) > 0) {
    // Start building the HTML table
    $result=$result[0];
    echo json_encode(array('success' => true,'email'=>$result["email"],'Age'=>$result["Age"],'Dob'=>$result["Dob"],'Contact'=>$result["contact"]));
 // echo json_encode(array('success' => true,'name'=>$email,'age'=>$age,'email'=>$email,'dob'=>$dob,'num'=>$num);
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
=======

   //
   // This example uses data from the Sample Datasets in MongoDB Atlas
   // To load, and use this sample data, see https://docs.atlas.mongodb.com/sample-data/available-sample-datasets/
   //

      require_once __DIR__ . './vendor/autoload.php';
      $client = new MongoDB\Client("mongodb://localhost:27017");
      echo $client;
      $collection = $client->companydb->Demo;
      $query = array('validated' => true);
      $cursor = $collection->find($query);
      foreach ($cursor as $document) {
        echo "<div class='profile'>";
        echo "<h2>" . $document['name'] . "</h2>";
        echo "<p>" . $document['bio'] . "</p>";
        echo "</div>";
    }
?>
>>>>>>> f56b5a192ddbd92baadb9e4c3e6e113130abbcb8
