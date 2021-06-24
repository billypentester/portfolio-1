<?php


$servername = "bvq1qrn848bjhcdjgnc4-mysql.services.clever-cloud.com";
$username = "uzbh8uv1o5w1ds3c";
$password = "wwrOpfWmZzJZp49l9fpH";
$dbname = "bvq1qrn848bjhcdjgnc4";


$name= $_POST['user']; 
$email= $_POST['email']; 
$message=  $_POST['msg']; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (id, name, email, msg)
VALUES (null,'$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
   ?>
    <script type="text/javascript"> alert('We have recorded your message. Wait for our response.'); </script>
    <?php
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
   
?>