<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Database configuration
  $servername = "localhost";
  $username_db = "root";
  $password_db = "";
  $database = "login_system";

  // Create a connection
  $conn = new mysqli($servername, $username_db, $password_db, $database);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Perform user authentication
  $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
    echo "Login successful";
  } else {
    echo "Login failed";
  }

  $conn->close();
}
?>
