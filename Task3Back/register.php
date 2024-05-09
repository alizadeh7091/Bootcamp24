<?php

$conn = mysqli_connect("localhost", "root", "", "task3back");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = ("INSERT INTO users (id,name,email,password) VALUES (null,'$name','$email','$password')");
if (($result = $conn->execute_query($sql))) {
  header("Location:panel.php");
  session_start();
  $_SESSION['email'] = $email;
} else {
  echo ('error');
}

// echo ('done');
