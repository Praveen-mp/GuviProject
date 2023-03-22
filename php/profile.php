<?php
// Database connection code
// ...
$dbHost = 'localhost';
$dbName = 'guvi';
$dbUser = 'root';
$dbPass = '';

try {
  $con = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  if($con){
    echo "success";
  }
  else{
    echo" error";
  }
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  exit;
}

// $email = session_name['email'];
$stmt = $con->prepare("SELECT email,age,Dob,Contact FROM usersregister where email=:email");
$stmt->execute();

// Fetch all the results as an array
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($results) > 0) {
  // Start building the HTML table
  echo "<table>";
  echo "<tr><th>Name</th><th>Age</th><th>Email</th></tr>";


//  $stmt->bind_result('ssssss',$name,$age,$email,$dob,$num);
foreach ($results as $row) {
  echo "<tr>";
    echo "<td>" . $row["email"] . "</td>";
    echo "<td>" . $row["age"] . "</td>";
    echo "<td>" . $row["Dob"] . "</td>";
    echo "<td>" . $row["Contact"] . "</td>";
  echo "</tr>";
}
echo "</table>";
}
// End the HTML table


// Close the prepared statement and the database connection
// $stmt->close();
 //$con->close();
?>
