<?php

$conn = mysqli_connect('localhost', 'root', '', 'task4back');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
    echo("successful connection");
};
echo"<pre>";

$result1 = $conn->query("SELECT COUNT(*) FROM users where (gender) =2 && (age)>60  ");

echo"number of women over 60: ";
echo"<pre>";
print_r($result1->fetch_column());
echo"<pre>";
echo"<a href='home.html'><h3>back</h3></a>";

$conn->close();
