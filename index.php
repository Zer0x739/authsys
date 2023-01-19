<?php
$host = "hostname";
$username = "username";
$password = "password";
$dbname = "dbname";

$conn = mysqli_connect($host, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $password = $_POST["password"];

  $query = "SELECT * FROM users WHERE email = '$email' OR username = '$email' AND password = '$password'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    echo "Welcome, " . $user["username"] . ". Your user type is: " . $user["user_type"] . ".";
  } else {
    echo "Invalid email or password. Please try again.";
  }
}
