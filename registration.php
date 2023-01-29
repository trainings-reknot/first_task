<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname="school";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

echo "This is jsut the demo for github"

$firstname = $_POST["name"];
$email = $_POST["email"];
$website = $_POST["website"];
$comment = $_POST["comment"];
$gender = $_POST["gender"];


// echo $firstname."<br>";
// echo $email."<br>";
// echo $website."<br>";
// echo $comment."<br>";
// echo $gender."<br>";

$sql = "INSERT INTO compaint (firstname, email, website,comment, gender)
VALUES ('".$firstname."', '".$email."', '".$website."', '".$comment."', '".$gender."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}






?>