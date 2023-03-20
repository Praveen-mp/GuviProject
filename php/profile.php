<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "guvi";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Retrieve user data based on email address
$email = $_GET['email'];

$sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // User found, display their data
  $row = mysqli_fetch_assoc($result);
  echo "<h1>Welcome " . $row['email'] . "</h1>";
  echo "<p>Your email is: " . $row['email'] . "</p>";
  // Display other user data as needed
} else {
  // User not found, display error message
  echo "<p>User with email " . $email . " not found.</p>";
}

// Close the database connection
mysqli_close($conn);
?>
