<?php

$conn = mysqli_connect('localhost', 'root', '', 'task4back');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
    echo("successful connection");
};
echo"<pre>";

$result1 = $conn->query("SELECT count(*) FROM users where (gender) =1  ");
$result2 = $conn->query("SELECT count(*) FROM users where (gender) =2  ");

echo"number of male is: ";
echo"<pre>";
print_r($result1->fetch_column());
echo"<pre>";

echo"number of female is: ";
echo"<pre>";
print_r($result2->fetch_column());
echo"<pre>";
echo"<a href='home.html'><h3>back</h3></a>";

$conn->close();
